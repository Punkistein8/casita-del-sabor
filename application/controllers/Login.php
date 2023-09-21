<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("loginm");
  }

  public function index()
  {
    $this->load->view('header');
    $this->load->view('login/index');
    $this->load->view('footer');
  }

  public function registrarse()
  {
    $this->load->view('header');
    $this->load->view('login/registrarse');
    $this->load->view('footer');
  }

  public function validarLogin()
  {
    $datos = array(
      'user_usu' => $this->input->post('user_usu'),
      'pass_usu' => $this->input->post('pass_usu')
    );
    $usuario = $this->loginm->validarLogin($datos);
    if ($usuario) {
      $this->session->set_flashdata('success', '¡Bienvenido ' . $usuario->nombre_usu . '!');
      $this->session->set_userdata('usuario', $usuario);
      if ($usuario->tipo_usu == 'admin') {
        redirect(base_url('index.php/Hombres/indexPriv'));
      } else {
        redirect(base_url('index.php/Hombres/indexUsuario'));
      }
    } else {
      $this->session->set_flashdata('error', 'Usuario o contraseña incorrectos');
      redirect(base_url('Index'));
    }
  }

  public function cerrarLogin()
  {
    $this->session->sess_destroy();
    redirect(base_url('Index'));
  }

  public function registrarNuevoUsuario()
  {
    $datos = array(
      'nombre_usu' => $this->input->post('nombre_usu'),
      'user_usu' => $this->input->post('user_usu'),
      'pass_usu' => $this->input->post('pass_usu'),
      'tipo_usu' => 'user'
    );
    $usuario = $this->loginm->registrarse($datos);
    if ($usuario) {
      $response = array(
        'status' => 'success',
        'message' => 'Usuario registrado correctamente'
      );
    } else {
      $response = array(
        'status' => 'error',
        'message' => 'Error al registrar el usuario'
      );
    }
    echo json_encode($response);
  }
}