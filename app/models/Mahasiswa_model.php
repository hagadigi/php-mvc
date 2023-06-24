<?php

class Mahasiswa_model{
  
  // membuat database handler dan statment
  private $dbh;
  private $stmt;

  public function __construct()
  {
    // membuat data source name
    $dsn = 'mysql:host=localhost;dbname=php_mvc';

    try{
      $this->dbh = new PDO($dsn, 'root', '');
    } catch(PDOException $e){
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa(){
    $this->stmt = $this->dbh->prepare('SELECT * FROM MAHASISWA');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  // TANPA DATABASE

  // private $mhs = [
  //   [
  //     "nama" => "Hadi Cahyadi",
  //     "npm" => "52419669",
  //     "email" => "hadi.chyd@gmail.com",
  //     "jurusan" => "Informatika"
  //   ],
  //   [
  //     "nama" => "John Doe",
  //     "npm" => "16753564",
  //     "email" => "john.doe@gmail.com",
  //     "jurusan" => "Sistem Informasi"
  //   ],
  //   [
  //     "nama" => "Doddy Febri",
  //     "npm" => "09599295 ",
  //     "email" => "doddy.feb@gmail.com",
  //     "jurusan" => "Psikolog"
  //   ],
  // ];

  // public function getAllMahasiswa(){
  //   return $this->mhs;
  // }
}