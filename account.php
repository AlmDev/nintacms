<?php
$page = User::userData('username');
include 'includes/menudentro.php';
include 'includes/headerir.php';
?>
<title><?= $config['hotelName'] ?> ~ Instellingen</title>
        <div class="container_24"><br>
            <div class="grid_18">               
                   <div id="contentBox" class="activity" style="padding-bottom: 400px; ">             

                   <div style="margin-top: 20px; position: absolute; margin-left: 600px;background: #fff;
    border-radius: 5px;
    border: 1px solid #ddd;
    color: #555;
    padding: 20px;
    height: auto;
    margin-bottom: 10px;
    padding-left: 40px;">
                        
						
						
						
										<form action="" method="POST" id="profileForm">
				<?php User::editPassword(); ?>
					<h3 style="margin-bottom:10px"><b> Digite a senha atual aqui:</b></h3>
					<input  placeholder="*****************" type="password" name="oldpassword" value="" id="avatarmotto" style="padding-right: 485px"><br>
					<span style="font-size:12px;color:gray;"><b>Insira a senha atual aqui!</b></span><br><br>
					<h3 style="margin-bottom:10px"><b> Digite a senha nova aqui:</b></h3>
					<input  placeholder="*****************"  type="password" name="newpassword" value="" id="avatarmotto" style="padding-right: 485px"><br>
					<span style="font-size:12px;color:gray; margin-left: 0px; margin-bottom: -10px;"><b>Insira aqui a nova senha que você deseja!</b></span><br><br>
					<input type="submit" value="Enviar" name="password" class="submit button blue" style="border: none; float: right; margin-top:0px">
				</form>
                    </div>
                </div>
            </div>

			<style>
	</style>



            <div class="grid_6" >
			<div style="margin-left: 1400px; margin-top: -378px;background: #fff;
    border-radius: 5px;
    border: 1px solid #ddd;
    color: #555;
    padding: 20px;
	width: 370px;
    height: auto;
    margin-bottom: 10px;
    padding-left: 40px;">

                <div id="contentBox" class="activity">
                    <div class="head" style="    text-transform: uppercase;
    font-size: 20px;
    font-weight: bold;
    color: #100a3c;
    padding-bottom: 5px;">
                        <div class="badgeImage lock"></div>
                      Configurações
                        <br>                  

                    </div>



                    <div class="text">
           <a class="one" href="account" style="font-size: 14px;
    font-weight: bold;
    color: #100a3c;
    padding-bottom: 5px;
	">
                <i class="fas fa-lock" style="margin-right: 3px"></i>
                Configurações de senha
</i>
</a><br>

           <a class="one" href="settingsemail" style="   font-size: 14px;
    font-weight: bold;
    color: #100a3c;
    padding-bottom: 5px;
	">
                <i class="fa fa-cog" style="margin-right: 3px"></i>
                Configurações de email

</a><br>

                </div></div></div>

             

            </div>
        </div>
		<div style="margin-top: 400px;">
			<?php include_once 'includes/footer.php'; ?>
		</div>
    </body>
</html>