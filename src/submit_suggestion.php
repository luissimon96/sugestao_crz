<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $neighborhood = $_POST['neighborhood'];
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';

    // Process the suggestion (e.g., save to database, send email, etc.)
    // For now, we'll just display the submitted data
    echo "<h1>Suggestion Submitted</h1>";
    echo "Nome Completo: " . htmlspecialchars($full_name) . "<br>";
    echo "Endereço de E-mail: " . htmlspecialchars($email) . "<br>";
    echo "Bairro onde mora: " . htmlspecialchars($neighborhood) . "<br>";
    echo "Numero de telefone: " . htmlspecialchars($phone) . "<br>";
    echo "Endereço completo: " . htmlspecialchars($address) . "<br>";
    echo "Data de Nascimento: " . htmlspecialchars($birthdate) . "<br>";
}
?>
