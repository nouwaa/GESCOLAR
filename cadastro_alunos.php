<?php
/**
 * Arquivo para registrar os dados de um aluno no vanco de dados.
 */
if(isset($_REQUEST['cadstrar']))
{
    try
    {
        include 'cludes/conexao.php';

        $sql = "INSERT INTO alunos (nome,data_nascimento, sexo,
                                    genero, cpf, cidade, estado,
                                    bairro, rua,cep)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? ,?) ";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $_REQUEST['nome']);
        $stmt->bindParam(1, $_REQUEST['data_nascimento']);    
        $stmt->bindParam(1, $_REQUEST['sexo']);    
        $stmt->bindParam(1, $_REQUEST['genero']);
        $stmt->bindParam(1, $_REQUEST['cpf']);    
        $stmt->bindParam(1, $_REQUEST['cidade']);    
        $stmt->bindParam(1, $_REQUEST['estado']);    
        $stmt->bindParam(1, $_REQUEST['bairro']);    
        $stmt->bindParam(1, $_REQUEST['rua']);    
        $stmt->bindParam(1, $_REQUEST['cep']);
        $stmt->execute();    

    } catch(exception $e) {
        echo $e->getMessage();
    }
}