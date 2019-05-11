<?php
include 'includes/headerir.php';
?>
<header>
   <div class="container">
   
        <div class="logo"><div style="margin-top:235px;"><?= Game::usersOnline()?> onlines!</div></div>
        <div class="sea"><div style="margin-top:135px;"><a href="register" style="color:#fff;">Registrar-me</a></div></div>
    </div>
</header>

<nav>
    <div class="center">
        <div style="color:#fff;text-transform:uppercase;line-height:60px;font-size:14px;letter-spacing:2px">
            <strong>Embarque nesta aventura</strong>
        </div>
    </div>
</nav>

<div class="container white">

    <div class="row">

        <div class="col-md-8">
            <?php
            $queryLastNew = $dbh->query("SELECT * FROM cms_news ORDER BY id DESC LIMIT 1");
            if($queryLastNew->rowCount() > 0) {
                while ($ninta = $queryLastNew->fetchObject()) {
                ?>
                <div id="news">
                    <div id="bat"><a href="<?= $config['hotelUrl'];?>/news/<?= $ninta->id;?>"><?= $ninta->title;?></a></div>
                    <div id="pur"><?= $ninta->shortstory;?></div>
                    <div class="article" style="color:#555"><p>
                            <?= $ninta->longstory;?>

                        <div id="nnn">Postado em <?= date("d/m/Y", $ninta->date)?> às <?= date("h:i", $ninta->date);?> ➞ Equipe <?= $config['hotelName']?>
                            <div id="nxnx">
                                <img src="https://images.ninta.org/swf/c_images/album1584/NTU_170.gif" />
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
                ?>
        </div>
            <div class="col-md-4">
                <?=
                User::login();
                ?>
                <div class="center" style="background:#000423;border-radius:5px;padding:20px">
                    <div style="padding-bottom:10px;font-size:14px"><b style="color:#fff!important">FAÇA LOGIN AQUI</b></div>
                    <form method="post">
                        <input type="text" name="username"  placeholder="Seu nick..." required>
                        <input type="password" name="password" placeholder="Sua senha..." required>
                        <input type="submit" name="login" value="Entrar">
                    </form>
                    <style>
                        .registerbtn{margin-top: 5px;font-size: 12px;color: #fff;width: 100%;line-height: 40px;padding: 0 20px;background: #163adf;border-radius: 3px;cursor: pointer;font-weight: bold;border: none;text-transform: uppercase;letter-spacing: 1px;}
                        .recuperarps{margin-top: 5px;font-size: 12px;color: #fff;width: 100%;line-height: 40px;padding: 0 20px;background: #e03127;border-radius: 3px;cursor: pointer;font-weight: bold;border: none;text-transform: uppercase;letter-spacing: 1px;}
                    </style>
                    <div onclick="location.href='/register'" class="registerbtn">Registro</div>
                    <div onclick="location.href='/recuperarsenha'" class="recuperarps">Recuperar senha</div>
                </div>

                <div class="center" style="background:#fff;border-radius:5px;padding:20px;margin-top:20px;">
                    <a href="https://facebook.com/habbinbr" target="_blank" class="facebook btn btn-fb btn-lg">Curta o Fênix no facebook!</a>
                </div>

                <div class="center" style="background:#fff;border-radius:5px;padding:20px;margin-top:20px;">
                    <h5>Porque jogar Fênix?</h5>
                    <p>Somos um servidor gratuito que vem ocasionando diversão com muita qualidade e entretenimento. A Fênix é o hotel mais completo e dinâmico da atualidade, que vem conquistando públicos cada vez maiores, por conta de toda a sua discrepância e excentricidade. Criado para dar o UP nesse grande mundo pixel, a Ninta chegou para trazer novas interações, conteúdos, e dinamismo com uma equipe muito bem selecionada que tem como objetivo principal: proporcionar as mais extraordinárias experiências pixeladas, que nenhum outro grupo de Staff's foi capaz de gerar, e que estarão sempre dispostos a te ajudar em qualquer situação!</p>
                    <!--<h5>Códigos Vouchers</h5>
                    <p>Com os Vouchers todos terão a oportunidade de obter prêmios de forma rápida e instantânea, caso seja um dos primeiros a conseguir gerar o código corretamente. Aleatoriamente você ganhará prêmios desde foguinhos, gotinhas ou até mesmo itens surpresas. Entretanto, para garantir a bolada, é necessário que esteja sempre atento a página do Facebook do hotel para conferir as novidades e não perder a chance de ganhar incríveis recompensas que serão liberadas todos os dias. Para utilizar os Vouchers, basta entrar no hotel, abrir o catálogo e ir à aba “Novidades”, haverá na mesma um espaço em azul para que você possa digitar o código e consiga garantir a premiação.</p>
                    <h5>Gincanas</h5>
                    <p>A Ninta é o primeiro servidor a trabalhar com sistema de gincana 100% integrado de forma eficiente, que é uma disputa jogada em grupo onde você pode conquistar pontos para sua equipe e pontos individuais. A equipe que juntar mais pontos ao decorrer de um mês ganhará prêmios especiais da gincana. Porém, seus prêmios serão dados conforme o seu nível Elemental. É necessário que se tenha sete dias de hotel para se inscrever! Jogos e promoções serão feitos para que você possa começar a ganhar seus pontos, fique sempre atento nas notícias da gincana para mais detalhes. Lembrando que suas atitudes positivas dentro do hotel também podem gerar pontos individuais para subir seu nível na gincana. Mas assim como você ganha pontos, você também pode perder, tome cuidado com suas atitudes elas poderão lhe prejudicar!</p>
                    <h5>Semanais</h5>
                    <p>São jogos que ficarão disponíveis por uma semana inteira para que se tenha a oportunidade de conseguir garantir um lindo emblema do mesmo. Com temáticas exclusivas, os semanais trazem muita diversão com recreações diferentes e originais, que buscará lhe desafiar a conseguir concluir todo o jogo antes que o prazo se encerre. Todo final de semana um novo Semanal é viabilizado em nosso servidor!</p>
                    <h5>Eventos</h5>
                    <p>Para gerar uma interação ainda maior dos Staff's para com os usuários, ao longo do dia são realizados diversos eventos que tendem à serem temáticos, utilizando os nossos personagens principais: o forte Príncipe Igneus, a valente Princesa Marine e o sábio Mestre Prudens. As premiações são feitas com gotinhas à depender do nível do evento executado.</br>
                        [F] Nível Fácil= Ganhará uma gotinha</br>
                        [M] Nível Médio= Ganhará duas gotinhas</br>
                        [D] Nível Difícil= Ganhará três gotinhas</br>
                        No próprio nome do quarto, você conseguira identificar o nível do evento efetuado e para não perder toda a diversão esteja sempre online!</p>
                    <h5>Gotinhas e Foguinhos</h5>
                    <p>São premiações conseguidas interiormente no servidor. As gotinhas poderão ser adquiridas em eventos, pelos Vouchers e em diversas atividades inclusas no hotel. Quanto aos foguinhos a cada 10 minutos online dentro do servidor é concebido um foguinho. Com um número elevado dos mesmos, além de poder ficar conhecido no hotel ao entrar no hall da fama, você poderá ostentar comprando LTD'S que são disponibilizados ao longo da semana em nossa loja.</p>
                --></div>

            </div>

        </div>

        <div id="clearfix"></div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>