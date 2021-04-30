-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2021 a las 03:03:42
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sismedical`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citageneral`
--

CREATE TABLE `citageneral` (
  `Id` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `MotivoConsulta` varchar(255) DEFAULT NULL,
  `Anamnesis` varchar(255) DEFAULT NULL,
  `ExamenFisico` varchar(200) DEFAULT NULL,
  `Talla` double DEFAULT NULL,
  `Peso` double DEFAULT NULL,
  `PresionArterial` double DEFAULT NULL,
  `Pulso` double DEFAULT NULL,
  `MasaCorporal` varchar(10) DEFAULT NULL,
  `PerímetroCefálico` double DEFAULT NULL,
  `Diagnostico` varchar(255) NOT NULL,
  `Tratamiento` varchar(255) NOT NULL,
  `Estado` varchar(15) DEFAULT NULL,
  `FechaSistema` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IdEmpresa` int(11) NOT NULL,
  `IdProfesional` int(11) NOT NULL,
  `IdPaciente` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaodontologicadetalle`
--

CREATE TABLE `citaodontologicadetalle` (
  `Id` int(11) NOT NULL,
  `IdCitaOdontologica` int(11) NOT NULL,
  `IdPiezadental` int(11) NOT NULL,
  `Tratamiento` varchar(255) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaodontologicamaestro`
--

CREATE TABLE `citaodontologicamaestro` (
  `Id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `FechaCita` date NOT NULL,
  `MotivoCita` varchar(45) DEFAULT NULL,
  `FechaSistema` timestamp NOT NULL DEFAULT current_timestamp(),
  `Estado` varchar(15) NOT NULL DEFAULT 'Pendiente',
  `IdPaciente` int(11) NOT NULL,
  `IdProfesional` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `IdProvincia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`Id`, `Nombre`, `IdProvincia`) VALUES
(1, 'Cuenca', 2),
(2, 'Camilo Ponce Enríquez ', 2),
(3, 'Chordeleg', 2),
(4, 'El Pan', 2),
(5, 'Girón', 2),
(6, 'Guachapala', 2),
(7, 'Gualaceo', 2),
(8, 'Nabón', 2),
(9, 'Oña', 2),
(10, 'Paute', 2),
(11, 'Pucara', 2),
(12, 'San Fernando', 2),
(13, 'Santa Isabel', 2),
(14, 'Sevilla de Oro', 2),
(15, 'SígSig', 2),
(16, 'Guaranda', 3),
(17, 'Chimbo', 3),
(18, 'Echeandía', 3),
(19, 'San Miguel', 3),
(20, 'Chillanes', 3),
(21, 'Caluma', 3),
(22, 'Las Naves', 3),
(23, 'Azogues', 4),
(24, 'Cañar', 4),
(25, 'Biblián', 4),
(26, 'La Troncal', 4),
(27, 'El Tambo', 4),
(28, 'Déleg', 4),
(29, 'Suscal ', 4),
(30, 'Tulcán', 5),
(31, 'Espejo', 5),
(32, 'Montúfar', 5),
(33, 'Mira', 5),
(34, 'Bolívar', 5),
(35, 'San Pedro de Huaca', 5),
(36, 'Latacunga', 6),
(37, 'La Maná', 6),
(38, 'Pangua', 6),
(39, 'Pujilí', 6),
(40, 'Salcedo', 6),
(41, 'Saquisilí', 6),
(42, 'Sigchos', 6),
(43, 'Riobamba', 7),
(44, 'Alausí', 7),
(45, 'Colta', 7),
(46, 'Chunchi', 7),
(47, 'Guamote', 7),
(48, 'Guano', 7),
(49, 'Penipe', 7),
(50, 'Pallatanga', 7),
(51, 'Chambo', 7),
(52, 'Cumandá', 7),
(53, 'Ibarra', 8),
(54, 'Antonio Ante', 8),
(55, 'Otavalo', 8),
(56, 'Cotacachi', 8),
(57, 'Pimampiro', 8),
(58, 'San Miguel de Urcuquí', 8),
(59, 'Loja', 9),
(60, 'Macará', 9),
(61, 'Paltas', 9),
(62, 'Puyango', 9),
(63, 'Saraguro', 9),
(64, 'Celica', 9),
(65, 'Catamayo', 9),
(66, 'Espíndola', 9),
(67, 'Gonzanamá', 9),
(68, 'Sozoranga', 9),
(69, 'Zapotillo', 9),
(70, 'Calvas', 9),
(71, 'Chaguarpamba', 9),
(72, 'Olmedo', 9),
(73, 'Pindal', 9),
(74, 'Quilanga ', 9),
(75, 'Quito', 10),
(76, 'Cayambe', 10),
(77, 'Mejía', 10),
(78, 'Pedro Moncayo', 10),
(79, 'Pedro Vicente Maldonado', 10),
(80, 'Puerto Quito ', 10),
(81, 'Rumiñahui', 10),
(82, 'San Miguel de los Bancos', 10),
(83, 'Ambato', 1),
(84, 'Baños', 1),
(85, 'Cevallos', 1),
(86, 'Mocha', 1),
(87, 'Patate', 1),
(88, 'Quero', 1),
(89, 'San Pedro de Pelileo', 1),
(90, 'Santiago de Píllaro', 1),
(91, 'Tisaleo', 1),
(92, 'Santo Domingo', 11),
(93, 'Machala', 12),
(94, 'Arenillas', 12),
(95, 'Atahualpa', 12),
(96, 'El Guabo', 12),
(97, 'Huaquillas', 12),
(98, 'La Concordia ', 12),
(99, 'Marcabelí', 12),
(100, 'Pasaje', 12),
(101, 'Piñas', 12),
(102, 'Portovelo', 12),
(103, 'Rioverde', 12),
(104, 'Santa Rosa', 12),
(105, 'Zaruma', 12),
(106, 'Balsas', 12),
(107, 'Chilla', 12),
(108, 'Las Lajas', 12),
(109, 'Esmeraldas', 13),
(110, 'Eloy Alfaro', 13),
(111, 'Muisne', 13),
(112, 'Quinindé', 13),
(113, 'San Lorenzo', 13),
(114, 'Atacames', 13),
(115, 'Guayaquil', 14),
(116, 'Daule', 14),
(117, 'Durán', 14),
(118, 'Yaguachi', 14),
(119, 'Balzar', 14),
(120, 'Milagro', 14),
(121, 'Naranjal', 14),
(122, 'Samborondón', 14),
(123, 'El Triunfo', 14),
(124, 'Isidro Ayora', 14),
(125, 'Naranjito', 14),
(126, 'El Empalme', 14),
(127, 'Baquerizo Moreno', 14),
(128, 'Pedro Carbo', 14),
(129, 'Salitre', 14),
(130, 'Santa Lucía', 14),
(131, 'Palestina', 14),
(132, 'Balao', 14),
(133, 'Colimes', 14),
(134, 'Playas', 14),
(135, 'Simón Bolívar', 14),
(136, 'Coronel. Marcelino Maridueña', 14),
(137, 'Lomas de Sangentillo', 14),
(138, 'Nobol', 14),
(139, 'Babahoyo', 15),
(140, 'Baba', 15),
(141, 'Buena Fe', 15),
(142, 'Montalvo', 15),
(143, 'Puebloviejo', 15),
(144, 'Quevedo', 15),
(145, 'Quinsaloma', 15),
(146, 'Urdaneta', 15),
(147, 'Valencia', 15),
(148, 'Mocache', 15),
(149, 'Ventanas', 15),
(150, 'Vinces', 15),
(151, 'Palenque', 15),
(152, 'Portoviejo', 16),
(153, 'Bolívar', 16),
(154, 'Chone', 16),
(155, 'El Carmen', 16),
(156, 'Flavio Alfaro', 16),
(157, 'Jama', 16),
(158, 'Jaramijó', 16),
(159, 'Junín', 16),
(160, 'Jipijapa', 16),
(161, 'Manta', 16),
(162, 'Montecristi', 16),
(163, 'Olmedo', 16),
(164, 'Paján', 16),
(165, 'Pedernales', 16),
(166, 'Pichincha', 16),
(167, 'Puerto López ', 16),
(168, 'Rocafuerte', 16),
(169, 'San Vicente', 16),
(170, 'Santa Ana', 16),
(171, 'Sucre', 16),
(172, 'Tosagua', 16),
(173, '24 de mayo', 16),
(174, 'Santa Elena', 17),
(175, 'La Libertad', 17),
(176, 'Salinas', 17),
(177, 'Morona', 18),
(178, 'Gualaquiza', 18),
(179, 'Limón Indanza', 18),
(180, 'Logroño', 18),
(181, 'Pablo Sexto', 18),
(182, 'Palora', 18),
(183, 'Santiago', 18),
(184, 'Sucúa', 18),
(185, 'Huamboya', 18),
(186, 'San Juan Bosco', 18),
(187, 'Taisha', 18),
(188, 'Tiwintza', 18),
(189, 'Tena', 19),
(190, 'Archidona', 19),
(191, 'Carlos Julio Arosemena Tola ', 19),
(192, 'El Chaco', 19),
(193, 'Quijos', 19),
(194, 'Pastaza', 20),
(195, 'Arajuno', 20),
(196, 'Mera', 20),
(197, 'Santa Clara', 20),
(198, 'Zamora', 21),
(199, 'Chinchipe', 21),
(200, 'Nangaritza', 21),
(201, 'Palanda', 21),
(202, 'Paquisha', 21),
(203, 'Yacuambi', 21),
(204, 'Yantzaza', 21),
(205, 'El Pangui', 21),
(206, 'Centinela del Cóndor', 21),
(207, 'Lago Agrío', 23),
(208, 'Cuyabeno', 23),
(209, 'Gonzalo Pizarro', 23),
(210, 'Putumayo', 23),
(211, 'Shushufindi', 23),
(212, 'Sucumbíos', 23),
(213, 'Cascales', 23),
(214, 'Orellana', 23),
(215, 'Aguarico', 23),
(216, 'La Joya de los Sachas', 23),
(217, 'Loreto', 23),
(218, 'San Cristóbal: 5 islas', 24),
(219, 'Isabela: 4 islas', 24),
(220, 'Santa Cruz: 8 islas ', 24),
(221, 'Puyo', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Id` int(11) NOT NULL,
  `Identificacion` varchar(13) NOT NULL,
  `RazonSocial` varchar(200) NOT NULL,
  `NombreComercial` varchar(200) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Telefono` varchar(25) NOT NULL,
  `Celular` varchar(25) NOT NULL,
  `IdProvincia` int(11) NOT NULL,
  `IdCiudad` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Id`, `Identificacion`, `RazonSocial`, `NombreComercial`, `Direccion`, `Correo`, `Telefono`, `Celular`, `IdProvincia`, `IdCiudad`, `deleted_at`) VALUES
(4, '1804322913', 'Danilo', 'Nuela', 'Edit', 'admin@empresarial.com.ec', '6546465', '56498456', 3, 16, 0),
(5, '1804322913', 'Danilo', 'Nuela', 'Centro', 'info@empresarial.com.ec', '6546465', '56498456', 4, 23, 1),
(6, '1804322913', 'Danilo', 'Nuela', 'Edit', 'otro@empresarial.com.ec', '6546465', '56498456', 3, 16, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagencita`
--

CREATE TABLE `imagencita` (
  `Id` int(11) NOT NULL,
  `IdCitaGeneral` int(11) DEFAULT NULL,
  `IdCitaOdontologia` int(11) DEFAULT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Ruta` varchar(100) DEFAULT NULL,
  `Observacion` varchar(100) DEFAULT NULL,
  `Imagen` blob DEFAULT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `Id` int(11) NOT NULL,
  `Identificacion` varchar(13) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Etnia` varchar(100) NOT NULL,
  `EstadoCivil` varchar(100) NOT NULL,
  `Correo` varchar(70) DEFAULT NULL,
  `Telefono` varchar(25) DEFAULT NULL,
  `Celular` varchar(25) DEFAULT NULL,
  `Direccion` varchar(200) NOT NULL,
  `ContactoEmergencia` varchar(250) DEFAULT NULL,
  `AntecedentePatalogico` text DEFAULT NULL,
  `Contrasenia` varchar(100) NOT NULL,
  `GrupoSanguineo` varchar(45) DEFAULT NULL,
  `Ocupacion` varchar(200) DEFAULT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdProvincia` int(11) NOT NULL,
  `IdCiudad` int(11) NOT NULL,
  `Activo` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`Id`, `Identificacion`, `Nombre`, `FechaNacimiento`, `Sexo`, `Etnia`, `EstadoCivil`, `Correo`, `Telefono`, `Celular`, `Direccion`, `ContactoEmergencia`, `AntecedentePatalogico`, `Contrasenia`, `GrupoSanguineo`, `Ocupacion`, `IdEmpresa`, `IdProvincia`, `IdCiudad`, `Activo`, `created_at`, `deleted_at`) VALUES
(7, '1804', 'Lorena Ríos', '1986-05-01', 'F', 'Mestizo', 'Casado', 'lorelou@gmail.com', '98746', '01236', 'La Matriz', '545454545', 'Ninguno', '123', 'por consultar', 'Burocrata', 4, 1, 83, 1, '2021-04-25 21:28:18', NULL),
(8, '1805', 'Javier Vargas', '2992-10-22', 'M', 'Mestizo', 'Soltero', 'jv@gmail.com', '', '', 'Huachi Chico', '', '', '123', '', '', 4, 1, 83, 1, '2021-04-25 22:07:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `Id` int(11) NOT NULL,
  `Insertar` int(11) NOT NULL,
  `Editar` int(11) NOT NULL,
  `Consultar` int(11) NOT NULL,
  `Eliminar` int(11) NOT NULL,
  `IdRol` int(11) NOT NULL,
  `Modulo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezadental`
--

CREATE TABLE `piezadental` (
  `Id` int(11) NOT NULL,
  `Numero` int(2) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE `profesionales` (
  `Id` int(11) NOT NULL,
  `Identificacion` varchar(15) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Especialidad` varchar(200) NOT NULL,
  `Correo` varchar(70) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` varchar(25) DEFAULT NULL,
  `Celular` varchar(25) DEFAULT NULL,
  `FormacionAcademica` text DEFAULT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `Id` int(11) NOT NULL,
  `Codigo` varchar(3) NOT NULL,
  `Nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`Id`, `Codigo`, `Nombre`) VALUES
(1, '18', 'Tungurahua'),
(2, '01', 'Azuay'),
(3, '02', 'Bolívar'),
(4, '03', 'Cañar'),
(5, '04', 'Carchi'),
(6, '05', 'Cotopaxi'),
(7, '06', 'Chimborazo'),
(8, '10', 'Imbabura'),
(9, '11', 'Loja'),
(10, '17', 'Pichincha'),
(11, '23', 'Santo Domingo de los Tsachilas'),
(12, '07', 'El Oro'),
(13, '08', 'Esmeraldas'),
(14, '09', 'Guayas'),
(15, '12', 'Los Ríos'),
(16, '13', 'Manabí'),
(17, '24', 'Santa Elena'),
(18, '14', 'Morona Santiago'),
(19, '15', 'Napo'),
(20, '16', 'Pastaza'),
(21, '19', 'Zamora'),
(22, '21', 'Sucumbíos'),
(23, '22', 'Orellana'),
(24, '20', 'Galápagos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetacitageneral`
--

CREATE TABLE `recetacitageneral` (
  `Id` int(11) NOT NULL,
  `IdCitaGeneral` int(11) NOT NULL,
  `Diagnostico` varchar(255) NOT NULL,
  `Medicamento` varchar(255) NOT NULL,
  `Dosis` varchar(255) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `IdEmpresa` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `Contrasenia` varchar(150) NOT NULL,
  `IdRol` int(11) DEFAULT NULL,
  `Activo` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citageneral`
--
ALTER TABLE `citageneral`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdProfesionalCita` (`IdProfesional`),
  ADD KEY `Fk_IdPacienteCita` (`IdPaciente`),
  ADD KEY `Fk_IdEmpresa` (`IdEmpresa`);

--
-- Indices de la tabla `citaodontologicadetalle`
--
ALTER TABLE `citaodontologicadetalle`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdOdontologiaMaestro` (`IdCitaOdontologica`),
  ADD KEY `Fk_PiezaDental` (`IdPiezadental`);

--
-- Indices de la tabla `citaodontologicamaestro`
--
ALTER TABLE `citaodontologicamaestro`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdPaciente` (`IdPaciente`),
  ADD KEY `Fk_IdProfesional` (`IdProfesional`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdProvincia` (`IdProvincia`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdProvinciaEmp` (`IdProvincia`),
  ADD KEY `Fk_IdCIudadEmp` (`IdCiudad`);

--
-- Indices de la tabla `imagencita`
--
ALTER TABLE `imagencita`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdCitaGeneralImagen` (`IdCitaGeneral`),
  ADD KEY `Fk_IdCitaOdontologiaImagen` (`IdCitaOdontologia`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdEmpresaPaciente` (`IdEmpresa`),
  ADD KEY `Fk_IdCiudadPaciente` (`IdCiudad`),
  ADD KEY `Fk_IdProvinciaPaciente` (`IdProvincia`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdRolPermiso` (`IdRol`);

--
-- Indices de la tabla `piezadental`
--
ALTER TABLE `piezadental`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdEmpresaProfesional` (`IdEmpresa`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `recetacitageneral`
--
ALTER TABLE `recetacitageneral`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdCitaGeneralReceta` (`IdCitaGeneral`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Fk_IdEmpresaRol` (`IdEmpresa`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_IdEmpresaUser` (`IdEmpresa`),
  ADD KEY `Fk_idRolUser` (`IdRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citageneral`
--
ALTER TABLE `citageneral`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `citaodontologicadetalle`
--
ALTER TABLE `citaodontologicadetalle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citaodontologicamaestro`
--
ALTER TABLE `citaodontologicamaestro`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `imagencita`
--
ALTER TABLE `imagencita`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `piezadental`
--
ALTER TABLE `piezadental`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `recetacitageneral`
--
ALTER TABLE `recetacitageneral`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citageneral`
--
ALTER TABLE `citageneral`
  ADD CONSTRAINT `Fk_IdEmpresa` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_IdPacienteCita` FOREIGN KEY (`IdPaciente`) REFERENCES `pacientes` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_IdProfesionalCita` FOREIGN KEY (`IdProfesional`) REFERENCES `profesionales` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `citaodontologicadetalle`
--
ALTER TABLE `citaodontologicadetalle`
  ADD CONSTRAINT `Fk_IdOdontologiaMaestro` FOREIGN KEY (`IdCitaOdontologica`) REFERENCES `citaodontologicamaestro` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_PiezaDental` FOREIGN KEY (`IdPiezadental`) REFERENCES `piezadental` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `citaodontologicamaestro`
--
ALTER TABLE `citaodontologicamaestro`
  ADD CONSTRAINT `Fk_IdPaciente` FOREIGN KEY (`IdPaciente`) REFERENCES `pacientes` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_IdProfesional` FOREIGN KEY (`IdProfesional`) REFERENCES `profesionales` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `Fk_IdProvincia` FOREIGN KEY (`IdProvincia`) REFERENCES `provincias` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `Fk_IdCIudadEmp` FOREIGN KEY (`IdCiudad`) REFERENCES `ciudades` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_IdProvinciaEmp` FOREIGN KEY (`IdProvincia`) REFERENCES `provincias` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagencita`
--
ALTER TABLE `imagencita`
  ADD CONSTRAINT `Fk_IdCitaGeneralImagen` FOREIGN KEY (`IdCitaGeneral`) REFERENCES `citageneral` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_IdCitaOdontologiaImagen` FOREIGN KEY (`IdCitaOdontologia`) REFERENCES `citaodontologicamaestro` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `Fk_IdCiudadPaciente` FOREIGN KEY (`IdCiudad`) REFERENCES `ciudades` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_IdEmpresaPaciente` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_IdProvinciaPaciente` FOREIGN KEY (`IdProvincia`) REFERENCES `provincias` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `Fk_IdRolPermiso` FOREIGN KEY (`IdRol`) REFERENCES `roles` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD CONSTRAINT `Fk_IdEmpresaProfesional` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `recetacitageneral`
--
ALTER TABLE `recetacitageneral`
  ADD CONSTRAINT `Fk_IdCitaGeneralReceta` FOREIGN KEY (`IdCitaGeneral`) REFERENCES `citageneral` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `Fk_IdEmpresaRol` FOREIGN KEY (`IdEmpresa`) REFERENCES `roles` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `Fk_IdEmpresaUser` FOREIGN KEY (`IdEmpresa`) REFERENCES `empresa` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_idRolUser` FOREIGN KEY (`IdRol`) REFERENCES `roles` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
