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
?>
<div>
<fieldset>
    <legend>Cadastro de Aluno </legend>
         <form action="cadastrar_alunos.php?cadastrar=true">
             <label>Nome: <input type="text" name="nome" required /> </label>
             <label>Cidade: <input type="text" name="nome" required /> </label>
             <label>CEP: <input type="text" name="nome" required /> </label>
             <label>Bairro: <input type="text" name="nome" required /> </label>
             <label>Rua: <input type="text" name="nome" required /> </label>
             <label>Estado: <input type="text" name="nome" required /> </label>
             <label>Data Nasc: <input type="text" name="nome" required /> </label>
             <button type="submit">Salvar</button>
         </form>
    </legend>
</div>