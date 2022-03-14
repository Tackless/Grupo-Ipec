<?php 

namespace Model;

class Pagos extends ActiveRecord {

    protected static $tabla = 'pagos';
    protected static $columnasDB = ['id', 'fechaInicio','fechaFin', 'estatus', 'alumnoId'];

    public $id;
    public $fechaInicio;
    public $fechaFin;
    public $estatus;
    public $alumnoId;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->fechaInicio = $args['fechaInicio'] ?? '';
        $this->fechaFin = $args['fechaFin'] ?? '';
        $this->estatus = $args['estatus'] ?? '';
        $this->alumnoId = $args['alumnoId'] ?? '';
    }

}