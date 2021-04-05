<nav style="background-color: white;" class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DoaUP!</a>
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
                        Galeria
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

        <div>
            <a class="inline-block block no-underline hover:underline py-2 hover:text-black md:border-none md:p-0" href="#">
                <span class="border-2 border-blue-500 text-blue-500 px-16 py-2.5 rounded">Login</span>
            </a>
            <a class="inline-block block no-underline hover:underline py-2 hover:text-black md:border-none md:p-0" href="#">
                <span class="bg-blue-500 text-white px-14 py-2.5 rounded">Cadastro</span>
            </a>
        </div>
    </div>
</nav>
