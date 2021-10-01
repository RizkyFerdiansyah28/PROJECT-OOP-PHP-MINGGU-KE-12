<?php 

   require_once "../function.php";


   $sql = "DELETE FROM tblkategri WHERE idketegori = $id";

   $result = mysqli_query($koneksi, $sql);

   header("location:http://localhost/PHP%20DASAR%202/restoran/kategri/select.php")

?>