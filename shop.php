
<?php
$page = User::userData('username');
include 'includes/menudentro.php';
include 'includes/headerir.php';
?>
<style>
 body {
	 background: #050836!important;
 }
 footer {
	     background: #000423!important;
    color: #fff;
    border-top: 1px solid #000212;

 }
 #fac b {
    color: #78c4ff!important;
}

 </style>
<div class="container white">
<div class="row">
<div class="col-md-4">
<div id="fac" style="background:#000423;border: 1px solid #000212;box-shadow: 5px 5px  #000212;border-radius:5px;color:#fff;text-align:left;margin-top:0px">
<form method="post" id="tagForm">
<input type="hidden" name="comprar" value="true">
<div id="titulao" style="color:#78c4ff;font-size:13px;">Compre aqui</div><br>
<input type="radio" name="opc" value="1"> 1 Obsidiana - R$ 4,99<br><br>
<input type="radio" name="opc" value="2" checked> 5 Obsidianas - R$ 19,99<br><br>
<input type="radio" name="opc" value="3"> 10 Obsidianas - R$ 34,99<br><br>
<div id="titulao" style="color:#78c4ff;font-size:13px;">Método de pagamento</div><br>
<input type="radio" name="metodo" value="pagseguro" checked> PagSeguro (Boleto/Cartão de crédito/Débito Online)<br><br>
<input type="radio" name="metodo" value="picpay"> PicPay (Cartão de Crédito/Crédito virtual)<br><br>
<input type="radio" name="metodo" value="paypal"> PayPal (Cartão de Crédito/Carteira Internacional)<br><br>
								
<div class="settings-buttons"><input type="submit" value="Comprar" name="account" class="submit" style="background:#050836;text-transform:uppercase;color:#78c4ff!important;border: 1px solid #000212;box-shadow: 2px 2px  #000212;"></div></form></br>
</div>
<div id="equipe" style="background:#000423;border: 1px solid #000212;box-shadow: 5px 5px  #000212;border-radius:5px;">
<strong style="color:#78c4ff;">Atenção</strong><br>
<p style="color:white;">Ao clicar em comprar você será redirecionado ao PagSeguro, PayPal ou PicPay para escolher como pagar e finalizar o pagamento.<br>Somente clique em <b style="color: #78c4ff!important;">comprar</b> caso tenha certeza de que realmente deseja prosseguir com a transação!</p> 
</div>
<div id="fac" style="background:#000423;border: 1px solid #000212;box-shadow: 5px 5px  #000212;border-radius:5px;color:#fff;text-align:left"><div id="titulao" style="color:#78c4ff;">Importante</div>
Métodos de pagamento: Boleto, Cartão de crédito e Crédito online (PicPay)<br>
<br>
Todas as compras são feitas e processadas via PagSeguro, Paypal e PicPay! Nossos Staff's jamais pedirão dados de cartão de crédito e senhas a NINGUÉM! <b>Fique seguro:</b> Não caia em golpes!<br><br>Sempre peça permissão ao dono do cartão antes de efeturar a compra! Em caso de estorno de pagamento, sua conta está sujeita a <b>banimento permanente</b>!<br><br>As <b>obsidianas</b> são entregues de forma automática pelo sistema assim que o PagSeguro ou PayPal sinalizar a transação como paga! Não é necessário comprovação por <b>staff's</b> do pagamento.<br><br>
</div></div>

<div class="col-md-8"><div id="tudao">
<div id="caixaloja">
<strong>Amante de Raros</strong><br><br><img style="float:left;padding-right:20px" src="https://ninta.org/app/tpl/skins/Ninta/images/shop2.gif"/><p>Com Obsidianas você pode comprar câmbios de <b style="color:white">gotinhas</b> para facilitar sua compra de raros dentro do Ninta!<br>Para adquirir gotas, basta entrar na loja de obsidianas e escolher a quantidade desejada. Logo após estar com o item em mãos, coloque-o em algum quarto e você apenas precisará clicar duas vezes sobre ele para que gere suas <b style="color:white">gotinhas</b>! <img src="https://ninta.org/app/tpl/skins/Ninta/images/credits/04.png"/></p></div>
<div id="caixaloja">
<strong>Caixinhas Surpresas</strong><br><br><img style="float:right;padding-left:15px;margin-top:10px" src="https://ninta.org/app/tpl/skins/Ninta/images/shop4.png"/><p>Mais uma novidade sobre as obsidianas é que elas compram <b style="color:white">Caixinhas surpresas</b>! Dentro dessas caixas você poderá achar diversos prêmios, tais como: gotinhas, emblema raro exclusivo, coleções de mobis exclusivas e até mesmo ganhar dias de vip GRÁTIS! Mas tenha coragem, elas dependem totalmente de sua sorte! Se você não ficar contente com seu prêmio, infelizmente não será possível resgatá-las.</p></div>
<div id="caixoteloja">
<strong>Seja um NINTA VIP</strong><br><br><p>Se tornando um <b>NINTA VIP</b> você adquire vários benefícios para sua conta, fique atento as vantagens: </p>
</div>

<div id="caixaloja">
<strong>Acesso a área Vip</strong><br><img src="https://ninta.org/app/tpl/skins/Ninta/images/shop7.gif" style="float:left;padding-right:10px"/><p>Quando um evento especial do <b>Ninta Hotel</b> for realizado, sua maior feição será desfrutar de toda luxuria e comodidade de uma área vip totalmente elaborada para sua recepção! Esbanje glamour com seus amigos <b>Ninta vip's</b> durante todo o evento, garantindo sempre o melhor espaço para se divertir! </p>
<img src="https://ninta.org/app/tpl/skins/Ninta/images/shop8.gif" style="position:absolute;margin-top:-15px;margin-left:25px" />
</div>
<div id="caixaloja">
<strong>Vantagens em jogos</strong><br><br><img src="https://ninta.org/app/tpl/skins/Ninta/images/AGC01.gif" style="float:left;padding-right:10px"/><p>Caminhos alternativos que te ajudarão passar com mais facilidade os jogos oficiais do Ninta Hotel!</p><p>Semanais sem restrições! Jogue os semanais quantas vezes quiser, mesmo que já tenha pego o emblema!</p><p>Ninta Vip's Ganham mais prêmios ao completar jogos oficiais!</p><p><b>As Vantagens não incluem jogos referêntes a Gincana!</b></p>
</div>
<div id="caixaloja">
<strong>Mobílias exclusivas</strong><br><br><p>O usuário VIP tem acesso a mobílias <b>colecionáveis</b>, wireds <b>exclusivos</b> e portas que apenas Nintanos Vip's podem <b>passar!</b></p><p>Também tem acesso a caixinhas surpresas em <b>dobro</b> pelo preço de uma!</p>
<img src="https://ninta.org/app/tpl/skins/Ninta/images/shop13.gif" style="position:absolute;margin-left:20px" />
</div>
<div id="caixaloja">
<strong>Sem propagandas</strong><br><p>Temos anúncios para ajudar a manter o Ninta online e sempre atualizado! Mas com sua contribuição como Vip, seu acesso ao Hotel é limpo e sem propagandas!</p>
<img src="https://ninta.org/app/tpl/skins/Ninta/images/shop10.png" style="position:absolute;margin-left:60px;margin-top:0px" />
</div>
<div id="caixaloja">
<strong>Emblema especial</strong><br><br><img src="https://ninta.me/pix_swf_files/swf/c_images/album1584/VIP.gif" style="float:left;padding-right:10px"/><p>Enquanto durar o seu mês Vip, você irá ganhar um emblema exclusivo para exibir a todos que você é um Ninta VIP! Todos os usuários vip's possuem este emblema, e é assim que você poderá reconhece-los no jogo.</p>
<center><img src="https://ninta.org/app/tpl/skins/Ninta/images/shop11.gif"/></center>
</div>
<div id="caixaloja">
<strong>Comandos muito legais</strong><br><br><img src="https://ninta.org/app/tpl/skins/Ninta/images/shop14.gif" style="float:left;"/><p>O Vip te <b>desbloqueia</b> alguns comandos para aumentar sua diversão dentro do Universo Nintano, os comandos como beijar, socar e até fazer coisinhas calientes! (De brincadeirinha é claro, rs). Também é possivel usar o comando :spull para puxar quem você quiser para próximo de você! Sem importar com a distância.</p></div>
<div id="caixoteloja">
<strong>atenção</strong><br>Ao se tornar Ninta VIP você não se transforma em um super herói: Embora agradecidos, você ainda deverá <b style="color:white">respeitar as regras</b> e em caso de banimento da conta não faremos a devolução do <b>dinheiro</b>!</div></div></div></div>
    <script type="text/javascript">
        document.observe('dom:loaded', function () {
            CurrentRoomEvents.init();
        });
    </script>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
        Rounder.init();
    }</script>
<script type="text/javascript">
    HabboView.run();
</script>
<!--[if lt IE 7]>
<script type="text/javascript">
    Pngfix.doPngImageFix();
</script>
<![endif]-->
</div>
<?php
include 'includes/footer.php';
?>