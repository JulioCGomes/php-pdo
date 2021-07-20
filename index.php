<?php 

include_once('conexao.php');

/**
 * Iniciando o try catch.
 */
try {
    /**
     * DESENVOLVER UM MENU
     */
} catch (Throwable | PDOException $e) {
    echo $e->getCode().'</br>';
    echo $e->getMessage();
}
