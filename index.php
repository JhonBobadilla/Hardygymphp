<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre Hardy Gym, tu gimnasio online para entrenamiento en casa. Accede a rutinas de ejercicio, clases en vivo y consejos de fitness desde cualquier lugar.">
    <meta name="keywords" content="gimnasio online, entrenamiento en casa, fitness virtual, clases de fitness, rutinas de ejercicio en línea, coach virtual, ejercicios en casa, vida saludable, salud">
    <meta name="author" content="Hardy Gym">
    <title>Formulario Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <!--<link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    
</head>
 <body>
 
<div class="cont_logo_hardy_list">
        <div class="principal_logo">
         <img class="logo1" src="logo.png" alt="logo"></div>
        <div  class="principal_titulo">
        <h1 class="titulo">REGISTRATE</h1></div>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid crecee">
            <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>-->
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="menu listas">
                <li class="nav-item">
                  <a class="style_a" href="../index.html"><li>Home</li></a>
                </li>
                
                
              </ul>
            </div>
          </div>
         </nav>
        </ul>
       
      
<div class="formularioo">
 
  <form method="post" autocomplete="off">
    

    <div class="input-group">

     <div class="input-container">
        <input type="text" name="name" placeholder="Nombre completo">
        <i class="fa-solid fa-user"></i>
     </div>

     <div class="input-container">
        <input type="password" name="password" placeholder="Contraseña">
        <i class="fa-solid fa-lock"></i>
     </div>

     <div class="input-container">
        <input type="email" name="email" placeholder="e-mail">
        <i class="fa-solid fa-envelope"></i>
     </div>

     <div class="input-container">
        <input type="tel" name="phone" placeholder="Teléfono">
        <i class="fa-solid fa-phone"></i>
     </div>
    
     <a href="#">Terminos y Condiciones</a>
     <input type="submit" name="send" class="btn" value="Enviar">

     </div>
    </div> 
   </form>
  </div>
 </div>


 <?php 
   include("send.php");
 ?>

 </body>
</html>
