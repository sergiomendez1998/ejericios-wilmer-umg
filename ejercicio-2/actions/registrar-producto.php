<?php
include ('connection.php');
// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}
// check if the form is submitted for registrar-producto
if(isset($_POST['registrar-producto'])){
    $nombre = $_POST['nombre-producto'];
    $precio = $_POST['precio-producto'];
    $fechaIngreso = $_POST['fecha-ingreso'];
    $fechaVencimiento = $_POST['fecha-vencimiento'];

    // create sql
    $sql = "INSERT INTO Producto(nombre_producto, precio_producto, fecha_ingreso, fecha_vencimiento) VALUES('$nombre', '$precio', '$fechaIngreso', '$fechaVencimiento')";
    // execute sql
    $result = mysqli_query($conn, $sql);
    // check if the query is executed
    if($result){
    echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script> 
    Swal.fire({
        title: 'Producto registrado!',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    }).then(function() {
        window.location = 'registrar-producto.php';
    });
    </script>";
    }else{
        echo 'query error: ' . mysqli_error($conn);
    }
}
//close connection
mysqli_close($conn);
?>