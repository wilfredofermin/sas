<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  {{-- <link rel="shortcut icon" href="./assets/img/favicon.ico" /> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <livewire:styles>
    <title> {{ config('app.name', 'SAS') }}</title>
    <link href="{{ asset('js/app.js') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="/css/@fortawesome/fontawesome-free/css/all.min.css" />
</head>

<body class="text-gray-800 antialiased">
  <div id="app">

    {{-- INICIO MENU LATERAL --}}
    @include('assets.menu_lateral')
    {{-- FIN MENU LATERAL --}}

    <div class="relative md:ml-64 bg-gray-100">
      <nav
        class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-no-wrap md:justify-start flex items-center p-4">
        <div class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4">
          <a class="text-white text-sm uppercase hidden lg:inline-block font-semibold" href="./index.html">
            <strong>Dashboard</strong> |
            {{-- USUARIO LOGEADO --}}
            {{ Auth::user()->name }}</a>

          {{-- AQUI EL AREA DE BUSQUEDA --}}
          @include('assets.buscar')
          {{-- FIN AREA DE BUSQUEDA --}}

          {{-- AQUI MODULO LIVEWIRE PERFIL DE USUARIO --}}
          @livewire ('area-perfil-usuario')
          {{-- FIN DEL LIVEWIRE PERFIL --}}

        </div>
      </nav>
      {{-- FIN DEL MODULO - PERFIL DEL USUARIO --}}

      <div class="relative bg-purple-400 md:pt-20 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
          <div>

            {{-- AQUI LOS CARD STATUS--}}
            {{-- @include('assets.cardstatus') --}}
            {{-- Fin card status --}}

          </div>
        </div>
      </div>
      {{-- Inicio Contenedor --}}
      <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap">
          <div class="w-full xl:w-12/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
              <div class="rounded-t mb-20 px-4 py-0 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="container mx-auto">

                    {{-- AQUI EL CONTENIDO DINAMICO ------------------------------------------------------------------------------------}}
                    @yield('content')
                    {{-- AQUI EL CONTENDEDOR -------------------------------------------------------------------------------------------}}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- Fin de contenedor --}}

        <footer class="block py-4">
          <div class="container mx-auto px-4">
            <hr class="mb-4 border-b-1 border-gray-300" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
              <div class="w-full md:w-full px-4">
                <div class="text-sm text-gray-600 font-semibold mx-auto">
                  Copyright © <span id="javascript-date"></span>
                  <a href="https://www.viva.com.do"
                    class="text-gray-600 hover:text-gray-800 text-sm font-semibold py-1">
                    Trilogigy Dominicana - VIVA
                  </a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  @include('sweet::alert')
  <script>


  </script>

  <livewire:scripts>
</body>


</html>