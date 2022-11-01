<?php
include ('connection.php');
// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}
// check if the form is submitted
if(isset($_POST['register'])){
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $username = $_POST['username'];  
    $password = md5($_POST['password']);
    // create sql
    $sql = "INSERT INTO Usuario(nombre, apellido, username, password) VALUES('$first_name', '$last_name', '$username', '$password')";
    // execute sql
    $result = mysqli_query($conn, $sql);
    // check if the query is executed
    if($result){
    echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script> 
    Swal.fire({
        title: 'Usuario registrado!',
        text: 'Ahora puedes ingresar',
        icon: 'success',
        confirmButtonText: 'Aceptar'
    }).then(function() {
        window.location = 'login.php';
    });
    </script>";
    }else{
        echo 'query error: ' . mysqli_error($conn);
    }
}
//close connection
mysqli_close($conn);
?>