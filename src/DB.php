<?php
namespace App;

use PDO;
use PDOException;


class DB {
    private $conn;
    public function __construct($table, $class){
        try {
            $stmt = $this->$conn = new PDO('sqlite:db.sqlite');
            $stmt = $this->$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
        }
    }
    public function all($table, $class){
        $stmt = $this->$conn->prepare("SELECT * FROM $table");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
            return $stmt->fetchAll();
    }

    public function find($table, $class, $id){
        $stmt = $this->$conn->prepare("SELECT * FROM $table WHERE id=$id");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
            return $stmt->fetchAll();
    }
};
