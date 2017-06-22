<!DOCTYPE html>
<html lang="en">
<head>
	<title>Wypozyczalnia aut</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Znajdz swoje wymarzone auto!</h2>
				<h3 class="properties" style="text-align: center">Fiat - Opel - Volkswagens</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Tutaj zloz oplate za auto</h3>
				<form method="post">
					<table>
						<tr>
							<td>Numer konta bankowego:</td>
							<td><input type="text" name="nrkonta" required></td>
						</tr>
						<tr>
							<td>Twoje haslo:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>

						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Zaplac"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$nrkonta = $_POST['nrkonta'];
							$id_no = $_POST['id_no'];

							$qry = "UPDATE client SET nrkonta = '$nrkonta' WHERE id_no = '$id_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Zaplata przebiegla prawidlowo.\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Platnosc nie udala sie\");
											window.location = (\"pay.php\")
											</script>";
							}
						}

					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


</body>
</html>
