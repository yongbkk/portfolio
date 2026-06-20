<?php
// Define the directory containing the images
$imageDirectory = 'img/infomed/';
$images = glob($imageDirectory . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<head>
  <?php include('includes/header.php'); ?>
  <meta charset="utf-8">
  <title>Infomed</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masonry Gallery</title>
    <link rel="stylesheet" href="masonry-style.css?<?php echo time(); ?>"> <!-- Link to your custom CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script> <!-- Masonry.js -->
    <script src="https://cdn.jsdelivr.net/npm/simplelightbox@2.9.0/dist/simple-lightbox.min.js"></script> <!-- Lightbox for popup -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplelightbox@2.9.0/dist/simple-lightbox.min.css">
</head>
<body>
  <?php include('includes/menu.php'); ?>

  <div style="width:100%" class="main">
    <div class="home">
      <div class="container-fluid">
            <div class="row">
            <div style="margin-left: auto; margin-right: auto;" class="col-md-12">
            <div class="gallery">
        <?php foreach($images as $image): ?>
            <div class="gallery-item">
                <a href="<?php echo $image; ?>" class="gallery-link" data-lightbox="gallery">
                    <img src="<?php echo $image; ?>" alt="Gallery Image">
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
           </div>
       </div>
    </div>
    </div>

    <script>
        // Initialize Masonry layout
        document.addEventListener('DOMContentLoaded', function() {
            var masonry = new Masonry('.gallery', {
                itemSelector: '.gallery-item',
                columnWidth: '.gallery-item',
                percentPosition: true,
                gutter: 20
            });

            // Initialize Lightbox for image popups
            var lightbox = new SimpleLightbox('.gallery a', {
                captionDelay: 250
            });
        });
    </script>
</body>
