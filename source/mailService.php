<?php

    $emailDestino = "info@mediopelodiscos.com";
    $emailOrigen = "From:" . $_POST['email'];
    $subject = "Nueva consulta ingresada. Telefono: " . $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $resultado = mail($emailDestino, $subject, $mensaje, $emailOrigen);

    echo '<p>Gracias por enviarnos su consulta. En breve nos comunicaremos con usted</p><a href="index.html">Click para ir a nuestro sitio</a>';

?>
