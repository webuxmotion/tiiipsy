<?php

namespace app\models;

use core\base\Model;

class Tip extends Model {

  public $table = 'tip';

  public function getTips() {

    $sql = "
      SELECT *
      FROM $this->table
    ";

    $items = $this->db->query($sql);

    return $items;
  }

  public function addNew($image) {
    $sql = "INSERT INTO $this->table (image) VALUES (?)";
    $insertId = $this->db->execute($sql, array_values([$image]));
    
    return $insertId;
  }
}