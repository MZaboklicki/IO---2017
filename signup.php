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

				<h3>Rejestracja</h3>
				<form method="post">
					<table>
						<tr>
							<td>Imie i nazwisko:</td>
							<td><input type="text" name="fname" required></td>
						</tr>
						<tr>
							<td>Numer telefonu:</td>
							<td><input type="text" name="phone" required></td>
						</tr>
						<tr>
							<td>Adres email:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Haslo:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td>Plec:</td>
							<td>
								<select name="gender">
									<option> Wybierz plec </option>
									<option> Mezczyzna </option>
									<option> Kobieta </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Lokalizacja:</td>
							<td><input type="text" name="location" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Zatwierdz"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fname = $_POST['fname'];
							$id_no = $_POST['id_no'];
							$gender = $_POST['gender'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							$location = $_POST['location'];

							$qry = "INSERT INTO client (fname,id_no,gender,email,phone,location,status)
							VALUES('$fname','$id_no','$gender','$email','$phone','$location','Available')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Zarejestrowano!.\");
											window.location = (\"account.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Rejestracja sie nie udala, sprobuj ponownie\");
											window.location = (\"signup.php\")
											</script>";
							}
						}

					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


</body>
</html>
