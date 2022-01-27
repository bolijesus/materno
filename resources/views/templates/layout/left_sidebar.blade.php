
<aside id="leftsidebar" class="sidebar">
  <!-- User Info -->
  <div class="user-info">
  </div>
  <!-- #User Info -->
  <!-- Menu -->
  <div class="menu">
    <ul class="list">
        <li class="{{ active('backoffice.paciente.*') }}">
            <a href="{{ route('backoffice.paciente.index') }}" class="menu-toggle">
                <i class="material-icons">person</i>
                <span>PACIENTE</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ active('backoffice.paciente.create') }}">
                    <a href="{{ route('backoffice.paciente.create') }}" >
                        <span>Crear</span>
                    </a>                    
                </li>
                <li class="{{ active('backoffice.paciente.index') }}">
                    <a href="{{ route('backoffice.paciente.index') }}" >
                        <span>Listar</span>
                    </a>
                </li>
                @yield('seccion-editar-pacientes')
            </ul>
        </li>
        <li class="{{ active('backoffice.cup.*') }}">
            <a href="{{ route('backoffice.cup.index') }}" class="menu-toggle">
                <i class="material-icons">enhanced_encryption</i>
                <span>CUPS</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ active('backoffice.cup.create') }}">
                    <a href="{{ route('backoffice.cup.create') }}" >
                        <span>Crear</span>
                    </a>                    
                </li>
                <li class="{{ active('backoffice.cup.index') }}">
                    <a href="{{ route('backoffice.cup.index') }}" >
                        <span>Listar</span>
                    </a>
                </li>
                @yield('seccion-editar-cups')
            </ul>
        </li>
        <li class="{{ active('backoffice.paquete.*') }}">
            <a href="{{ route('backoffice.paquete.index') }}" class="menu-toggle">
                <i class="material-icons">enhanced_encryption</i>
                <span>PAQUETES</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ active('backoffice.paquete.create') }}">
                    <a href="{{ route('backoffice.paquete.create') }}" >
                        <span>Crear</span>
                    </a>                    
                </li>
                <li class="{{ active('backoffice.paquete.index') }}">
                    <a href="{{ route('backoffice.paquete.index') }}" >
                        <span>Listar</span>
                    </a>
                </li>
                @yield('seccion-editar-paquetes')
            </ul>
        </li>
        <li class="{{ active('backoffice.control.*') }}">
            <a href="{{ route('backoffice.control.index') }}" class="menu-toggle">
                <i class="material-icons">enhanced_encryption</i>
                <span>CONTROLES</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ active('backoffice.control.create') }}">
                    <a href="{{ route('backoffice.control.create') }}" >
                        <span>Crear</span>
                    </a>                    
                </li>
                <li class="{{ active('backoffice.control.index') }}">
                    <a href="{{ route('backoffice.control.index') }}" >
                        <span>Listar</span>
                    </a>
                </li>
                @yield('seccion-editar-controles')
            </ul>
        </li>
        <li class="{{ active('backoffice.reporte.*') }}">
            <a href="#" class="menu-toggle">
                <i class="material-icons">show_chart</i>
                <span>REPORTES</span>
            </a>
            <ul class="ml-menu">
                <li class="{{ active('backoffice.control.create') }}">
                    <a href="{{ route('backoffice.reporte.pacientes') }}" >
                        <span>Pacientes</span>
                    </a>                    
                </li>
            </ul>
        </li>
    </ul>
  </div>
  <!-- #Menu -->
  <!-- Footer -->
  <div class="legal">
    <div class="copyright">
        &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
    </div>
    <div class="version">
        <b>Version: </b> 1.0.5
    </div>
  </div>
  <!-- #Footer -->
</aside>
