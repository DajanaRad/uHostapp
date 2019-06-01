<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uHost Customers</title>
    <link rel="stylesheet" type="text/css" href="../shared.css">
    <link rel="stylesheet" type="text/css" href="customers.css">
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
                <a href="..\home_page.php"><img class="logo" src="photos\uhost-icon.png" alt="uhost-your favorite hosting company"></a>
            </div>
        </div>
        <nav class="main-nav">
            <ul class="main-nav-items">
                <li class="main-nav-item"><a href="packages.php">Pakages</a></li>
                <li class="main-nav-item"><a href="customers.php" class="current">Customers</a></li>
                <li class="main-nav-item main-nav-item-a"><a href="signup.php">Start Hosting</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-div">
        <a href="..\home_page.php">
            <img class="logo" src="photos\uhost-icon.png" alt="uhost-your favorite hosting company">
        </a>
    </div>
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
        <div class="content">
            <div class="backis"></div>
            <div class="testimonial" id="customer-1">
                <div class="testimonial__image-container">
                    <img src="photos\customer-1.jpg" alt="Mike Statham - Customer" class="testimonial__image">
                </div>
                <div class="testimonial__info">
                    <h1 class="testimonial__name">Mike Statham</h1>
                    <h2 class="testimonial__subtitle">Founder of
                        <a href="tech-analysis.com">tech-analysis.com</a>
                    </h2>
                    <p class="testimonial__text">uHost helped me realize my project with a highly constrained budget in like no time.</p>
                </div>
            </div>
            <div class="testimonial" id="customer-2">

                <div class="testimonial__info">
                    <h1 class="testimonial__name">John Mellow</h1>
                    <h2 class="testimonial__subtitle">Hosts his private videos on uHost.
                    </h2>
                    <p class="testimonial__text">I worked as a blogger and always looked for an integrated hosting and file storage solution. I found
                        it in uHost!
                    </p>
                </div>
                <div class="testimonial__image-container">
                    <img src="photos/customer-2.jpg" alt="John Mellow - Customer" class="testimonial__image">
                </div>
            </div>
        </div>
    </main>
    <footer class="main-footer">
        <ul class="main-footer__links">
            <li class="main-footer__link">
                <a href="files/terms.html" target="_blank">Support</a>
            </li>
            <li class="main-footer__link">
                <a href="files/terms.html" target="_blank">Terms of Use</a>
            </li>
        </ul>
    </footer>
    <script src="..\shared.js"></script>
</body>

</html>