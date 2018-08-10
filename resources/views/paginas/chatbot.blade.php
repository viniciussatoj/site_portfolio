@extends('layout')
@section('conteudo')

<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-12 projeto-destaque">
            <div class="row">
                <div class="col-12 destaque-principal">
                    <img class="mx-auto" src="{{ URL::to('/') }}/img/projetos/chatbot/prototipo_chatbot.png" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 projeto-titulo">
                    <h1>Meshí, Chatbot para pedidos de restaurante</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 projeto-dados">
                    <div class="dados">
                        <span class="tipo">Data: </span><p>Julho, 2018</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Prazo: </span><p>3 dias</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Plataforma: </span><p>Messenger</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Ferramentas: </span><p>Figma, ChatFuel, Draw.io</p>
                    </div>
                </div>
                <div class="col-8 projeto-descricao">
                    <h3>Introdução</h3>
                    Este exercício fez parte de um desafio com o seguinte briefing:<br />
                    Um restaurante quer criar um novo canal para seus clientes realizarem pedidos através de um meio digital. Sinta-se livre para criar o público-alvo, mercado, referências e o que mais achar necessário para embasar a sua entrega. Utilize as ferramentas que preferir e envie o resultado de forma que possamos avaliar sem a necessidade da sua apresentação.
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
            <h3>Introdução</h3>
            <p>Este foi o primeiro projeto de chatbot que eu criei e tendo apenas lido sobre o que é e possibilidades eu não fazia ideia de como começar. Decidi então que antes mesmo de definir um público alvo, mercado etc. eu deveria estudar sobre situações de uso, possibilidades e limitações dos chatbots.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Desenvolvimento do briefing</h3>
            <h5>Pesquisa</h5>
            <p>Comecei pesquisando no Medium e outros artigos qual era a situação do uso de chatbots atualmente e empresas que usam chatbot. Testei alguns para usar de referência e fiz algumas anotações de como eles usavam os componentes. Como eu não fazia ideia de como se criava um fluxo conversacional eu perguntei em alguns grupos que eu faço parte para conseguir algum norte. Levei de 3 a 4 horas nessa etapa.</p>
            <p>O próximo passo era criar um restaurante, público alvo, etc para o exercício. Ao invés disso eu fui em um restaurante que fica perto de casa, o Bentoya, e pedi para que me ajudassem com a pesquisa e se me permitiam usar o restaurante deles como modelo. E eles aceitaram em me ajudar.</p>
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/bentoya.png" />
                </div>
            <p>Pelo que eu tinha observado nos outros chatbots, a estrutura de conversação era semelhante a quando fazemos pedido por telefone. Então eu fui no bentoya na hora do almoço para observar como era essa interação deles. O que os clientes buscavam, qual a ordem que normalmente pediam os pratos, as variáveis de entrega como distância e como os cliente eram atendidos. </p>
            <p>Aguardei o horário de pico terminar e fiz uma entrevista com a dona. Com essas informações eu montei uma ficha do restaurante e personas dos seus clientes.</p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
                <h3>Material de apoio</h3>
                <h5>Ficha técnica do restaurante</h5>
                <p>
                    <b>Nome: </b>Okawari<br />
                    <b>Ramo: </b>Comida Japonesa<br />
                    <b>Público alvo: </b>Pessoas de ambos os sexos acima de 16 anos que gostem de comida oriental. (A idade é por se tratar de um serviço de delivery.) <br />
                    <b>Mercado: </b>Trabalhadores e estudantes universitários em um raio de 3km do restaurante localizado na cidade de Bauru-SP.<br />
                    <b>Carro chefe: </b>Yakisoba.<br />
                    <b>Horários de funcionamento: </b>11:30 as 13:00 e 19:30 ás 21:00<br />
                    <b>Horários de pico: </b>11:30 as 13:00 e 19:30 ás 21:00<br />
                    <b>Preocupação: </b>Tem receio que o chatbot não consiga apresentar as comidas tradicionais japonesas que eles servem.<br />
                    <b>Situação a resolver: </b>A proprietária e também atendente do restaurante já precisa cuidar do telefone e do iFood, acompanhar as mensagens da página do facebook é algo que acaba ficando de lado. O Chatbot ideal deve ser capaz de conduzir o cliente em um pedido sozinho.<br />
                </p>
                <h5>Personas</h5>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="projeto-imagem">
                        <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/persona1.png" />
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="projeto-imagem">
                        <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/persona2.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Montagem do fluxograma inicial</h3>
            <p>Com base nos pedidos que eu acompanhei eu criei um fluxograma de atendimento por telefone que seria a minha base do chatbot.</p>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="projeto-imagem">
                <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/fluxo_inicial.jpg" />
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>Nesse fluxograma eu cobria a grande maioria dos casos de atendimento. Comparei isso com os históricos de pedido por whatsapp que eu tinha feito no passado e a maior diferença era poder mandar links e imagens para mostrar as opções do cardápio. </p>
            <p>Eu separei então todas as dúvidas que surgiram no contato com o cliente e a sua ordem para montar um modelo de como seria o chatbot.</p>
        </div>
    </div>
</div>
<div class="impar"> 
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h3>Protótipo de sketch</h3>
                <p>Com o fluxograma inicial pronto, desenhei como eu imaginava que seria um pedido feito pelo messenger usando os componentes que foram passados no briefing. Tentei passar por todas as situações que eu encontrei na minha pesquisa e saiu esse resultado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/sketch1.jpg" />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/sketch2.jpg" />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/sketch3.jpg" />
            </div>
        </div>
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <p>Esse exercício foi bem útil por quê eu pude perceber as limitações que eu tinha com os componentes e que diferente do que eu pensava o cliente mesmo pouco precisaria usar texto para se comunicar.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
            <h3>Criação do fluxograma do chatbot</h3>
            <p>Com a experiência do sketch anterior eu projetei o fluxograma oficial do chatbot. Tentei usar várias ferramentas de fluxograma recomendadas para chatbots como Gliffy, xMind, botMock mas como eu não tinha familiaridade com elas, estavam mais me atrasando que ajudando. Voltei para o draw.io e comecei a criar o fluxograma que eventualmente virou isso:</p>
        </div>
        <div class="col-12">
            <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/Chatbot-Meshi.png" />
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>Eu não usei palavras gatilho para pular para seções diferentes do fluxo por não saber as limitações da ferramenta de prototipação. Nessa etapa eu ainda não me preocupei com a persona do chatbot, meu foco estava em validar o fluxo.</p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h3>Validação e criação do prototipo</h3>
                <p>
                    Levei este fluxo ao Bentoya para validar se eu não deixei passar nenhuma situação comum. Validado eu criei uma persona para o bot com base no próprio dono do restaurante e a imagem que as pessoas tinham dele pela voz já que eu pensei que essa seria a primeira associação que os clientes fariam.<br/>
                    A persona do chatbot ficou assim:
                </p>
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/personabot.png" />
                </div>
                <p>
                    O protótipo inicialmente seria montado no Figma mas não não estava funcionando como teste de usabilidade. Faltava interação e não fazia sentido um protótipo de chatbot em que o usuário não usa texto.
                    Perguntei a um colega que me indicou o ChatFuel para prototipação interativa. Eu achei um tanto limitado as opções de customização dele, mas para um protótipo ele funcionava surpreendentemente bem.
                </p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12  secao-texto">
                <div class="projeto-imagem">
                    <img class="img-100" src="{{ URL::to('/') }}/img/projetos/chatbot/prototipo_chatbot.png" />
                </div>
                <p>Fiz a página do facebook <b><a href="https://www.facebook.com/Okawari-2029434220420978">“Okawari”</a></b> e montei um protótipo interagível do chatbot que pode ser acessado nesse <b><a href="http://m.me/2029434220420978">link.</b></a></p>
                <div class="projeto-imagem">
                    <img src="{{ URL::to('/') }}/img/projetos/chatbot/chatbot-messenger.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Considerações finais</h3>
            <p>Gostei do resultado e acho que poderia ser um ponto de início válido para a criação de um chatbot real mas lamento não ter conseguido validar melhor a aceitação da personalidade do bot. Também sinto que poderia ter feito mais validação com o usuário se tivesse tempo.</p>
            <p>Em uma segunda versão deste projeto eu daria mais atenção a ferramenta de criação do fluxo conversacional. Acabei gastando tempo demais brigando com ela por não ser feita pra isso.</p>
        </div>
    </div>
</div>
@endsection