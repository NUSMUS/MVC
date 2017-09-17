<?php

/**
 *
 */
class personas_model {

  private $db;
  private $personas;

  public function __construct() {
    $this->db = Conectar::conexion();
    $this->personas = array();
  }

  public function get_personas() {
    $consultas = $this->db->query("SELECT * FROM personas;");
    while ($filas = $consultas->fetch_assoc()) {
      $this->personas[] = $filas;
    }
    return $this->personas;
  }
}

?>
