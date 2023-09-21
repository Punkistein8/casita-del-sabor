<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tecnologias extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("tecnologia");
  }

  public function index()
  {
    $data["listaTecnologias"] = $this->tecnologia->getTecnologias();
    $this->load->view('header');
    $this->load->view('tecnologias/index-public', $data);
    $this->load->view('footer');
  }
  public function indexPriv()
  {
    $data["listaTecnologias"] = $this->tecnologia->getTecnologias();
    $this->load->view('header');
    $this->load->view('tecnologias/index', $data);
    $this->load->view('footer');
  }
  public function indexUsuario()
  {
    $data["listaTecnologias"] = $this->tecnologia->getTecnologias();
    $this->load->view('header');
    $this->load->view('tecnologias/index-users', $data);
    $this->load->view('footer');
  }
  public function listaCarrito()
  {
    $data["listaTecnologias"] = $this->tecnologia->getTecnologias();
    $this->load->view('tecnologias/carrito', $data);
  }
  public function guardarTecnologia()
  {
    $datosNuevaTecnologia = array(
      "id_tec" => $this->input->post('id_tec'),
      "nombre_tec" => $this->input->post('nombre_tec'),
      "marca_tec" => $this->input->post('marca_tec'),
      "precio_tec" => $this->input->post('precio_tec'),
      "foto_tec" => $this->input->post('foto_tec'),
    );
    if ($this->tecnologia->insertarTecnologia($datosNuevaTecnologia)) {
      redirect('tecnologias/indexPriv'); //redirecciona a la vista index
    } else {
      echo "<h1>No</h1>";
    }
  }
  public function eliminarTecnologia($id)
  {
    if ($this->tecnologia->eliminarTecnologia($id)) {
      redirect('tecnologias/indexPriv');
    } else {
      echo "<h1>No se pudo eliminar</h1>";
    }
  }
  public function cargarDatosTecnologia($id)
  {
    $data["tecnologiaEditar"] = $this->tecnologia->obtenerTecnologiaPorId($id);
    $this->load->view('header');
    $this->load->view('tecnologias/editar', $data);
    $this->load->view('footer');
  }

  public function editarTecnologia($id)
  {
    $datosEditarTecnologia = array(
      "nombre_tec" => $this->input->post('nombre_tec'),
      "precio_tec" => $this->input->post('precio_tec'),
      "marca_tec" => $this->input->post('marca_tec'),
      "foto_tec" => $this->input->post('foto_tec'),
    );

    if ($this->tecnologia->editarTecnologiaPorId($id, $datosEditarTecnologia)) {
      redirect('tecnologias/indexPriv'); //redirecciona a la vista index
      echo print_r($datosEditarTecnologia);
    } else {
      echo "<h1>Error al actualizar</h1>";
    }
  }
}
