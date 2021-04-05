@extends('template/template')

@section('title','Login')

@section('content')

<div class="h-screen w-full flex flex-wrap">
    <div class="h-0 w-0 md:h-full md:w-1/2 flex justify-center items-center">
        <div class="hidden md:block">
            <p class="text-3xl">Seja bem-vindo devolta!</p>
            <p id="imagem1" class="h-96 w-96 mt-5"></p>
        </div>
    </div>
    <div class="w-full h-full md:h-full md:w-1/2 flex justify-center items-center">
        <div class="border-2 border-gray-300 h-auto w-5/6 p-5">
            <p class="w-full font-bold">Login</p>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all(); as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action=""{{ route('login') }}">
            @csrf

            <input class="mt-4 w-full border-gray-300" type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

            <input class="mt-2 w-full border-gray-300" type="text" name="password" id="password" placeholder="Senha" value="{{ old('password') }}" required>

            <select name="tipo" class="mt-2 w-full border-gray-300" required>
                <option value="" selected>Tipo de login</option>
                <option value="doador">Doador</option>
                <option value="escola">Escola</option>
                <option value="beneficiado">Beneficiado</option>
            </select>

            <button class="bg-blue-500 text-white w-full p-1 mt-4" type="submit" value="cadastrar" >Login</button>

            </form>

            <div class="flex flex-wrap mt-4">

                <div class="flex flex-row text-center justify-center w-full">
                    <div class="w-1/3 bg-gray-300 flex flex-nowrap justify-center items-center p-2">
                        <p id="imagem2" class="h-5 w-5"></p>
                        <p>Google</p>
                    </div>
                    <div class="w-1/3"></div>
                    <div class="w-1/3 bg-gray-300 flex flex-nowrap justify-center items-center p-2">
                        <p id="imagem3" class="h-5 w-5"></p>
                        <p class="">Facebook</p>
                    </div>
                </div>

                <div class="flex flex-row justify-center w-full mt-4">
                    <p>Esqueceu sua senha?</p>
                    <a href="{{ route("login") }}" class="text-blue-400">Login</a>
                </div>

            </div>

        </div>
    </div>
</div>

<style>
    #imagem1{
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAC6CAMAAABoQ1NAAAABPlBMVEX///8vLkE/PVZTbf7m5ub/uLgeHTU9O1OoqK06OFI0M0hraXv7+/v4+Pj19fXGxswvLEpCQFrs7Ow1M06wr7iZmKM5N06Tk55JZv5Pav5GY/7/tLR7jv6Kmv4rKj4mJTr3+P/p7P/V2/+bqf7Dyv7/vb0TES4ZFzH/u7T/6enw8v/U2f+lsf4pJkYaIzkuLDr/3d1edv5qgP60vv8/Xv5dXGnh5f9+YWza2t2Zp/65ub45QHtPZ+v/zMz/9PT/4eH/xcUtKjCBgYtEQ1N2dYCxu/6Flv5ke/6bpOUiH0JFV8lIPk6+jZJlY3ajeoFTRVSPbHXXnaEAACZoU2DnqKoAGDIWESCUlq46SrBwftmHgu7Vpcu6mNiZiublq8N5fPOokOGBh7s5O27Ks7nLoNBdVIE0N129weZBTqROTVwcurvrAAALfUlEQVR4nO2dC1fbRhbHZWwLY2xBbIMlAZIh+AEYg8EGQgIBTELbkKQhbLfbbZJ9dLvL9/8Cq9FrZjQjQ7B1BWj+5+SkdcbW6Kc7d+6dlyRJSEhISEhISEhISEhISEhISEhISEjoiapmqRB3JR6GVtqL3bSqaumdF6vrcVcmZq23u7qqaWkkTdPVxY24axSjas9VNU1J03cSC2QjHYBhA+ktJdOLtHUWBpLaXY67ajFoKYQGciJ7cVcOXBQNVbccKsFDTRoPsqVoWntlb3WR/CRdi7uCoNog731HWt9tb0i75GeLcdRKUeK4qiQVumTTkFZ7qqrvSG2io9F3IetzMHfeH+QNWc5X4yBC3rj6Zrln/70kEYzSWg2uOmdXsmlYSqUsIgdw13VVI+MNfdmFo9beEjzUNlh1+nIKy2hmwC7s6g2JQ5UWHQr6XpsKy6Bqk2ukSBn5ItSVXV1QrSIEhw4VrecNCkfKPAe6sKtlKgALw6EtwdRmTk4F1DhkSx3MRKYf8F2rVpci7egqUm+v3VPJaAyEhtK02keHbi5GsNDhs83Ze+jHudzt3zN+wjSe7+7uShurjmor1v/t+Dx6IKMfFQvHu0ujQ7aYZoUuc7Y5NXEPTb23vnrrNwev/PbwVtpYWdmw/tiy/mNjec9vSfoKBI6qmep8qGc/fOx0OqZpmAiL0aeJbd4HhoVjKlO6uQ3H5DzGsVTr6ZR6L7Bj0VdBcMipzqd6tl6/vvzw8/7+/mfEQyZLFMpWrWcnnt1D5fLtX5sgvGUtkNZqzzEOFSIwPbQcaedTFqlu6xPyI1dkXztjGUd5JroqcHCoejw4FNQ4Opf1rKf6ZQfFpmSZyuxE+SzCOnQZHFZK22VwQDSWAxSCmfsEDtRY6MgD4ZiLsA5+5+Hj0GvSC43BARCHlZqoJ+lcezycttKg8paocSwxOLS3u2xj0SHGCM9N1JN8zLo8rt8hT2pSRaLG4acs2HdoKotDi7AKvmZs8zDffcKeIxiGRY3DDy2G9ixWUAKgQydEN/5ybfOw2wpwY/F9KYo7NEo6jjtgwo6BG412HBzXNg5jQBaJHIeXqmlLhcWA3vg41FqUVXBlBWFbW1sIgetL3SSONI/Icfi33F2WCgF5qNQXUdbAVemX0/LLly//PD392GrZzuOjAY9DWvKcqcoKsl/5669OwvDqb69++zsCUv/5SrYylwYZlUaPY50c/+FKfR5pBRz5TyWtpTXt4vdsK3t0cFidHsD6DomaROBJ6wJM1BYC19TSX76e2P9CDQ8C4JDecmarCekA03CvWxdBI9XUb+yFIXDgSJ2nXvSdbOFoofWNrYOmMqkBCI7aRbh9AMw5rVndSOs33iNhUiUQHFJhMcR/aGr0tnG0EIqDGYWDwYGmrblP5yJyv7GWRTSyrS9cHJpGD9JC4ZD2dnrBCql69LNvtmkgHP/g+y9thyoOhkOSNhZ7eCrBSlnS7VrUlzyuuzSyrd81P5WmDZRqrYA4rIhsdzGt66jZaBcvAAZ8tj0YCIeuX7zhmUeX/AaLo1Acv4g4a31v5Z8v/wXxBLBpWO7j9UbbygS6nBZD9S4MDiUKlaiVFNUyiEFmMYxt96MlDg5qQpTBUYqkatSvwuDALWXb/2yV5z3I1vJ0cRz51nGy5n22zAt/9Br+UmW2vPnUcWQXjo7dD7s8HMTwQuXj5SU1aUtVvKgo48k2Y8CxhrsVC4jbYHjOg0whZ7L1evaY+BWi4koGqTQOIDHg8CMwh0fdbjG7HOdBrh44sm2JW/FSxhUeEfj+PoX5VQkMh/T6ZIEgsnBiPfUVjvPQ8PMu2OW5OJSML698KfPdKgV+FQkKhxV6bJNErBazzloHGaY7vRG3sbD3JBVL361i4FeR4HBINBGrxaQZ50EuW7Tn5/5Nft2/dfIZj1yp+HBYOsatZuErMwzU8z3p2gkqsl8lv+tVXHk6OCSCSCsbsA8/Z1k7sQt8nuXGHU8Lh+QTCWb6Tox+fOQMi2Q/T/Gj0gLHd9xfDwCHpcK2dcNfaW+q7kprR26yt3CUCw3SCRx+d8nvPe6w0v1h4JCOkXnQ3kP9mvX8itUTh+cs2Jfy+t5HjOMPGgcVpw1J4ZQgjRH0QHDYYVadWhb+rUUErUMz2gJqHKWxbPp4IDiqyDq+Uji+tOzRIbfA003wOTq82s/Wrynfof3RWiAGRJKEoyQbxtZ/0kFPuk3kqEnC0UdL5U5/ImmktSMqYU8Qjhlna8/WK5JGYFtignDcOEvDtspkW/mBLsPiKAaXLI1BShwj6QHNePu+tv7E9qH+ly7EzrOMf1pBCexZjQfHtOltYdkq+/7j18BeSdBZOFex4FDITYGnLxGQV//L/xLwDYnBkaO2wW2dIm0Z+UCpxODomylWga1OycFRaHBopMzg3pWk4HCW5wcl5wLFkoKD3UGL1Azu80oKjmme60g1gsOeScER3G3u+o5+YIoxITgUrie1eNzQZxIkBMdBCI6UOaAi5oTg4HcsNo88GZgmBEeO27HYMkwib0kIjiq3Y3F5EGfeJATH+RAcKQOHHwnBwc1YMA//UJOE4Ljhhh1YV+6CsITgGNA4WDgNp0aJxJHvsx1Nw17WgXBUb/uxMesMHkeevHPzXKqyYVkTJfsWjolnsIeJZabgDZK6cdN6/jMy41yb5w6OqalpQL0vT8aMwx7lyNwwDUbuS5Wyc5APoKzrweOgDoNyutUzpsHI/Vz5fichjaZ4rcOLug4Z/2He0h9HJBnae1Ou1N11f5AbsDWbn4xBkR43xMVBPnZZkYozZ4MmL63Lx9FYJmaBTwql447ctNwMaRfx4EBn0sWHg+1kY8YxMVu5/R7GqNtyFuw7UOXm82Ca9HhEs3IiRP274rDrdseyY5GLozwNiWPoeAchxziiBcC5oqXNCI/2Y3RG4TBMjgy/bpA0fPOYegZ4zjA1OGj2z6fPHZ05qlarczd590GBGgc2D8hMmpyTNG54KaviHzYKS8M3D8jgo0LgaHAve+5lK8DGgc1j6gYMBznPwkzM2gU24zIOwjzAgg9yFk7mLSv3D+adhMcx7/OACj4yGAd79rWl3KxXpfyQekcl79pTUMGHcoVxDDj/7NOIwTgI84AKPgq4o2XWg0lo9DZO48DmMQkVfOAcjvMegYPNWI2DMA+o4AMnLSZ7RXzAOXgv6wjn0ZswwQdOWpjlcfbwuW8esQhfHyj4qPpxWDP4kgklluHiMM0yTysK4QUezGrBsxFwzOfnecpP3v7VUB4QwQcOS4Mx+sE936pg0wj1Bvf/TZDgA4elzQD9W18UMUTh3fII5gERfOA4zGTWCt5fd+krvluTEwBvJPN9B71JYSQ/OixKGeFnIaZdvDjMoHuyUfzo0ChlhNYCEXx4q7BNylON4keHR/SjzFAABB/e8CC9Z+P9CH4UvY0nXKNYB0Dw4QUeMjlbfjiKH41Sm1EHH17gIRNDTsW47zpUkQcfXuBBBqVzs0OsfVhDiF6bnPfVjVNFDwfhtavhS7Pjlhz1Chi3oyXfqhm6jyF+XUXd17ojHtTA8XnoRoaY1Yw8EnPnJfPU/qazhvwA1WxEH5c6PW1w4DhTyT08VQBWtjo9LW/gOJFy/Cb0C2gfrBS7sYCvWXywslcPsgPHSZXd08oRR3uPR3ZPywwcJ1Z2T2uKxuLK2Q/XEL7UliJDxb+PQv4SDzkl3Kn3Olo7MgVICR6+iHXpwoEUpAqxIGrgvN8y7kqBqFAoKorinNNOntg87e/aMG4C5xQ7ha1vUa/WeeQqKqWhB/1X+wMT7WQxG5XhLwRAZB45luLQG/RsIHMwM3fTP7zT6xFA91SMW4U7vgEi2IbCCwLMHEerou0y7oZlKDDlCbkQyX59meK706GEvBKK40efFAUhISEhISEhISEhISEhISEhISEhIaFE6f+mAqb4XqiAKAAAAABJRU5ErkJggg==) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #imagem2{
        background: url(https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Google-256.png) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    #imagem3{
        background: url(https://cdn3.iconfinder.com/data/icons/capsocial-round/500/facebook-512.png) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

@endsection
