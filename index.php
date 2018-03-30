<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <style>
  body {
    background-image: url('Images/catcafe.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
  nav{
    background-color: rgba(240,0,0,0.3);
  }
  li>a{
    font-weight:800;
    color: blue;
  }
  .carousel-item > img {
    width:400px;
  }
  nav {
    margin-top: 2px;
    margin-bottom: 7px;
  }
</style>
</head>
<body>

  <?php include('navbar.php')?>;

  <div class="container">
    <div class="row">
      <div class="col-sm-2">
        <h1>Carlotta Biography</h1>
        <p class="text-danger">Carlotta: Prima di conoscere noi, viveva libera insieme ad altri gatti, accudita da un bravo signore in un giardino condominiale. Purtroppo, uno dopo l'altro, molti mici sono stati avvelenati, e le ragazze che si occupano della colonia "Is Pisittus" hanno portato via i pochi superstiti, compresa Carlotta. Dopo qualche mese l'abbiamo adottata noi del Cat Café. Carlotta è una gattina affettuosissima e giocherellona; ma sa anche farsi rispettare con dei piccoli morsichi se qualcosa la infastidisce.</p>
      </div>
      <div class="col-sm-8">
        <h2 class="text-center">FOTO DEL PERSONALE</h2>

        <?php include('carousel.php')?>;

        <h1>Informazioni utili</h1>
        <p class="text-light bg-dark">Offriamo un'ampia scelta di Caffetteria, Bakery, Snack. 
          E' presente il WiFi gratuito per i clienti del locale.
          Abbiamo un angolo libreria per il "Bookcrossing" con una semplice regola: Porta un Libro, Prendi un Libro.
        I Gatti saranno i padroni di casa.</p>
      </div>
      <div class="col-sm-2">
        <h1>Hope e Iris Biography</h1>
        <p class="text-danger">Hope e Iris sono due sorelline di Iglesias, strappate alla mamma e abbandonate a sole 2 settimane di vita, buttate dentro una scatola come se fossero spazzatura. Erano mal conce, ipotermiche, piene di pulci e magrissime. Sono state salvate da Letizia e dalla sua famiglia e grazie alle loro amorevoli e costanti cure, sono diventate due splendide e sanissime gatte. Sono inseparabili; Iris (Dea dell'Arcobaleno) è intraprendente, curiosa, coccolona ed inoltre è un'esploratrice nata. Hope (Speranza) è la più timidina, rimane sempre un pò sul "chi va là", ma vi assicuriamo che anche lei è una pazza scatenata, specialmente con chi conosce da un pò.</p>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>