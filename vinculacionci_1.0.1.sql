
--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `Id` int(11) NOT NULL,
  `CodigoArea` varchar(2) CHARACTER SET utf8 NOT NULL,
  `Nombre` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`Id`, `CodigoArea`, `Nombre`) VALUES
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;


--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `IdProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdProvincia` (`IdProvincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `IdProvincia` FOREIGN KEY (`IdProvincia`) REFERENCES `provincias` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;


ALTER TABLE `personas` ADD `provincia_id` INT NOT NULL AFTER `activo`, ADD `ciudad_id` INT NOT NULL AFTER `provincia_id`; 

update  `personas` set provincia_id =1, ciudad_id=1;

ALTER TABLE `personas` ADD CONSTRAINT `provincia_persona_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias`(`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `personas` ADD CONSTRAINT `ciudad_persona_id_forreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades`(`Id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 

ALTER TABLE `personas` ADD `parroquia` VARCHAR(100) NOT NULL AFTER `activo`, ADD `sexo` VARCHAR(1) NOT NULL AFTER `parroquia`, ADD `f_nacimiento` DATE NOT NULL AFTER `sexo`, ADD `discapacidad` VARCHAR(255) NOT NULL AFTER `f_nacimiento`, ADD `nacionalidad` VARCHAR(100) NOT NULL AFTER `discapacidad`, ADD `movilidad` VARCHAR(255) NOT NULL AFTER `nacionalidad`; 

ALTER TABLE `areasespecificas ` ADD `areageneral_id` BIGINT NOT NULL AFTER `activo`;
update areasespecificas set areageneral_id = 2;
ALTER TABLE `areasespecificas` CHANGE `areageneral_id` `areageneral_id` BIGINT(20) UNSIGNED NOT NULL; 
ALTER TABLE `areasespecificas` ADD CONSTRAINT `area_general_id_foreign` FOREIGN KEY (`areageneral_id`) REFERENCES `areasgenerales`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT; 


