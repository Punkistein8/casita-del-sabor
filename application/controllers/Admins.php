<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admins extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Admin");
  }

  public function solicitudesCompra()
  {
    $data['listaSolicitudes'] = $this->Admin->getSolicitudes();
    $this->load->view('header');
    $this->load->view('admin/solicitudesdecompra', $data);
    $this->load->view('footer');
  }

  public function solventarSolicitud($id)
  {
    if ($this->Admin->solventarSolicitud($id)) {
      $response = array(
        'status' => 'success',
        'message' => 'Solicitud solventada con éxito'
      );
    } else {
      $response = array(
        'status' => 'error',
        'message' => 'Error al solventar la solicitud'
      );
    }
    echo json_encode($response);
  }
}
