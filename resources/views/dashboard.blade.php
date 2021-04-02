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
