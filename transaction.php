<?php

/**
 * Incluindo a conexão com banco de dados.
 */
include_once('conexao.php');

/**
 * Iniciando o try catch.
 */
try {
    /**
     * Iniciando a transação pelo banco de dados
     */
    $pdo->beginTransaction();

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

    /**
     * Verificando se deu certo o insert.
     */
    if ($insert) {
        $pdo->commit();
        echo "Sucesso";
    } else { 
        $pdo->rollBack();
        echo "Falhou";
    }
} catch (Throwable | PDOException $e) {
    echo $e->getCode().'</br>';
    echo $e->getMessage();
}