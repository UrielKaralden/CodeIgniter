<?php
    error_reporting (E_ALL ^E_DEPRECATED);

    class Usuarios extends CI_Controller
    {
        public function _construct()
        {
            parent::_construct();
        }

        public function index()
        {
            $this->load->view('usuarios_view');
        }

        public function registro()
        {
            $this->load->view('registro_view');
        }

        public function verify_registro()
        {
            if($this->input->post('submit_reg'))
            //if ​(​$this ->input->post('submit_reg'))
            {
				$this->form_validation->set_rules('usuario','Usuario','required|trim|callback_verify_user');
                $this->form_validation->set_rules('correo','Correo','required|valid_email|trim');
                $this->form_validation->set_rules('pass','Contraseña','required|trim');
                $this->form_validation->set_rules('pass2','Confirmación de contraseña','required|trim|matches[pass]');
                $this->form_validation->set_message('required','El campo %s es obligatorio.');
                $this->form_validation->set_message('valid_email', 'El campo %s no es válido.');
                $this->form_validation->set_message('verify_user', 'El %s ya existe.');
                $this->form_validation->set_message('matches', 'El campo %s no corresponde con el campo %s.');

                if ($this->form_validation->run()== FALSE)
                {
                    $this->registro();
                }
                else
                {
                    $this->usuarios_model->add_usuario();
                    $datos = array(
                        'mensaje'=> 'El usuario se ha registrado correctamente.');
                    $this->load->view('registro_view',$datos);
                }
            }
        }

        function verify_user()
        {
            $usuario = $this->input->post('user');
            $usuario_existe = $this->usuarios_model->verify_user($usuario);
            if($usuario_existe == true)
            {
                $this->load->view('first_view');

            }
            else
            {
                return true;
            }
        }

    }
?>
