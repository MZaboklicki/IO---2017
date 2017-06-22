<?php
	session_start();
?>
<header>
			<div class="wrapper">
				<h1 class="logo">AutoICar</h1>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Strona glowna</a></li>
					</ul>
					<a href="account.php">Logowanie</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Strona główna</a></li>
							</ul>
					<a href="admin/logout.php">Wyloguj sie</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>
