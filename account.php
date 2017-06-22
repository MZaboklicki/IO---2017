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


	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Rejestracja</h3>
				<table height="100" align="center">
					<tr>
						<td>Adres email:</td>
						<td><input type="email" name="email" placeholder="Wprowadz adres email" required></td>
					</tr>
					<tr>
						<td>Haslo:</td>
						<td><input type="password" name="pass" placeholder="Wprowadz haslo" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Zaloguj sie"></td>
						<td style="text-align:right;"><a href="signup.php">Nie masz konta? Zarejestruj sie!</a></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';

					$uname = $_POST['email'];
					$pass = $_POST['pass'];

					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Logowanie przebieglo pomyslnie!\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Logowanie nie powiodlo sie, sprobuj ponownie\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
		</div>

	</section><!--  end search section  -->

</body>
</html>
