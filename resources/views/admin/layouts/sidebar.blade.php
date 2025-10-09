<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{ asset('admin/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Cinema</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">
                <li class="nav-item">
                    <a href="{{ route('admin.home') }}" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('genero.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-tags-fill"></i>
                        <p>Generos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('director.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-person-badge"></i>
                        <p>Directores</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pelicula.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-film"></i>
                        <p>Peliculas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('imagen.index') }}" class="nav-link">
                        <i class="nav-icon bi bi-images"></i>
                        <p>Galeria</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-seam-fill"></i>
                        <p>
                            Laravel
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('hola') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Hola Mundo (URL)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('practica1') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Hola Mundo (RUTA)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('practica2', ['nombre' => 'Ana', 'edad' => 45]) }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Paso de parametros</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('practica3') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Paso de parametros (Default Values)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('saludo.dia') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Saludo - Buenos dias</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('saludo.tarde') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Saludo - Buenas tardes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('saludo.noche') }}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Saludo - Buenas noches</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
