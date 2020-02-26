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
    <title>Php Dischi</title>
  </head>
  <body>
    <header>
      <div class="navbar">

      </div>
    </header>
    <main>
      <div class="main_container flex">
        <?php foreach ($database as $disco) { ?>
          <div class="disk_container">
            <img class="poster" src="<?= $disco['poster'] ?>" alt="copertina">
           <h2><?php echo $disco['title'] ?></h2>
           <p><?php echo $disco['author'] ?></p>
           <p><?php echo $disco['year'] ?></p>
         </div>
       <?php } ?>
      </div>
    </main>
  <script src="dist/app.js"></script>
  </body>
</html>
