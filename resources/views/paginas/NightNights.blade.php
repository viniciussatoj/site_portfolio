@extends('layout')
@section('conteudo')

<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-12 projeto-destaque">
            <div class="row">
                <div class="col-12 destaque-principal">
                    <img class="mx-auto" src="../img/projetos/nightnights/userinterface.png" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 projeto-titulo">
                    <h1>NightNights, aplicativo de histórias infantis</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 projeto-dados">
                    <div class="dados">
                        <span class="tipo">Data: </span><p>Março, 2018</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Plataforma: </span><p>Tablet</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Ferramentas: </span><p>Figma, Photoshop, Illustrator</p>
                    </div>
                </div>
                <div class="col-8 projeto-descricao">
                    <h3>Desafio</h3>
                    NightNight é um app de leitura de histórias infantis para tablets em que os usuários estavam tendo problema com a escolha de histórias. Meu desafio foi tornar fácil a descoberta das histórias que eles querem ler.
                </div>
            </div>
            <div class="divisor-linha"></div>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-explicacao">
                <h3>Como era</h3>
                <p>Sendo um protótipo, o app estava bem cru em questões de navegação, não havia como procurar temas, histórias específicas, autores, nada. Tudo o que o usuário poderia fazer é escolher uma história e torcer para que fosse boa.<br />O desafio então era melhorar a navegação no nosso app.</p>
                <div class="projeto-imagem">
                    <img class="img-80" src="../img/projetos/nightnights/Mini.png" />
                    <div class="legenda-imagem" >O app veio praticamente sem maneira de navegar entre as histórias apresentadas.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Feedback de usuários</h3>
            <h5>Impressão dos usuários</h5>
            <p>Foi perguntado aos usuários como eles usavam o app e chegamos em alguns feedbacks interessantes:</p>
            <div class="citacao">
                <p class="paragrafo-citacao">“I read NightNight stories all the time to my 5 year old son. We love picking out a story together, but sometimes we spend more time picking the story than actually reading it!”</p>
                <p class="paragrafo-citacao">“I wish I had a better idea of how long the stories are before picking one. Sometimes I just want a short story to read to my daughter”</p>
                <p class="paragrafo-citacao">“One day my son is into dinosaurs, the next day he’s obsessed with airplanes. I would love if there was an easier way to find stories about whatever his latest craze is.”</p>
                <p class="paragrafo-citacao">“There have been a few occasions when my 3 year old daughter didn’t like the story we picked because it was hard for her to understand, and probably meant for a 7–8 year old’s vocabulary.”</p>
                <p class="paragrafo-citacao">“Some of my friends use NightNight with their kids — we usually share recommendations since our kids are about the same age.”</p>
            </div>
            <p>Nós tiramos as seguintes hipóteses para estas questões:<br/>
            <ol>
                <li>Os usuários querem escolher a história rápido</li>
                <li>Os usuários querem saber a duração da história</li>
                <li>Os usuários querem saber sobre o quê é a história antes de lê-la</li>
                <li>Os usuários querem saber a idade recomendada da história</li>
                <li>Os usuários querem ver recomendações de seus amigos.</li>
            </ol>
            <p>Com base nisso foi feita uma pesquisa para definir qual a prioridade de cada informação.</p>
        </div>
    </div>
    <div class="row projeto justify-content-center">
        <div class="col-lg-6 secao-texto-dupla">
            <div class="projeto-imagem-esquerda">
                <img src="../img/projetos/nightnights/pesquisa.png" />
            </div>
        </div>
        <div class="col-lg-4 secao-texto-dupla">
            <p>Com isso nós percebemos que a listagem original estava totalmente errada, embora mostrar o autor fosse importante para quem criou, os pais não se importavam tanto com essa informação.<br />
Os dados dessa pesquisa foram usados posteriormente como referência de importância de cada informação para ser listada.</p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
                <h3>Definição de soluções</h3>
                <h5>How Might We</h5>
                <p>O próximo passo foi utilizar o processo “How Might We” para pensar em soluções para os problemas encontrados. Aqui eu tentei considerar as soluções em uma escala de possibilidade de implementação para determinar quais seriam utilizadas nessa iteração do app.</p>
                <div class="projeto-imagem">
                    <img class="img-80" src="../img/projetos/nightnights/howmightwe.jpeg" />
                    <div class="legenda-imagem" >No final do processo essas foram as ideias escolhidas para serem levadas em frente.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Sketch</h3>
            <p>Com base nas ideias propostas foram feitos os sketches para a UI.</p>
            <p>Uma grande inspiração da interface do NightNights foi a Netflix, a sua interface que incentiva a descoberta de novos títulos com sugestões e agrupamentos caiu como uma luva para o projeto.</p>
            <div class="projeto-imagem">
                <img src="../img/projetos/nightnights/netflix.jpeg" />
            </div>
            <p>A interface aproximada ainda traz o benefício de reduzir o estranhamento e tempo de aprendizado com a plataforma.</p>
            <p>Porém essa abordagem sozinha não resolve o problema de busca de histórias que os usuários relataram. Histórias infantis não caem tão facilmente na mesma definição de categorias como comédia, ação, drama, etc.</p>
            <p>Nós precisávamos de outra maneira de agrupar e o resultado foi o uso de tags. Uma mesma história pode ter a tag de dinossauros, aventura, princesas e piratas. Ao escolher cada uma delas o usuário pode afunilar a sua busca até encontrar o que ele deseja.</p>
            <p>Mas novamente, eu estou sobre os ombros de gigantes.</p>
            <div class="projeto-imagem">
                <img src="../img/projetos/nightnights/pinterest.png" />
            </div>
            <p>O <b>Pinterest</b> já usa um sistema de tags em suas buscas e listagens que eu poderia usar para o meu protótipo.</p>
            <p>Isso tudo me levou aos sketches das telas de navegação principais:</p>
            <div class="projeto-imagem">
                <img src="../img/projetos/nightnights/sketch.jpeg" />
            </div>
        </div>
    </div>
</div>
<div class="impar"> 
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h3>Criação de wireframes e validação</h3>
            </div>
            <div class="col-12">
                <img class="img-fluid" src="../img/projetos/nightnights/wireframes.png" />
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <p>Feito os sketches eu criei os wireframes no Figma para validação de fluxo e layout. Esses wireframes foram transformados em um protótipo e enviados para o tablet para validar com usuários se a ideia funcionava ou não.</p>
                <p>Este teste foi útil para saber se o destaque que eu estava dando para cada informação era o suficiente e se o fluxo fazia sentido para os usuários. Corrigido alguns posicionamentos e tamanho de fonte eu comecei a versão final da interface.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
            <h3>User Interface</h3>
            <p>A interface também foi criada no Figma, como eu já tinha criado a base antes para os wireframes, foi questão de identificar quais eram os elementos que iam se repetir criar símbolos deles para montar o restante das páginas.</p>
        </div>
        <div class="col-12">
            <img class="img-100" src="../img/projetos/nightnights/userinterface2.png" />
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>Por essa não ser uma versão final ainda eu não me preocupei tanto com as imagens e cards dos livros. Fiz o essencial para que eu conseguisse fazer um novo protótipo que não passasse estranhamento para o tester.</p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h3>Testes com usuários</h3>
                <p>Com esse novo protótipo em mãos fiz 6 testes seguindo o mesmo roteiro com usuários diferentes. Eu entreguei um cartão para cada com informações sobre o filho contendo:</p>
                <ol>
                    <li>Idade</li>
                    <li>Que tipo de história gostaria de ler</li>
                    <li>O que os amigos tem lido</li>
                </ol>
                <p>Pedi para que escolhessem uma história baseada nessas informações, cronometrei secretamente o tempo até a escolha de uma história e em seguida passei um questionário para avaliar se houve melhoras em relação ao layout anterior.</p>
                <ol>
                    <li>O tema do livro está claro?</li>
                    <li>A idade apropriada está clara?</li>
                    <li>A duração está clara?</li>
                    <li>As recomendações de amigos estão fáceis de visualizar?</li>
                    <li>Como você avalia a navigabilidade do app?
                        <br/>(Ótimo, Bom, Regular, Ruim, Péssimo)</li>
                </ol>
                <p>Os resultados foram os seguintes:</p>
                <div class="projeto-imagem">
                    <img class="img-100" src="../img/projetos/nightnights/resultados.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Considerações finais</h3>
            <p>De forma geral o resultado foi positivo.</p>
            <p>O novo layout conseguiu apresentar bem as informações que estavam faltando no começo do experimento mas ainda falta testes usando dados reais do programa para sanar algumas de navegabilidade como:</p>
            <ol>
                <li>Este estilo de navegação acabaria trazendo o mesmo problema do Netflix de analysis paralysis?</li>
                <li>As tags junto com categorias acaba ficando muito confuso? Será que os dois ao mesmo tempo fica redundante?</li>
                <li>Este estilo de navegação ficou mais prático, mas não foi analisado o uso de pais escolhendo histórias junto com os filhos. Talvez falte um elemento lúdico para trazer mais a atenção das crianças.</li>
            </ol>
        </div>
    </div>
</div>
@endsection