<?php 

namespace Model;

class Alumno extends ActiveRecord {
    // Base de datos

    protected static $tabla = 'alumnos';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'plantel', 'modalidad', 'matricula', 'password'];

    public $id;
    public $nombre;
    public $apellido;
    public $plantel;
    public $modalidad;
    public $matricula;
    public $password;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->plantel = $args['plantel'] ?? '';
        $this->modalidad = $args['modalidad'] ?? '';
        $this->matricula = $args['matricula'] ?? '';
        $this->password = $args['password'] ?? '';
    }

    // Revisa si el Alumno ya existe
    public function existeAlumno() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE matricula = '" . $this->matricula . "' LIMIT 1;";
        $resultado = self::$db->query($query);

        if ($resultado->num_rows) {
            self::$alertas['error'][] = 'Ya hay un Alumno registrado con esa Matricula';
        }

        return $resultado;
    }
    
    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }
}