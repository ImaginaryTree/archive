<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="file/css/menu.css">
    <title>Akashic Record</title>
</head>
<body>
  <nav>
    <div class="wrapper">
      <div class="logo">
        <a href="index.php">Akashic Record</a>
      </div>
      <div class="menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#owner">owner</a></li>
          <li><a href="#">Article</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper">
      <section id="article">
        <div class="kolom listcard">
          <?php
            include('koneksi.php');

            $query = mysqli_query($connection,"SELECT * FROM article");
            $data = mysqli_fetch_assoc($query);
          ?>
          <?php foreach($data as $dt): ?>
            <div class="Articlecard">
              <img class="cardimg"src="https://image.shutterstock.com/image-vector/science-logo-icon-black-white-600w-350144498.jpg">
              <div class="kontencard">
                <h3><?php echo $data['title'];?></h3>
                <p><?php echo substr($data['materi'],0,50); ?>...</p>
              </div>
            </div>
          <?php endforeach?>
        </div>
      </section>
  </div>
</body>
</html>
