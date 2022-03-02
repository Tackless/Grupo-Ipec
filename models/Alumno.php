<?php 

namespace Model;

class Alumno extends ActiveRecord {
    // Base de datos

    protected static $tabla = 'alumnos';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'plantel', 'modalidad'];

    public $id;
    public $nombre;
    public $apellido;
    public $plantel;
    public $modalidad;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->plantel = $args['plantel'] ?? '';
        $this->modalidad = $args['modalidad'] ?? '';
    }
}