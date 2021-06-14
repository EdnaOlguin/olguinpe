CREATE DATABASE olguinpe;
USE olguinpe;

CREATE TABLE  Clientes (
IdCliente INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
NombreCliente Varchar (30) Not Null,
Colonia VARCHAR ( 30 ) NOT NULL ,
Calle VARCHAR (20) NOT NULL,
NumDomicilio VARCHAR (10) NOT NULL,
Telefono VARCHAR(10) NOT NULL,
NumMascotas INT (5) NOT NULL
);

INSERT INTO Clientes (NombreCliente,Colonia,Calle,NumDomicilio,Telefono,NumMascotas)
VALUES ('Arturo Perez Sosa','Buenavista', 'Londres', '#239', '8672937610', 2),
('Alicia Dominguez Montoya','Francisco Villa', 'Alfonso Zurita', '#9076', '8675642317', 1),
('Margarita Solar Puente','Las Torres', 'Guaymas', '#4988', '8671032015', 3),
('Jose Cruz Cienfuegos','Maclovio Herrera', 'Guadalupe Victoria', '#5214', '8673481698', 2),
('Montserrat Torres Flores','INFONAVIT Benito Juarez', 'Gral. Mejia', '#102', '8673014599', 1);

