<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  {{-- <link rel="shortcut icon" href="./assets/img/favicon.ico" /> --}}
  {{-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" /> --}}
  {{-- <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" /> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Login | SAS </title>
</head>


<body class="text-purple-800 antialiased">
  <nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg">
  </nav>
  <main>
    <section class="absolute w-full h-full">
      <div class="absolute top-0 w-full h-full bg-purple-400" {{-- Si deseo colocar una imagen de fondo --}}
        {{-- style="background-image: url(omega.com.do/supreme/_images/background_login/login_bg_2.jpg); background-size: 100%; background-repeat: no-repeat;"> --}}
        </div> <div class="container mx-auto px-4 h-full ">

        <div class="flex content-center items-center justify-center h-full">
          <div class="w-full lg:w-4/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-purple-700 border-0">
              <div class="rounded-t mb-0 px-6 py-6">
                <div class="btn-wrapper  align-middle z-auto  ">
                  <img alt="logo" class="w-45 mx-auto" src="./img/viva.png" />
                  </button>
                </div>
                <br>
              </div>
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="text-white text-center mb-3 font-bold">
                  <small>Introduzca sus credenciales</small>
                </div>
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-red-200 text-xs font-bold mb-2"
                      for="grid-password">@error('username') <span
                        class="wrap-input100 ">{{ $message }}@enderror</label>

                    <input type="text"
                      class="px-3 py-3 @error('username')border border-red-500 @enderror rounded placeholder-gray-400 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Usuario" name="username" id="username" style="transition: all 0.15s ease 0s;" />
                  </div>

                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-red-200 text-xs font-bold mb-2"
                      for="grid-password">@error('password') <span
                        class="wrap-input100 ">{{ $message }}@enderror</label>

                    <input type="password"
                      class="px-3 py-3 @error('password') border border-red-500 @enderror rounded placeholder-gray-400 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                      placeholder="Password" id="password" name="password" style="transition: all 0.15s ease 0s;" />
                  </div>
                  <div>
                    <label class="inline-flex items-center cursor-pointer"><input id="customCheckLogin" type="checkbox"
                        class="form-checkbox text-purple-400 ml-1 w-5 h-5"
                        style="transition: all 0.15s ease 0s;" /><span
                        class="ml-2 text-sm font-semibold text-white ">Recuederme</span></label>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-purple-900 text-white active:bg-purple-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                      type="submit" style="transition: all 0.15s ease 0s;">
                      Accede
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="absolute w-full bottom-0 bg-purple-900 pb-6 justify-content-center">
        <div class="container mx-auto px-4 text-cente">
          <hr class="mb-6 border-b-1 border-purple-700" />
          <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4">
              <div class="text-sm text-white font-semibold py-1">
                Copyright © 2019
                <a href="https://viva.com.do"
                  class="text-white hover:text-purple-400 text-sm font-semibold py-1 ">Trilogy Dominicana </a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </footer>
    </section>
  </main>
</body>
<script>
  function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
</script>

</html>