<?php
class Admin extends CI_Model
{
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  #Metodo para obtener todas las solicitudes de compra
  public function getSolicitudes()
  {
    $solicitudes = $this->db->get('solicitudcompra');
    if ($solicitudes->num_rows() > 0) {
      return $solicitudes->result();
    } else {
      return false;
    }
  }

  public function solventarSolicitud($id)
  {
    $this->db->where('id_soC ', $id);
    $this->db->delete('solicitudcompra');
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }
}
