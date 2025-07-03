<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Dashboard - Wila
    </title>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Estilos personalizados si los tienes -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body x-data="{
    page: 'ecommerce',
    loaded: true,
    darkMode: false,
    stickyMenu: false,
    sidebarToggle: false,
    menuToggle: false,
    navOpen: false,
    scrollTop: false,
    toggleSidebar(event) {
      console.log('toggleSidebar llamado');
      console.log('Evento disparado por:', event);
      console.trace('toggleSidebar toggle');
      this.sidebarToggle = !this.sidebarToggle;
    },
    closeSidebar() {
      console.log('closeSidebar llamado');
      this.sidebarToggle = false;
      console.trace('closeSidebar');
    }
  }" x-init="
    darkMode = JSON.parse(localStorage.getItem('darkMode')); 
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)));
    $watch('sidebarToggle', value => {
      console.log('sidebarToggle cambió a:', value);
      console.trace('sidebarToggle cambio');
    });
  " :class=\"{'dark bg-gray-900': darkMode===true}\">
    <!-- Page Wrapper -->
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <x-sidebar />
        <!-- Sidebar End -->

        <!-- Content Area -->
        <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
            <!-- Header -->
            <x-header />

            <!-- Main Content -->
            <main>
                <div @click.stop class="  p-4 mx-auto max-w-screen-2xl md:p-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts del template si tienes -->

    <script src="{{ asset('js/index.js') }}"></script>


</body>

</html>