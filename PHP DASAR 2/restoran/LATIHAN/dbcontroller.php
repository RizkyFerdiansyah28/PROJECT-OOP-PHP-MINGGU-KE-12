<?php 

  class DB{ 
    private $host = "127.0.0.1";
    private $user = "root";
    private $password = "";
    private $database = "dbrestoran";
    private $koneksi;

    public function __construc()
    {
        $this->koneksi = $this->koneksiDB();
    }

    public function koneksi()
    {
        $koneksi = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $koneksi;
    }

    public function getALL($sql)
    {
        $result = mysqli_query($this->koneksi, $sql);
        while ($row=mysqli_fetch_assoc($result)) {
            $data[]=$row;

        }
       if (!empty($data)) {
         return $data;
       }
        
    }
     
        public function getITEM($sql)
        {
            $result = mysqli_query($this->koneksi, $sql);
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
   public function rowCOUNT($sql)
   {
     $result = mysqli_query($this->koneksi, $sql);
     $count = mysqli_num_rows($result);

     return $count;
   }

    public function runSQL($SQL)
    {
        $result = mysqli_query($this->koneksi, $sql);
    }

    public function pesan($text="")
    {
        echo $text;
    }

  }

  
?>