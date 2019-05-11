<?php
$page = "Equipe";
include 'includes/menudentro.php';
include 'includes/headerir.php';
?>
<style>
    .contentStaffBox {background:#eee;border:1px solid #ddd;border-radius:5px;width:31%;height:120px;display:block;float:left;margin-right:10px;margin-top:10px;}
    .cbb clearfix {
        color:#7F7F7F;
    }
    .contentStaffBox u {
        font-size:12px;
        font-weight:bold;
    }
    .contentStaffBox span {
        color:#7F7F7F;
    }
    .spacerStaff {
        margin-top:15px;
    }
    .buttonRight {
        background-image:url('https://i.imgur.com/spgxTyi.png');
        float:right;
        height:12px;
        width:14px;
    }
    .showOnly {
        height:60px;
        overflow:hidden;
    }
    .staffClearFix {margin:5px 0px 0px 14px;}
    .avatarImageStaff {
        float:left;
        height:110px;
        margin:-10px 0px 0px 0px;
        width:64px;
    }
    .startSpaceStaff {
        margin:10px 0px 0px 0px;
    }

    .euquero {background:#000423;color:white;margin-top:10px;text-align:center;font-weight:bold;font-size:16px;text-transform:uppercase;width:96%;height:50px;line-height:50px;border-radius:5px;}

    #emblemas {
        width: 61px;
        height: 61px;
        margin-right: 5px;
        margin-top: 5px;
        text-align: center;
        line-height: 60px;
        float: left;
        cursor: default;
        text-align: center;
        background-position: center center;
        background-repeat: no-repeat;
        background-color: rgba(0,0,0,0.1);
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -webkit-box-shadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.1), inset 0px 2px 8px 0px rgba(0, 0, 0, 0.1);
        box-s
        hadow: inset 0px 0px 0px 1px rgba(0, 0, 0, 0.1), inset 0px 2px 8px 0px rgba(0, 0, 0, 0.1);
    }
    #emblemas:hover {
        background-color: rgba(0,0,0,0.3);
    }

</style>
<style>
    .noHasStaff{
        background: #eee;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: auto;
        height: auto;
        display: block;
        float: left;
        margin-right: 10px;
        margin-top: 10px;
        padding: 15px;
    }
</style>


<div class="container white">
    <div class="row">
        <div class="col-md-8">
            <div id="jujuzona">
                <div class="habblet-container "><div class="cbb clearfix orange "><div class="euquero">Gerente</div>
                        <?php
                        $GereQ = $dbh->query("SELECT * FROM users WHERE rank = 14");
                        if($GereQ->rowCount() > 0) {
                            while($ninta = $GereQ->fetchObject()) {
                                ?>
                                <div class="contentStaffBox">
                                    <div id="element-2">
                                        <div class="avatarImageStaff"
                                             style="background-image:url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $ninta->look?>&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;size=1&amp;img_format=gif')"></div>
                                        <div class="startSpaceStaff">
                                            <b style="color:#555;text-transform:uppercase;font-size:14px;text-align:center">
                                                <?= $ninta->username;?>
                                            </b>
                                            <div class="spacerStaff"></div>
                                            <img style="vertical-align:bottom" src="https://i.imgur.com/RiqVBQ5.png">
                                            <span><?= $ninta->motto;?> </span>
                                        </div>
                                    </div>
                                    <div class="staffClearFix"></div>
                                </div>
                                <?php
                            }
                        }else {
                            ?>
                            <div class="noHasStaff">
                                Não há ningúem neste cargo!
                                <div class="staffClearFix"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div></div><div class="habblet-container "><div class="cbb clearfix orange "><div class="euquero">Administração</div>
                        <?php
                        $ADmQ = $dbh->query("SELECT * FROM users WHERE rank = 13");
                        if($ADmQ->rowCount() > 0) {
                            while($ninta = $ADmQ->fetchObject()) {
                                ?>
                                <div class="contentStaffBox">
                                    <div id="element-2">
                                        <div class="avatarImageStaff"
                                             style="background-image:url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $ninta->look?>&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;size=1&amp;img_format=gif')"></div>
                                        <div class="startSpaceStaff">
                                            <b style="color:#555;text-transform:uppercase;font-size:14px;text-align:center">
                                                <?= $ninta->username;?>
                                            </b>
                                            <div class="spacerStaff"></div>
                                            <img style="vertical-align:bottom" src="https://i.imgur.com/RiqVBQ5.png">
                                            <span><?= $ninta->motto;?> </span>
                                        </div>
                                    </div>
                                    <div class="staffClearFix"></div>
                                </div>
                                <?php
                            }
                        }else {
                            ?>
                            <div class="noHasStaff">
                                Não há ningúem neste cargo!
                                <div class="staffClearFix"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div></div><div class="habblet-container "><div class="cbb clearfix orange "><div class="euquero">MOD</div>

                        <?php
                        $MODQ = $dbh->query("SELECT * FROM users WHERE rank = 12");
                        if($MODQ->rowCount() > 0) {
                            while($ninta = $MODQ->fetchObject()) {
                                ?>
                                <div class="contentStaffBox">
                                    <div id="element-2">
                                        <div class="avatarImageStaff"
                                             style="background-image:url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $ninta->look?>&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;size=1&amp;img_format=gif')"></div>
                                        <div class="startSpaceStaff">
                                            <b style="color:#555;text-transform:uppercase;font-size:14px;text-align:center">
                                                <?= $ninta->username;?>
                                            </b>
                                            <div class="spacerStaff"></div>
                                            <img style="vertical-align:bottom" src="https://i.imgur.com/RiqVBQ5.png">
                                            <span><?= $ninta->motto;?> </span>
                                        </div>
                                    </div>
                                    <div class="staffClearFix"></div>
                                </div>
                                <?php
                            }
                        }else {
                            ?>
                            <div class="noHasStaff">
                                Não há ningúem neste cargo!
                                <div class="staffClearFix"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div></div>


                <div class="habblet-container "><div class="cbb clearfix orange "><div class="euquero">AJUDANTE</div>
                        <?php
                        $AjudaQ = $dbh->query("SELECT * FROM users WHERE rank = 11");
                        if($AjudaQ->rowCount() > 0) {
                            while($ninta = $AjudaQ->fetchObject()) {
                                ?>
                                <div class="contentStaffBox">
                                    <div id="element-2">
                                        <div class="avatarImageStaff"
                                             style="background-image:url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $ninta->look?>&amp;direction=2&amp;head_direction=2&amp;gesture=sml&amp;size=1&amp;img_format=gif')"></div>
                                        <div class="startSpaceStaff">
                                            <b style="color:#555;text-transform:uppercase;font-size:14px;text-align:center">
                                                <?= $ninta->username;?>
                                            </b>
                                            <div class="spacerStaff"></div>
                                            <img style="vertical-align:bottom" src="https://i.imgur.com/RiqVBQ5.png">
                                            <span><?= $ninta->motto;?> </span>
                                        </div>
                                    </div>
                                    <div class="staffClearFix"></div>
                                </div>
                                <?php
                            }
                        }else {
                            ?>
                            <div class="noHasStaff">
                                Não há ningúem neste cargo!
                                <div class="staffClearFix"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div></div>            <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
                        Rounder.init();
                    }
                </script>
            </div></div>
        <div class="col-md-4">
            <div id="menuzao">

                <div style="padding:10px;text-align:left!important">
                    <div id="emblemas" style="background-image:url('https://images.ninta.org/swf/c_images/album1584/NINTA.gif'); float: right;margin-left:10px;"></div>
                    A Equipe <?= $config['hotelName']?> está sempre à sua disposição para ajudar o máximo de usuários possíveis em meio a quaisquer tipo de desafio acontecido dentro da comunidade.
                    <br>
                    <br>
                    Os legítimos membros da equipe possuem um Emblema Staff como identificação. Ele pode ser visualizado acima, então caso alguém se passe por staff, tome bastante cuidado!
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {
        Rounder.init();
    }
</script>
<script type="text/javascript">
    HabboView.run();
</script>
<!--[if lt IE 7]>
<script type="text/javascript">
    Pngfix.doPngImageFix();
</script>
<![endif]-->
<?php
include 'includes/footer.php';
?>
