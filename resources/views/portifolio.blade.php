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
                <a href="https://github.com/leandrosilvarmos" class="social-content image">
                    <img src="" class="fa fa-brands fa-github" alt="">
                    <span class="tittle"> Projetos</span>
                    <spam class="subtittle">Conheça alguns projetos ja aplicados é em produção.
                    </spam>
                </a>
            </div>
            <div class="social-content">
                <a href="" class="social-content image">
                    <img src="" class="fa fa-solid fa-comments-dollar" alt="">
                    <span class="tittle">Orçamentos</span>
                    <spam class="subtittle">Faça parte da minha network e assim podemos trocar
                        vivencias e experiencias.
                    </spam>
                </a>
            </div>
            <div class="social-content">
                <a href="https://www.linkedin.com/in/leandro-ramos-silva/" class="social-content image">
                    <img src="" class="fa fa-brands fa-linkedin-in" alt="">
                    <span class="tittle">Rede de Contatos</span>
                    <spam class="subtittle">Preencha o formulário com suas necessidades, assim
                        podemos te passar um orçamento qualificado.
                    </spam>
                </a>
            </div>
        </div>

        <section class="about-me">
            <div class="about-me image"><img src="{{ asset('images/foto-perfil.png') }}" alt="imagem pessoal"></div>
            <div class="about-me content">
                <spam class="tittle">Leandro Ramos Silva
                    <p> Desenvolvedor Web Front e Back End</p>
                </spam>
                <spam class="subtittle">Profissional experiente há 5 anos como Analista de Sistemas, especializado em
                    CRM’s,
                    promagação Back e Front-End e Analista de Dados. Contribuo para o alcance de metas empresariais,
                    desenvolvendo automações e
                    integrações para aprimorar processos comerciais e estratégias de marketing.
                </spam>
            </div>

        </section>
    </div>

    <section class="tecnologias">
        <div class="tecnologias__header">
            <spam class="tittle"> Linguagens e Frameworks</spam>
            <spam class="subtittle">Essas são algumas das minhas especialidades que atuo e realizo os projetos dos meus
                clientes </spam>
        </div>

        <div class="tecnologias__content">
            <div class="display one">
                <img src="" class="fa fa-brands fa-laravel alt="">
                <span class=" tittle">Laravel</span>
                <span class="subtittle"> - Criação de sistemas para empresas</span>
                <span class="subtittle"> - Integração do seu site com outros sistemas ou aplicações já prontos</span>
                <span class="subtittle"> - Manutenção de rotina em sistemas, e inclusão de novas funcionalidades ao seu
                    criterio.</span>
            </div>
            <div class="display two">
                <img src="" class="fa fa-brands fa-node-js" alt="">
                <span class="tittle">Java Script</span>
                <span class="subtittle"> - Aplicação de novas funcionalidades no seu site</span>
                <span class="subtittle"> - Criação de novas regras e manutenção em possíveis erros do seu site</span>
                <span class="subtittle"> - Adequação do visual da sua pagina, deixando ele mais atraente e mais
                    personalizado.</span>
            </div>
            <div class="display three">
                <img src="" class="fa fa-solid fa-database" alt="">
                <span class="tittle">MySql / Oracle</span>
                <span class="subtittle"> - Gerenciamentos dos dados da sua aplicação e armazenamento com
                    segurança</span>
                <span class="subtittle"> - Análise e criação de novos relatórios com os dados presente em seu
                    sistema</span>
                <span class="subtittle"> - Manutenção de regras de négocio existentes e inclusão de novas conforme
                    necessario.</span>
            </div>

            <div class="display for">
                <img src="" class="fa fa-solid fa-people-group" alt="">
                <span class="tittle">Crm's</span>
                <span class="subtittle"> - Atuação em Crm's para captura de novos leads e melhorar a qualificação dos
                    mesmos</span>
                <span class="subtittle"> - Análise e consultoria do seu négocios para melhorar as regras de négocio
                    existentes </span>
                <span class="subtittle"> - Atuação em novas campanhas de marketing nas redes socias para geração de
                    leads.</span>
            </div>
            <div class="display five">
                <img src="" class="fa fa-brands fa-wordpress-simple" alt="">
                <span class="tittle">Wordpress</span>
                <span class="subtittle"> - Criação de Landing pages para sua loja, comercio ou produto</span>
                <span class="subtittle"> - Criação de blogs individuais personalizados de acordo com a sua
                    necessidade</span>
                <span class="subtittle"> - Manutenção do seu site e integração do seu site com outras plataformas, como
                    facebook e instagram. </span>
            </div>
        </div>
    </section>

    <section class="projects">
        <div class="projects__header">
            <spam class="tittle">Conheça alguns dos meus projetos</spam>
            <spam class="subtittle">Abaixo você pode conferir alguns dos meus projetos,
                que já estão em produção e outros que estão em andamento para conher melhor o meu trabalho. </spam>
        </div>
        <div class="projects__content">
            <div class="project one">
                <spam class="tittle">DecFusion - Ecommerce</spam>
                <a href="https://github.com/leandrosilvarmos/decFusion"><button> Acesse para saber mais!</button></a>

            </div>
            <div class="project two">
                <spam class="tittle">Dashborad Analytics</spam>
                <a href="https://analytics.zoho.com/open-view/1439015000030043522"><button> Acesse para saber
                        mais!</button></a>
            </div>
            <div class="project three">
                <spam class="tittle">Dashboard comercial</spam>
                <a href="https://analytics.zoho.com/open-view/1439015000013892008"><button> Acesse para saber
                        mais!</button></a>
            </div>
            <div class="project for">
                <spam class="tittle">Projetos para um Hospital</spam>
                <a href="https://github.com/leandrosilvarmos/hesapfiles">
                    <button> Acesse para saber mais!</button>
                </a>

            </div>
            <div class="project five">
                <spam class="tittle">Hamburgueria</spam>
                <button> Acesse para saber mais!</button>
            </div>
            <div class="project six">
                <spam class="tittle">Montagem de PC's</spam>
                <button> Acesse para saber mais!</button>
            </div>

        </div>
    </section>

    <section class="storyline">
        <div class="storyline__header">
            <span class="tittle">
                Conheça um pouco mais das minhas experiencias!
            </span>
            <div class="storyline__curriculo">
                <span class="tittle">Abaixo você pode acessar meu currículo profissional e saber mais da minha
                    trajetoria profissional,
                    podendo assim me informar sobre vagas am aberto na sua empresa, ou me indicar para algum recrutador.
                </span>
                <a href="https://drive.google.com/file/d/1_wnVLo7gEC_NezEekiz8lkEATAFm_0km/view?usp=drive_link">Acesse
                    meu Curriculo!</a>
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
            <span class="tittle">Portfolio Profissional</span>
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
