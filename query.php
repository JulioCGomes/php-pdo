<?php

include_once('conexao.php');

/**
 * Iniciando o try catch.
 */
try {
    /**
     * Atribuindo a variável SQL que vai ser executado.
     */
    $query = $pdo->query("SELECT * FROM products");

    /**
     * Recuperando de forma Array os dados da tabela.
     */
    $products = $query->fetchAll();

    /**
     * Exibindo o nome dos campos da tabela.
     */
    foreach ($products as $key => $product) {
        echo $product['name'] . '</br>';
    }
} catch (Throwable | PDOException $e) {
    echo $e->getCode().'</br>';
    echo $e->getMessage();
}