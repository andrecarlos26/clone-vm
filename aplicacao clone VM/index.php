<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Clonar MV</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="dados.php" method="post" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Aplicação - Clone de uma VM
				</span>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Sistema Operacional</span>
					<div>
						<select class="selection-2" name="sistemaoperacional">
							<option>Linux</option>
							<option>Windows</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input"  data-validate="Name is required">
					<span class="label-input100">Nome da VM</span>
					<input class="input100" type="text" name="nome" placeholder="Ex: ubuntuandre" style="width=200px">
					<span class="focus-input100" ></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Quantidade de memória (MB)</span>
					<input class="input100" type="number" name="memoria" placeholder="Ex: 2500">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Quantidade de CPU (UN)</span>
					<input class="input100" type="number" name="cpu" placeholder="Ex: 3">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Exexutar clonagem
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="listar">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					VMs Instaladas
				</span>
				<?php
				$a = include("listar.php");
				echo"<div class="."input100".">".$a."</div>"
				?>
				<?php?>

			</form>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
