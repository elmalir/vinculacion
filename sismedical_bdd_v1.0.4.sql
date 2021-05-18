ALTER TABLE `profesionales` ADD `IdProvincia` INT NOT NULL AFTER `Correo`, ADD `IdCiudad` INT NOT NULL AFTER `IdProvincia`; 

ALTER TABLE `profesionales` ADD CONSTRAINT `Fk_IdProvinciaProfesional` FOREIGN KEY (`IdProvincia`) REFERENCES `provincias`(`Id`) ON DELETE NO ACTION ON UPDATE CASCADE; ALTER TABLE `profesionales` ADD CONSTRAINT `Fk_IdCiudadProfesional` FOREIGN KEY (`IdCiudad`) REFERENCES `ciudades`(`Id`) ON DELETE NO ACTION ON UPDATE CASCADE; 
ALTER TABLE `profesionales` ADD CONSTRAINT `Fk_IdRolProfesional` FOREIGN KEY (`IdRol`) REFERENCES `roles`(`Id`) ON DELETE NO ACTION ON UPDATE CASCADE; 
INSERT INTO `roles` (`Id`, `Nombre`, `Estado`, `IdEmpresa`, `deleted_at`) VALUES (NULL, 'Administrador', '1', '1', NULL), (NULL, 'Secretaria', '1', '1', '1');

ALTER TABLE `profesionales` CHANGE `IdEmpresa` `IdEmpresa` INT(11) NULL; 

ALTER TABLE `profesionales` CHANGE `deleted_at` `deleted_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP; 
ALTER TABLE `profesionales` ADD `Activo` INT NOT NULL DEFAULT '1' AFTER `Contrasenia`; 
ALTER TABLE `pacientes` CHANGE `AntecedentePatalogico` `AntecedentePatologico` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL; 
