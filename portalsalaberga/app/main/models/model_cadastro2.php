<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function cadastrar($nome, $cpf, $email, $senha){
    require_once('../../config/Database.php');


    try {
        // Primeiro, fazer o SELECT para verificar
        $querySelect = "SELECT id FROM usuario WHERE email = :email AND cpf = :cpf";
        $stmtSelect = $conexao->prepare($querySelect);
        $stmtSelect->bindParam(':email', $email);
        $stmtSelect->bindParam(':cpf', $cpf);
        $stmtSelect->execute();
        $result = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
       
        if (!empty($result)) {
            // Usuário já existe, realizar update da senha
            $queryUpdate = "
                UPDATE usuario SET senha = MD5(:senha) WHERE email = :email AND (senha IS NULL OR senha = '')
            ";
            
            $stmtUpdate = $conexao->prepare($queryUpdate);
            $stmtUpdate->bindParam(':email', $email);
            $stmtUpdate->bindParam(':senha', $senha);
            $stmtUpdate->execute();
            
            // Verifica se a senha foi alterada
            if ($stmtUpdate->rowCount() > 0) {
                echo 'oi';
                // Inserir o cliente associado ao usuário
                $queryInsert = "
                    INSERT INTO cliente (nome, telefone, tipo, id_usuario)
                    VALUES (:nome, NULL, NULL, :id_usuario)
                ";
                 
                $stmtInsert = $conexao->prepare($queryInsert);
                $stmtInsert->bindParam(':nome', $nome);
                $stmtInsert->bindParam(':id_usuario', $result[0]['id']);
                $stmtInsert->execute();
                
                header('Location: ../../views/autenticação/login.php');
                exit();
            } else {
                // usuário já existe
                header('Location: ../../views/autenticação/cadastro.php?login=erro2');
                exit();
            }
        } else {
            // usuário não existe
            header('Location: ../../views/autenticação/cadastro.php?login=erro1');
            exit();
        }
    } catch (PDOException $e) {
        error_log("Erro no banco de dados: " . $e->getMessage());
        echo "Erro no banco de dados: " . $e->getMessage();
        
    }
}
?>