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
                                Olá, meu nome é Vinicius, sou designer formado pelo curso de <span class="destaque-negrito">Design da UNESP Bauru</span> com foco em <span class="destaque-negrito">design digital.</span>
                            </p>
                            <p class="paragrafo_descricao">
                                Durante a faculdade eu participei da organização de eventos estudantis regionais de design e fomentação acadêmica de jogos.
                                Participei por 4 anos do LTIA - Laboratório de Tecnologia da Informação Aplicada onde eu comecei atuando como Game Designer em projetos pessoais com a equipe e eventualmente migrei para projetos internos encomendados pela Motorola e trabalhei com Motion e User Interface.
                            </p>
                            <p class="paragrafo_descricao">
                                Profissionalmente eu já atuei projetando desde landing pages, aplicativos e ERPs completos para bancos, companhias telefônicas e o governo do estado de SP.
                                Atualmente eu tenho me focado nas áreas de <span class="destaque-negrito">UX e Product Design</span> e estou buscando oportunidades de atuação na área.
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