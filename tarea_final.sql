create table Producto
(
    id                int auto_increment
        primary key,
    nombre_producto   varchar(255) not null,
    precio_producto   int          not null,
    fecha_ingreso     date         not null,
    fecha_vencimiento date         not null
);

create table Sueldo
(
    nombre_empleado  varchar(255) not null,
    sueldo           int          not null,
    id               int auto_increment
        primary key,
    descuento        int          not null,
    sueldo_percibido int          not null,
    fecha_pago       date         null
);

create table Usuario
(
    id       int auto_increment
        primary key,
    nombre   varchar(255) null,
    apellido varchar(255) null,
    username varchar(255) null,
    password varchar(255) null
);


