<?php 

   class DB{
      public $host = "127.0.0.1";
      private $user = "root";
      private $password = "";
      private  $database = "dbrestoran";

      public function __construct()
      {
          echo "function construct";
      }

     public function selectData()
     {
         echo 'select data';
     }

     public function getDataBase()
     {
         return $this->database;
     }

     public function tampil()
     {
         $this->selectData();
     }

     public static function insertData()
      {
          echo "static function";
      }

   }

   DB::insertData();


//    $db = new DB;

//    echo '<br>';

//    $db->selectData();

//    echo '<br>';

//    echo $db->host;

//    echo '<br>';

//    echo $db->getdatabase();

//    echo '<br>';

//    $db->tampil();

?>