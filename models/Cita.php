<?php 

namespace Model;

class Cita extends ActiveRecord {

    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'nombre','apellido', 'plantel', 'informes', 'telefono', 'email', 'fecha', 'hora'];

    public $id;
    public $nombre;
    public $apellido;
    public $plantel;
    public $informes;
    public $telefono;
    public $email;
    public $fecha;
    public $hora;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->plantel = $args['plantel'] ?? '';
        $this->informes = $args['informes'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->hora = $args['hora'] ?? '';
    }

}