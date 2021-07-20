<?php

include_once('conexao.php');

/**
 * Iniciando o try catch.
 */
try {
    /**
     * Variavel nome para produto.
     */
    $name = 'Microondas';

    /**
     * Variável descrição para o produto.
     */
    $descricao = 'Portátil';

    /**
     * Atribuindo a variável SQL que vai ser executado.
     */
    $sql = "INSERT INTO products (name, description) VALUES (:name, :desc);";

    /**
     * Preparando a consulta do Sql.
     */
    $query = $pdo->prepare($sql);

    /**
     * Fazendo um bind e para inserir na primeira variável.
     */
    $query->bindValue(':name', $name);

    /**
     * Fazendo um bind e para inserir na segunda variável.
     */
    $query->bindValue(':desc', $descricao);

    /**
     * Executando a query do insert.
     */
    $insert = $query->execute();

} catch (Throwable | PDOException $e) {
    echo $e->getCode().'</br>';
    echo $e->getMessage();
}