<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica</title>
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

</body>

</html>