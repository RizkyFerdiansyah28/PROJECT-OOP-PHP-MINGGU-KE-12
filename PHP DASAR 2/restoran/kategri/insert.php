<h3>insert kategori</h3>
<div class="form-group">
    <form action="" method="post">
      <div class="form-group w-50">
          <label for="">Nama Kategori</label>
          <input type="text" namespace="kategori" require placeholder="isi kategori" class="form-control">
      </div>

      <div>
          <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
      </div>
      </form>

</div>

<?php 

  if (isset($_POST['simpan'])) {
      $kategori = $_POST['kategori'];

      $sql = "INSERT-INTO tblkategri VALUES ('','$kategori')";
      $db-runSQL($sql);
      header("location:?f=kategri&m=select");
  }

?>