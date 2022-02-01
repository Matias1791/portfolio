<header class="container">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid px-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mb-2 mt-2">
                        <li class="nav-item ps-3">
                            <a class="nav-link ps-3 py-1 pe-3 <?php echo ($pg == "index") ? "active" : "" ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-3 py-1 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-3 py-1 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link px-3 py-1 <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.php" style="margin-right: 400px;">Contacto</a>
                        </li>
                        <li class="cv">
                            <a class="nav-link py-1" href="contacto.php" style="font-weight: 100; color: white;">Descargar mi CV</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>