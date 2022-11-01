<?php
//open connection
include ('connection.php');
// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

    $id = $_GET['id'];
    $sql = "DELETE FROM Producto WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if(mysqli_query($conn, $sql)){
        

        header('Location: ../mostrarRegistrosProductos.php');

    }else{
        echo 'query error: ' . mysqli_error($conn);
    }
    mysqli_close($conn);

?>