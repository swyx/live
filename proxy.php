<?php
// Captura el parámetro 'tv' de la URL
$tv = $_GET['tv'];

// Define las URLs de destino para cada valor de 'tv'
$destinos = array(
    'univision' => 'https://3.ultimate2019.com/stream/hls/99',
    // Agrega otros destinos aquí
);

if (isset($destinos[$tv])) {
    // URL de destino correspondiente
    $url_destino = $destinos[$tv];

    // Inicializa cURL
    $ch = curl_init();

    // Configura la URL y otros ajustes
    curl_setopt($ch, CURLOPT_URL, $url_destino);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('http-user-agent: Dalvik/2.1.0'));

    // Realiza la solicitud
    $respuesta = curl_exec($ch);

    // Cierra cURL
    curl_close($ch);

    // Devuelve la respuesta al cliente
    echo $respuesta;
} else {
    // Valor no válido, puedes mostrar un mensaje de error o redirigir a una URL predeterminada
    echo "Valor no válido";
}
?>
