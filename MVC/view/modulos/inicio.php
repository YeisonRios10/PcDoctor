<!-- carrusel -->

<div id="carouselExampleCaptions" class="carousel slide mt-5 p-5" data-ride="carousel ">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner ">
        <div class="carousel-item active img-fluid">
            <img src="<?php echo $_ENV["url"];?>view\assets\src\img\carrusel1.jpeg" class="d-block w-100 " height="400"
                alt="...">
            <div class="carousel-caption d-none d-md-block ">
                <h1>servicio técnico</h1>
                <p><strong>encuentra servicio técnico especialisado en reparacion de tu equipo.</strong></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo $_ENV["url"];?>view\assets\src\img\carrusel2.jpeg" class="d-block w-100 " height="400"
                alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>asesorios y partes</h1>
                <p><strong>consigue los componentes que necesites para tu equipo.</strong></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo $_ENV["url"];?>view\assets\src\img\carrusel3.jpeg" class="d-block w-100  " height="400"
                alt="...">
            <div class="carousel-caption d-none d-md-block ">
                <h1>contactenos</h1>
                <p><strong>encuentra información de contacto con nuestro equipo.</strong></p>
            </div>
        </div>
        <div class="carousel-item ">
            <img src="<?php echo $_ENV["url"];?>view\assets\src\img\carrusel4.jpeg" class="d-block w-100" height="400"
                alt="...">
            <div class="carousel-caption d-none d-md-block ">
                <h1>tu opinión cuenta</h1>
                <p><strong>danos a saber tus sugerencias</strong></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
<!--cierre de carrusel -->



<!-- card -->

<div class="container-fluid">
    <div class="row mt-5 mb-3">

        <div class="col-lg-3 col-md-6 col-sm-6  justify-content-center">
            <div class="card" style="width: 18rem; height:450px">
                <img src="<?php echo $_ENV["url"];?>view\assets\src\img\contacto.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">contamos con servicio en linea, contáctanos atraves de nuestros números
                        telefonicos</p>
                    <a class="btn btn-dark" href="<?php echo $_ENV["url"];?>contactenos">contáctenos</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6  justify-content-center">
            <div class="card" style="width: 18rem; height:450px">
                <img src="<?php echo $_ENV["url"];?>view\assets\src\img\mantenimiento.PNG" class="card-img-top"
                    alt="...">
                <div class="card-body">
                    <p class="card-text">encuentra servicio de mantenimiento preventivo y correctivo para tu equipo </p>
                    <a class="btn btn-danger" href="<?php echo $_ENV["url"];?>productos">productos</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6  justify-content-center">
            <div class="card" style="width: 18rem; height:450px">
                <img src="<?php echo $_ENV["url"];?>view\assets\src\img\partes.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">encuentra los asesorios y partes que necesitas para tu equipo</p>
                    <a class="btn btn-primary mt-4" href="<?php echo $_ENV["url"];?>contactenos">contáctenos</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6  justify-content-center">
            <div class="card" style="width: 18rem; height:450px">
                <img src="<?php echo $_ENV["url"];?>view\assets\src\img\servicio.PNG" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">contamos con servicio profesional especializado </p>
                    <a class="btn btn-warning mt-3" href="<?php echo $_ENV["url"];?>servicio">servicio técnico</a>
                </div>
            </div>
        </div>




    </div>
</div>

<!-- quines somos -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-3" style="border: 4px solid rgb(18, 21, 219);
          background-color: rgb(238, 103, 25);">
            <img class="m-5  " src="<?php echo $_ENV["url"];?>view\assets\src\img\tenemos-tecnologia.gif"
             width="70%"  height="50%"
                alt="">
        </div>
        <div class="col-6" style="border: 4px solid rgb(18, 21, 219); color: white; background-color: blue;">
            <h2 style="text-align: center; ">PC DOCTOR</h2>
            <hr>
            <p><em>Nuestras soluciones de salud del sistema son compatibles con dispositivos PC, Android, Chrome OS y
                    Mac — y tenemos más de 25 años de experiencia en la gama de clientes. Los fabricantes de equipos
                    originales, los creadores de sistemas, los centros de apoyo, las fábricas, las instalaciones de
                    reparación, los recicladores, las instalaciones médicas, los técnicos y las personas hacen un gran
                    uso de nuestras soluciones sólidas.
                    <br>

                    Nuestros diagnósticos de hardware basados en patentes, la información directa del sistema ™, la
                    mensajería inteligente, el monitoreo proactivo del sistema y las opciones de informes de alta gama
                    trabajan juntos en una poderosa arquitectura basada en la nube, y están disponibles durante todo el
                    ciclo de vida del sistema.
                    <br>
                    Al probar los dispositivos del mundo desde el sector médico hasta el aeroespacial hasta el
                    reciclaje, ¡PC-Doctor está ayudando a salvar vidas, entrenar a pilotos y desempeñar un papel en
                    salvar nuestro planeta! Obtenga más información sobre los dispositivos que probamos viendo el video
                    "We Are PC-Doctor" arriba. También te invitamos a visitar el Sobre PC-Doctor página para leer más
                    sobre quiénes somos y qué hacemos.</em></p>
        </div>
        <div class="col-3 " style="border: 4px solid rgb(18, 21, 219); background-color: rgb(238, 103, 25);">
            <img class="mt-5" src="<?php echo $_ENV["url"];?>view\assets\src\img\gif2.gif" width="100%" alt="">
        </div>
    </div>
</div>

<!-- contador -->
<br><br>

<section class="counter" style="background: url('<?php echo $_ENV["url"];?>view/assets/src/img/fondo4.jpg ">>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading text-center">
                    <h5 class="text-color ct">NUESTRA EXPERIENCIA</h5>
                    <h2>Hemos reparado mas de 100 computadores satisfactoriamente</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-world"></i>
                    <div class="counter-stat">
                        <span class="count h2">15</span><span>K</span>
                    </div>
                    <p>Top global</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-stats-up"></i>
                    <div class="counter-stat">
                        <span class="count h2">1,200</span><span>+</span>
                    </div>
                    <p>Crecimiento potencial</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-heart"></i>
                    <div class="counter-stat">
                        <span class="count h2">600</span><span>%</span>
                    </div>
                    <p>Reparadores expertos</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-thumb-up"></i>
                    <div class="counter-stat">
                        <span class="count h2">100</span><span>+</span>
                    </div>
                    <p>Clientes atendidos</p>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>
<a href="#" class="scrollup">Scroll</a>