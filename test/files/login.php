<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ..\\signup.php");
    exit;
}
$mail = "";
$password = "";
$mail_err = "";
$password_err = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require "../my_database.php";
    if (empty($_POST['mail'])) {
        $mail_err = "Please enter email.";
    } else { }

    // else {
    //     // $mail = trim($_POST["mail"]);
    // }
    if (empty($_POST["password"])) {
        $password_err = "Please enter your password.";
    } else { }


    // $password = trim($_POST["password"]);

    // Validate credentials


    // if (empty($mail_err) && empty($password_err)) {
    //     if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    //         exit('Invalid email address'); // Use your own error handling ;)
    //     }
    //     $select = mysqli_query($connection, "SELECT `mail` FROM `users` WHERE `mail` = '" . $_POST['mail'] . "'");
    //     $validate = mysqli_query($connection, "SELECT `password` FROM `users` WHERE `password` =  '" . $_POST['password'] . "'");
    //     if (mysqli_num_rows($select) == 2) {
    //         echo $_POST;
    //     }



    // Prepare a select statement
    // $sql = "SELECT id, mail, password FROM users WHERE mail = ?";

    //     if ($stmt = $connection->prepare($sql)) {
    //         // Bind variables to the prepared statement as parameters
    //         $stmt->bind_param("s", $param_mail);

    //         // Set parameters
    //         $param_mail = $mail;

    //         // Attempt to execute the prepared statement
    //         if ($stmt->execute()) {
    //             // Store result
    //             $stmt->store_result();

    //             // Check if username exists, if yes then verify password
    //             if ($stmt->num_rows == 1) {
    //                 // Bind result variables
    //                 $stmt->bind_result($id, $mail, $hashed_password);
    //                 if ($stmt->fetch()) {
    //                     if (password_verify($password, $hashed_password)) {
    //                         // Password is correct, so start a new session
    //                         session_start();

    //                         // Store data in session variables
    //                         $_SESSION["loggedin"] = true;
    //                         $_SESSION["id"] = $id;
    //                         $_SESSION["mail"] = $mail;

    //                         // Redirect user to welcome page
    //                         header("location: ../../home_page.php");
    //                     } else {
    //                         // Display an error message if password is not valid
    //                         $password_err = "The password you entered was not valid.";
    //                     }
    //                 }
    //             } else {
    //                 // Display an error message if username doesn't exist
    //                 $mail_err = "No account found with that mail.";
    //             }
    //         } else {
    //             echo "Oops! Something went wrong. Please try again later.";
    //         }
    //     }

    //     // Close statement
    //     $stmt->close();
    // }

    // // Close connection
    // $connection->close();
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uHost Customers</title>
    <link rel="stylesheet" type="text/css" href="../../shared.css">
    <link rel="stylesheet" type="text/css" href="login.css">
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
                <a href="..\..\home_page.php"><img class="logo" src="..\photos\uhost-icon.png" alt="uhost-your favorite hosting company"></a>
            </div>
        </div>
        <nav class="main-nav">
            <ul class="main-nav-items">
                <li class="main-nav-item"><a href="../packages.php">Pakages</a></li>
                <li class="main-nav-item"><a href="../customers.php">Customers</a></li>
                <li class="main-nav-item main-nav-item-a"><a href="../signup.php">Start Hosting</a></li>
            </ul>
        </nav>
    </header>
    <nav class="mobile-nav">
        <ul class="mobile-nav-items">
            <li class="mobile-nav-item">
                <a href="../packages.php">Pakages</a>
            </li>
            <li class="mobile-nav-item">
                <a href="../customers.php">Customers</a>
            </li>
            <li class="mobile-nav-item mobile-nav-item-a">
                <a href="../signup.php">Start Hosting</a>
            </li>
        </ul>
    </nav>
    <main>
        <h1>Let's log in!</h1>
        <div>
            <form class="singup-form" action="../packages.php" method="post">


                <div> <label for="email">E-mail:</label>
                    <span><input id="email" type="email" name="mail"><?= $mail_err ?></span>
                </div>

                <div><label for="password">Password:</label>
                    <span><input id="password" type="password" name="password"><?= $password_err ?></span>
                </div>

                <div class="submit_button">
                    <input type="submit">
                </div>

            </form>
        </div>

    </main>
    <footer class="main-footer">
        <nav>
            <ul class="main-footer__links">
                <li class="main-footer__link">
                    <a href="terms.html" target="_blank">Support</a>
                </li>
                <li class="main-footer__link">
                    <a href="terms.html" target="_blank">Terms of Use</a>
                </li>
            </ul>
        </nav>
    </footer>
    <script src="..\..\shared.js"></script>
</body>