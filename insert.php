<?php

include_once('conexao.php');

/**
 * Iniciando o try catch.
 */
try {
    /**
     * Atribuindo a variável SQL que vai ser executado.
     */
    $sql = "INSERT INTO products (name, description) VALUES ('TV', '42 polegadas');";
    
    /**
     * Executando a query passada.
     */
    $insert = $pdo->exec($sql);

    /**
     * Retornando a mensagem para o usuário.
     */
    echo "Inserção do produto efetuado com sucesso.";
} catch (Throwable | PDOException $e) {
    echo $e->getCode().'</br>';
    echo $e->getMessage();
}