@extends('template/template')

@section('title','Escola Index')

@section('content')
    <div id="imagem1" class="flex flex-col w-auto h-screen text-center">
        <div class="w-2/5 sm:w-1/2 h-auto p-4 sm:mt-16 ml-3 sm:ml-0">
            <p class="text-white font-bold text-3xl sm:text-5xl">Dê um level up nas suas doações</p>
        </div>
        <div class="w-2/5 sm:w-1/2 h-auto ml-3">
            <p class="text-white text-xl sm:text-3xl">Apresentação do projeto tentando vender a ideia</p>
        </div>
        <div class="w-2/5 sm:w-1/2 h-auto mt-3 sm:mt-5 ml-3">
            <button class="text-white rounded bg-blue-500 p-3">Escolas próximas!</button>
        </div>
    </div>
    <div class="h-screen sm:h-2/4 flex flex-wrap m-3">
        <div class="w-full sm:w-2/6 h-2/6 sm:h-full flex justify-center items-center border-b-4 sm:border-r-4 sm:border-b-0 border-yellow-600">
            <div class="text-center">
                <p class="mb-10 font-bold border-b-2 border-yellow-600">Seja um doador!</p>
                <p class="">Torne-se um herói e doe alguma coisa logo!</p>
                <button class="mt-10 text-white rounded bg-blue-500 p-2">Doador!</button>
            </div>
        </div>
        <div class="w-full sm:w-2/6 h-2/6 sm:h-full flex justify-center items-center border-b-4 sm:border-r-4 sm:border-b-0 border-yellow-600">
            <div class="text-center">
                <p class="mb-10 font-bold border-b-2 border-yellow-600">Cadastre sua escola!</p>
                <p class="max-w-xs">Se tem interesse que sua escola participe desse programa se cadastre aqui.</p>
                <button class="mt-10 text-white rounded bg-blue-500 p-2">Escola!</button>
            </div>
        </div>
        <div class="w-full sm:w-2/6 h-2/6 sm:h-full flex justify-center items-center">
            <div class="text-center">
                <p class="mb-10 font-bold border-b-2 border-yellow-600">Cadastre seus dependentes!</p>
                <p class="max-w-xs">Participe e receba doações de materiais escolares para melhorar o aprendizado de seus filhos</p>
                <button class="mt-10 text-white rounded bg-blue-500 p-2">Beneficiados!</button>
            </div>
        </div>
    </div>
    <div class="w-full h-auto sm:h-screen flex flex-wrap mt-16">
        <div class="w-full sm:w-1/2 h-96 sm:h-screen pb-5 sm:pr-2">
            <p class="text-center text-2xl sm:text-3xl">Acompanhe nossos Rankings!</p>
            <div class="flex flex-row h-full w-full text-center">
                <div class="bg-blue-500 rounded-lg w-1/2 h-full m-2">
                    <p class="font-bold text-2xl mt-2">Escolas!</p>
                </div>
                <div class="bg-blue-500 rounded-lg w-1/2 h-full m-2">
                    <p class="font-bold text-2xl mt-2">Doadores!</p>
                </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 h-1/2 sm:h-full pb-5 sm:pl-2">
            <div class="ml-2 text-left">
                <p class="text-2xl sm:text-3xl">Comentários:</p>
                <p class="font-bold mt-4">Família Pereira</p>
                <p class="mt-2">Muito obrigado a todos que doaram para a escola x,  vocês ajudaram demais a minha filha e seus amiguinhos a terem melhores condições de aprendizado!</p>
                <p class="font-bold mt-4">Pai do juquinha</p>
                <p class="mt-2">Muito obrigado por darem melhores condiçoes de estudo para nossos filhos! que deus ilumine o coração de cada um de vocês!</p>
                <p class="font-bold mt-4">Professor Gabriel</p>
                <p class="mt-2">Nossa escola só tem a agradecer por essa iniciativa maravilhosa! Obrigado a todos que doaram e continuam doando para essa causa tão nobre e importante!</p>
                <p class="font-bold mt-4">Pai do João</p>
                <p class="mt-2">Por favor, continuem a doar para a escola Y, ainda temos muitas crianças sem material escola!</p>
            </div>
            <div class="bg-gray-300 mt-10 mr-4 float-right">
                <button class="text-white rounded bg-blue-500 p-2">Mais comentários</button>
            </div>
        </div>
    </div>
    <div class="h-screen w-full flex flex-wrap">
        <div class="w-full sm:w-1/2 h-1/2 sm:h-full flex justify-center items-center">
            <div id="imagem2" class="h-5/6 w-5/6"></div>
        </div>
        <div class="w-full sm:w-1/2 h-1/2 sm:h-full flex justify-center items-center">
            <div class="text-left m-4">
                <p class="font-bold">Conheça mais sobre o projeto Hackathon!</p>
                <p class="mt-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem.</p>
            </div>
        </div>
    </div>
    <div class="bg-blue-300 h-auto py-10">
        <div class="flex flex-wrap text-center font-medium">
            <div class="w-full sm:w-1/4 my-2">
                <p class="text-3xl">300+</p>
                <p>Escolas participantes</p>
            </div>
            <div class="w-full sm:w-1/4 my-2">
                <p class="text-3xl">5.000+</p>
                <p>Famílias inscritas</p>
            </div>
            <div class="w-full sm:w-1/4 my-2">
                <p class="text-3xl">2.000+</p>
                <p>Doadores Registrados</p>
            </div>
            <div class="w-full sm:w-1/4 my-2">
                <p class="text-3xl">10+</p>
                <p>Instituições Parceiras</p>
            </div>
        </div>
    </div>
    <div class="h-auto w-full">
        <div class="flex flex-wrap">
            <div class="h-20 w-full sm:w-2/6 flex flex-row justify-center items-center text-center">
                <div class="p-2 w-2/6">
                    <p>Mobile app</p>
                </div>
                <div class="p-2 w-2/6">
                    <p>Comunidade</p>
                </div>
                <div class="p-2 w-2/6">
                    <p>Quem somos</p>
                </div>
            </div>
            <div class="h-20 w-full sm:w-2/6 flex justify-center items-center">
                <a href="#" class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                    x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve" width="55" height="55">
                        <path fill="#8D6E63" d="M19.8,43c-0.7,0-1.4,0-2.1-0.1c-4.6-0.5-8.4-2.7-10.5-6.2c-5.1-8.3,0.1-13,5.1-17.4c1.3-1.2,2.7-2.4,3.9-3.7  c0.4-0.4,0.8-0.9,1.2-1.3c5.4-6,11.4-12.8,19.8-7c3.4,2.4,5.4,6,5.9,10.5c0.6,6.2-2,13.3-6.7,18.2l0,0C31.8,40.4,25.7,43,19.8,43z"/>
                        <path fill="#795548" d="M19.8,43c-0.7,0-1.4,0-2.1-0.1c-4.6-0.5-8.4-2.7-10.5-6.2c-1.4-2.3-2-4.2-2.1-6c9.7,8.8,33.6,2.2,37.9-13  c0.6,6.2-2,13.3-6.7,18.2l0,0C31.8,40.4,25.7,43,19.8,43z"/>
                        <circle fill="#3E2723" cx="22.5" cy="38.5" r="1.5"/>
                        <path fill="#5D4037" d="M34,13c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S33.4,13,34,13z M34,24c0,0.6,0.4,1,1,1s1-0.4,1-1s-0.4-1-1-1  S34,23.4,34,24z M26,17c0,0.6,0.4,1,1,1s1-0.4,1-1s-0.4-1-1-1S26,16.4,26,17z M14,32c0,0.6,0.4,1,1,1s1-0.4,1-1s-0.4-1-1-1  S14,31.4,14,32z M20,28.5c0,0.8,0.7,1.5,1.5,1.5c0.8,0,1.5-0.7,1.5-1.5c0-0.8-0.7-1.5-1.5-1.5C20.7,27,20,27.7,20,28.5z"/>
                    </svg>
                    <span class="text-xl tracking-wide">Batata</span>
                </a>
            </div>
            <div class="h-20 w-full sm:w-2/6 flex flex-row justify-center items-center text-center">
                <div class="p-2 w-2/6">
                    <p>Mobile app</p>
                </div>
                <div class="p-2 w-2/6">
                    <p>Comunidade</p>
                </div>
                <div class="p-2 w-2/6">
                    <p>Quem somos</p>
                </div>
            </div>
        </div>
    </div>
    <div class="h-1 w-full flex justify-center">
        <div class="w-11/12 border-b-2 border-gray-400"></div>
    </div>
    <div class="h-44 w-full">
        <div class="flex flex-wrap justify-center">
            <div class="w-full sm:w-auto p-3 flex justify-center items-center">
                <a href="#">
                    <svg width="52" height="56" viewBox="0 0 52 56" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="52" height="56" fill="url(#pattern0)"/>
                        <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0" transform="translate(-0.0384615) scale(0.00420673 0.00390625)"/>
                        </pattern>
                        <image id="image0" width="256" height="256" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="w-full sm:w-auto p-3 flex justify-center items-center">
                <a href="#">
                    <svg id="Layer_1" width="52" height="56" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                        .st0{fill:#25D366;}
                        .st1{fill:#FFFFFF;}
                        .st2{fill:#FF0000;}
                        .st3{fill:#3D5A98;}
                        .st4{fill:url(#SVGID_1_);}
                        .st5{fill:url(#SVGID_2_);}
                        .st6{fill:#55ADEE;}
                        .st7{fill:#1E96C8;}
                        .st8{fill:#A9C9DD;}
                        .st9{fill:#C8DAEA;}
                        .st10{fill:none;}
                        .st11{fill:#4787F3;}
                        .st12{fill:#DC483C;}
                        .st13{fill:#FFCE43;}
                        .st14{fill:#149F5C;}
                        .st15{fill:#CE1E5B;}
                        .st16{fill:#72C5CD;}
                        .st17{fill:#DFA22F;}
                        .st18{fill:#3CB187;}
                        .st19{fill:#248C73;}
                        .st20{fill:#392538;}
                        .st21{fill:#BB242A;}
                        .st22{fill:none;stroke:#3CB187;stroke-miterlimit:10;}
                        .st23{fill:#009A57;}
                        .st24{fill:#FCCD37;}
                        .st25{fill:#2771F0;}
                    </style><g><linearGradient gradientUnits="userSpaceOnUse" id="SVGID_1_" x1="407.1325" x2="104.8675" y1="4.4733" y2="507.5267"><stop offset="0" style="stop-color:#4845A2"/><stop offset="4.536461e-02" style="stop-color:#5945A2"/><stop offset="0.1713" style="stop-color:#8444A1"/><stop offset="0.2698" style="stop-color:#9E44A1"/><stop offset="0.3282" style="stop-color:#A844A1"/><stop offset="0.3905" style="stop-color:#AB429A"/><stop offset="0.4788" style="stop-color:#B43C88"/><stop offset="0.4896" style="stop-color:#B53B85"/><stop offset="0.5577" style="stop-color:#BE3572"/><stop offset="0.6762" style="stop-color:#D22749"/><stop offset="0.7388" style="stop-color:#DF4F3E"/><stop offset="0.8559" style="stop-color:#F9A326"/><stop offset="1" style="stop-color:#F9DD26"/></linearGradient><path class="st4" d="M391.5,13H120.5C61.1,13,13,61.1,13,120.5v270.9C13,450.9,61.1,499,120.5,499h270.9   c59.4,0,107.5-48.1,107.5-107.5V120.5C499,61.1,450.9,13,391.5,13z"/><circle class="st1" cx="352.4" cy="160" r="21.2"/><g><path class="st1" d="M333.8,76H178.2C121.8,76,76,121.8,76,178.2v155.6C76,390.2,121.8,436,178.2,436h155.6    c56.4,0,102.2-45.9,102.2-102.2V178.2C436,121.8,390.2,76,333.8,76z M403.5,333.8c0,38.4-31.3,69.7-69.7,69.7H178.2    c-38.4,0-69.7-31.3-69.7-69.7V178.2c0-38.4,31.3-69.7,69.7-69.7h155.6c38.4,0,69.7,31.3,69.7,69.7V333.8z"/><path class="st1" d="M256,162.3c-51.7,0-93.7,42-93.7,93.7s42,93.7,93.7,93.7s93.7-42,93.7-93.7S307.7,162.3,256,162.3z     M256,317.2c-33.7,0-61.2-27.5-61.2-61.2s27.5-61.2,61.2-61.2s61.2,27.5,61.2,61.2S289.7,317.2,256,317.2z"/></g></g></svg>
                </a>
            </div>
            <div class="w-full sm:w-auto p-3 flex justify-center items-center">
                <a href="#">
                    <svg id="Layer_1" width="52" height="56" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css">
                        .st0{fill:#25D366;}
                        .st1{fill:#FFFFFF;}
                        .st2{fill:#FF0000;}
                        .st3{fill:#3D5A98;}
                        .st4{fill:url(#SVGID_1_);}
                        .st5{fill:url(#SVGID_2_);}
                        .st6{fill:#55ADEE;}
                        .st7{fill:#1E96C8;}
                        .st8{fill:#A9C9DD;}
                        .st9{fill:#C8DAEA;}
                        .st10{fill:none;}
                        .st11{fill:#4787F3;}
                        .st12{fill:#DC483C;}
                        .st13{fill:#FFCE43;}
                        .st14{fill:#149F5C;}
                        .st15{fill:#CE1E5B;}
                        .st16{fill:#72C5CD;}
                        .st17{fill:#DFA22F;}
                        .st18{fill:#3CB187;}
                        .st19{fill:#248C73;}
                        .st20{fill:#392538;}
                        .st21{fill:#BB242A;}
                        .st22{fill:none;stroke:#3CB187;stroke-miterlimit:10;}
                        .st23{fill:#009A57;}
                        .st24{fill:#FCCD37;}
                        .st25{fill:#2771F0;}
                    </style><g><path class="st0" d="M256,13C121.8,13,13,121.8,13,256c0,49.1,14.6,94.9,39.7,133.1L21.4,495.1l110.1-30.5   c36.4,21.8,79,34.3,124.5,34.3c134.2,0,243-108.8,243-243C499,121.8,390.2,13,256,13z"/><path class="st1" d="M389.5,322.7c-0.3-3.2-2.2-6-5.1-7.3c-19.6-9-39.3-18-58.9-27c-2.2-1-4.9-0.5-6.5,1.4l-26.6,30   c-2.1,2.4-5.4,3.2-8.3,2c-13.8-5.7-32.4-15.3-51.2-31.5c-22.5-19.3-35.7-40-43.1-53.5c3.7-2.5,13.8-10,18.3-23.9   c0-0.1,0.1-0.2,0.1-0.2c2.8-8.6,2.2-17.9-0.9-26.4c-5.3-14.1-15.9-41.4-20-45.6c-0.7-0.7-1.5-1.4-1.5-1.4c-3-2.7-6.9-4.2-11-4.4   c-1.4-0.1-2.9-0.1-4.5-0.1c-4.6-0.1-8.7-0.1-11.7,0.3c-8.5,1.2-14.7,6.9-18.6,11.7c-4.7,5.7-10.3,14.2-14,25.4   c-0.3,1-0.6,1.9-0.9,2.9c-4.1,14.2-3.3,29.4,1.6,43.4c4.6,13.1,11.3,28.7,21.4,45.2c17.1,28.1,35.7,45.5,48.3,57   c14.2,13.1,31.8,29.2,59.7,42.6c25.8,12.4,49.2,17,64.9,18.9c6.4,0.6,18.2,0.7,31.7-4.4c6.2-2.4,11.4-5.3,15.6-8.4   c11.1-7.9,18.9-19.8,20.9-33.2c0-0.1,0-0.2,0-0.3C389.9,330.8,389.8,326.4,389.5,322.7z"/></g></svg>
                </a>
            </div>
            <div class="w-full sm:w-auto p-3 flex justify-center items-center">
                <a href="#">
                    <svg width="52" height="56" enable-background="new 0 0 48 48" id="Layer_1" version="1.1" viewBox="0 0 48 48" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><circle cx="24" cy="24" fill="#1CB7EB" r="24"/><g><g><path d="M36.8,15.4c-0.9,0.5-2,0.8-3,0.9c1.1-0.7,1.9-1.8,2.3-3.1c-1,0.6-2.1,1.1-3.4,1.4c-1-1.1-2.3-1.8-3.8-1.8    c-2.9,0-5.3,2.5-5.3,5.7c0,0.4,0,0.9,0.1,1.3c-4.4-0.2-8.3-2.5-10.9-5.9c-0.5,0.8-0.7,1.8-0.7,2.9c0,2,0.9,3.7,2.3,4.7    c-0.9,0-1.7-0.3-2.4-0.7c0,0,0,0.1,0,0.1c0,2.7,1.8,5,4.2,5.6c-0.4,0.1-0.9,0.2-1.4,0.2c-0.3,0-0.7,0-1-0.1    c0.7,2.3,2.6,3.9,4.9,3.9c-1.8,1.5-4.1,2.4-6.5,2.4c-0.4,0-0.8,0-1.3-0.1c2.3,1.6,5.1,2.6,8.1,2.6c9.7,0,15-8.6,15-16.1    c0-0.2,0-0.5,0-0.7C35.2,17.6,36.1,16.6,36.8,15.4z" fill="#FFFFFF"/></g></g></svg>
                </a>
            </div>
        </div>
        <div class="p-3 flex justify-center">
            <p>© Hackathon, Inc. 2021. We love our users!</p>
        </div>
    </div>
@endsection

<style>
    #imagem1{
        background: url(https://blog.portinfo.com.br/wp-content/uploads/2019/08/303350-quais-tipos-de-material-escolar-nao-podem-faltar-para-o-seu-filho.jpg) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #imagem2{
        background: url(https://image.freepik.com/fotos-gratis/comida-feia-maos-de-crianca-segurando-vegetais-feios-uma-batata-em-forma-de-coracao-em-uma-mesa-de-prancha-de-madeira_152932-282.jpg) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
