<?php 

namespace Model;

class Horario extends ActiveRecord {

    protected static $tabla = 'horarios';
    protected static $columnasDB = ['id', 'dia','hora', 'horaFin', 'plantel', 'idCarrera'];

    public $id;
    public $dia;
    public $hora;
    public $horaFin;
    public $plantel;
    public $idCarrera;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->dia = $args['dia'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->horaFin = $args['horaFin'] ?? '';
        $this->plantel = $args['plantel'] ?? '';
        $this->idCarrera = $args['idCarrera'] ?? '';
    }

}