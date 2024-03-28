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

    <section class="projects">
        <div class="projects__header">
            <spam class="title">Conheça alguns dos meus projetos</spam>
            <spam class="sub-title">It is a long established fact that a reader will be distracted by the readable
                content of a page when looking at its layout. </spam>
        </div>
        <div class="projects__content">
            <div class="project">
                <spam class="title">Projeto 1</spam>
                <button> Acesse o repositorio</button>
            </div>
            <div class="project">
                <spam class="title">Projeto 2</spam>
                <button> Acesse o repositorio</button>
            </div>
            <div class="project">
                <spam class="title">Projeto 3</spam>
                <button> Acesse o repositorio</button>
            </div>
            <div class="project">
                <spam class="title">Projeto 4</spam>
                <button> Acesse o repositorio</button>
            </div>
            <div class="project">
                <spam class="title">Projeto 5</spam>
                <button> Acesse o repositorio</button>
            </div>
            <div class="project">
                <spam class="title">Projeto 6</spam>
                <button> Acesse o repositorio</button>
            </div>

        </div>
    </section>

    <section class="storyline">
        <div class="storyline__header">
            <span class="tittle">
                Conheça um pouco mais das minhas experiencias
            </span>
            <div class="storyline__curriculo">
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem placeat maxime tempore ipsa
                    fuga! Optio porro cumque quisquam, rem temporibus voluptatem fuga error voluptas repudiandae
                </span>
                <a href="">Acesse meu Curriculo!</a>
            </div>
        </div>

        <div class="storyline__content">
            <div class="experiencia">
                <span class="subtittle"> 1. Experiencia</span>
                <span class="descricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat laboriosam
                    delectus debitis cupiditate itaque.</span>
            </div>
            <div class="experiencia">
                <span class="subtittle"> 2. Experiencia</span>
                <span class="descricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat laboriosam
                    delectus debitis cupiditate itaque.</span>
            </div>
            <div class="experiencia">
                <span class="subtittle"> 3. Experiencia</span>
                <span class="descricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat laboriosam
                    delectus debitis cupiditate itaque.</span>
            </div>
            <div class="experiencia">
                <span class="subtittle"> 4. Experiencia</span>
                <span class="descricao">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat laboriosam
                    delectus debitis cupiditate itaque.</span>
            </div>
        </div>
    </section>

    <section class="feedbacks">
        <div class="feedbacks__header">
            <span class="tittle">Confira alguns feedbacks de clientes e empresas que ja passei</span>
            <span class="subtittle">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum est vel repellat
                sint vitae qui quia omnis culpa sequi. amet consectetur adipisicing elit. Harum est vel repellat
                sint vitae qui quia omnis culpa sequi</span>
        </div>
        <div class="feedbacks__content">

        </div>
    </section>

    <section class="contact">
        <div class="contact__header">
            <span class="tittle">Preencha o formulário abaixo</span>
            <span class="subtittle">Deixando o seu feedback por algum serviço prestado,ou preencha descrevendo suas
                necessidas, e iremos entrar em contato para realizar o seu orçamento</span>
        </div>

        <div class="contact__form">
            <form action="#">
                <div class="input-group">
                    <div class="group-form">
                        <input type="text" name="nome" id="nome" placeholder="Informe seu nome">
                        <input type="text" name="empresa_cliente" id="empresa_cliente"
                            placeholder="Nome da sua empresa ou seu nome completo">
                    </div>
                </div>
                <div class="group-form">
                    <textarea name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Digite sua mensagem aqui"></textarea>
                </div>
                <div class="group-form">
                    <label for="avaliacao" class="rating-label">Deixe aqui sua avaliação</label>
                    <fieldset class="rating">
                        <input type="radio" id="star1" name="rating" value="1"><label
                            for="star1"></label>
                        <input type="radio" id="star2" name="rating" value="2"><label
                            for="star2"></label>
                        <input type="radio" id="star3" name="rating" value="3"><label
                            for="star3"></label>
                        <input type="radio" id="star4" name="rating" value="4"><label
                            for="star4"></label>
                        <input type="radio" id="star5" name="rating" value="5"><label
                            for="star5"></label>
                    </fieldset>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>

    </section>
    <footer>
        <div class="footer__content">
            <span class="title">Portfolio Profissional</span>
            <div class="footer__contacts">
                <li>
                    <img src="" class="fa fa-solid fa-phone" alt="">
                    <span>(11)95237-3595</span>
                </li>
                <li>
                    <img src="" alt="" class="fa fa-regular fa-envelope">
                    <span>leandro.ramos.silva@gmail.com</span>
                </li>
                <li>
                    <img src="" alt="" class="fa fa-brands fa-linkedin-in">
                    <span>linkedin.com/leandro-silva</span>
                </li>
            </div>
            <a href="#">Entre em contato e saiba mais!</a>
        </div>

        <div class="footer__menu">
            <a href="">SOBRE MIM</a>
            <a href="">TECNOLOGIAS</a>
            <a href="">PROJETOS</a>
            <a href="">EXPERIENCIAS</a>
            <a href="">FEEDBACKS</a>
        </div>
        {{-- <span>Direitos reservados - Leandro Ramos Silva @2024</span> --}}


    </footer>


</body>

</html>
