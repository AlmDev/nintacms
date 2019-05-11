<!DOCTYPE html>
<head>
    <link rel="shortcut icon" href="https://ninta.org/app/tpl/skins/Ninta/images/icone.png">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title><?= $config['hotelName']?>: <?= $page;?></title>

    <link rel="stylesheet" href="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/styles/headers.css?2606" type="text/css">
    <link rel="stylesheet" href="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/styles/mail.css?2606" type="text/css">
    <link rel="stylesheet" href="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/scripts/mail/dependencies/awesomplete.css?2606" />

    <link rel="stylesheet" href="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/css/ju.css?3" type="text/css">
    <link rel="stylesheet" href="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/css/juju.css" type="text/css">
    <link rel="stylesheet" href="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/css/jujuju.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>$.noConflict();</script>
    <script type="text/javascript" src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/js/mail.js?2606"></script>
    <script type="text/javascript" src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/js/visual.js?2606"></script>
    <script type="text/javascript" src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/js/libs.js?2606"></script>
    <script type="text/javascript" src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/js/common.js?2606"></script>
    <script type="text/javascript" src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/js/fullcontent.js?2606"></script>
    <script src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/scripts/mail/dependencies/awesomplete.js?2606" async></script>
    <script type="text/javascript">
        document.habboLoggedIn = true;
        window.name = "habboMain";
        if (typeof HabboClient != "undefined") {
            HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
            HabboClient.maximizeWindow = true;
        }
    </script>

    <link rel="stylesheet" href="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/styles/personal.css?2606" type="text/css">
    <script type="text/javascript" src="<?= $config['hotelUrl'];?>/templates/<?= $config['skin'];?>/js/habboclub.js?2606"></script>
</head><body>
<header>
    <div class="container">
        <div class="logo"><div style="margin-top:235px;"><?= Game::usersOnline()?> onlines!</div></div>
        <div class="sea"><div style="margin-top:135px;"><a href="/client" style="color:#fff;">Entre no Ninta</a></div></div>

    </div>
</header>
<nav><div class="center">
        <a href="/me" class="item">Início</a>
        <a href="/shop" class="item ">Loja</a>
        <a href="/news" class="item">Notícias</a>
        <a href="/staff" class="item">Equipe</a>
        <a href="https://cp.habbin.com.br" class="item"><font color="red">Houseekeping</font></a>
        <!--<a href="/logout" class="item">Sair</a>-->
    </div></nav>
</body>
<body>