<?php 

namespace Model;

class Usuario extends ActiveRecord {
    // Base de datos

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'password', 'rol'];

    public $id;
    public $nombre;
    public $apellido;
    public $password;
    public $rol;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->rol = $args['rol'] ?? '0';
    }

    // Mensajes de validación para la creación de la cuenta
    public function validarNuevaCuenta() {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del Usuario es Obligatorio';
        }
        
        if (!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido del Usuario es Obligatorio';
        }
        
        if (!$this->email) {
            self::$alertas['error'][] = 'El E-mail del Usuario es Obligatorio';
        }
        
        if (!$this->password) {
            self::$alertas['error'][] = 'El Password del Usuario es Obligatorio';
        }

        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El Password debe tener al menos 6 caracteres';
        }

        return self::$alertas;
    }

    public function validarLogin() {
        if (!$this->id) {
            self::$alertas['error'][] = 'El Id es obligatorio';
        }
        
        if (!$this->password) {
            self::$alertas['error'][] = 'El Password es obligatorio';
        }

        return self::$alertas;
    }

    public function validarEmail() {
        if (!$this->email) {
            self::$alertas['error'][] = 'El E-mail es obligatorio';
        }
        return self::$alertas;
    }

    public function validarPassword() {
        if (!$this->password) {
            self::$alertas['error'][] = 'El Password es obligatorio';
        }

        if (strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El Password debe tener al menos 6 caracteres';
        }
        
        return self::$alertas;
    }

    // Revisa si el usuario ya existe
    public function existeUsuario() {
        $query = "SELECT * FROM " . self::$tabla . " WHERE email = '" . $this->email . "' LIMIT 1;";

        $resultado = self::$db->query($query);

        if ($resultado->num_rows) {
            self::$alertas['error'][] = 'El Usuario ya está registrado';
        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken() {
        $this->token = uniqid();
    }

    public function comprobarPasswordAndConfirmado($password) {
        // $resultado = password_verify($password, $this->password);

        
        if ($password != $this->password) {
            self::$alertas['error'][] = 'Password Incorrecto o tu cuenta no ha sido confirmada';
        } else {
            return true;
        }
    }
}