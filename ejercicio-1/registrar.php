<?php
include ("connection.php");
if(isset($_POST['register'])){
$nombre = $_POST['nombre'];
$sueldo = $_POST['sueldo'];
$descuento = $_POST['descuento'];
$sueldoPercibido = $_POST['sueldo-percibido'];
$fecha = $_POST['fecha'];


$sql = "INSERT INTO Sueldo (NOMBRE_EMPLEADO, SUELDO, DESCUENTO, SUELDO_PERCIBIDO,FECHA_PAGO) VALUES ('$nombre', '$sueldo', '$descuento', '$sueldoPercibido', '$fecha')";
$result = mysqli_query($conn, $sql);
if ($result) {

    echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
    echo "<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Registro exitoso',
        showConfirmButton: false,
        timer: 1500
    }) 
    </script>";

    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "not working";
}
mysqli_close($conn);
}
?>