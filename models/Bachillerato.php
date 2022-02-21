<?php 

namespace Model;

class Bachillerato extends ActiveRecord {

    protected static $tabla = 'bachillerato';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'ingreso', 'egreso'];

    public $id;
    public $nombre;
    public $descripcion;
    public $ingreso;
    public $egreso;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->ingreso = $args['ingreso'] ?? '';
        $this->egreso = $args['egreso'] ?? '';
    }

}