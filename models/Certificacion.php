<?php 

namespace Model;

class Certificacion extends ActiveRecord {

    protected static $tabla = 'certificacion';
    protected static $columnasDB = ['id', 'nombre', 'ingreso', 'egreso'];

    public $id;
    public $nombre;
    public $ingreso;
    public $egreso;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->ingreso = $args['ingreso'] ?? '';
        $this->egreso = $args['egreso'] ?? '';
    }
}