<?php
$page = User::userData('username');
include 'includes/menudentro.php';
include 'includes/headerir.php';
?>
<title><?= $config['hotelName'] ?>: Editar E-mail</title>

        <div class="container_24"><br>

            <div class="grid_18">               
                   <div id="contentBox" class="activity" style="height: 20px; padding-bottom: 0; height: 170px">               

                  <div style="margin-top: 20px; position: absolute; margin-left: 600px;background: #fff;
    border-radius: 5px;
    border: 1px solid #ddd;
    color: #555;
    padding: 20px;
    height: auto;
    margin-bottom: 10px;
    padding-left: 40px;">
                        
						
						
						
										<form action="" method="POST" id="profileForm">
				<?php User::editEmail(); ?>
					<h3 style="margin-bottom:10px"><b>Digite o novo endereço de e-mail aqui:</b></h3>
					<input  placeholder="Novo Email" type="text" name="email" value="<?= User::userData('mail') ?>" id="avatarmotto" style="padding-right: 485px"><br>
					<span style="font-size:12px;color:gray;"><b>Certifique-se de inserir um endereço de e-mail existente. Isso permite que você solicite sua senha novamente.</b></span><br><br>

					<input type="submit" value="Salvar" name="confirmar" class="submit button blue" style="border: none; float: right; position: right; margin-top:0px">
				</form>
                    </div>
                </div>
            </div>




            <div class="grid_6">
			<div style="margin-left: 1400px; margin-top: -150px;background: #fff;
    border-radius: 5px;
    border: 1px solid #ddd;
    color: #555;
    padding: 20px;
	width: 370px;
    height: auto;
    margin-bottom: 10px;
    padding-left: 40px;">

                <div id="contentBox" class="activity">
                    <div class="head"style="    text-transform: uppercase;
    font-size: 20px;
    font-weight: bold;
    color: #100a3c;
    padding-bottom: 5px;">
                        <div class="badgeImage lock"></div>             Configurações
                        <br>
                                         

                    </div>



                    <div class="text">
           <a class="one" href="account"style="font-size: 14px;
    font-weight: bold;
    color: #100a3c;
    padding-bottom: 5px;
	">
                <i class="fas fa-lock" style="margin-right: 3px"></i>
               Configurações de senha

</a><br>

           <a class="one" href="settingsemail"  style="   font-size: 14px;
    font-weight: bold;
    color: #100a3c;
    padding-bottom: 5px;
	">
                <i class="fa fa-cog" style="margin-right: 3px"></i>               
Configurações de email
</a><br>


                </div></div>

             

            </div>
        </div>
		<div style="margin-top: 400px;">
		<?php include_once 'includes/footer.php'; ?>
		</div>
    </body>
</html>