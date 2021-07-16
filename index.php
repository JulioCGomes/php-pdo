<?php 

include_once('conexao.php');

/**
 * Iniciando o try catch.
 */
try {

} catch (Throwable | PDOException $e) {
    echo $e->getCode().'</br>';
    echo $e->getMessage();
}