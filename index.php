<?php
// Archivo index.php
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    // Aquí guardarás el código en tu base de datos o iniciarás el proceso para intercambiarlo por un token de acceso
    echo "Authorization code received: " . $code;
} else {
    echo "No authorization code received.";
}
?>
