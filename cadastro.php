<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <header>
        <h1>Clínica Dr. Gorducha</h1>
        
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="contato.php">Contato</a>
            <?php
            session_start();
            if (isset($_SESSION["nome"])) {
                Echo "<a href='perfil.php'>Perfil</a>";
            };
        ?>
        </div>
        
    </header>

    <main class="content">
        <form action="perfil.php" method="post">
            <h2>Cadastro</h2>
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="number" name="anoNasc" placeholder="Ano Nascimento" required>
            <input type="number" name="peso" placeholder="Peso" step="0.01" required>
            <input type="number" name="altura" placeholder="Altura" step="0.01" required>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>
        <?php
        require "./consultorio.php";

        $cliente = new consultorio();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nome"]) && isset($_POST["anoNasc"]) && ($_POST["anoNasc"] > 1900 && $_POST["anoNasc"] <= date("Y")) && isset($_POST["peso"]) && isset($_POST["altura"])) {
                $cliente->setNome($_POST["nome"]);
                $_SESSION["nome"]=$_POST["nome"];
                $cliente->setAnoNascimento($_POST["anoNasc"]);
                $_SESSION["anoNasc"]=$cliente->getAnoNascimento();
                $cliente->setPeso($_POST["peso"]);
                $_SESSION["peso"]=$cliente->getPeso();
                $cliente->setAltura($_POST["altura"]);
                $_SESSION["altura"]=$cliente->getAltura();
                $_SESSION["cliente"] = $cliente;
            }
        }
        
        ?>
    </main>

</body>

</html>