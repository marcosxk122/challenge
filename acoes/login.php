<?php
    require("conexao.php");
$id = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    if(isset($_POST["email"]) && isset($_POST["senha"]) && $conn != null){
        $result_usuario = "SELECT * FROM bd_usuarios WHERE id = $id AND senha = $senha";
        $resultado_usuario = mysqli_query($conn, $result_usuario);

        if ($resultado_usuario) {
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);

            session_start();
            $_SESSION["usuario"] = array($row_usuario["nome"], $row_usuario["adm"]);
            $_SESSION['msg'] = "Olá, Seja bem vindo ".$row_usuario['nome']."";
            echo "<script>window.location = '../home.php'</script>";
        }else{
            echo "<script>window.location = '../index.php'</script>";
        }
    }else{
        echo "<script>window.location = '../index.php'</script>";
    }
?>
