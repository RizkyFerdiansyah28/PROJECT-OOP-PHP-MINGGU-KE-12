<?php 
  $jumlahdata = $db->rowCOUNT("SELECT idkategori FROM tblkategri")
  $banyak = 3;

  $halaman = ceil($jumlahdata / $banyak);

  if (isset ($_GET['p'])) {
    $p=$_GET['p'];
    $mulai = ($p * $banyak) - $banyak;
  }else {
     $mulai =0;
  }

   $sql ="SELECT * FROM tblkategri ORDER BY kategori ASC LIMIT $mulai,$banyak";
   $row = $db->getALL($sql);

  $no=1+$mulai;
?>

<div class="float-left mr-4">
<a class="btn btn-primary" href="?f=kategri&m=insert" role="button">Tambah Data</a>
</div>

<h3>kategori</h3>
<table lass="table table-sm" w-50>
    <thead> 
        <tr>
            <th>No</th>
            <th>kategori</th>
            <th>delete</th>
            <th>update</th>
        </tr>

    </thead>
     <tbody>
         <?php foreach($row as $r): ?>
          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $r['kategri']?></td>
              <td><a href="?f=kategri&m=delete&id=<?php echo $r['kategri']?>">Delete</a></td>
              <td><a href="?f=kategri&m=update&id=<?php echo $r['kategri']?>">Update</a></td>
          </tr>
        <?php endforeach ?>
     </tbody>


</table>

<?php 

   for ($i=1; $i <=$halaman; $i++){
    echo '<a href="?F=kategri&m=select&p='.$i.'">'.$i.'</a>'; 
    echo  '&nbsp &nbsp &nbsp';
      }

?>
