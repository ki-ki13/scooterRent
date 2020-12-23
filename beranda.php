<?php require_once("auth.php"); 
      include 'connect.php'?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">

    <title>ScooterRent</title>
  </head>
  <body>
  <div class ="container-fluid px-5 mt-5">
    <h1>ScooterRent</h1>
    <h2><?php echo $_SESSION["user"]["nama"]?></h2>
    <h2><?php echo $_SESSION["user"]["email"]?></h2>
    <h3>SUKSES!!</h3>
    <p><a href="logout.php">Logout</a></p>
    
    <div class ="row">
      <?php 
        $ambil = $db ->query("SELECT * FROM scooter");
        while($perproduk = $ambil -> fetch(PDO::FETCH_ASSOC)){?>
          <div class ="col-sm-3">
            <div class = "thumbnail">
              <img src ="poto/<?php echo $perproduk['foto'];?>" class="img-fluid" >
              <div class ="caption">
                <h3><?php echo $perproduk['nama_scooter'];?></h3>
                <h5>Rp. <?php echo number_format($perproduk['harga']);?></h5>
                <a href ="beli.php?id=<?php echo $perproduk['id_scooter'];?>" class ="btn btn-primary float-right">sewa</a>
              </div>
            </div>
          </div>
        <?php }?>
      
    </div>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
  </body>
</html>