<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Clínica Dra. Gorducha</h1>
        
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="contato.php">Contato</a>
        </div>
        
    </header>

    <main class="content">
        <form action="cadastro.php" method="POST">
            <h2>Cadastro</h2>
            <div class="box">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="number" name="anoNasc" placeholder="Ano Nascimento" required>
            <input type="number" name="peso" placeholder="Peso" step="0.01" required>
            <input type="number" name="altura" placeholder="Altura" step="0.01" required>
            </div>
            <div class="btn">
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
            </div>
        </form>
        <?php
        require "./consultorio.php";
        echo "<div class='resposta'><p>";
        $cliente = new consultorio();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nome"]) && isset($_POST["anoNasc"]) && ($_POST["anoNasc"] > 1900 && $_POST["anoNasc"] <= date("Y")) && isset($_POST["peso"]) && isset($_POST["altura"])) {
                $cliente->setNome($_POST["nome"]);
                $cliente->setAnoNascimento($_POST["anoNasc"]);
                $cliente->setPeso($_POST["peso"]);
                $cliente->setAltura($_POST["altura"]);
                echo $cliente->__toString();
            }
        }
        echo "</p></div>";
        ?>
    </main>

</body>

</html>