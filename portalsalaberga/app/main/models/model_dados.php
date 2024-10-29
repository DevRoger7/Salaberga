<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

function pre_cadastro($email, $cpf)
{

    require_once('../../config/Database.php');
    
    try {
        // Usando prepared statements para prevenir SQL injection
        $stmtSelect = "SELECT email, cpf FROM usuario WHERE email = :email AND cpf = :cpf";
        $stmt = $conexao->prepare($stmtSelect);

        // Bind dos valores
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':cpf', $cpf);

        // Executa a consulta
        $stmt->execute();
        $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if (!empty($dados)) {
            //se os dados tiverem corretos 
            $_SESSION['precadastro'] = true;
            header('location:../controller_cadastro/controller_pre_cadastro.php?certo');
            exit();
        } else {
            //se os dados n estiverem corretos
            header('location:../controller_cadastro/controller_pre_cadastro.php?erro');
            exit();
        }
    } catch (PDOException $e) {
        error_log("Erro no banco de dados: " . $e->getMessage());
        echo "Ocorreu um erro ao processar sua solicitação.";
    }
}


function cadastrar($nome, $cpf, $email, $senha)
{
    require_once('../../config/Database.php');


    try {
        // Primeiro, fazer o SELECT para verificar
        $querySelect = "SELECT id FROM usuario WHERE email = :email AND cpf = :cpf";
        $stmtSelect = $conexao->prepare($querySelect);
        $stmtSelect->bindParam(':email', $email);
        $stmtSelect->bindParam(':cpf', $cpf);
        $stmtSelect->execute();
        $result = $stmtSelect->fetchAll(PDO::FETCH_ASSOC);
        

        if (!empty($result)) {
            // Usuário já existe, realizar update da senha
            $queryUpdate = "
                UPDATE usuario SET senha = MD5(:senha) WHERE email = :email AND (senha IS NULL)
            ";

            $stmtUpdate = $conexao->prepare($queryUpdate);
            $stmtUpdate->bindParam(':email', $email);
            $stmtUpdate->bindParam(':senha', $senha);
            $stmtUpdate->execute();
            $resul1t = $stmtUpdate->fetchAll(PDO::FETCH_ASSOC);


            // Verifica se a senha foi alterada
            if ($stmtUpdate->rowCount() > 0) {
                // Inserir o cliente associado ao usuário
                $queryInsert = "
                    INSERT INTO cliente (nome, id_usuario)
                    VALUES (:nome, :id_usuario)
                ";

                $stmtInsert = $conexao->prepare($queryInsert);
                $stmtInsert->bindParam(':nome', $nome);
                $stmtInsert->bindParam(':id_usuario', $result[0]['id']);
                $stmtInsert->execute();

                header('Location: ../../views/autenticação/login.php');
                exit();
            } else {
                // usuário já existe
                header('Location: ../../controllers/controller_cadastro/controller_cadastro.php?erro2');
                exit();
            }
        } else {
            // usuário não existe
            header('Location: ../../controllers/controller_cadastro/controller_cadastro.php?erro1');
            exit();
        }
    } catch (PDOException $e) {
        error_log("Erro no banco de dados: " . $e->getMessage());
        echo "Erro no banco de dados: " . $e->getMessage();
    }
}

function login($email, $senha)
{
    require_once('../../config/Database.php');
    try {

        // Primeiro, fazer o SELECT para verificar
        $querySelect = "SELECT email, senha, tipo FROM usuario WHERE email = :email AND senha = MD5(:senha)";
        $stmtSelect = $conexao->prepare($querySelect);
        $stmtSelect->bindParam(':email', $email);
        $stmtSelect->bindParam(':senha', $senha);
        $stmtSelect->execute();
        $result = $stmtSelect->fetch(PDO::FETCH_ASSOC);
        
                
        if (!empty($result) && $result['tipo'] == 'aluno' ) {
            $_SESSION['login'] = true;
            $_SESSION['aluno'] = true;
            header('Location: ../controller_login/controller_login.php?login=a');
            exit();
        } else if (!empty($result) && $result['tipo'] == 'professor') {
            $_SESSION['login'] = true;
            $_SESSION['professor'] = true;
            header('Location: ../controller_login/controller_login.php?login=p');
            exit();
        } else if (empty($result)) {
            header('Location: ../controller_login/controller_login.php?login=erro');
            exit();
        }

    } catch (PDOException $e) {
        error_log("Erro no banco de dados: " . $e->getMessage());
        echo "Erro no banco de dados: " . $e->getMessage();
    }
}
?>