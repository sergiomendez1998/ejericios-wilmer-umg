<?php
include ('connection.php');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}


if(isset($_POST['actualizar-producto'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre-producto'];
    $precio = $_POST['precio-producto'];
    $fechaIngreso = $_POST['fecha-ingreso'];
    $fechaVencimiento = $_POST['fecha-vencimiento'];

    // create sql
    $sql = "UPDATE Producto SET nombre_producto = '$nombre', precio_producto = '$precio', fecha_ingreso = '$fechaIngreso', fecha_vencimiento = '$fechaVencimiento' WHERE id = $id";
    // execute sql
    $result = mysqli_query($conn, $sql);
    // check if the query is executed
    if($result){
    echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script> 
    Swal.fire({
        title: 'Producto actualizado!',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    }).then(function() {
        window.location = 'mostrarRegistrosProductos.php';
    });
    </script>";
    }else{
        echo 'query error: ' . mysqli_error($conn);
    }
}


?>