<?php 

namespace Model;

class HorarioBach extends ActiveRecord {

    protected static $tabla = 'horariosbach';
    protected static $columnasDB = ['id', 'dia','hora', 'horaFin', 'plantel', 'idBach'];

    public $id;
    public $dia;
    public $hora;
    public $horaFin;
    public $plantel;
    public $idBach;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->dia = $args['dia'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->horaFin = $args['horaFin'] ?? '';
        $this->plantel = $args['plantel'] ?? '';
        $this->idBach = $args['idBach'] ?? '';
    }

}