<?php 

f (isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql = "DELETE * FROM tblkategri WHERE idkategri=$id"

    $DB->runSQL($sql);

    header("location:?f=kategri&m=select");
      
?>