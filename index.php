<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
   <section name="kalkulator" class="bilangan d-sm-5">
  <?php 
  if(isset($_POST['hitung'])){
    $bil1 =$_POST['bil1'];
    $bil2 =$_POST['bil2'];
    $operasi=$_POST['operasi'];

    switch($operasi){
      case'tambah':
        $hasil=$bil1+$bil2;
        break;
        case'kurang';
        $hasil=$bil1-$bil2;
        break;
        case 'kali';
        $hasil=$bil1*$bil2;
        break;
        case 'bagi';
        $hasil=$bil1/$bil2;
        break;
    }
  }
  ?>
 
  <div class="kalkulator">
  <h4>Kalkulator Sederhana</h4>
  <form method="POST" action="./" class="form">
    <input type="text" name="bil1" class="bil" placeholder="Bilangan 1" required>
    <input type="text" name="bil2" class="bil" placeholder="Bilangan 2" required>
      <select name="operasi" class="opt">
        <option value="tambah">+</option>
        <option value="kurang">-</option>
        <option value="bagi">/</option>
        <option value="kali">x</option>
      </select>
      <input type="submit" name="hitung" value="Hitung" class="tombol">
      <a href="./" style="text-decoration:none;"><input type="button" value="Hapus" class="tombol"></a>
  </form>
  <div>
    <?php if(isset($_POST['hitung'])){
      ?>
      <input type="text" value="<?php echo $hasil?>" class="hasil" >
      <?php 
    }  
    else{
      ?>
      <input type="text" value="<?php echo $hasil;?>" class="hasil">
    <?<?php 
      }
      ?>  
    </div>
  </section>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>