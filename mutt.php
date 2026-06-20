<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include('includes/header.php'); ?>
  <meta charset="utf-8">
  <title>MUTT</title>
  <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
</head>
<body>
  <?php include('includes/menu.php'); ?>

  <div class="main">
    <div class="home">
      <div class="container-fluid">
        <ul class="textontop">
          <li><b>2013</b></li>
          <li>MUTT</li>
          <li style="font-size: 3rem;"><b><i>Vintage shop</i></b></li>
          <li style="line-height: 1.3;font-size: 2rem;">Based in Biel/Bienne</li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#photography"><b>#Photography</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#graphicdesign"><b>#Graphic Design</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#editorialdesign"><b>#Editorial design</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#webdesign"><b>#Web design</b></a></li>
          <li style="text-decoration: underline;line-height: 1.5;font-size: 1.5rem;"><a href="#videography"><b>#Videography</b></a></li>
        </ul>

        <?php include('includes/mutt-photography.php'); ?>
        <?php include('includes/mutt-graphic-design.php'); ?>
        <?php include('includes/mutt-editorial-design.php'); ?>
        <?php include('includes/mutt-web-design.php'); ?>
        <?php include('includes/mutt-videography.php'); ?>

      </div>
    </div>
    </div>
  </body>
  </html>
