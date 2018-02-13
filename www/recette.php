<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/main.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
  </head>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <header class="section">
      <section class="hero is-warning">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
          <nav class="navbar">
            <div class="container">
              <div class="navbar-brand">
                <a class="navbar-item">
                  <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenuHeroA">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </div>
              <div id="navbarMenuHeroA" class="navbar-menu">
                <div class="navbar-end">
                  <a class="navbar-item" href="index.php">
                    Accueil
                  </a>
                  <a class="navbar-item is-active" href="recette.php">
                    Recettes
                  </a>
                </div>
              </div>
            </div>
          </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
          <div class="container has-text-centered">
            <h1 class="title">
              Marmitonne
            </h1>
            <h2 class="subtitle">
              La cuisine qui détonne
            </h2>
          </div>
        </div>
      </section>
    </header>

    <section class="section">
      <div class="container">
        <div class="field has-addons has-addons-centered">
          <div class="control">
            <input class="input is-rounded" type="text" placeholder="Rechercher une recette...">
          </div>
          <div class="control">
            <a class="button is-info">
              Search
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="box has-text-centered">
	  <h1>Pâtes a la bière</h1>
	  <img src="img/cooking-1869942_1280.jpg" alt="Pâtes a la bière" width="500px" />
	</div>
	<div class="columns is-mobile">
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      Temps de cuisson: 40mn
	    </div>
	  </div>
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      Nb personnes: <div id="personnes">4</div>
         <button type="button" id="personnes-plus">+</button> 
         <button type="button" id="personnes-moins">-</button> 
	      </div>
	  </div>
	  <div class="column has-text-centered has-centered">
	    <div class="content">
	      Difficulté: facile 2/4
	      </div>
	  </div>
	</div>
	<div class="columns is-mobile">
	  <div class="column">
	    <div class="content">
	      <h2>Ingredient</h2>
	      <ul>
		<li><span class="ingredient">500</span>g de pâtes</li>
		<li><span class="ingredient">1</span>litre de bière</li>
	      </ul>
	    </div>
	  </div>
	  <div class="column is-9">
	    <div class="content">
	      <h2>Préparation</h2>
	      <ol>
		<li>Faire cuire les pâtes</li>
		<li>Se servire une bière !</li>
		<li>Mangez !</li>
	      </ol>
	    </div>
	  </div>
	</div>
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="content has-text-centered">
          <p>
            <strong>ADSILLH Bulma</strong> by Rhenaud TheLukark,
            <a href="https://parouby.fe">Pierre-Antoine Rouby</a>.
            The source code is licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
          </p>
        </div>
      </div>
    </footer>

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
