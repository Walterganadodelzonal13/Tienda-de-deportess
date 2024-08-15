<?php
session_start();
$mensaje="";
if(isset($_POST['btnAccion'])){
    switch($_POST['bntAccion']){
        case 'agregar':
if(is_numeric(openssl_decrypt($_POST['id'],COD, KEY))){
    $ID=openssl_decrypt($_POST['id'],COD, KEY);
    $mensaje.="ok.... ID correto".$ID ."<br/>";
}else{
    $mensaje.= "Upss.... ID incorrecto". $ID."<br/>";
break;
}
if(is_numeric(openssl_decrypt($_POST['nombre'],COD, KEY))){
    $NOMBRE=openssl_decrypt($_POST['nombre'],COD, KEY);
    $mensaje.="ok.... nombre correto".$NOMBRE ."<br/>";
}else{
    $mensaje.= "Upss.... nombre incorrecto". $ID."<br/>";
break;
}

if(is_numeric(openssl_decrypt($_POST['cantidad'],COD, KEY))){
    $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD, KEY);
    $mensaje.="ok.... cantidad correto".$CANTIDAD ."<br/>";
}else{
    $mensaje.= "Upss.... cantidad incorrecto". $CANTIDAD."<br/>";
break;
}
if(is_numeric(openssl_decrypt($_POST['precio'],COD, KEY))){
    $PRECIO=openssl_decrypt($_POST['precio'],COD, KEY);
    $mensaje.="ok.... precio correto".$PRECIO ."<br/>";
}else{
    $mensaje.= "Upss.... precio incorrecto". $PRECIO."<br/>";
break;
}
if(!isset($_SESSION['CARRITO'])){
    $_SESSION['CARRITO'] = array();
}
    $producto = array(
        'ID' => $ID,
        'NOMBRE' => $NOMBRE,
        'CANTIDAD' => $CANTIDAD,
        'PRECIO' => $PRECIO
    );
    $_SESSION['CARRITO'][] = $producto;

    $mensaje = print_r($_SESSION,true);
break;
}
}
?>
    
