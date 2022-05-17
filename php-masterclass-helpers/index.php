<?php

require_once("helpers/posts.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Proceduralni CMS - Agiledrop PHP-Masterclass</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet"/>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Agiledrop PHP-Masterclass</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- Page content-->
<div class="container">
    <?php




    foreach ($posts as $key => $value) {

        //<img src="img_chania.jpg" alt="Flowers in Chania">


        //echo "-----<br>";
        //echo "$key<br>";
        /*
        echo json_encode($value)."<br>";
        echo "<br>";

        echo "AAAAAAAAAA<br>";

    */




        //echo "<H1> <img src="img_chania.jpg" alt="Flowers in Chania"> </H1>";

        $image = $value["image"];
        //echo "imageURL:" . json_encode($image["url"]) . " <br>";
        $imageURL = $image["url"];
        $imageAlt = $image["alt"];


        echo "<H1> " . $value["title"]. " </H1>";
        echo '<img src=' . $imageURL . ' alt="'. $imageAlt . '">';


        $skrajsanText = substr($value["content"], 0, 150);
        echo "<br>$skrajsanText<br>";

        echo "<H3> " . $value["authored by"]. " </H3>";



        //echo "<H5> " . $value["authored on"]. " </H5>";

        $dateTime = date('d-m-Y', $value["authored on"]);
        echo "<H5> " . $dateTime. " </H5>";

       echo '<a href="article.php?id=' . $key . '">Read more</a>';











        /*
        foreach ($value as $key => $value2) {
            echo "BBBBBBBB<br>";
            echo "$key<br>";
            echo json_encode($value2)."<br>";
            echo "<br>";

        }
        */
    }

    //echo "<br> -- title image content authored authored by";



    ?>

</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>