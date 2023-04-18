<?php 
    $votaCrepusculo = 0;
    $votaThevampire = 0;
    $votaBuffy = 0;

    function confirmarVoto(){
        echo "<p>Voto computado com sucesso!</p>";
    }

    if(isset($_POST['Crepusculo'])){
      $arquivo = fopen("votos.txt" , "a");
      fwrite($arquivo , $_POST['Crepusculo'] . "\n");
      fclose($arquivo);
    }else if (isset($_POST['Thevampire'])){
      $arquivo = fopen("votos.txt" , "a");
      fwrite($arquivo , $_POST['Thevampire'] . "\n");
      fclose($arquivo);
    }else if (isset($_POST['Buffy'])){
      $arquivo = fopen("votos.txt" , "a");
      fwrite($arquivo , $_POST['Buffy'] . "\n");
      fclose($arquivo);
}

  function computaçãoVotos(){
      $arquivo = "votos.txt";
      $arquivo = fopen($arquivo, "r");
      $total = fread($arq , filesize($arquivo));
      $votaCrepusculo = 0;
      $votaThevampire = 0;
      $votaBuffy = 0;
      $votaCrepusculo = substr_count($total , "Crepusculo");
      $votaThevampire = substr_count($total , "TheVampire");
      $votaBuffy = substr_count($total , "Buffy");



      if($votaCrepusculo > $votaBuffy && $votaThevampire){
        echo "Crepusculo é o filme vencedor com $votaCrepusculo de votos!!";
      }
      else if($votaBuffy > $votaCrepusculo && $votaThevampire){
        echo "Buffy é a vencedora com $votaBuffy de votos!!";
      }
      else if( $votaThevampire > $votaCrepusculo && $votaBuffy){
        echo "The Vampire Diaries é a serie vencedora com $votaThevampire de votos!!";
      }
}
?>


<!doctype html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Votação</title>
</head>
  <body>
  <form action="" method="POST">
<div class="container">
  <div class="row">
      <div class="col">
    <div class="cards">
  <div class="card" style="width: 18rem;">
  <img src="img/buffy.jpg" class="card-img-top" alt="...">
  <h5 class="card-title">Buffy, a Caça-Vampiros</h5>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <input type="submit" value="Buffy" name="buffy">
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="img/thevampire.jpg" class="card-img-top" alt="...">
  <h5 class="card-title">The Vampire Diaries</h5>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <input type="submit" value="TheVampire" name="thevampire">
  </div>
</div>
</div>
<div class="col">
  <div class="card" style="width: 18rem;">
  <img src="img/crepusculo.jpg" class="card-img-top" alt="...">
  <h5 class="card-title">Crepusculo</h5>
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <input type="submit" value="Crepusculo" name="crepusculo">
  </div>
        </div>
      </div>
    </div>
  </div>
  <form action="" method="POST">
  <div class="col botao">
   <input id="btn_computar" type="submit" name="computar" value="Resultados">
      </div>
  </body>
</html>