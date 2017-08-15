<html>
    <head>
        <title>Testando PHP com Docker</title>
    </head>
    <body>
        <p>
            <?php
                if (isset($_POST['submit'])) {
                    $nome = $_POST['nome'];
                    echo "Seja Bem-Vindo ".$nome;
                }
                else{
                    echo '<form action="" method="post">
                    <p>Digite seu nome:</p>
                    <input name="nome" type="text" />
                    <input name="submit" type="submit" />
                </form>';
                }
            ?>
        </p>
    </body>
</html>
