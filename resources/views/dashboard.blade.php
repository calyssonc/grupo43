@extends('template/template')

@section('title','Escola Index')

@section('content')
    <div id="imagem1" class="flex flex-col w-auto h-screen text-center">
        <div class="w-2/5 sm:w-1/2 h-auto p-4 sm:mt-16 ml-3 sm:ml-0">
            <span class="text-white font-bold text-3xl sm:text-5xl">Dê um level up nas suas doações</span>
        </div>
        <div class="w-2/5 sm:w-1/2 h-auto ml-3">
            <span class="text-white text-xl sm:text-3xl">Apresentação do projeto tentando vender a ideia</span>
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
            <div class="h-20 w-full sm:w-2/6 flex flex-row justify-center items-center text-center"">
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
