<?php 
$error = array();

require "forgot/mail.php";

	if(!$con = mysqli_connect("localhost","root","","ecomania_db")){

		die("could not connect");
	}

	$mode = "enter_email";
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}

	//something is posted
	if(count($_POST) > 0){

		switch ($mode) {
			case 'enter_email':
				// code...
				$email = $_POST['email'];
				//validate email
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					$error[] = "Please enter a valid email";
				}elseif(!valid_email($email)){
					$error[] = "The email was not found";
				}else{

					$_SESSION['forgot']['email'] = $email;
					send_email($email);
					header("Location: forgot?mode=enter_code");
					die;
				}
				break;

			case 'enter_code':
				// code...
				$code = $_POST['code'];
				$result = is_code_correct($code);

				if($result == "The code is correct"){

					$_SESSION['forgot']['code'] = $code;
					header("Location: forgot?mode=enter_password");
					die;
				}else{
					$error[] = $result;
				}
				break;

			case 'enter_password':
				// code...
				$password = $_POST['password'];
				$password2 = $_POST['password2'];

				if($password !== $password2){
					$error[] = "Passwords do not match";
				}elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
					header("Location: forgot");
					die;
				}else{
					
					save_password($password);
					if(isset($_SESSION['forgot'])){
						unset($_SESSION['forgot']);
					}

					header("Location: login");
					die;
				}
				break;
			
			default:
				// code...
				break;
		}
	}

	function send_email($email){
		
		global $con;

		$expire = time() + (60 * 1);
		$code = rand(10000,99999);
		$email = addslashes($email);

		$query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
		mysqli_query($con,$query);

		//send email here
		send_mail($email,'Reset Your Password',"Your recovery code is: " . $code);
	}
	
	function save_password($password){
		
		global $con;

		$password = password_hash($password, PASSWORD_DEFAULT);
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "update users set password = '$password' where email = '$email' limit 1";
		mysqli_query($con,$query);

	}
	
	function valid_email($email){
		global $con;

		$email = addslashes($email);

		$query = "select * from users where email = '$email' limit 1";		
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				return true;
 			}
		}

		return false;

	}

	function is_code_correct($code){
		global $con;

		$code = addslashes($code);
		$expire = time();
		$email = addslashes($_SESSION['forgot']['email']);

		$query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
		$result = mysqli_query($con,$query);
		if($result){
			if(mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_assoc($result);
				if($row['expire'] > $expire){

					return "The code is correct";
				}else{
					return "The code is expired";
				}
			}else{
				return "The code is incorrect";
			}
		}

		return "The code is incorrect";
	}

	
?>

<!DOCTYPE html> <!-- Declaración del tipo de documento -->
<html lang="en"> <!-- Elemento raíz del documento con atributo de idioma -->

<head>
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres del documento -->

    <!-- Importación de estilos de Boxicons para iconos -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="<?=ROOT?>/../public/assets/imgs/icon.png">
    <!-- Importación de estilos personalizados desde un archivo externo -->

    <style>
      /* Link de google fonts-sora*/
      @import url('https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap');


      *{
          font-family:"Sora",sans-serif;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
      }

      body{
          display: flex;
          justify-content: center;
          align-items: center;
          min-height: 100vh;
          background: url("<?=ROOT?>/../public/assets/css/bg.jpg") no-repeat;
          background-position: center;
          background-size: cover;
      }

      .logo {
        text-align: center;
      }

      .fondo{
          width: 420px;
          padding: 30px 40px;
          border: 2px solid rgba(255, 255, 255, 0.3);
          backdrop-filter: blur(15px);
          box-shadow: 0 0 13px rgba(0, 0, 0, 0.3);
          border-radius: 10px;
          color: #fff;

      }

      .fondo h1{
          text-align: center;
          font-size: 40px;
      }

      .fondo .input-box{
          position: relative;
          width: 100%;
          height: 50px;
          margin: 30px 0;
      }

      .input-box input{
          width: 100%;
          height: 100%;
          background: transparent;
          border: none;
          outline: none;
          border: 2px solid rgba(255, 255, 255, 0.9);
          border-radius: 10px;
          font-size: 16px;
          color: #fff;
          padding: 20px 45px 20px 20px;
      }

      .input-box input::placeholder {
    color: #fff;
    }

      .input-box i{
          position: absolute;
          right: 20px;
          top: 50%;
          transform: translateY(-50%);
          font-size: 24px;
      }

      .fondo .olvidar-recordar{
          display: flex;
          justify-content: space-between;
          font-size: 14.5px;
          margin: 20px 0 15px;
      }

      .olvidar-recordar label input{
          accent-color: #fff;
          text-decoration: none;
          margin-right: 3px;
      }

      .olvidar-recordar a{
          text-decoration: none;
          color: #fff;
          font-weight: 600;
      }

      .olvidar-recordar a:hover{
          text-decoration: underline;
      }

      .fondo .btn{
          width: 100%;
          height: 45px;
          background-color:#fff;
          outline: none;
          border: none;
          border-radius: 10px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          cursor: pointer;
          font-size: 16px;
          font-weight: bold;
          color: #213121;
      }

      .fondo .btn:hover{
          opacity: 0.9;
      }

      .register-link{
          font-size: 14.5px;
          text-align: center;
          margin-top: 20px;
      }

      .register-link a{
          text-decoration: none;
          color: #fff;
          font-weight: 600;
      }

      .register-link a:hover{
          text-decoration: underline;

      }

      .errorAuth{
        text-align: center;
        color: red;
        font-size: 20px;
      }

      .arrow-left img{
            transform: rotate(180deg);
        }

        .arrow-left a{
            display: flex;
            position: absolute;
            top: 10px;
            left: 10px;
            align-items: center;
            padding: 15px 30px;
            color: #fff;
            border: none;
            border-radius: 50px;
            background: linear-gradient(270deg,#407C5F,#028034);
            cursor: pointer;
        }

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la visualización en dispositivos móviles -->
    <title>Ecomania | Forgot Password</title> <!-- Título de la página -->
</head>

<body>

     <!-- Contenedor principal de la página -->
    <?php 

        switch ($mode) {
            case 'enter_email':
                ?>

                    <div class="arrow-left">
                        <a href="<?=ROOT?>/login"><img src="<?=ROOT?>/../public/assets/imgs/contact/arrow_icon.png" alt=""></a>
                    </div>

                    <div class="fondo">
                    
                    <form method="post" action="forgot?mode=enter_email"> <!-- Formulario de inicio de sesión -->
                        <div class="logo">
                            <a href="<?=ROOT?>/home" class="d-inline-flex link-body-emphasis text-decoration-none">
                            <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="70" height="67">
                            </a>
                        </div>

                        <h1>Forgot Password</h1> <!-- Encabezado del formulario -->

                        <br>
                        <center><h4>Enter your email below</h4></center>

                        <p class="errorAuth">
                        <?php
                            foreach($error as $err){
                                echo "<br>" . $err;
                            }
                        ?>
                        </p>

                        <!-- Campo de entrada para el nombre de usuario -->
                        <div class="input-box">
                            <input type="email" value="<?=old_value('email')?>" name="email" placeholder="Email" required> <!-- Campo obligatorio -->
                            <i class="bx bxs-user"></i> <!-- Icono de usuario de Boxicons -->
                        </div>


                        <!-- Botón de envío del formulario -->
                        <button type="submit" class="btn">Send Code</button> <!-- Botón con clase "btn" para estilos personalizados -->

                    </form>
                <?php				
                break;

            case 'enter_code':
                ?>
                    <div class="arrow-left">
                        <a href="<?=ROOT?>/forgot"><img src="<?=ROOT?>/../public/assets/imgs/contact/arrow_icon.png" alt=""></a>
                    </div>

                    <div class="fondo">

                    <form method="post" action="forgot?mode=enter_code"> <!-- Formulario de inicio de sesión -->
                        <div class="logo">
                            <a href="<?=ROOT?>/home" class="d-inline-flex link-body-emphasis text-decoration-none">
                            <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="70" height="67">
                            </a>
                        </div>

                        <h1>Forgot Password</h1> <!-- Encabezado del formulario -->

                        <br>
                        <center><h4>Enter your code sent to your email</h4></center>
                        <!-- Campo de entrada para el nombre de usuario -->

                        <p class="errorAuth">
                        <?php
                            foreach($error as $err){
                                echo "<br>" . $err;
                            }
                        ?>

                        <div class="input-box">
                            <input type="text" name="code" placeholder="Code" required> <!-- Campo obligatorio -->
                            <i class="bx bxs-lock-alt"></i> <!-- Icono de usuario de Boxicons -->
                        </div>


                        <!-- Botón de envío del formulario -->
                        <button type="submit" class="btn">Send Code</button> <!-- Botón con clase "btn" para estilos personalizados -->

                    </form>
                <?php
                break;

            case 'enter_password':
                ?>

                    <div class="arrow-left">
                        <a href="<?=ROOT?>/forgot"><img src="<?=ROOT?>/../public/assets/imgs/contact/arrow_icon.png" alt=""></a>
                    </div>

                    <div class="fondo">

                    <form method="post" action="forgot?mode=enter_password"> <!-- Formulario de inicio de sesión -->
                        <div class="logo">
                            <a href="<?=ROOT?>/home" class="d-inline-flex link-body-emphasis text-decoration-none">
                            <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="70" height="67">
                            </a>
                        </div>

                        <h1>Forgot Password</h1> <!-- Encabezado del formulario -->

                        <br>
                        <center><h4>Enter your new password</h4></center>

                        <p class="errorAuth">
                        <?php
                            foreach($error as $err){
                                echo "<br>" . $err;
                            }
                        ?>

                        <!-- Campo de entrada para el nombre de usuario -->
                        <div class="input-box">
                            <input type="password" name="password" placeholder="Password" required> <!-- Campo obligatorio -->
                            <i class="bx bxs-lock-alt"></i> <!-- Icono de candado de Boxicons -->
                        </div>

                        <div class="input-box">
                            <input type="password" name="password2" placeholder="Retype Password" required> <!-- Campo obligatorio -->
                            <i class="bx bxs-lock-alt"></i> <!-- Icono de candado de Boxicons -->
                        </div>


                        <!-- Botón de envío del formulario -->
                        <button type="submit" class="btn">Save</button> <!-- Botón con clase "btn" para estilos personalizados -->

                    </form>
                <?php
                break;
            
            default:
                // code...
                break;
        }

        ?>
    </div>
</body>

</html>