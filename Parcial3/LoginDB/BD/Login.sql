CREATE DATABASE IF NOT EXISTS olguinpe;
USE olguinpe;

CREATE TABLE Sesion
(
IdUsuario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
Nombre VARCHAR(30) NOT NULL,
ApPaterno VARCHAR(20) NOT NULL,
ApMaterno VARCHAR(20) NOT NULL,
Usuario VARCHAR(25) NOT NULL,
Email VARCHAR(30) NOT NULL,
Contrasena VARCHAR(129) NOT NULL, 
);

INSERT INTO sesion (Nombre, ApPaterno,ApMaterno,Usuario,Email,Contrasena)
VALUES ('Edna Lizbeth', 'Olguin', 'Perales', 'edna', 'edna.olguin02@gmail.com', MD5('olguin')),
('Arturo', 'Olguin', 'Perales', 'arturo', 'arturo.olguin07@gmail.com', MD5('perales'));









 

