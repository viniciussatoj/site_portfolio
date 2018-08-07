@extends('layout')
@section('conteudo')

<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-12 projeto-destaque">
            <div class="row">
                <div class="col-12 destaque-principal">
                    <img class="mx-auto" src="../img/projetos/imobiliaria_canal/header-ImobiliariaCanal.png" />
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
                        <span class="tipo">Data: </span><p>Julho, 2018</p>
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
            <div class="col-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="../img/projetos/imobiliaria_canal/site_canal.png" />
                    <div class="legenda-imagem" >O app veio praticamente sem maneira de navegar entre as histórias apresentadas.</div>
                </div>
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
            <p>O segundo passo foi definir um escopo das informações apresentadas. Um dashboard deve funcionar como um overview da situação, mostrar mais informação que o necessário só atrapalha o discernimento do que é realmente importante.</p>
            <p>Como equipes são organizações efêmeras decidi que não seria necessário uma seção específica para elas já que não é necessário um ihstórico de performances de uma equipe uma vez que raramente elas se organizariam no mesmo padrão.</p>
            <p>A posição de destaque ficaria então com os projetos e secundária para os funcionários.</p>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h5>Plano de pesquisa</h5>
            <p>Meu plano de pesquisa ficou desta forma:<p/>
            <p>
                <b>Situação problema:</b>
                A imobiliária quer melhorar o seu rendimento, mas entre a elaboração de um novo site, investir em marketing digital e organização interna eles estão perdidos sobre qual caminho seguir.
            </p>
            <p>
                <b>Objetivos:</b>
                <ul>
                    <li>Entender como funciona a empresa. Quais papeis os funcionários desempenham, como as tarefas deles se relacionam e qual o seu ponto de conto de contato com o cliente.</li>
                    <li>Descobrir se existe alguma necessidade do cliente que não está sendo atendida.</li>
                    <li>Identificar quais esforços de marketing já estão foram feitos e quais foram os resultados.</li>
                    <li>Descobrir quais expectativas dos clientes o site não está conseguindo atender.</li>
                </ul>
            </p>
            <p>
                <b>Prazo:</b> Duas semanas. Mais que isso acabaria tirando muito tempo do desenvolvimento da proposta em si.
            </p>
            <p>
                <b>Metodologia:</b> Entrevista com os funcionários e pesquisa etnográfica.<br/>
                <p>Eu escolhi esses dois métodos por quê eu não tinha nenhum conhecimento prévio de como funciona os processos internos de uma imobiliária e eu tinha medo que se eu não incluísse os funcionários ativamente no projeto além da minha solução poder se tornar incompleta, ela não teria aceitação de quem de fato usaria ela.</p>
            </p>
            <p>
                <b>Hipóteses:</b>
                <ul>
                    <li>O sistema administrativo em uso pode não suportar a integralização com as funcionalidades de um site novo.</li>
                    <li>A sobrecarga do gerente administrativo pode ser um problema organizacional ao invés de quantidade de trabalho.</li>
                    <li>Os corretores podem ter mais informação sobre o que os clientes realmente estão procurando.</li>
                    <li>O marketing digital da imobiliária não está sendo eficaz.</li>
                </ul>
            </p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
                <h4>Conduzindo a pesquisa</h4>
                <h5>Entrevistas</h5>
                <p>As entrevistas foram realizadas ao longo de dois sábados para aproveitar o menor movimento da empresa. Eu separei 20 minutos para cada funcionário e segui um roteiro de perguntas simples para me orientar durante a pesquisa:</p>
                <ol>
                    <li>Você pode se apresentar por favor?</li>
                    <li>(Se necessário)Qual a função que desempenha?</li>
                    <li>Como você desempenha essa função?</li>
                    <li>Como é o seu dia a dia?</li>
                    <li>Qual é a parte mais complicada dele?</li>
                    <li>O que a imobiliária pode fazer para te ajudar?</li>
                    <li>Alguma outra observação?</li>
                </ol>
                <div class="projeto-imagem">
                    <img class="img-80" src="../img/projetos/imobiliaria_canal/entrevista.jpg" />
                    <div class="legenda-imagem" >Foto por <a href="http://alejandroescamilla.com/index.html">Alejandro Escamilla</a></div>
                </div>
                <br/>
                <h5>Pesquisa Etnográfica</h5>
                <p>Nos dias que eu fui a imobiliária, eu separei uma mesa em que eu pudesse ter visão da função de quem eu estou observando e tentei observar todos até que eu tivesse uma boa ideia do seu trabalho. </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h4>Resultados da pesquisa</h4>
            <p>Listei os insights e informações obtidas com a pesquisa e entrevista em um trello board para facilitar a visualização e organizei por função.</p>
        </div>
        <div class="col-12">
            <div class="projeto-imagem">
                <img class="img-100" src="../img/projetos/imobiliaria_canal/trello.png" />
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>Em seguida eu usei isso para criar um fluxograma organizacional da empresa onde eu pude ilustrar visualmente as relações de trabalho, problemas que encontravam e agrupei os problemas por proximidade</p>
            <p>Com isso eu notei que <b>problemas com o site/captação de imóveis</b> e <b>dificuldades de administração interna</b> se repetiam na percepção interna da empresa:</p>
            
            <p>Com base nisso eu formulei duas propostas para os stakeholders</p>
        </div>
        <div class="col-12">
            <div class="projeto-imagem">
                <img class="img-100" src="../img/projetos/imobiliaria_canal/pros-site.png" />
            </div>
            <div class="projeto-imagem">
                <img class="img-100" src="../img/projetos/imobiliaria_canal/pros-processos.png" />
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>Eu sugeri que começássemos com a melhoria dos processos administrativos por ter um custo inicial praticamente nulo, o desenvolvimento destes processos poderia jogar luz em outras necessidades do site que nós não visualizamos ainda e o trabalho poder ser feito inteiro internamente o que simplificaria consideravelmente a nossa tarefa.</p>
            <p>Os stakeholders seguiram com a minha recomendação e pudemos começar a desenvolver o projeto de fato.</p>
        </div>
    </div>
</div>
<div class="impar"> 
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h4>Objetivos e diagnóstico do problema</h4>
                <ol>
                    <li>
                        <b>Reduzir a centralização de poder</b><br />
                        <p>O gerente administrativo da imobiliária não só gerenciava mas fazia todos os pagamentos e recebimentos dos clientes usando um sistema próprio analógico de anotações. Isso o tornava insubstituível caso ele tivesse que sair da empresa por conta de algum acidente, enfermo ou até mesmo férias.</p>
                    </li>
                    <li>
                        <b>Melhorar a transparência de informações</b><br />
                        <p>Estava difícil medir o que estava sendo feito e os resultados da imobiliária. Esperávamos resolver isso integrando todos os processos que estavam sendo registrados fisicamentes para o sistema de administração digital.</p>
                    </li>
                    <li>
                        <b>Facilitar interpretação de métricas</b><br />
                        <p>Os dados de rendimento, despesas, novos clientes, imóveis captados, etc. só eram medidos no final do mês pelo gerente administrativo com base nas suas anotações e tornava difícil a interpretação.</p>
                    </li>
                    <li>
                        <b>Padronizar tarefas</b><br />
                        <p>Parte do motivo dos funcionários não conseguirem resolver as tarefas de seus colegas de trabalho é que cada um fazia a mesma tarefa de um jeito. O resultado final é o mesmo, mas dificulta que outra pessoa ajude ou meça o progresso feito.</p>
                    </li>
                    <li>
                        <b>Criar um processo de onboarding</b><br />
                        <p>Como é comum em empresas pequenas, nunca foi criado um sistema de onboarding que foi o que resultou no problema anterior. Eu me dispus então a criar material que auxiliasse essa tarefa.</p>
                    </li>
                </ol>
            </div>
            
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h4>Aprendendo o sistema e criação de fluxogramas</h4>
                <p>Como o sistema seria pivotal em qualquer mudança no processo, comecei a aprender o funcionamento por ele. Gostaria de saber todas as funções que ele possuía para traçar os paralelos com as funções que dificuldades poderiam surgir durante a implementação.</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img class="img-fluid" src="../img/projetos/imobiliaria_canal/sistema1.png" />
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img class="img-fluid" src="../img/projetos/imobiliaria_canal/sistema2.png" />
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <p>Com a ajuda do técnico do sistema(ERP) eu aprendi a usar o sistema para fazer as tarefas da imobiliária e criei fluxogramas para cada tarefa. Validei esses fluxogramas com os funcionários do administrativo e planejamos implementar um a um os novos processos.</p>
            </div>
            <div class="col-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="../img/projetos/imobiliaria_canal/fluxogramas.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
            <h4>Implementação do projeto</h4>
            <h5>Saída de funcionário</h5>
            <p>Durante o desenvolvimento deste projeto o gerente administrativo saiu repentinamente da empresa e passamos por duas semanas de caos. Mas nós conseguimos usar isto a nosso favor.</p>
        </div>
        <div class="col-12">
            <img class="img-100" src="../img/projetos/imobiliaria_canal/saida-funcionario.png" />
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>Os outros funcionários não sabiam como ele fazia algumas tarefas de cobrança e recebimento, mas isso significa que poderíamos implementar os novos processos sem "vícios". Durante essas duas semanas nós aproveitamos para distribuir as suas tarefas para funcionários diferentes e fazer reuniões diárias para discutir e adaptar os processos até fazer sentido para a rotina da imobiliária</p>
            <h5>Integração das tarefas</h5>
            <p>Nós integramos a vistoria dos imóveis que era uma pasta física a parte e passamos o recebimento e pagamento de contas para o sistema usando TED.</p>
            <p>Isso possibilitou que cada pasta tivesse um histórico completo do imóvel e que qualquer funcionário pudesse antender qualquer cliente. Quando necessário alguma informação bastava pesquisar no seu respectivo registro</p>
            </div>
        <div class="col-8">
            <img class="img-80" src="../img/projetos/imobiliaria_canal/fluxo-repasse.png" />
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>Por fim, usando as ferramentas de gerenciamento do sistema, os proprietários podem conferir fácilmente as métricas do negócio como: imóveis alugados, contratos rescindidos, rendimentos etc.
            Reduzindo o trabalho de algumas horas para poucos minutos.</p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h4>Resultados</h4>
                <p>Com o trabalho realizado:</p>
                <ol>
                    <li>Ganhamos produtividade na padronização dos processos nós conseguimos eliminar a necessidade de contratação de um funcionário que estava planejada.</li>
                    <li>Conseguimos gerar mais métricas que podem ser utilizadas para tomar decisões futuras.</li>
                    <li>Com os fluxogramas criados agora existe uma material de apoio a onboarding de novos funcionários.</li>
                    <li>Descobrimos que é sim possível integrar o sistema administrativo com o banco de dados do site possibilitando uma eventual unificação dos bancos de dados.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection