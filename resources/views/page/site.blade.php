@extends('layout/app')

@section('content')
<header>
    <div class="header_menu">
        <h1>
            <a href="#">LEONARDO G. FRANÇA</a> 
        </h1>

        <nav class="main_header_content_menu">
            <ul>
                <li>
                    <a href="#skill" class="animate">SKILLS</a>
                </li>
                <li>
                    <a href="#about" class="animate">SOBRE</a>
                </li>
                <li>
                    <a href="#portifolio" class="animate">PORTIFÓLIO</a>
                </li>
                <li>
                    <a href="#contact" class="animate">CONTATO</a>
                </li>
                <li>
                    <a href="{{route('project.churrascometro')}}">CHURRASCOMETRO</a>
                </li>
            </ul>
        </nav>

        <nav class="main_header_content_menu_mobile">
            <ul>
                <li><span class="main_header_content_menu_mobile_obj icon-menu icon-notext"></span>
                    <ul class="main_header_content_menu_mobile_sub ds_none">
                        <li>
                            <a href="#skill" class="animate">SKILLS</a>
                        </li>
                        <li>
                            <a href="#about" class="animate">SOBRE</a>
                        </li>
                        <li>
                            <a href="#portifolio" class="animate">PORTIFÓLIO</a>
                        </li>
                        <li>
                            <a href="#contact" class="animate">CONTATO</a>
                        </li>
                        <li>
                            <a href="{{route('project.churrascometro')}}">CHURRASCOMETRO</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <section class="home">
        <article class="art_home">
            <header>
                <img src="img/leo.png" alt="Foto do Desenvolvedor Leonardo G. França" title="Foto do Desenvolvedor Leonardo G. França">
                <h1>LEONARDO G. FRANÇA</h1>
                <p class="icon-star-full"></p>
            </header>
            <h2>Desenvolvedor de Sistemas Web, Desktop e Mobile</h2>
        </article>
    </section>

    <section class="skill" id="skill">
        <header>
            <h1>SKILLS</h1>
            <p class="icon-star-full"></p>
        </header>

        <div class="skill_img">
            <article>
                <img src="img/html.png" alt="HTML5">
            </article>
            <article>
                <img src="img/css.png" alt="CSS3">
            </article>
            <article>
                <img src="img/js.png" alt="JS">
            </article>
            <article>
                <img src="img/php.png" alt="PHP">
            </article>
            <article>
                <img src="img/cSharp.png" alt="C#">
            </article>
            <article>
                <img src="img/outras.png" alt="Outras linguagens que eu estudo: Node, Bootstrap, Angular, React, Git">
            </article>
        </div>
    </section>

    <section class="about" id="about">
        <header>
            <h1>SOBRE</h1>
            <p class="icon-star-full"></p>
        </header>
        <article>
            <p>Eu sou um eterno apaixonado por tecnologia e estou sempre buscando novos conhecimentos e desafios.</p>
            <p>Adoro desenvolver sistemas ouvindo um bom e velho Rock and Roll. #BoraProgramar! :)</p>
        </article>

        <article>
            <p>Sou formado em Análise e Desenvolvimento de sistemas e estudante de diversos outros cursos online. 
                Acesse meu GitHub e conheça os meus projetos e estudos e se for desenvolvedor também fique a vontade 
                para dar dicas sobre os meus codigos e dúvidas estou à disposição ;), Segue o link: <a href="https://github.com/leofranca47" target="_blank">GitHub</a> </p>
        </article>

    </section>

    <section class="portifolio" id="portifolio">
        <header>
            <h1>PORTIFÓLIO</h1>
            <p class="icon-github"></p>
        </header>
        <article>
            <p>Conheça alguns dos meus trabalhos</p>
        </article>
        <h2>EASY CAIXA</h2>
        <div class="portifolio-img">
            <article>
                <a class="button" verify="loginEasy">
                    <img src="img/potifolio/easy_caixa/login.png" alt="Tela de login" title="Tela de login">
                </a>
                
            </article>
            <article>
                <a class="button" verify="inicialEasy">
                    <img src="img/potifolio/easy_caixa/inicialG.png" alt="Tela inicial" title="Tela inicial">
                </a>
            </article>
            <article>
                <a class="button" verify="vendaEasy">
                    <img src="img/potifolio/easy_caixa/vendaG.png" alt="Tela de venda" title="Tela de venda">
                </a>
            </article>
            <article>
                <a class="button" verify="sangriaEasy">
                    <img src="img/potifolio/easy_caixa/sangriaG.png" alt="Tela de sangria" title="Tela de sangria">
                </a>
            </article>
            <article>
                <a class="button" verify="relatorioEasy">
                    <img src="img/potifolio/easy_caixa/relátoriosG.png" alt="Tela de relátorios" title="Tela de relátorios">
                </a>
            </article>
            <article>
                <a class="button" verify="graficoEasy">
                    <img src="img/potifolio/easy_caixa/graficosG.png" alt="Tela de relátorios" title="Tela de relátorios">
                </a>
            </article>
        </div>

        <h2>PLACAR JIU JITSU</h2>
        <div class="portifolio-img">
            <article>
                <a class="button" verify="usuarioJiu">
                    <img src="img/potifolio/placar-jiujtsu/usuariosG.jpeg" alt="Tela de controle do placar" title="Tela de controle do placar">
                </a>
            </article>
            <article>
                <a class="button" verify="lutadorJiu">
                    <img src="img/potifolio/placar-jiujtsu/tela-lutadoresG.jpeg" alt="Tela de visão dos lutadores e juízes" title="Tela de visão dos lutadores e juízes">
                </a>
            </article>
        </div>
        
        <h2>Este site também faz parte dos meus projetos, 
            foi desenvolvido com HTML5, CSS3 e JQUERY. <br>Para mais projetos acesse meu GITHUB, Links abaixo :)</h2>

        <!-- modal -->
        <div class="fade">
            <div class="fade_box">
                <img id="images">
                <span class="fade_close">X</span>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <header>
            <h1>Links para Contato</h1>
            <p class="icon-star-full"></p>
        </header>
        <div class="contact_article">
            <article>
                <a href="https://www.facebook.com/leonardo.guimaraesfranca" target="_blank"><p class="icon-facebook2">Meu Facebook</p></a>
            </article>
            <article>
                <a href="https://www.instagram.com/leofranca47/?hl=pt-br" target="_blank"><p class="icon-instagram">Meu Instagram</p></a>
            </article>
            <article>
                <a href="https://github.com/leofranca47" target="_blank"><p class="icon-github">Meu GitHub</p></a>
            </article>
            <article>
                <a href="https://www.linkedin.com/in/leonardo-guimar%C3%A3es-fran%C3%A7a-3568b3108/" target="_blank"><p class="icon-linkedin">Meu Linkedin</p></a>
            </article>
        </div>
    </section>
</main>

<footer>
    
    <section class="whatsapp">
        <header>
            <h1>Meu whatsapp</h1>
        </header>
        
        <article>
            <a href="https://api.whatsapp.com/send?phone=5538988075954&text=Gostei%20do%20seu%20portif%C3%B3lio%20e%20quero%20fazer%20contato" target="_blank"><p class="icon-whatsapp">Clique aqui e me envie uma mensagem</p></a>
        </article>

    </section>

    <section class="copyright">
        <p>Copyright © Leo França 2019</p>
    </section>

</footer>
@endsection