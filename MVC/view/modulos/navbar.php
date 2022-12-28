<nav class="navbar navbar-expand-lg navbar-secundary bg-dark fixed-top mb-5">
    <div class="container-fluid">
        <a class="navbar-brand  " href="<?php echo $_ENV["url"];?>inicio"><img
                src="<?php echo $_ENV["url"];?>view\assets\src\img\pcdoctor.jpeg" width="80" class="rounded
                ">
            PC-DOCTOR </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>inicio">inicio </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>productos">productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>servicio">servicio técnico</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $_ENV["url"];?>contactenos">contactenos</a>
                </li>
              
            </ul>
            <li class="nav-item mt-2  ml-auto">
                    <a class="nav-link badge badge-pill bg-danger text-dark h-80   " aria-current="page"
                        href="<?php echo $_ENV["url"];?>cerrar"> cerrar sesion</a>
                </li>
                <div class="text-white ml-2">
                    <?php
        echo @$_SESSION['usuario'];
        ?>
                </div>
        </div>
    </div>
</nav>