<?php 
/**
 * Drive de conexão.
 */
$dsn = 'mysql';

/**
 * Container do host.
 */
$host = 'mysql';

/**
 * Porta utilizada para acessar o banco de dados.
 */
$port = 3306;

/**
 * Nome do banco de dados criado.
 */
$database = 'project-pdo';

/**
 * Nome do usuário do banco de dados.
 */
$user = 'root';

/**
 * Senha do banco de dados,
 */
$password = 'root';

/**
 * Iniciando o try catch.
 */
try {
    /**
     * Instânciando o objeto do PDO e passando o parametro pelo construtor.
     */
    $pdo = new PDO("{$dsn}:host={$host};port={$port};dbname={$database}", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Throwable | PDOException $e) {
    echo $e->getCode().'</br>';
    echo $e->getMessage();
}