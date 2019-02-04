@extends('layout')
@section('conteudo')

<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-9 col-sm-12 projeto-destaque">
            <div class="row">
                <div class="col-12 destaque-principal">
                    <img class="mx-auto" src="../img/projetos/netshoes/netshoes-capa.jpg" />
                </div>
            </div>
            <div class="row">
                <div class="col-12 projeto-titulo">
                    <h1>Netshoes, aprimoramento do funil de compras</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-4 projeto-dados">
                    <div class="dados">
                        <span class="tipo">Data: </span><p>Outubro, 2018</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Plataforma: </span><p>Desktop</p>
                    </div>
                    <div class="dados">
                        <span class="tipo">Ferramentas: </span><p>Figma, Sketch</p>
                    </div>
                </div>
                <div class="col-8 projeto-descricao">
                    <h3>Desafio</h3>
                    A Netshoes estava procurando uma maneira de melhorar a taxa de conversão do seu funil evitando grandes mudanças no fluxo de usuários. A solução que eu cheguei foram pequenas alterações na interface da página de carrinho para incentivar o upselling do usuário final.
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
                <h3>Diagnóstico inicial</h3>
                <p>Meu primeiro passo foi fazer um reconhecimento rápido das etapas do funil de vendas disponíveis no site da netshoes. Eu encontrei uma possível brecha para melhorar na maneira como os itens do carrinho em promoção estão sendo apresentados e incentivar o cliente a completar a compra.
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Promoções incompletas</h3>
            <h5>Leve 4 peças por R$99</h5>
            <p>O primeiro problema que surge nesse tipo de promoção é que o usuário nem sempre encontra a quantidade de itens para ativar a promoção que ele deseja e precisa "garimpar" a página de promoções por outros itens. Nesse processo eu fiz a suposição de que deve gerar alguns carrinhos abandonados por clientes indecisos que nunca mais voltam para completar a compra ou voltam após a promoção ter expirado.</p>
        </div>
        <div class="col-12">
            <div class="projeto-imagem">
                <img class="img-100" src="../img/projetos/netshoes/carrinho_original.png" />
                <div class="legenda-imagem" >O app veio praticamente sem maneira de navegar entre as histórias apresentadas.</div>
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>O segundo ponto é que o site só confirma o valor descontado no processo final de pagamento. Eu lembro que eu não fiz a minha primeira compra na netshoes por achar que não tinha sido aplicado o desconto e já tive que avisar as pessoas pra quem eu recomendo o site.<br/>
            <p>A minha hipótese então era que se conseguir melhorar a apresentação do preço, valor economizado e status das promoções ativas eu conseguiria aumentar a conversão para a próxima etapa.</p>
        </div>
    </div>
</div>
<div class="impar">
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
                <h3>Definindo pain points</h3>
                <h5>Análise do layout atual</h5>
                <p>Nessa etapa eu defini quais eram os problemas de layout que causaram as dificuldades que eu encontrei na etapa anterior. É claro que o layout do carrinho não é toda a causa, mas foi o que eu julguei que fosse possível ser alterado no escopo do projeto e que os resultados pudessem ser medidos com objetividade</p>
            </div>
            <div class="col-12">
                <div class="projeto-imagem">
                    <img class="img-100" src="../img/projetos/netshoes/problemas_layout.jpg" />
                    <div class="legenda-imagem" >O app veio praticamente sem maneira de navegar entre as histórias apresentadas.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <h3>Alterações de layout</h3>
            <p>As labels de promoção do carrinho não estavam facilmente identificaveis por usar a mesma cor para todas e não oferecer nenhum outro meio identificação.</p>
            <p>Eu agrupei as promoções do mesmo tipo e coloquei a coluna de promoções para o fundo da linha, o que me deu mais espaço para trabalhar melhor sugestões. Essas sugestões podem vir baseadas no histórico de visualização do usuário e o que ele adicionou de fato no carrinho.</p>
        </div>
        <div class="col-12">
            <div class="projeto-imagem">
                <img class="img-100" src="../img/projetos/netshoes/Desktop_modificacao_incompleto2.jpg" />
                <div class="legenda-imagem" >O app veio praticamente sem maneira de navegar entre as histórias apresentadas.</div>
            </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
            <p>junto com o label da promoção eu tambem deixei um espaço para o sistema informar quantas peças faltam para completar a promoção em questão.</p>
            <p>Pensei que seria interessante um botão "adicionar ao carrinho" nos itens sugeridos mas praticamente todos os itens a venda da netshoes possuem numeração, isso me impede de deixar que o usuário adicione um produto no carrinho sem passos adicionais então eu resolvi deixar isso como um item para estudo no backlog e deixei de fora dessa entrega para manter-se dentro do escopo. </p>
        </div>
    </div>
</div>
<div class="impar"> 
    <div class="container">
        <div class="row projeto justify-content-center">
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <h3>Promoção ativada</h3>
            </div>
            <div class="col-12">
                <img class="img-fluid" src="../img/projetos/netshoes/Desktop_modificacao_completo.jpg" />
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 secao-texto">
                <p>Quando a promoção for ativada as sugestões são removidas e o valor da promoção é exibido para certificar o usuário de que foi ativada.</p>
                <p>Optei por deixar os preços originais em cada peça como forma de incentivar a compra da promoção.</p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row projeto justify-content-center">
        <div class="col-lg-9 col-md-12 col-sm-12  secao-texto">
            <h3>Conclusão</h3>
            <p>Antes de implementar essa solução faltou uma rodada de testes de usabilidade para testar se o novo layout está mais intuitivo e principalmente sobre as sugestões de novos itens para completar a promoção que eu gostaria de ter certeza de que as informações que o usuários gostaria de ver estão ali.</p>
            <p> Pós implementaçao eu faria testes A/B para checar a eficácia da nova solução e heatmaps para saber se o novo posicionamento dos itens do carrinho estão tendo o destaque esperado.</p>
        </div>
    </div>
</div>
@endsection