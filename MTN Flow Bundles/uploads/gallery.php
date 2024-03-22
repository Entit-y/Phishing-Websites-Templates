<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic Image Gallery</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for image gallery */
    body {
      background-color: #333; /* Dark grey background color */
      color: white; /* Text color */
    }

    .gallery-item {
      padding: 5px;
      overflow: hidden; /* Hide overflowing content for the zoom effect */
      transition: transform 0.3s ease; /* Smooth transition for the zoom effect */
    }
    .gallery-item img {
      width: 100%;
      height: auto;
    }

    .gallery-item:hover {
      transform: scale(1.1); /* Zoom effect on hover */
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <h1 class="text-center mt-5">Target Photos</h1>
    <div class="row mt-4">
      <?php
      $directory = "./"; // Directory where your images are stored
      $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE); // Get all image files in the directory

      foreach ($images as $image) {
        echo '<div class="col-lg-3 col-md-4 col-sm-6 gallery-item">';
        echo '<img src="' . $image . '" alt="Image">';
        echo '</div>';
      }
      ?>
    </div>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
