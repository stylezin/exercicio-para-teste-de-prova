<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST AND GET</title>
</head>
<body>
    <form action="/Lista de exercícios do Luan/processa_form.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Nome"> <br>
        <input type="submit" value="POST">
    </form>
    <form action="/Lista de exercícios do Luan/processa_form.php" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Nome"> <br>
        <input type="submit" value="GET">
    </form>
</body>
</html>