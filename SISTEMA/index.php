
<html>

<head>
    <title>SISTEMA ESCOLAR</title>
    <link rel="shortcut icon" href="../img/icon.png" />

    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <?php require "conexao.php" ?>


</head>

<body>
    <div class="logo">
        <img src="../img/icon.png" />
    </div>
    <div class="login">




        <form name="form" method="POST" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <h1>Número de acesso:</h1>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="code"></td>
                </tr>
                <tr>
                    <td>
                        <h1>Senha:</h1>
                    </td>
                </tr>
                <tr>
                    <td><input type="password" name="password" /></td>
                </tr>
                <tr>
                    <td>
                        <input class="input" type="submit" name="button" value="Entrar">

                    </td>
                </tr>

                <?php
                if (isset($_POST['button'])) {

                    $code = $_POST['code'];
                    $password = $_POST['password'];

                    if (empty($code)) {
                        echo "<h2>Por Favor, Digite o Número de Acesso </h2>";
                    } else if (empty($password)) {
                        echo "<h2>Por Favor, Digite sua Senha </h2>";
                    } else {
                        $sql = ("SELECT * FROM login WHERE code = '$code' AND senha = '$password'");
                        
                        $result = mysqli_query ($conexao, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($resul_l = mysqli_fetch_assoc($result)){
                                $status= $resul_l ['status'];
                                $code= $resul_l ['code'];
                                $senha= $resul_l ['senha'];
                                $nome= $resul_l ['status'];
                                $painel= $resul_l ['painel'];
                                if($status == 'inativo'){
                                    echo "<h2>Você está inativo, procure a administração!</h2>";
                                } else {
                                    session_start();
                                    $_SESSION['code'] = $code;
                                    $_SESSION['nome'] = $nome;
                                    $_SESSION['senha'] = $senha;
                                    $_SESSION['painel'] = $painel;
                                   if($painel == 'admin'){
                                       echo "<script language='javascript'> window.location='admin';</script>"; 
                                   } else if ($painel == 'aluno'){
                                    echo "<script language='javascript'> window.location='aluno';</script>";
                                   } else if ($painel == 'professor'){
                                    echo "<script language='javascript'> window.location='professor';</script>";
                                   } else if ($painel == 'portaria'){
                                    echo "<script language='javascript'> window.location='portaria';</script>";
                                   } else if ($painel == 'tesouraria'){
                                    echo "<script language='javascript'> window.location='tesouraria';</script>";
                                   }
                                }
                            }
                        } else {
                            echo "<h2>Dados Incorretos</h2>";
                        }
                    }
                }


                ?>


            </table>
        </form>

    </div>
</body>

</html>