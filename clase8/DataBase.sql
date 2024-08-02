create database libreria;

--creacion de las tablas/entidades
create table clientes(
    idCliente int auto_increment primary key,
    cedula varchar(10) not null;
    nombreApellido varchar(50) not null,
    telefono varchar(15) not null
);

create table productos(
    idProducto int auto_increment primary key,
    nombre varchar(15),
    descripcion varchar(50) not null,
    precio double not null,
    estado varchar(5)
);

create table pedidos(
    idPedidos int auto_increment primary key,
    idClientes int not null,
    precio double not null,
    cantidad double not null,
    constraint fk_idCliente foreign key (idCliente) references clientes (idCliente)
);

CREATE TABLE detallePedido (
    idPedido INT NOT NULL,
    idProducto INT NOT NULL,
    precio DOUBLE NOT NULL,
    PRIMARY KEY (idPedido, idProducto),
    FOREIGN KEY (idPedido) REFERENCES pedidos(idPedidos),
    FOREIGN KEY (idProducto) REFERENCES productos(idProducto)
);
