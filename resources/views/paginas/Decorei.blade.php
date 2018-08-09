@extends('layout')
@section('conteudo')

<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-12 projeto-destaque">
            <div class="row">
                <div class="col-12 destaque-principal">
                    <img class="mx-auto" src="{{ URL::to('/') }}/img/projetos/decorei/Decorei-capa.png" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 projeto-titulo">
                    <h1>Decorei - Dashboard de gerenciamento de projetos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 projeto-dados">
                    <div class="dados">
                        <span class="tipo">Data: </span><p>Julho, 2018, 2 dias</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Prazo: </span><p>2 dias</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Plataforma: </span><p>Desktop, Tablet</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Ferramentas: </span><p>Ideação, Fluxogramas, Fluxo de usuário, User Interface, Pesquisa de similares</p>
                    </div>
                </div>
                <div class="col-8 projeto-descricao">
                    <h3>Desafio</h3>
                    <p>Criar um dashboard que permita que o CEO da empresa visualize todos os projetos sendo desenvolvidos, o estado do projeto, o responsável do projeto e a equipe disponível.</p>
                </div>
            </div>
            <div class="divisor-linha"></div>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h4>Briefing</h4>
                <p>A CEO da Decorei tem dificuldade para visualizar todos os projetos que a empresa possui, em qual fase eles estão, qual é a equipe que está executando e qual seu seu prazo de conclusão.</p>
                <p>A empresa está desenvolvendo 30 projetos atualmente, cada um com seu encarregado e sua própria equipe de arquitetos e ter conheicmento de todos tem se mostrado um desafio.</p>
                <p>Existem dois problemas em particular que a empresa pretende resolver com esse dashboard:</p>
                <ol>
                    <li>
                        <b>Alocação de equipes</b><br />
                        <p>Ela não não sabe ao certo em quantos projetos ao mesmo tempo uma pessoa está trabalhando, o que acarreta em má distribuição do volume de trabalho;</p>
                    </li>
                    <li>
                        <b>Gestão dos prazos do projeto</b><br />
                        <p>Não consegue saber se o projeto está atrasado ou não sem perguntar para alguém.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h4>Arquitetura de Informação</h4>
            <p>Meu primeiro passo foi estuturar a relação entre projetos, arquitetos e líderes de projeto para entender quais dados são relevantes para serem exibidos e como eles se apoiam. Nessa etapa teoria dos conjuntos me foi muito útil para estabeler essa relação.</p>
            <p>Como era relativamente simples eu usei papel e caneta mesmo e cheguei nesse esquema:</p>
            <div class="col-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/arquitetura.jpg" />
                </div>
            </div>
            <p>O segundo passo foi definir um escopo das informações apresentadas. Um dashboard deve funcionar como um overview da situação, mostrar mais informação que o necessário só atrapalha o discernimento do que é realmente importante.</p>
            <p>Como equipes são organizações efêmeras decidi que não seria necessário uma seção específica para elas já que não é necessário um ihstórico de performances de uma equipe uma vez que raramente elas se organizariam no mesmo padrão.</p>
            <div class="col-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/timeline.jpg" />
                </div>
            </div>
            <p>A posição de destaque ficaria então com os projetos e secundária para os funcionários.</p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
                <h4>Wireframes</h4>
                <h5>Pesquisa de referências</h5>
                <p>Antes de começar os sketches eu fiz uma pesquisa de dashboards. Eu tinha uma ideia de como eu gostaria que ficasse organizado mas queria saber quais componentes poderiam apresentar essas informações melhor.</p>
                <h5>Sketches</h5>
                <p>Com as referências em dias fiz alguns sketches simples dos componentes com as suas informações preenchidas.</p>
            </div>
        </div>
        <div class="row projeto justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/elementos.jpg" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/elementos-2.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h4>Protótipo de média fidelidade</h4>
            <p>Os primeiros protótipos eu fiz em grayscale para manter o foco na diagramação da página e testar quais soluções funcionavam.</p>
            <div class="col-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/grayscale.png" />
                </div>
            </div>
            <p>Nessa fase de prototipação eu mudei muito do que eu esperava que fosse a versão final conforme eu fui percebendo algumas funções extras que eu poderia utiilizar ou necessidades que não estavam sendo atendidas.</p>
            <p>O protótipo foi desenvolvido usando símbolos para economizar tempo na versão final. Eu só atualizei os símbolos gradativamente até se tornar o prtótipo de alta fidelidade evitando retrabalho.</p>
            <div class="col-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/grayscale-final.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="impar"> 
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h4>Protótipo Final</h4>
                <h5>Projetos</h5>
                <p>O protótipo ficou dessa forma:</p>
            </div>
            <div class="col-12">
                <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/projeto_final.png" />
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <p>Eu separei os projetos de acordo com a fase que eles se encontram com o prazo e avatar do gerente de projeto em destaque. Cada fase está organizada por ordem de entrega e os projetos com prazo vencido em destaque vermelho no topo.<br/>
                Também deixei um campo de busca no canto superior para ajudar a navegação. Com 30 projetos é simples encontrar o que se quer mas conforme esse número crescer ficará cada vez mais trabalhoso.</p>
                <div class="col-12">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/projetos.png" />
                </div>
                <p>Ao deixar em hover em um card, ele vai mostrar uma prévia do projeto sem precisar abrir a página individual do mesmo.</p>
                <p>Em cada card de projeto eu deixei um ícone para "pinar" o projeto e compará-los. Ao pinar um projeto ele vai abrir uma seção extra com mais detalhes como prazos de entrega, coordenador de projeto, equipe e empresa contratante.</p>
                <div class="col-12">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/pinados.png" />
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h5>Funcionários</h5>
                <p>Para os funcionários eu julguei que o mais importante para a gerência fosse a quantidade de projetos que cada um está desenvolvendo e o cargo de cada um.</p>
                <div class="col-12">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/funcionarios.png" />
                </div>
                <p>Dividi eles por quantidade de projetos e organizei por order de hierarquia para tornar mais fácil a visualização. No hover o dashboard apresenta um pop-up com os projetos ativos do funcionário e e seus prazos de entrega.</p>
                <div class="col-12">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/decorei/funcionario_hover.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
            <h4>Considerações Finais</h4>
            <p>O mais desafiador neste projeto foi fazer um dashboard com pouquíssima informação no briefing. Como eu só tinha os requisitos básicos, deduzir o que é informação prioritária para ser mostrada na dashbord e o que não é foi um passo fundamental.</p>
            <p>Em uma continuação deste projeto eu usaria este protótipo como base de pesquisa de usabiliadde para criar a versão 2.0 e as páginas individuais de projeto e funcionários que não foram encomendadas nessa rodada.</p>
        </div>
    </div>
</div>
@endsection