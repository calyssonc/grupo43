<nav style="background-color: white;" class="navbar fixed w-full navbar-expand-lg navbar-light bg-light">
<img src="image/logo111.png" x="0px" y="0px" width="55" height="55">
    <a class="navbar-brand" href="{{ route('dashboard') }}">DoaUP!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <div class="md:ml-4">
                    <a class="block hover:underdivne py-2 hover:text-black md:p-0" href="{{ route('dashboard') }}">
                        Home
                    </a>
                </div>
            </li>
            @if (Auth::guard('beneficiado')->check())
                <li class="nav-item">
                    <div class="md:ml-4">
                        <a class="block hover:underdivne py-2 hover:text-black md:p-0" href="{{ route('beneficiado.show') }}">
                            Perfil
                        </a>
                    </div>
                </li>
            @endif
            @if (Auth::guard('doador')->check())
                <li class="nav-item">
                    <div class="md:ml-4">
                        <a class="block hover:underdivne py-2 hover:text-black md:p-0" href="{{ route('doador.show') }}">
                            Perfil
                        </a>
                    </div>
                </li>
            @endif
            @if (Auth::guard('escola')->check())
                <li class="nav-item">
                    <div class="md:ml-4">
                        <a class="block hover:underdivne py-2 hover:text-black md:p-0" href="{{ route('escola.show') }}">
                            Perfil
                        </a>
                    </div>
                </li>
            @endif
            <li class="nav-item">
                <div class="md:ml-4">
                    <a class="block hover:underdivne py-2 hover:text-black md:p-0" href="#">
                        Galeria
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <div class="md:ml-4">
                    <a class="block hover:underdivne py-2 hover:text-black md:p-0" href="#">
                        Contato
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <div class="md:ml-4">
                    <a class="block hover:underdivne py-2 hover:text-black md:p-0" href="#">
                        Fórum
                    </a>
                </div>
            </li>
        </ul>

        @if (!Auth::guard('beneficiado')->check() && !Auth::guard('doador')->check() && !Auth::guard('escola')->check())
            <div>
                <a class="inline-block block no-underline hover:underline py-2 hover:text-black md:border-none md:p-0" href="{{ route('login') }}">
                    <span class="border-2 border-blue-500 text-blue-500 px-16 py-2.5 rounded">Login</span>
                </a>
                <div class="group inline-block">
        <a class="group inline-block" href="#">
  <button
    class="outline-none focus:outline-none px-3 py-2 rounded-sm flex items-center min-w-32"
  >
    <span class="bg-blue-500 text-white px-14 py-2.5 rounded">Cadastro</span>
    <span>
      <svg
        class="fill-current h-4 w-4 transform group-hover:-rotate-180
        transition duration-150 ease-in-out"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 20 20"
      >
        <path
          d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
        />
      </svg>
    </span>
  </button>
  <ul
    class="bg-blue-500 border rounded-sm transform scale-0 group-hover:scale-100 absolute 
  transition duration-150 ease-iphn-out origin-top min-w-32"
  >
    <li class="bg-blue-500 text-white hover:bg-blue-700  px-14 py-2.5 rounded" href="#">Beneficiado</li>
    <li class="bg-blue-500 text-white hover:bg-blue-700  px-14 py-2.5 rounded" href="#">Doador</li>  
    <li class="bg-blue-500 text-white hover:bg-blue-700 px-14 py-2.5 rounded" href="#">Escola</li>  
  </ul>
  </a>
        </div>

        @endif
    </div>
    </div>
</nav>
<style>
 
  li>ul                 { transform: translatex(100%) scale(0) }
  li:hover>ul           { transform: translatex(101%) scale(1) }
  li > button svg       { transform: rotate(-90deg) }
  li:hover > button svg { transform: rotate(-270deg) }

  
  .group:hover .group-hover\:scale-100 { transform: scale(1) }
  .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
  .scale-0 { transform: scale(0) }
  .min-w-32 { min-width: 8rem }
</style>