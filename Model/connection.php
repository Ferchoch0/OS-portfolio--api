<?php
$envPath = dirname(__DIR__) . '/.env';

if (file_exists($envPath)) {
    $envVars = parse_ini_file($envPath);

    if ($envVars) {
        $host = $envVars['DB_HOST'];
        $dbname = $envVars['DB_NAME'];
        $username = $envVars['DB_USER'];
        $pass = $envVars['DB_PASS'];
    } else {
        die("Error al leer el archivo .env");
    }
} else {
    die("Archivo .env no encontrado");
}

try {
    $conn = new mysqli($host, $username, $pass, $dbname, 3306);
    $conn->query("SET time_zone = '-03:00'");
    if ($conn->connect_error) {
        throw new Exception("Error de conexión: " . $conn->connect_error);
    }

} catch (Exception $e) {
    die("Ocurrió un error en la conexión: " . $e->getMessage());
}
?>
