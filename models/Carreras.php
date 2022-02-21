<?php 

namespace Model;

class Carreras extends ActiveRecord {

    protected static $tabla = 'carreras';
    protected static $columnasDB = ['id', 'nombre', 'descripcion', 'egreso', 'ingreso'];

    public $id;
    public $nombre;
    public $descripcion;
    public $egreso;
    public $ingreso;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->egreso = $args['egreso'] ?? '';
        $this->ingreso = $args['ingreso'] ?? '';
    }

}