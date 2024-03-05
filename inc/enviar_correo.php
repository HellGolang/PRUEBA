<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tnom = $_POST['form-nombre'];
    $tcelu = $_POST['form-celular'];
    $tcorreo = isset($_POST['form-email']) ? $_POST['form-email'] : '';
    $tconsulta = isset($_POST['form-mensaje']) ? $_POST['form-mensaje'] : '';
    
    enviar_mensaje ($tnom, $tcorreo, $tcelu, $tconsulta);
    
    echo "Exito";

} else{
    echo "ERROR";
}
 
function enviar_mensaje ($nombre, $correo, $telefono, $mensaje) {
    
    $arr = [
            "clave" => "$2y$11$2EnUpYGaTzdlT8BnKelvzekNQDx.asIKIBAJfA9rhFScpCc0tCx2q",
            "nombre" => $nombre,
            "correo" => $correo,
            "telefono" => $telefono,
            "mensaje" => $mensaje,
            "distrito" => '',
            "documento" => '',
            "web" => 'AGN'
        ];
    
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,"http://agncitas.pe/rrhh/ajax/srv_mensajes_web.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, "data=".json_encode($arr)); 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);// set optional params
    curl_setopt($ch,CURLOPT_TIMEOUT,2000);
    $result=curl_exec($ch);

    curl_close($ch);
    //echo json_encode($result); 
}
 