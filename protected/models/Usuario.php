<?php

//class Usuario extends CActiveRecord
class DatoLoginAdministrador extends CActiveRecord
{
    
    
        public static function model($className = __CLASS__) {
            parent::model($className);
        }

        public function obtenerUsuario($nombre)
	{
		$comando = Yii::app()->db->createCommand("CALL obtener_permiso_usuario(:nombre)");
                $comando->bindParam(":nombre", $nombre);
                $comando->execute();
                return $comando;
	}
}