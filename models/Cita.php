<?php 

namespace Model;

class Cita extends ActiveRecord {

    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'nombre','apellido', 'informes', 'telefono', 'email', 'fecha', 'hora'];

    public $id;
    public $nombre;
    public $apellido;
    public $informes;
    public $telefono;
    public $email;
    public $fecha;
    public $hora;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->informes = $args['informes'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->hora = $args['hora'] ?? '';
    }

}