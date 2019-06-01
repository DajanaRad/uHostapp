<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>uHost Packages</title>
  <link rel="stylesheet" type="text/css" href="../shared.css" />
  <link rel="stylesheet" type="text/css" href="packages.css" />
</head>

<body>
  <div class="background"></div>
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
        <a href="..\home_page.php"><img class="logo" src="photos\uhost-icon.png" alt="uhost-your favorite hosting company" />
        </a>
      </div>
    </div>
    <nav class="main-nav">
      <ul class="main-nav-items">
        <li class="main-nav-item"><a href="packages.php" class="current">Pakages</a></li>
        <li class="main-nav-item"><a href="customers.php">Customers</a></li>
        <li class="main-nav-item main-nav-item-a"><a href="signup.php">Start Hosting</a></li>
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
  <main class="cont">
    <div class="backis"></div>
    <section class="package" id="plus">
      <a href="signup.php">
        <h1 class="package__title">Our PLUS Plan</h1>
        <h2 CLASS="badge">RECOMANDED</h2>
        <h2 class="package__subtitle">
          The most popular choice of our customers.
        </h2>
        <p class="package__info">
          Benefit from increased storage and faster support to ensure that
          your mission-critical data and applications are always available!
        </p>
      </a>
    </section>
    <section class="package" id="free">
      <a href="signup.php">
        <h1 class="package__title">Our FREE Plan</h1>
        <h2 class="package__subtitle">
          An extremely solid start into our hosting world.
        </h2>
        <p class="package__info">Get started immediately at zero cost!</p>
      </a>
    </section>
    <section class="package" id="premium">
      <a href="signup.php">
        <h1 class="package__title">Our PREMIUM Plan</h1>
        <h2 class="package__subtitle">
          All your enterprise needs. Instant support, guaranteed uptime.
        </h2>
        <p class="package__info">
          The best solution for small to large enterprises. Because hosting
          shouldn't be in the way!
        </p>
      </a>
    </section>
  </main>
  <footer class="main-footer">
    <nav>
      <ul class="main-footer__links">
        <li class="main-footer__link">
          <a href="files/terms.html" target="_blank">Support</a>
        </li>
        <li class="main-footer__link">
          <a href="files/terms.html" target="_blank">Terms of Use </a>
        </li>
      </ul>
    </nav>
  </footer>
  <script src="..\shared.js"></script>
</body>

</html>