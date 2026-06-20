<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include('includes/header.php'); ?>
  <style>
.textontop {display: none ;}
.menumenu {display: none ;}
.main {margin-top:0;}
</style>
  <meta charset="utf-8">
  <title>Videography</title>
</head>
<body>


<div class="container-fluid menumenu2">
  <div class="row">
    <div class="col-4 col-lg">
      <ul>
          <li><a href="index.php"><b>Florian Goguillon</b></a></li>
      </ul>
    </div>
    <div class="col-4 col-lg">
    <nav>
      <ul>
        <li style="list-style: hangul-consonant;"><a href="photography.php">Photo</a></li>
        <li style="list-style: hangul-consonant;"><a href="web-design.php">Web</a></li>
      </ul>
    </div>
    <div class="col-4 col-lg">
    <nav>
      <ul>
        <li style="list-style: hangul-consonant;"><a href="graphic-design.php">Graphic</a></li>
        <li style="list-style: hangul-consonant;"><a href="editorial-design.php">Editorial</a></li>
      </ul>
    </div>
    <div class="col-4 col-lg">
      <ul>        
        <li style="list-style: hangul-consonant;"><a href="3d-rendering.php">3D</a></li>
        <li style="list-style: hangul-consonant;"><a href="videography.php">Video</a></li>
      </ul>
    </div>
    <div class="col-4 col-lg">
      <ul>       
        <li style="list-style: hangul-consonant;"><a href="fashion.php">Fashion</a></li>
        <li style="list-style: hangul-consonant;"><a href="infomed.php">Medical</a></li>
      </ul>
    </div>

    <div class="col-4 col-lg">
      <ul>
        <li style="list-style: hangul-consonant;"><a href="copablu.php">Copablu</a></li>
        <li style="list-style: hangul-consonant;"><a href="some-more.php">Some More</a></li>
    </ul>
    </div>

    <div class="col-4 col-lg">
      <ul>
        <li style="list-style: hangul-consonant;"><a href="prathet-thai.php">Prathet Thai</a></li>
        <li style="list-style: hangul-consonant;"><a href="degradation.php">Dégradation</a></li>
    </ul>
    </div>

    <div class="col-4 col-lg">
      <ul>
        <li style="list-style: hangul-consonant;"><a href="infomed.php">Infomed</a></li>
        <li style="list-style: hangul-consonant;"><a href="mutt.php">MUTT</a></li>
    </ul>
    </div>

    <div class="col-4 col-lg">
      <ul>
        <li style="list-style: hangul-consonant;"><a href="les-indiennes.php">Les indiennes</a></li>
        <li style="list-style: hangul-consonant;"><a href="tulles.php">Tulles</a></li>
    </ul>
    </div>

    <div class="col-4 col-lg">
      <ul>
        <li style="list-style: hangul-consonant;"><a href="meduse.php">Méduse</a></li>
        <li style="list-style: hangul-consonant;"><a href="ma-mere-est-un-bonhomme.php">Ma mère est un bonhomme</a></li>
      </ul>
    </div>

    <div class="col-4 col-lg">
      <ul>
        <li style="list-style: hangul-consonant;"><a href="baleines.php">Baleines</a></li>
        <li style="list-style: hangul-consonant;"><a href="croute.php">Croûte</a></li>
      </ul>
    </div>

    <div class="col-4 col-lg">
      <ul>
        <li style="list-style: hangul-consonant;"><a href="avant-apres.php">Avant/Après</a></li>
      </ul>
    </div>

    </nav>
  </div>
</div>





  <div class="main">
    <div class="home">
      <div class="container-fluid">
        <ul class="textontop2">
          <li><b>Fashion</b></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#mutt"><b>#MUTT</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#lesindiennes"><b>#Les indiennes</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#mamereestunbonhomme"><b>#Ma mère est un bonhomme</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#tulles"><b>#Tulles</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#meduse"><b>#Méduse</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#croute"><b>#Croûte</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#avantapres"><b>#Avant/Après</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#baleines"><b>#Baleines</b></a></li>
        </ul>

        <div id="mutt">
        </div>
        <?php include('mutt.php'); ?>

        <div id="lesindiennes">
        </div>
        <?php include('les-indiennes.php'); ?>

        <div id="mamereestunbonhomme">
        </div>
        <?php include('ma-mere-est-un-bonhomme.php'); ?>

        <div id="tulles">
        </div>
        <?php include('tulles.php'); ?>

        <div id="meduse">
        </div>
        <?php include('meduse.php'); ?>

        <div id="croute">
        </div>
        <?php include('croute.php'); ?>

        <div id="avantapres">
        </div>
        <?php include('avant-apres.php'); ?>

        <div id="baleines">
        </div>
        <?php include('baleines.php'); ?>

        </div>
        </div>
        </div>
    </body>
    </html>