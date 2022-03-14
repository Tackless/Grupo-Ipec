<?php 

namespace Model;

class Asistencias extends ActiveRecord {

    protected static $tabla = 'asistencia';
    protected static $columnasDB = ['id', 'fecha', 'estatus', 'alumnoId'];

    public $id;
    public $fecha;
    public $estatus;
    public $alumnoId;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->estatus = $args['estatus'] ?? '';
        $this->alumnoId = $args['alumnoId'] ?? '';
    }

}