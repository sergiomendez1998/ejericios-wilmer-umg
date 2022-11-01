<?php
include ('connection.php');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}


if(isset($_POST['actualizar-usuario'])){
    $id = $_GET['id'];
    $first_name = $_POST['nombre-usuario'];
    $last_name = $_POST['apellido-usuario'];
    $username = $_POST['username'];  
    $password = md5($_POST['password']);

    // create sql
    $sql = "UPDATE Usuario SET nombre = '$first_name', apellido = '$last_name', username = '$username', password = '$password' WHERE id = $id";
    // execute sql
    $result = mysqli_query($conn, $sql);
    // check if the query is executed
    if($result){
    echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script> 
    Swal.fire({
        title: 'contrasena Cambiada!',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    }).then(function() {
        window.location = 'mostrarRegistrosUsuarios.php';
    });
    </script>";
    }else{
        echo 'query error: ' . mysqli_error($conn);
    }
}


?>