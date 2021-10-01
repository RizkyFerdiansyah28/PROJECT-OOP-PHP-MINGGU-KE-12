<form action="" method="get">

nama;
<input type="text" name="nama">
alamat;
<input type="text" name="alamat">

<input type="submit" namw="kirim value="simpan>

</form>

<?php 

   if ( isset($_GET['kirim'])) {
    $nama = $_GET['nama'];
    $alamat = $_GET['alaamt'];
 
 
    echo $nama;
    echo '<br>';
    echo $alamat;
   }

   

?>

