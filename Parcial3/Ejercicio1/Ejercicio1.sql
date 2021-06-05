CREATE DATABASE olguinpe;
USE olguinpe;

CREATE TABLE  Clientes (
IdCliente INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Colonia VARCHAR ( 30 ) NOT NULL ,
Calle VARCHAR (20) NOT NULL,
NumDomicilio VARCHAR (10) NOT NULL,
Telefono VARCHAR(10) NOT NULL,
NumMascotas INT (5) NOT NULL
);

INSERT INTO Clientes (Colonia,Calle,NumDomicilio,Telefono,NumMascotas)
VALUES ('Buenavista', 'Londres', '#239', '8672937610', 2),
('Francisco Villa', 'Alfonso Zurita', '#9076', '8675642317', 1),
('Las Torres', 'Guaymas', '#4988', '8671032015', 3),
('Maclovio Herrera', 'Guadalupe Victoria', '#5214', '8673481698', 2),
('INFONAVIT Benito Juarez', 'Gral. Mejia', '#102', '8673014599', 1);

