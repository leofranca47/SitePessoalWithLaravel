@extends('layout.app')

@section('cssSecom', 'styleSecom.css')

@section('content')
<header>
    <div class="header_menu">
        <h1>
            <a href="#"><img class="logo" src="../img/imgSecom/logo.webp" alt=""></a> 
        </h1>

        <nav class="main_header_content_menu">
            <ul>
                <li>
                    <a href="#skill" class="animate">HIKVISION</a>
                </li>
                <li>
                    <a href="#about" class="animate">HILOOK</a>
                </li>
            </ul>
        </nav>

        <nav class="main_header_content_menu_mobile">
            <ul>
                <li><span class="main_header_content_menu_mobile_obj icon-menu icon-notext"></span>
                    <ul class="main_header_content_menu_mobile_sub ds_none">
                        <li>
                            <a href="#skill" class="animate">HIKVISION</a>
                        </li>
                        <li>
                            <a href="#about" class="animate">HILOOK</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section class="homeSecom">
        <article class="art_home">
            <header>
                <h1>SOFTWARES</h1>
            </header>
            <iframe name="iframe_download" class="hidden"></iframe>
            <div class="container-btn">
                <a class="btn" href="{{asset('LojaSecom/HiLook.apk')}}" download="HilookSecom" target="iframe_download">Baixar App Hilook para Android</a>
                <a class="btn" href="{{asset('LojaSecom/Hik-Connect.apk')}}" download="Hik-connectSecom" target="iframe_download">Baixar App Hikvision para Android</a>
            </div>
        </article>
    </section>
</main>

<footer>
    
    <section class="whatsapp">
        <header>
            <h1>Meu whatsapp</h1>
        </header>
        
        <article>
            <a href="https://api.whatsapp.com/send?phone=5538988075954&text=Estou%20com%20duvida%20no%20app%20Hilook%20" target="_blank"><p class="icon-whatsapp">Clique aqui e me envie uma mensagem</p></a>
        </article>

    </section>

    <section class="copyright">
        <p>Copyright © Leo França 2021</p>
    </section>

</footer>
@endsection