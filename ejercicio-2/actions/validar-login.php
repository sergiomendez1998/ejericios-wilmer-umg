<?php
include ('connection.php');
// check connection
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}
// validate login
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // create sql
    $sql = "SELECT * FROM Usuario WHERE username = '$username' AND password = '$password'";
    // execute sql
    $result = mysqli_query($conn, $sql);
    // check if the query is executed
    if($result){
        // check if the user exists
        if(mysqli_num_rows($result) > 0){
            // login
            session_start();
            $_SESSION['username'] = $username;
            header('Location: index.php');
        }else{
            echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script> 
            Swal.fire({
                title: 'Usuario o contrasena incorrectos!',
                text: 'Intentalo de nuevo',
                icon: 'error',
                confirmButtonText: 'Aceptar'
            }).then(function() {
                window.location = 'login.php';
            });
            </script>";
        }
    }else{
        echo 'query error: ' . mysqli_error($conn);
    }
}
?>