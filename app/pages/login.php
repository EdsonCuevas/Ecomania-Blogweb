<?php

  if(!empty($_POST)){
    
    //validate
    $errors = [];

    $query = "select * from users where email = :email limit 1";
    $row = query($query, ['email'=>$_POST['email']]);

    if($row){

      $data = [];
      if(password_verify($_POST['password'], $row[0]['password'])){
        //access
        authenticate($row[0]);
        redirect('home');

      } else {
        $errors['email'] = "Wrong email or password!";
      }

    } else {
      $errors['email'] = "Wrong email or password!";
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

    <div class="arrow-left">
        <a href="<?=ROOT?>/home"><img src="<?=ROOT?>/../public/assets/imgs/contact/arrow_icon.png" alt=""></a>
    </div>

    <div class="fondo"> <!-- Contenedor principal de la página -->
        <form action="" method="post"> <!-- Formulario de inicio de sesión -->

            <div class="logo">
                <a href="<?=ROOT?>/home" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="<?=ROOT?>/../public/assets/imgs/icon.png" alt="" width="70" height="67">
                </a>
            </div>
            
            <h1>Login</h1> <!-- Encabezado del formulario -->

            <?php if (!empty($errors['email'])):?>
              <br>
              <p class="errorAuth"><?=$errors['email']?></p>
            <?php endif;?>

            <!-- Campo de entrada para el nombre de usuario -->
            <div class="input-box">
                <input type="email" value="<?=old_value('email')?>" name="email" placeholder="Email" required> <!-- Campo obligatorio -->
                <i class="bx bxs-user"></i> <!-- Icono de usuario de Boxicons -->
            </div>

            <!-- Campo de entrada para la contraseña -->
            <div class="input-box">
                <input type="password" value="<?=old_value('password')?>" name="password" placeholder="Password" required> <!-- Campo obligatorio -->
                <i class="bx bxs-lock-alt"></i> <!-- Icono de candado de Boxicons -->
            </div>

            <!-- Opción para recordar al usuario -->
            <div class="olvidar-recordar">
                <label><input type="checkbox">Remember Me</label> <!-- Casilla de verificación -->
                <a href="#">Forgot Password</a> <!-- Enlace para restablecer la contraseña -->
            </div>

            <!-- Botón de envío del formulario -->
            <button type="submit" class="btn">Login</button> <!-- Botón con clase "btn" para estilos personalizados -->

            <!-- Enlace para registrar una cuenta -->
            <div class="register-link">
                <p>
                Dont have an account? <!-- Mensaje de invitación para registrar una cuenta -->
                    <a href="<?=ROOT?>/signup">Register</a> <!-- Enlace para registrar -->
                </p>
            </div>
            
        </form>
    </div>
</body>

</html>