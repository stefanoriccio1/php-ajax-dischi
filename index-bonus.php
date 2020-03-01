<?php
  include __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale= 1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="dist/app.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <title>Php Dischi</title>
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="wrapper flex">
          <img class='logo' src="img/spotify_logo.png" alt="logo">
          <div class="selection">
            <select id="select">
              <option value="all">All</option>

            </select>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="main_container wrapper flex">

      </div>
    </main>
      <!-- handlebars template -->
      <script id="disk-template" type="text/x-handlebars-template">
            <div class="disk_container">
              <img class="poster" src="{{poster}}" alt="copertina">
              <h2>{{title}}</h2>
              <p class= "author">{{author}}</p>
              <p class="year">{{year}}</p>
           </div>
      </script>
          <!-- /handlebars template -->
      <script src="dist/app.js"></script>
  </body>
</html>
