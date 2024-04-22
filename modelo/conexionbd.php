<?php
class Conexiondb
{
    private static $instance = NULL;

    public static function conectar()
    {
        try {

            if (!isset(self::$instance)) {
                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instance = new PDO('mysql:host=localhost;dbname=criadero', 'root', '', $pdo_options);
            }
            return self::$instance;

        } catch (PDOException $e) {
            echo 'error de conexión a bd: ' . $e;
        }
    }

}