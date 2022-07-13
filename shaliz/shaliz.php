<!DOCTYPE html>
<html>
    
    <head>
        <title>Sha-Liz</Sha-Liz></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="icon" type="image/x-icon" href="Logo.jpeg">
        
       
    </head>
    
  <body style="background-image: url('')">

    <header style = "background:#ffffff; text-align:center;">
      <div class="img-div">
        <img src="Logo.jpeg" alt="" style="width:80px;" class="rounded-pill">
      </div>
        <h1 style ="color:rgb(0, 0, 0);">Sha-Liz</h1>
        
        <nav style ="
            background:#FFDDC2; 
            display: block; 
            font-size: 20px;
            padding: 1px 30px; 
            text-transform: uppercase;
            letter-spacing: 5px;
            
            " class="navbar navbar-expand-lg">

              <div>
           
        <nav class="navbar navbar-expand-sm bg-#FFDDC2  navbar-dark">
            <div class="container-fluid">  <!--inicio del div contenedor principal-->
                <a class="navbar-brand" href="#">
                    <img src="Logo.jpeg" alt="Logo" style="width:35px;">
                  </a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                

                <div class= "collapse navbar-collapse" id="navbarSupportedContent"> <!--Contenedor para generar efecto  menu-->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                        <li class="nav-item"><a class="nav-link active" href="Menu principal.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link active" href="Productos.html">Registro productos</a></li>
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section>
        <!--
        <div id="galeria1" class="carousel-slide" data-bs-ride="carousel"> 
            
             <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://www.dzoom.org.es/wp-content/uploads/2008/12/panoramica-5-734x223.jpg" alt="Los Angeles" class="d-block w-100" >
                </div>
                <div class="carousel-item">
                  <img src="https://www.dzoom.org.es/wp-content/uploads/2008/12/panoramica-5-734x223.jpg" alt="Chicago" class="d-block w-100">
                </div>
                <div class="carousel-item">
                  <img src="Imagenes 2/16.jpg" alt="New York" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="Imagenes 2/20.jpg" alt="New York" class="d-block" style="width:100%">
                </div>
                <div class="carousel-item">
                    <img src="Imagenes 2/18.jpg" alt="New York" class="d-block" style="width:100%">
                </div>
                

              <button class ="carousel-control-prev"  type ="button" data-bs-target="#galeria1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
                <span class="visually-hidden">Previus</span>
              </button>
              <button class ="carousel-control-next"  type ="button" data-bs-target="#galeria1" data-bs-slide="next">
                <span class="carousel-control-next-icon"  aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
      
        </div>
    -->
                
    </section>
        <section style ="padding: 22px; class = "container">

            <form action="recibir.php" method="post"; style ="background:#FFDDC2;color:black; width:700px; padding:30px; margin :auto; margin-top:100px">
                <h2 style="text-align: center;">FORMULARIO DE REGISTRO</h2>
                      <form action="welcome.php" method="post">
                        Nombre de producto: <input type="text" name="Nombre"><br>
                        Codigo: <input type="text" name="codigo"><br>
                        Categoria: <input type="text" name="categoria"><br>
                        <input type="submit">
            </form>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"> </script>
             <hr>
 
        </section> 
  
  </body>
</html>