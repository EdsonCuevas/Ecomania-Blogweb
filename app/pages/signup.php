<?php

  if(!empty($_POST)){
    
    //validate
    $errors = [];

    if(empty($_POST['username'])){

        $errors['username'] = "A username is required";

    } else if(!preg_match("/^[a-zA-Z]+$/", $_POST['username'])){

        $errors['username'] = "Username can only have letters and no spaces";

    }

    $query = "select id from users where email = :email limit 1";
    $email = query($query, ['email'=>$_POST['email']]);

    if(empty($_POST['email'])){

        $errors['email'] = "A email is required";

    } else if($email){

        $errors['email'] = "That email is already in use";

    }

    if(empty($_POST['password'])){

        $errors['password'] = "A password is required";

    } else if(strlen($_POST['password']) < 8){

        $errors['password'] = "Password must be 8 chracter or more";

    } else if($_POST['password'] !== $_POST['retype_password']){

        $errors['password'] = "Passwords do not match";

    }

    if(empty($errors)){
        //save to database
        $data = [];
        $data['username'] = $_POST['username'];
        $data['email']    = $_POST['email'];
        $data['role']     = "user";
        $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "insert into users (username,email,password,role) values (:username,:email,:password,:role)";
        query($query, $data);

        redirect('login');
    }

  }

?>
<!DOCTYPE html> <!-- Declaración del tipo de documento -->
<html lang="en"> <!-- Elemento raíz del documento con atributo de idioma -->

<head>
    <meta charset="UTF-8"> <!-- Especifica la codificación de caracteres del documento -->

    <!-- Importación de estilos de Boxicons para iconos -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
    <title>Login Ecomania</title> <!-- Título de la página -->
</head>

<body>

    <div class="fondo"> <!-- Contenedor principal de la página -->

        <div class="arrow-left">
            <a href="<?=ROOT?>/login"><img src="<?=ROOT?>/../public/assets/imgs/contact/arrow_icon.png" alt=""></a>
        </div>

        <form action="" method="post"> <!-- Formulario de inicio de sesión -->

            <div class="logo">
                <a href="<?=ROOT?>/home" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="70" height="67">
                </a>
            </div>
            
            <h1>Register</h1> <!-- Encabezado del formulario -->

            <?php if(!empty($errors['username'])):?>
            <div class="errorAuth"><br><?=$errors['username']?></div>
            <?php endif;?>

            <!-- Campo de entrada para el nombre de usuario -->
            <div class="input-box">
                <input type="text" value="<?=old_value('username')?>" name="username" placeholder="Username" required> <!-- Campo obligatorio -->
                <i class="bx bxs-user"></i> <!-- Icono de usuario de Boxicons -->
            </div>

            <!-- Campo de entrada para el email de usuario -->
            <div class="input-box">
                <input type="email" value="<?=old_value('email')?>" name="email" placeholder="Email" required> <!-- Campo obligatorio -->
                <i class="bx bxs-user"></i> <!-- Icono de usuario de Boxicons -->
            </div>
            <?php if(!empty($errors['email'])):?>
            <div class="errorAuth"><?=$errors['email']?></div>
            <?php endif;?>

            <!-- Campo de entrada para la primera contraseña -->
            <div class="input-box">
                <input type="password" value="<?=old_value('password')?>" name="password" placeholder="Password" required> <!-- Campo obligatorio -->
                <i class="bx bxs-lock-alt"></i> <!-- Icono de candado de Boxicons -->
            </div>
            <?php if(!empty($errors['password'])):?>
            <div class="errorAuth"><?=$errors['password']?></div>
            <?php endif;?>

            <!-- Campo de entrada para la segunda contraseña -->
            <div class="input-box">
                <input type="password" value="<?=old_value('retype_password')?>" name="retype_password" placeholder="Confirm Password" required> <!-- Campo obligatorio -->
                <i class="bx bxs-lock-alt"></i> <!-- Icono de candado de Boxicons -->
            </div>
            
            <!-- Botón de envío del formulario -->
            <button type="submit" class="btn">Sign up</button> <!-- Botón con clase "btn" para estilos personalizados -->

            <!-- Enlace para registrar una cuenta -->
            <div class="register-link">
                <p>
                Already have an account? <!-- Mensaje de invitación para registrar una cuenta -->
                    <a href="<?=ROOT?>/login">Login</a> <!-- Enlace para registrar -->
                </p>
            </div>

            
        </form>
    </div>
</body>

</html>