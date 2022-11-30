-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.6.8-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla vitalitycenter.citas: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
INSERT INTO `citas` (`idCita`, `citFecha`, `citHora`, `citPaciente`, `citMedico`, `citConsultorio`, `citEstado`, `citObservaciones`) VALUES
	(1, '2022-07-15', '01:46:16', 1, 1, 7, 'Activa', 'en espera'),
	(2, '2022-07-15', '01:50:15', 2, 2, 7, 'Activa', 'en espera'),
	(3, '2022-07-15', '01:55:08', 3, 4, 5, 'Activa', 'en espera'),
	(4, '2022-07-16', '01:52:28', 4, 3, 6, 'Activa', 'Se detecta una posible alerta de tumor'),
	(5, '2022-08-16', '01:54:20', 4, 3, 6, 'Activa', 'Operación programada'),
	(6, '2022-09-20', '01:57:01', 7, 6, 4, 'Activa', 'Se detectan derivados de la ansiedad'),
	(7, '2022-10-20', '01:59:59', 9, 7, 1, 'Activa', 'Se remite a psiquiatra'),
	(8, '2022-10-15', '02:00:52', 8, 5, 6, 'Activa', 'Se programa la cirugia'),
	(9, '2022-11-08', '06:03:00', 4, 5, 1, 'Inactiva', ''),
	(10, '2022-11-08', '06:05:00', 4, 5, 1, 'Inactiva', ''),
	(11, '2022-11-08', '06:05:00', 4, 5, 1, 'Activa', ''),
	(12, '2022-11-08', '06:05:00', 4, 5, 1, 'Activa', ''),
	(13, '2022-03-12', '07:08:00', 2, 3, 4, 'Activa', ''),
	(14, '2022-11-10', '07:19:00', 2, 3, 1, 'Activa', 'Paciente'),
	(15, '2022-11-17', '09:25:00', 2, 5, 8, 'Inactiva', 'La cita se pospuso.'),
	(16, '2022-11-17', '03:21:00', 4, 5, 1, 'Inactiva', 'La cita fue cancelada.'),
	(17, '2022-11-23', '06:05:00', 2, 3, 4, 'Activa', 'El paciente fue revisado y no tuve percanses.'),
	(18, '2022-11-23', '07:17:00', 2, 2, 6, 'Activa', 'El paciente salio ileso');
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;

-- Volcando datos para la tabla vitalitycenter.consultorios: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `consultorios` DISABLE KEYS */;
INSERT INTO `consultorios` (`idConsultorio`, `conNombre`) VALUES
	(6, 'Cirugia'),
	(7, 'Examenes'),
	(5, 'Medico General'),
	(8, 'Planificación familiar'),
	(1, 'Psicologia'),
	(4, 'Psiquiatria');
/*!40000 ALTER TABLE `consultorios` ENABLE KEYS */;

-- Volcando datos para la tabla vitalitycenter.medicos: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
INSERT INTO `medicos` (`idMedico`, `medIdentificacion`, `medNombres`, `medApellidos`, `medEspecialidad`, `medTelefono`, `medCorreo`) VALUES
	(1, '10', 'Juan', 'Torres', 'Urologia', '123', 'juan@'),
	(2, '20', 'David', 'Ramirez', 'Urologia', '321', 'david@'),
	(3, '30', 'Yuliza', 'Suarez', 'Neurologia', '432', 'yuli@'),
	(4, '40', 'Natalia', 'Suarez', 'Fisioterapia', '1432', 'nat@'),
	(5, '50', 'Samuel', 'Rios', 'Neurologia', '4333', 'sam@'),
	(6, '60', 'Omar', 'Hincapie', 'Psiquiatria', '6545', 'omar@'),
	(7, '70', 'Juan', 'Medina', 'Psicologia', '987', 'Bry@'),
	(8, '311', 'Tenma', 'dr', 'cirujano', '4444', 'tenma@monster.com'),
	(9, '123133', 'Donnald', 'dr', 'Psicologo', '3223', 'juanncho@aa.com'),
	(20, '11111', 'Maricella', 'Corrales', 'Neurologia', '121212', 'mar@'),
	(21, '1231', 'Tenma', 'mcwire', 'cirujano', '121212', 'johan@monster.com'),
	(23, '1212', 'alejandro', 'gutierrez', 'cirujano', '1212121', 'ale@gmail.com'),
	(24, '21314', 'Juana', 'Salazar', 'cirujano', '313132', 'ajsa@gmail.com');
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;

-- Volcando datos para la tabla vitalitycenter.pacientes: ~40 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`idPaciente`, `pacIdentificacion`, `pacNombres`, `pacApellidos`, `pacFechaNacimiento`, `pacSexo`) VALUES
	(1, '10', 'Juan', 'Escobar', '2001-11-05', 'Hombre'),
	(2, '20', 'David', 'Corrales', '2001-07-15', 'Hombre'),
	(3, '30', 'Natalia', 'Pabón', '2001-07-15', 'Mujer'),
	(4, '40', 'Isabella', 'Angel', '2001-05-16', 'Mujer'),
	(5, '50', 'Yuliza', 'Alejandra', '2002-03-10', 'Mujer'),
	(6, '60', 'Manuela', 'Escobar', '2002-03-25', 'Mujer'),
	(7, '70', 'Guadalupe', 'Pabón', '2002-03-05', 'Mujer'),
	(8, '80|', 'Samuel', 'Angel', '2002-08-15', 'Hombre'),
	(9, '90', 'Bryan', 'Arias', '2003-03-01', 'Hombre'),
	(10, '100', 'David', 'Escobar', '2001-11-05', 'Hombre'),
	(11, '0506', 'Natalia', 'Pabón', '2022-08-24', 'Mujer'),
	(12, '1222', 'santiago', 'gomez', '2002-05-11', 'Hombre'),
	(13, '11213', 'Sebastian', 'Gomez', '2022-08-25', 'Hombre'),
	(16, '3108', 'Sofia', 'Gomez', '2022-08-24', 'Mujer'),
	(17, '101010', 'Maricella', 'Corrales', '2022-03-21', 'Mujer'),
	(20, '2022', 'Andres', 'Corrales', '2022-03-21', 'Hombre'),
	(21, '3223', 'Freddy', 'Escobar', '2022-07-25', 'Hombre'),
	(22, '55', 'Elizabeth', 'doblas', '2022-09-24', 'Mujer'),
	(23, '22', 'Jacob', 'Montoya', '2020-03-12', 'Hombre'),
	(24, '3023', 'arnold', 'scwazeiner', '2022-10-01', 'Hombre'),
	(26, '2200', 'Kurt', 'Kobain', '2022-10-01', 'Hombre'),
	(28, '22000', 'Man', 'Kobain', '2022-10-01', 'Hombre'),
	(29, '00000', 'Victor', 'Frankesntein', '2022-09-13', 'Hombre'),
	(31, '212112', 'Ax', 'rose', '2022-09-07', 'Hombre'),
	(32, '12121212', 'cindy', 'loper', '2022-09-10', 'Mujer'),
	(34, '131313', 'madonna', 'l.', '2022-09-10', 'Mujer'),
	(35, '111111', 'Taylor', 'Swift', '2022-10-03', 'Mujer'),
	(36, '323212', 'Taylor', 'Corey', '2022-10-03', 'Hombre'),
	(38, '557', 'Bill', 'gates', '2022-10-03', 'Hombre'),
	(39, '9999', 'Steve', 'gates', '2022-10-06', 'Hombre'),
	(40, '45', 'Steve', 'aoki', '2022-10-06', 'Hombre'),
	(41, '4512', 'Steve', 'bosnia', '2022-10-06', 'Hombre'),
	(42, '411', 'Steve', 'minecraft', '2022-10-06', 'Hombre'),
	(45, '611', 'Luffy', 'Monkey D', '2022-09-09', 'Hombre'),
	(46, '61111', 'garp', 'Monkey D', '2022-09-09', 'Hombre'),
	(47, '312', 'Dragon', 'D', '2022-09-08', 'Hombre'),
	(48, '44341', 'Ed', 'd', '2022-09-16', 'Mujer'),
	(50, '2020', 'Feish', 'cha', '2022-10-01', 'Mujer'),
	(51, '4321123', 'edward', 'cha', '2022-10-04', 'Hombre'),
	(52, '1233', 'alphonse', 'elric', '2022-10-11', 'Hombre'),
	(54, '133113', 'John Henry', 'Gomez', '2022-09-14', 'Hombre'),
	(55, '112121', 'juan', 'Gomez', '2022-09-01', 'Hombre');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando datos para la tabla vitalitycenter.roles: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
	(1, 'Director General'),
	(2, 'Psicologia'),
	(3, 'Psiquiatria'),
	(4, 'Doctor'),
	(5, 'Enfermeria'),
	(6, 'Paciente');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando datos para la tabla vitalitycenter.usuarios: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idUsuario`, `usuLogin`, `usuPassword`, `usuEstado`, `usuRol`) VALUES
	(1, 'juan33', '0000', 'Activo', 'Paciente'),
	(2, 'juan12', '123', 'Activo', 'Paciente'),
	(3, 'david11', '123', 'Activo', 'Paciente'),
	(4, 'natalia05', '321', 'Activo', 'Paciente'),
	(5, 'Isabella1', '654', 'Activo', 'Paciente'),
	(6, 'Yuliza1', '456', 'Activo', 'Paciente'),
	(8, 'guadalupe1', '789', 'Activo', 'Paciente'),
	(10, 'samu1', '987', 'Inactivo', 'Paciente'),
	(52, 'andrea', '213', 'Inactivo', 'Paciente'),
	(55, 'SenaSofia', '2211', 'Activo', 'Directivo'),
	(56, 'Jairo', '456', 'Activo', 'Paciente'),
	(59, 'Key', '111', 'Activo', 'Directivo'),
	(63, 'masterKey', '123', 'Activo', 'Directivo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
