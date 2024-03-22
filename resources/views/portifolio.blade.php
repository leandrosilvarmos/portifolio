<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title></title>
</head>

<body>
    <div class="navigation">
        <nav>
            <ul class="navigation-header">
                <li><a href="#">APRESENTAÇÃO</a></li>
                <li><a href="#">TECNOLOGIAS</a></li>
                <li><a href="#">PROJETOS</a></li>
                <li><a href="#">EXPERIENCIAS</a></li>
                <li><a href="#">FEEDBACKS</a></li>
            </ul>
        </nav>

        <div class="social">
            <div class="social-content">
                <a href="" class="social-content image">
                    <img src="" class="fa fa-brands fa-github" alt="">
                    <span class="text-title"> Projetos</span>
                    <spam class="text-subtitle">Conheça alguns projetos ja aplicados é em produção.
                    </spam>
                </a>
            </div>
            <div class="social-content">
                <a href="" class="social-content image">
                    <img src="" class="fa fa-solid fa-comments-dollar" alt="">
                    <span class="text-title">Orçamentos</span>
                    <spam class="text-subtitle">Faça parte da minha network e assim podemos trocar
                        vivencias e experiencias.
                    </spam>
                </a>
            </div>
            <div class="social-content">
                <a href="" class="social-content image">
                    <img src="" class="fa fa-brands fa-linkedin-in" alt="">
                    <span class="text-title">Rede de Contatos</span>
                    <spam class="text-subtitle">Preencha o formulário com suas necessidades, assim
                        podemos te passar um orçamento qualificado.
                        elit.</spam>
                </a>
            </div>
        </div>

        <section class="about-me">
            <div class="about-me image"><img src="{{ asset('images/foto-perfil.png') }}" alt="imagem pessoal"></div>
            <div class="about-me content">
                <spam class="text-title">Leandro ramos Silva
                    <p> Desenvolvedor Web Front e Back End</p>
                </spam>
                <spam class="text-subtitle">Contrary to popular belief, Lorem Ipsum is not simply
                    random text. It has roots in a piece of classical Latin literature from 45
                    BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                    in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                    and going through the cites of the word in classical literature, discovered the undoubtable source.
                </spam>
            </div>

        </section>
    </div>

    <section class="tecnologias">
        <div class="tecnologias__header">
            <spam class="text-title"> Linguagens e Frameworks</spam>
            <spam class="text-subtitle">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. </spam>
        </div>

        <div class="tecnologias__content">
            <div class="display one">
                <img src="" class="fa fa-brands fa-github" alt="">
                <span class="text-title">Laravel</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
            </div>
            <div class="display two">
                <img src="" class="fa fa-brands fa-github" alt="">
                <span class="text-title">Laravel</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
            </div>
            <div class="display three">
                <img src="" class="fa fa-brands fa-github" alt="">
                <span class="text-title">Laravel</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
            </div>
            <div class="display for">
                <img src="" class="fa fa-brands fa-github" alt="">
                <span class="text-title">Laravel</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
                <span class="text-subtitle"> - Lorem ipsum dolor sit amet consectetur.</span>
            </div>
        </div>
    </section>


</body>

</html>
