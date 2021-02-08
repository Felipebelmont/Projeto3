<?
            if (isset($_POST['button'])) {
                $code = $_POST['code'];
                $password = $_POST['password'];

                if ($code = '') {
                    echo "Por Favor, Digite o Número de Acesso ";
                }
                else if ($password = '') {
                    echo " Por Favor, Digite sua Senha ";
                }
            }


            ?>
