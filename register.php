<?php
include 'includes/headerir.php';
?>
<header>
    <div class="container">
        <div class="logo"><div style="margin-top:235px;"><?= Game::usersOnline()?> onlines!</div></div>
        <div class="sea"><div style="margin-top:135px;"><a href="index" style="color:#fff;">Voltar</a></div></div>
		<div class="FenixLogo2k19"></div>
    </div>
</header>
<div class="container white">
    <div class="row">
        <div class="col-md-6">
            <?= User::register()?>
            <h1 style="width: calc(70% + 7.5px);">
                <p>Crie seu próprio <span><?= $config['hotelName']?></span>!</p>
                <i>Junte-se aos Habbos e participe de experiências incríveis conosco!</i>
            </h1>

            <form method="post" class="mordi" autocomplete="off">
                <div class="champ"><p>Nick do seu <?= $config['hotelName']?></p>
                    <span>Os Habbos irão te chamar por este nome.</span>
                    <input type="text" name="username" placeholder="Nickname..." required>
                </div>
                <div class="champ"><p>Seu e-mail</p>
                    <span>Para a sua segurança, é importante que você coloque um e-mail válido.</span>
                    <input type="email" name="email" placeholder="Endereço de e-mail..."  required>
                </div>
                <div class="champ"><p>Escolha uma senha</p>
                    <span>Nunca passe a senha do seu <?= $config['hotelName']?> para ninguém.</span>
                    <input type="password" name="password" placeholder="Senha..."  required>
                </div>
                <div class="champ"><p>Repita sua senha</p>
                    <span>Não se esqueça da sua senha!</span>
                    <input type="password" name="password_repeat" placeholder="Confirmar senha..." required>
                </div>
                <?php
                if($config['recaptchaSiteKeyEnable'] == true):
                ?>
                    <div class="champ"><p>Você é um robô?</p>
                        <span>Responda corretamente o teste para continuar...</span>
                        <div class="g-recaptcha" data-sitekey="<?= $config['recaptchaSiteKey']?>"></div>
                    </div>
                    <br><br><br><br>
                <?php
                endif;
                ?>
                <input type="submit" name="register" class="submit" value="Criar seu <?= $config['hotelName']?>!"><br/><br/>
            </form>
        </div>
        <div class="col-md-6">
            <h1>
                <p>Mais sobre o <span><?= $config['hotelName']?> Hotel</span>!</p>
                <i><?= $config['hotelName']?> Hotel é um mundo virtual, onde você pode fazer novos amigos, criar quartos, participar de jogos e promoções e muito mais! Convide todos os seus amigos para se divertirem juntos!</i>
            </h1>

            <div class="content_why">
                <div class="bloc">
                    <div class="img"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/ju1.png"></div>
                    <div class="reason">
                        <h1>Moedas grátis</h1>
                        <p>Ao criar sua conta você receberá muitas moedas para comprar diversos itens da nossa loja e criar quartos incríveis.</p>
                    </div></div>

                <div class="bloc">
                    <div class="img"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/ju2.png"></div>
                    <div class="reason">
                        <h1>Pets</h1>
                        <p>Interaja com o seu mascote para que ele se torne o bichinho mais alegre e feliz de todo o <?= $config['hotelName']?>!</p>
                    </div></div>

                <div class="bloc">
                    <div class="img"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/ju3.png"></div>
                    <div class="reason">
                        <h1>Grupos</h1>
                        <p>Use sua originalidade para criar o grupo mais conhecido, famoso e popular de todo o hotel.</p>
                    </div></div>

                <div class="bloc">
                    <div class="img"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/ju4.png"></div>
                    <div class="reason">
                        <h1>Eventos diários</h1>
                        <p>Com o alerta de nossos moderadores você poderá se divertir em eventos e ganhar muitas <b>gotinhas</b> para se tornar um ricasso do hotel!</p>
                    </div></div>

                <div class="bloc">
                    <div class="img"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/ju5.png"></div>
                    <div class="reason">
                        <h1>Raros Limitados</h1>
                        <p>Já pensou em se tornar um dos mais ricos do servidor? Com nossos raros limitados em nossa loja você pode!</p>
                    </div></div>

            </div></div></div></div>

<?php
include 'includes/footer.php';
?>