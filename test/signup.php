<?php
$firstnameError = '';
$passwordError = '';
$lastnameError = '';
$mailError = '';
$genderError = '';
$agreeError = '';
if ($_SERVER['REQUEST_METHOD'] === "POST") {
	require 'my_database.php';



	if (empty($_POST['firstname'])) {
		$firstnameError = 'can\'t be empty';
	} else if (strlen($_POST['firstname']) < 3) {
		$firstnameError = 'must have atleast 3 characters';
	}
	if (empty($_POST['lastname'])) {
		$lastnameError = 'can\'t be empty';
	} else if (strlen($_POST['lastname']) < 3) {
		$lastnameError = 'must have atleast 3 characters';
	}
	if (empty($_POST['mail'])) {
		$mailError = 'can\'t be empty';
	} else {
		if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
			exit('Invalid email address'); // Use your own error handling ;)
		}
		$select = mysqli_query($connection, "SELECT `mail` FROM `users` WHERE `mail` = '" . $_POST['mail'] . "'");
		if (mysqli_num_rows($select)) {
			$mailError = 'This email is already being used';
		}
	}

	if (empty($_POST['password'])) {
		$passwordError = 'can\'t be empty';
	} else if (strlen($_POST['password']) < 13) {
		$passwordError = 'must have atleast 13 characters';
	} else if (strlen($_POST['password']) > 50) {
		$passwordError = 'can\'t have more then 50 characters';
	}
	if (empty($_POST['agree'])) {
		$agreeError = 'can\'t be empty';
	}
	if ($firstnameError === '' && $passwordError === '' && $lastnameError === '' && $mailError === '') {

		$firstN = trim($_POST['firstname']);
		$lastN = trim($_POST['lastname']);
		$gender = trim($_POST['gender']);
		$email = trim($_POST['mail']);
		$password = trim($_POST['password']);
		$sql = "INSERT INTO users (`id`, `name`, `lastname`, `gender`, `mail`, `password`) VALUES ('', '$firstN', '$lastN', '$gender', '$email', '$password')";
		if ($connection->query($sql) !== true) {
			die("error updating record:" . $connection->error);
		}
	}
}

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>uHost Hosting</title>
	<link rel="stylesheet" type="text/css" href="../shared.css">
	<link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
	<div class="backis"></div>
	<header class="nav-header">
		<div class="logo-div">
			<div class="nav-button">
				<button>
					<span class="button-bar"></span>
					<span class="button-bar"></span>
					<span class="button-bar"></span>
				</button>
			</div>
			<div class="main-div">
				<a href="..\home_page.php">
					<img class="logo" src="photos\uhost-icon.png" alt="uhost-your favorite hosting company">
				</a>
			</div>
		</div>
		<nav class="main-nav">
			<ul class="main-nav-items">
				<li class="main-nav-item">
					<a href="packages.php">Pakages</a>
				</li>
				<li class="main-nav-item">
					<a href="customers.php">Customers</a>
				</li>
				<li class="main-nav-item main-nav-item-a">
					<a href="signup.php" class="current-signup">Start Hosting</a>
				</li>
			</ul>
		</nav>
	</header>
	<nav class="mobile-nav">
		<ul class="mobile-nav-items">
			<li class="mobile-nav-item">
				<a href="packages.php">Pakages</a>
			</li>
			<li class="mobile-nav-item">
				<a href="customers.php">Customers</a>
			</li>
			<li class="mobile-nav-item mobile-nav-item-a">
				<a href="signup.php">Start Hosting</a>
			</li>
		</ul>
	</nav>
	<main>
		<h1>Awesome!Let's register!</h1>
		<div>
			<form class="singup-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<label class="title">Title</label>
				<span><select class="option" name="gender" required>
						<option value="mr">Mr</option>
						<option value="mrs">Mrs</option>
					</select>
				</span>

				<label for="firstname">First Name </label>
				<span><input id="firstname" type="text" name="firstname"><?= $firstnameError ?></span>
				<label for="lastname">Last Name </label>
				<span><input id="lastname" type="text" name="lastname"><?= $lastnameError ?></span>
				<label for="email">E-mail</label>
				<span><input id="email" type="email" name="mail"><?= $mailError ?></span>

				<label for="password">Password </label>
				<span><input id="password" type="password" name="password"><?= $passwordError ?></span>

				<div class="div-checkbox">
					<input id="agree" type="checkbox" name="agree">
					<label for="agree"> <strong> Agree to <a href="files/terms.html" target="_blank"> Terms & Conditions </strong></a></label><span><?= $agreeError ?></span>
				</div>
				<div class="submit_button">
					<input type="submit">
				</div>

			</form>
			<!-- <div>
				<p class="have_account">Already have account <a href="files/login.php" class="login"> log in</a>
			</div> -->

		</div>

	</main>
	<footer class="main-footer">
		<nav>
			<ul class="main-footer__links">
				<li class="main-footer__link">
					<a href="files/terms.html" target="_blank">Support</a>
				</li>
				<li class="main-footer__link">
					<a href="files/terms.html" target="_blank">Terms of Use</a>
				</li>
			</ul>
		</nav>
	</footer>
	<script src="..\shared.js"></script>
</body>

</html>