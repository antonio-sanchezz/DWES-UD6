CREATE DATABASE cocina;

create table recetas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre TEXT,
    dificultad TEXT,
    tipoCocina TEXT,
    duracion INT,
    comensales INT,
    fechaPublicacion DATE,
    imagen TEXT
);

CREATE TABLE usuarios (
    username VARCHAR(50) PRIMARY KEY,
    password VARCHAR(250) NOT NULL
);

INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Roscón de Reyes', 'Media', 'Postres', 50, 4, '2021-09-18', 'roscon-reyes-relleno.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Croquetas de jamón', 'Fácil', 'Carnes', 45, 3, '2020-10-22', 'IMGL7440.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Pasta fresca', 'Media', 'Arroces y Pastas', 20, 2, '2021-06-16', 'pasta_fresca.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Bizcocho de chocolate', 'Fácil', 'Postres', 20, 3, '2021-03-23', 'IMGL8816.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Mega Hot Dog', 'Fácil', 'Carnes', 15, 1, '2020-02-25', 'IMGL8683.jpg'); 
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Cuscús con verduritas al curry', 'Media', 'Verduras', 25, 3, '2021-07-01', 'IMGL8176.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Mermelada de tomate','Fácil','Postres', 55, 2, '2021-02-02', 'IMGL9051.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Salteado de merluza con verduras','Media','Pescados y Mariscos', 20, 2, '2021-08-06', 'salteado_de_merluza_con_pimientos_rojos600.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Lentejas','Fácil','Legumbres', 60, 5, '2021-06-09', 'lentejas_caseras_plato_final.jpg');
INSERT INTO recetas (nombre, dificultad, tipoCocina, duracion, comensales, fechaPublicacion, imagen) VALUES ('Garbanzos con espinacas y bacalao','Media','Legumbres', 55, 4, '2020-06-03', 'garbanzos_con_espinacas_y_bacalao_0.jpg');

INSERT INTO `usuarios` (`username`, `password`) VALUES
('admin', '$2y$10$5W8jHzCDyRtp8ONyae1Ca.naGnkQslWCgYU72Z7uzcqhkmmceS6ni'),
('javi', '$2y$10$5W8jHzCDyRtp8ONyae1Ca.naGnkQslWCgYU72Z7uzcqhkmmceS6ni');