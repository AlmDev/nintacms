
<?php
$page = User::userData('username');
include 'includes/menudentro.php';
include 'includes/headerir.php';
?>
<div class="container white">
    <div class="row">
        <div class="col-md-12" style="    background: #fff;
    border-radius: 5px;
    border: 1px solid #ddd;
    color: #555;
    padding: 20px;
    height: auto;
    margin-bottom: 10px;
    padding-left: 40px;">
            
                                                        <form method="post" id="tagForm">
							<?php User::editTag(); ?>
<input type="hidden" name="comprar" value="true">
<img src="https://ninta.org/app/tpl/skins/Ninta/images/grupinho.png" style="margin-left:0px;bottom:80px;position:absolute"/>
<div style="text-align:center">
<div id="titulao">Compre uma tag</div>
<p><strong>O que é uma TAG?</strong>
<br>
No mundo Ninta você pode ser o que quiser, tanto ter uma família, um clã ou um clube, como até ser membro de um enorme RPG.Para isto disponibilizamos um método para que todos sejam identificados dentro de um tipo de categoria de grupo!</p>
<center><img src="https://ninta.org/app/tpl/skins/Ninta/images/tag1.png"/></center>
<p>Ao escrever uma frase você terá uma Tag em frente do seu nome para identificar sua turminha. Legal né? E o melhor só custa <b>30</b> Diamantes!</p>
<hr>
<p><strong>Tag (Máximo 10 caractéres):</strong>
<br>
<b>Lembre-se:</b> Cuidado com o conteúdo de sua tag, não use ofensas ou falsos status de Staff's ou você poderá ser banido sem qualquer direito a reembolso!</p>

<input type="text" name="tag" maxlength="10" value="" style="background:#eee;border:1px solid #ddd"><hr><p><strong>Cor da Tag</strong><br>
Neste espaço você pode escolher a cor que sua Tag irá aparecer dentro do Hotel para outros Nintas!</p>
</p>

<input type="color" name="cor" value="#000000" style="background:#eee;border:1px solid #ddd">

<div id="price"><img src ="<?= $config['hotelUrl']; ?>/templates/<?= $config['skin']; ?>/images/credits/diamante.png"/> <b>30 Diamantes</b></div>
<br>
<input type="submit" value="Comprar" name="account" class="submit" style="margin-left:auto;margin-right:auto;width:100px;text-align:center!important"><br><hr></br>
<p>Para remover a sua <b>TAG</b> atual, deixe o campo em branco! <b>(Remover é grátis)</b></p>
</form></div></div></div></div></div>
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

<?php
include 'includes/footer.php';
?>