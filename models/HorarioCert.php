<?php 

namespace Model;

class HorarioCert extends ActiveRecord {

    protected static $tabla = 'horarioscert';
    protected static $columnasDB = ['id', 'dia','hora', 'horaFin', 'plantel', 'idCert'];

    public $id;
    public $dia;
    public $hora;
    public $horaFin;
    public $plantel;
    public $idCert;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->dia = $args['dia'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->horaFin = $args['horaFin'] ?? '';
        $this->plantel = $args['plantel'] ?? '';
        $this->idCert = $args['idCert'] ?? '';
    }

}