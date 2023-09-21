<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SolicitudesCompra extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("SolicitudCompra");
  }
  public function insertarSolicitudCompra()
  {
    $datosNuevaSolicitudCompra = array(
      'listaProds_soC' => $this->input->post('listaProds_soC'),
      'fk_id_usuario' => $this->input->post('fk_id_usuario'),
      'nombre_soC' => $this->input->post('nombre_soC'),
      'apellidos_soC' => $this->input->post('apellidos_soC'),
      'cedula_soC' => $this->input->post('cedula_soC'),
      'tipoProd_soC' => $this->input->post('tipoProd_soC'),
    );
    $response = $this->SolicitudCompra->insertarSolicitudCompra($datosNuevaSolicitudCompra);
    if ($response) {
      $respuesta = array(
        'response' => 'success',
        'message' => 'Solicitud de compra realizada con éxito'
      );
    } else {
      $respuesta = array(
        'response' => 'error',
        'message' => 'Error al realizar la solicitud de compra'
      );
    }
    echo json_encode($respuesta);
  }
}
