<?php
// Obtener el valor del parámetro 'tv' en la URL
$tv = $_GET['tv'];

// Definir las URL de destino para cada canal con nombres descriptivos
$urls = array(
    'guiamx' => 'http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/5e793a7cfbdf780007f7eb75/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTARGETOPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus',
    'startreck' => 'http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/5ec5761aabe4690007f6e047/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTARGETOPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus',
    'cineestelar' => 'http://stitcher-ipv4.pluto.tv/v1/stitch/embed/hls/channel/5dcde437229eff00091b6c30/master.m3u8?deviceType=samsung-tvplus&deviceMake=samsung&deviceModel=samsung&deviceVersion=unknown&appVersion=unknown&deviceLat=0&deviceLon=0&deviceDNT=%7BTARGETOPT%7D&deviceId=%7BPSID%7D&advertisingId=%7BPSID%7D&us_privacy=1YNY&samsung_app_domain=%7BAPP_DOMAIN%7D&samsung_app_name=%7BAPP_NAME%7D&profileLimit=&profileFloor=&embedPartner=samsung-tvplus',
);

// Verificar si el valor de 'tv' existe en el array
if (isset($urls[$tv])) {
    // Redirigir al URL de destino correspondiente
    header("Location: " . $urls[$tv]);
    exit;
} else {
    // Valor no válido, puedes mostrar un mensaje de error o redirigir a una URL predeterminada
    echo "Valor no válido";
}
?>
