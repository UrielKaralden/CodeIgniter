<?php
class Usuarios_model extends CI_Model
{
    public function _construct()
    {
        parent::_construct();
    }

    public function verify_user()
    {
        $user = $this->input->post('user');
        $ssql = "Select * from usuarios where usuario ='".$user."'";

        /*Cambio para el manual de CodeIgniter
            - Sustituir mysql_query por $this->db->query()
            - Sustituir mysql_num_rows por $consulta->num_rows()
        */
        $consulta = $this->db->query($ssql);
        if(($consulta->num_rows())==0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function add_usuario()
    {
        $new_user = array(
			'usuario' => $this->input->post('usuario', TRUE),
            'correo' => $this->input->post('correo', TRUE),
            'password' => $this->input->post('pass', TRUE));
        $this->db->insert('usuarios', $new_user);
    }

    public function verify_sesion()
    {
        $datos = array(
            'usuario'=>$this->input->post('user',TRUE),
            'password'=>$this->input->post('pass',TRUE)
        );
        $consulta = $this->db->get_where('usuarios', $datos);
    }
}

?>
