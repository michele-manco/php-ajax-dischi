<?php
include 'data.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>api-musica</title>

  <script src="https://kit.fontawesome.com/e23757acf7.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
  <script src="main.js" charset="utf-8"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- <div class="icon">
      <i class="fab fa-spotify"></i>

    </div> -->
    <input class="searchy" type="search" placeholder="search" value="" >
    <select  id="generes">
      <option value="">-   -</option>
      <option value="pop">pop</option>
      <option value="rock">rock</option>
      <option value="jazz">jazz</option>
      <option value="metal">metal</option>


    </select>

  </header>
  <main>
    <div id="dischi" class="cardwrapper">
      <?php foreach ($decoded_records as $cards) {?>
        <div class="cards">
          <img class="disco" src="<?php echo $cards['poster']; ?>" alt="">
          <p class="name"> <?php echo $cards['title']; ?></p>
          <small class="info"> <?php echo $cards['author']; ?> </small>
          <span class="year"> <?php echo $cards['year']; ?></span>


        </div>

  <?php } ?>



    </div>

  </main>

  <!-- <script id="cards-template" type="text/x-handlebars-template">
    <div class="cards" data-genere="{{ genere }}">
      <img class="disco" src="{{ copertina }}" alt="{{ titolo}}">
      <p class="name">"{{ titolo}}"</p>
      <small class="info">"{{artista}}"</small>
      <span class="year">"{{anno}}"</span>
    </div>
  </script> -->
</body>
</html>
