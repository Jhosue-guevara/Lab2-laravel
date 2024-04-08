<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>About</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
            <img src="{{ asset('imagenes/TalentoLogo.png') }}" class="brand-img" alt="Talento Logo">
                <span class="brand-txt">Talento</span>
            </a>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Estudiantes</h1>
            <h2 class="display-4 mb-5">Del Grupo</h2>
            <p>ARGUETA HERNÁNDEZ GERSON NAHUN - SMSS021722</p>
            <p>ESPERANZA ORTIZ JEFFERSON JOSUÉ - SMSS132422</p>
            <p>GUEVARA PORTILLO ÁNGEL JOSUÉ - SMSS015622</p>
            <p>ROMERO RODRÍGUEZ SOFÍA MARGARITA - SMSS042622</p>
            <p>ROMERO VÁSQUEZ CÉSAR ALEXANDER - SMSS078821</p>
            <p>VILLALTA ORTIZ EDWIN ALEXANDER - SMSS022022</p>


        </div>
    </header>


    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

</body>
</html>
