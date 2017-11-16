<?php

    class​ ​Usuarios_model​ ​extends​ CI_Model​
    {
        ​public​ ​function​ _construct​()
        {
            parent​::​_construct​();
        }

        ​//Comprueba si el usuario existe o no ​
        public​ ​function​ verify_user​(​$user​)
        {
            $ssql ​=​ ​"select * from usuarios where usuario='"​.​$user​.​"'";
            $consulta ​=​ mysql_query​(​$ssql​);
            if ​(​mysql_numrows​(​$consulta​)​ ​==​ ​0​)
            {​ ​//el usuario no existe
                ​return​ ​false;
            }​
            ​else
            ​{​ ​//el usuario existe
                ​return​ ​true;
            }
        }

        public function add_usuario($user)
        {
            $this​->​db​->​insert​(​'usuarios'​,​ array(
                ​//el true es para que limpie este campo de inyecciones xss ​'nombre'​=>​$this​->​input​->​post​(​'nombre'​,​TRUE​),
                ​'correo'​=>​$this​->​input​->​post​(​'correo'​,​TRUE​),
                ​'usuario'​=>​$this​->​input​->​post​(​'usuario'​,​TRUE​),
                ​'pass'​=>​$this​->​input​->​post​(​'pass'​,​TRUE​),
                ​'codigo'​=>​'123456',
                ​'estado'​=>​'0')); ​
        }
    }
?>
