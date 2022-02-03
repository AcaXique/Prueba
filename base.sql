CREATE DATABASE crud;
USE crud;
 

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoPaterno` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `apellidoMaterno` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `sexo` enum('masculino','femenino') COLLATE utf8_spanish2_ci NOT NULL,
  `estatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;




INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `sexo`, `estatus`) VALUES
(1, 'Wendy', 'Aca', 'Xique', 'femenino', 1),
(2, 'Marco', 'Cervantes', 'Cuahquentzi', 'masculino', 1),
(3, 'Karina', 'Velez', 'Garcia', 'femenino', 1),
(4, 'Jose Miguel', 'Hernandez', 'Aguilar', 'masculino', 1),
(5, 'Naty', 'Flores', 'Juarez', 'femenino', 1),
(6, 'Martin', 'Cisneros', 'Trejo', 'masculino', 1),
(7, 'Rafael', 'Sanchez', 'Lopez', 'masculino', 1),
(8, 'Alvaro', 'Campos', 'Gregorio', 'masculino', 1),
(9, 'Brenda', 'Flores', 'Perez', 'femenino', 1),
(10, 'Jose', 'Lopez', 'Lopez', 'masculino', 1),
(11, 'Miguel', 'Robles', 'Robles', 'masculino', 1);



ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);


ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;



