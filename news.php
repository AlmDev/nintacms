<?php
if(empty($_GET['id'])){
    $stmt02 = $dbh->prepare("SELECT * FROM cms_news ORDER BY id DESC LIMIT 1");
    $stmt02->execute();
    $noticia = $stmt02->fetchObject();
    $page = "Notícias";
}else{
    if(is_numeric($_GET['id'])){
        $stmt = $dbh->prepare("SELECT * FROM cms_news WHERE id = :gid LIMIT 1");
        $stmt->bindParam("gid", $_GET['id'], PDO::PARAM_INT);
        $stmt->execute();
        $noticia = $stmt->fetchObject();
        $page = $noticia->title;
    }
}
include 'includes/menudentro.php';
include 'includes/headerir.php';
?>
<div class="container white">
    <div class="row">
        <div class="col-md-8">

            <div id="news">
                <div id="bat"><?= $noticia->title;?></div>
                <div id="pur"><?= $noticia->shortstory;?></div>
                <div class="article" style="color:#555">
                    <?= $noticia->longstory; ?>

                    <?php
                    if($noticia->formenable == "true") {
                        //if($noticia->))
                    }else{
                        echo $noticia->formenable . " false";
                    }
                    ?>

                    <div id="nnn">Postado em <?= date("d/m/Y", $noticia->date)?> às <?= date("h:i", $noticia->date);?> ➞ Equipe <?= $config['hotelName']?>
                        <div id="nxnx">
                            <img src="https://images.ninta.org/swf/c_images/album1584/NTU_170.gif" />
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <script type="text/javascript">
            $(document).ready(function () {


            });

            });
        </script>

        <div class="col-md-4">
            <div id="fac" style="margin-top:0px">
                <div id="titulao" style="font-size:14px;">Notícias recentes</div>

                <?php
                $queryListNews = $dbh->query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 10");

                if($queryListNews->rowCount() > 0) {
                    while ($ninta = $queryListNews->fetchObject()) {
                        ?>
                        <li>
                            <a href="<?= $config['hotelUrl']?>/news/<?= $ninta->id;?>" class="list-group-item">
                                <b style="color:white!important;font-size:12px">
                                    <?= $ninta->title;?>
                                </b>
                            </a>
                        </li>
                        <?php
                    }
                }
                ?>


            </div>
        </div>
    </div>
    <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) {

            Rounder.init();

        }</script>
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
