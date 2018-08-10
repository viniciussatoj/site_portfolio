@extends('layout')
@section('conteudo')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-9 ">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img class="foto_pessoal" src="{{ URL::to('/') }}/img/gerais/perfil.jpg" />
                        </div>
                        <div class="col-md-6 col-sm-12 descricao_pessoal">
                            <p class="paragrafo_descricao">
                                Olá, meu nome é Vinicius, sou designer pelo curso de <span class="destaque-negrito">Design da UNESP Bauru</span> com foco em <span class="destaque-negrito">UX/UI.</span>
                            </p>
                            <p class="paragrafo_descricao">
                                Durante a faculdade eu atuei na organização de do Interdesigners, evento regional para estudantes de design e o BUG - Bauru United for Gamers, evento focado na área acadêmica e mercado de jogos da região.
                            </p>
                            <p class="paragrafo_descricao">
                                Participei por 4 anos do LTIA - Laboratório de Tecnologia da Informação Aplicada onde eu comecei atuando como Game Designer em projetos pessoais com a equipe e eventualmente migrei para projetos internos encomendados pela Motorola e trabalhei com Motion e User Interface.
                            </p>
                            <p class="paragrafo_descricao">
                                Atualmente eu tenho me focado nas áreas de <span class="destaque-negrito">UX, Product Design e Service Design</span> e estou buscando oportunidades de atuação na área.
                            </p>
                            <p class="paragrafo_social">
                            Eu estou sempre aberto a projetos de cunho social, precisando de um designer ou programador me manda um mensagem :)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection