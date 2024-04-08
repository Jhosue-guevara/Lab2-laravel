<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>Talento</title>
   
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
            <h1 class="display-2 font-weight-bold my-3">Talento</h1>
            <h2 class="display-4 mb-5">Contrata con Confianza</h2>
            <p>Nuestra aplicación, 
                denominada Talento, se presenta como una plataforma innovadora diseñada 
                para facilitar la compra y venta de servicios profesionales. Su objetivo 
                principal es actuar como un puente sólido entre los proveedores especializados 
                y los clientes que buscan contratar sus servicios de manera confiable y 
                eficiente. La funcionalidad central de Talento radica en su capacidad para 
                proporcionar una interfaz intuitiva y segura que facilita todas las etapas 
                de las transacciones entre ambas partes involucradas.</p>
        </div>
    </header>



    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>Servicios digitales</h3>
                <img src="{{ asset('imagenes/primera.png') }}" class="brand-img" alt="Primera Imagen">            </div>
            <div class="col-sm-4">
                <h3>Servicios educativos</h3>
                <img src="{{ asset('imagenes/Segunda.png') }}" class="brand-img" alt="Segunda Imagen">
            </div>
            <div class="col-sm-4">
                <h3>Servicios legales</h3>
                <img src="{{ asset('imagenes/Tercera.png') }}" class="brand-img" alt="Tercera Imagen">
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Por Talento</p>
    </div>
    
    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

</body>
</html>
