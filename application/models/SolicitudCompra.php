<?php
class SolicitudCompra extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function insertarSolicitudCompra($datosNuevaSolicitudCompra)
  {
    $response = $this->db->insert('solicitudcompra', $datosNuevaSolicitudCompra);
    if ($response) {
      return true;
    } else {
      return false;
    }
  }
}
