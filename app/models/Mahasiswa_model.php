<?php

class Mahasiswa_model
{
   // private $mhs = [
   //    [
   //       "nama" => "Eri Maulana",
   //       "nim" => "B11211007",
   //       "email" => "erimaulana.69@gmail.com",
   //       "jurusan" => "Teknik Informatika",
   //    ]
   // ];

   private $dbh; //database handler
   private $stmt;

   public function __construct()
   {
      // data source name
      $dsn = 'mysql:host=localhost;dbname=mvc';

      try {
         $this->dbh = new PDO($dsn, 'root', '');
      } catch (PDOException $e) {
         die($e->getMessage());
      }
   }

   public function getAllMahasiswa()
   {
      $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
      $this->stmt->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
   }
}
