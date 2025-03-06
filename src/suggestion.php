<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a Suggestion</title>
</head>
<body>
    <h1>Submit a Suggestion</h1>
    <form action="submit_suggestion.php" method="post">
        <label for="full_name">Nome Completo (obrigatório):</label>
        <input type="text" id="full_name" name="full_name" required><br><br>

        <label for="email">Endereço de E-mail (obrigatório):</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="neighborhood">Bairro onde mora (obrigatório):</label>
        <input type="text" id="neighborhood" name="neighborhood" required><br><br>

        <label for="phone">Numero de telefone (opcional):</label>
        <input type="tel" id="phone" name="phone"><br><br>

        <label for="address">Endereço completo (opcional):</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="birthdate">Data de Nascimento (opcional):</label>
        <input type="date" id="birthdate" name="birthdate"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
