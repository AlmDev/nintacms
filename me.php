
<?php
$page = User::userData('username');
include 'includes/menudentro.php';
include 'includes/headerir.php';
?>
<div class="container white">
    <div class="row">
        <div class="col-md-8">
            <div id="ninta">
                <div id="avatar" style="height: 225px;background:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= User::userData('look')?>&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=l) no-repeat center;"></div>
                <div id="my-stats">

                    <div id="creditsBar" class="bar">Moedas<div class="icon credits"></div><span id="Amount"><?= User::userData('credits')?></span></div>

                    <div id="belCreditsBar" class="bar">Pontos de Eventos<div class="icon belCredits"></div><span id="Amount"><?= User::userData('puntos_eventos')?></span></div>

                    <div id="diamondsBar" class="bar">Diamantes<div class="icon diamonds"></div><span id="Amount"><?= User::userData('vip_points');?></span></div>

                    <div id="eventPointsBar" class="bar">Promoções<div class="icon eventPoints"></div><span id="Amount"><?= User::userData('promo_points')?></span></div>


                    <div id="ducketsBar" class="bar">Duckets<div class="icon duckets"></div><span id="Amount"><?= User::userData('promo_points')?></span></div>



                    <div id="clubBar" class="bar">
                        <div class="icon club"></div>
                        <span>
                            Você é um <?= $config['hotelName']?> VIP
                        </span>
                    </div>
                </div>
            </div>
            <div id="avada">
                <div id="ahri">
                    <div style="text-align:center;color:#54d5f2;font-size:16px;padding-bottom:10px;padding-top:10px;text-transform:uppercase"><strong>Top Diamantes</strong></div>
                    <?php
                    $queryDiamonds = $dbh->query("SELECT * FROM users ORDER BY vip_points DESC LIMIT 5");
                    while($x = $queryDiamonds->fetchObject()) {
                        ?>
                        <div id="zoe">
                            <div class="figure"
                                 style="background: url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= $x->look?>&amp;gesture=sml&amp;direction=2&amp;head_direction=2&amp;size=b);"></div>
                            <div class="info">
                                <strong><?= $x->username;?></strong><br><?= $x->vip_points?> <img
                                        src="<?= $config['hotelUrl']; ?>/templates/<?= $config['skin']; ?>/images/credits/diamante.png"
                                        class="stars" alt="">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </div>


                <div id="ahri">
                    <div style="text-align:center;color:#ff9400;font-size:16px;padding-bottom:10px;padding-top:10px;text-transform:uppercase"><strong>Top Eventos</strong></div>

                    <?php
                    $queryEvents = $dbh->query("SELECT * FROM users ORDER BY puntos_eventos DESC LIMIT 5");
                    while($ninta = $queryEvents->fetchObject()) {
                        ?>
                        <div id="zoe">
                            <div class="figure"
                                 style="background: url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= $ninta->look?>&amp;gesture=sml&amp;direction=2&amp;head_direction=2&amp;size=m);"></div>
                            <div class="info">
                                <strong><?= $ninta->username?></strong><br><?= $ninta->puntos_eventos?> <img
                                        src="<?= $config['hotelUrl']; ?>/templates/<?= $config['skin']; ?>/images/credits/02.png"
                                        class="stars" alt="">
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>



                <div id="ahri">
                    <div style="text-align:center;color:#3fcc3d;font-size:16px;padding-bottom:10px;padding-top:10px;text-transform:uppercase"><strong>Top Promoções</strong></div>

                    <?php
                    $queryEvents0002 = $dbh->query("SELECT * FROM users ORDER BY promo_points DESC LIMIT 5");
                    while($ninta = $queryEvents0002->fetchObject()) {
                        ?>
                        <table id="zoe">
                            <tr>
                                <td>
                                    <div class="figure" style="background:url(https://habbo.city/habbo-imaging/avatarimage?figure=<?= $ninta->look?>&amp;gesture=sml&amp;direction=2&amp;head_direction=2&amp;size=m)"></div>
                                </td>
                                <td class="info">
                                    <strong><?= $ninta->username;?></strong><br><?= $ninta->promo_points;?> <img src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/images/credits/05.png" class="stars" alt="">
                                </td>
                            </tr>
                        </table>
                        <?php
                    }
                    ?>

                </div></div>
        </div>

        <div class="col-md-4">
            <div id="menuzao" style="height: 183px;"> <!-- height: 240px;-->
                <b>
                    <!--<a href="/rpg">Oficializar RPG</a>-->
                   <a href="/tag">Tag no nome</a>
                    <a href="/account">Preferências</a>
                    <a href="/logout">Sair</a>
                </b>
            </div>
            <div id="fac">
                <iframe
  src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Frotmgshopbrasil&tabs=timeline&width=340&height=280&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="330" height="275" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>

            <div id="equipe">
                <strong>Equipe staff</strong>
                <p>Sempre conte conosco para qualquer situação</p>
                <a href="/staff"><b style="color:#555!important">Nossa equipe</b> <img src="https://images.ninta.org/swf/c_images/album1584/NINTA.gif" style="float:right;"/> </a>
            </div>

        </div>
    </div>
    <div id="clearfix"></div>
</div>

<?php
include 'includes/footer.php';
?>