<?php

$datapaket = array(
 array("Paket A", "cuci kering biasa", 40000),
 array("Paket B ", "Cuci kering dan lipat", 45000),
 array("Paket C", "Cuci kering, setrika, dan lipat",50000),
 array("Paket D","Cuci kering, setrika, pengharum,lipat",55000)
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body style="background-color: white">
  <nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active ms-5" href="#">Transaksi</a>
          <li class="nav-item">
            <a class="nav-link active position-absolute end-0" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<center>
  <img src="ini/londry.jpg" width="80%" style="padding: 10px" alt="" >
</center>
<h2>Daftar Paket Laundry</h2><br>

<div class="container-fluid bg-body-secondary" >
  <div class="row">
  <?php foreach ($datapaket as $values =>$value) {?>
            <div class="col-md-3">
                <div class="card mt-2">
                    <div class="card-body bg-light-subtle tescard">
                        <p><?php echo $value[0]; ?></p>
                        <p><?php echo $value[1]; ?></p>
                        <p><?php echo $value[2]; ?></p>
                    </div>
                </div>
                <form action="transaksi.php" method="post">
                    <input type="hidden" name="data1" id="data" value="<?php echo $value[0] ?>">
                    <input type="hidden" name="data2" id="data" value="<?php echo $value[1] ?>">
                    <input type="hidden" name="data3" id="data" value="<?php echo $value[2] ?>">
                    <button class=" btn btn-secondary mt-2">
                        Pilih Paket
                    </button>
                </form>
            </div>
            <?php } ?>
</div>
</div>
<br>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card mt-5 rounded" style="background-color: #C8D0D5;">
        <div class="card-body">
          <div class="text-center text-black">
            @copyright Ammarul Miftah
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>