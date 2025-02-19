<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = $_POST['service'];
    $email = $_POST['email'];

    $to = "winlin@guerrillamailblock.com"; // Adresa ta de email
    $subject = "Nouă comandă de serviciu IT";
    $message = "A fost plasată o comandă pentru: " . $service . "\n\nContact: " . $email;
    $headers = "From: winlin@guerrillamailblock.com"; // Schimbă cu un email valid

    if (mail($to, $subject, $message, $headers)) {
        echo "Comanda a fost trimisă cu succes!";
    } else {
        echo "A apărut o eroare la trimiterea comenzii.";
    }
} else {
    echo "Metodă de cerere invalidă.";
}
?>
