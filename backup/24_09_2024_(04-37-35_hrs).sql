SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS proyedos;

USE proyedos;

DROP TABLE IF EXISTS asistencia;

CREATE TABLE `asistencia` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ide` varchar(255) NOT NULL,
  `idestudiante` int(30) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `qr` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `evento` varchar(255) NOT NULL,
  `asistencia` varchar(255) NOT NULL,
  `disp` int(2) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `disc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO asistencia VALUES("5","1","2","Debora Maria","Mata Moros","Secretaria","","0000-00-00 00:00:00","Evento de graduacion","Sin presentarse","0","31568481","Ninguna");
INSERT INTO asistencia VALUES("6","1","1","Nestor Gabriel","Montiel Rivero","Acta","","0000-00-00 00:00:00","Evento de graduacion","Sin presentarse","0","30460082","Ninguna");



DROP TABLE IF EXISTS cronologia;

CREATE TABLE `cronologia` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `accion1` varchar(255) NOT NULL,
  `accion2` varchar(255) NOT NULL,
  `accion3` varchar(255) NOT NULL,
  `accion4` varchar(255) NOT NULL,
  `accion5` varchar(255) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `disp` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO cronologia VALUES("1","Usuario escuela agrego a un personal llamado Alberto Jose","","","","","","0");
INSERT INTO cronologia VALUES("2","Usuario escuela agrego a un personal llamado Jose David","","","","","","0");
INSERT INTO cronologia VALUES("3","Usuario escuela agrego un campo llamado Salon de reuniones","","","","","","0");
INSERT INTO cronologia VALUES("4","Usuario escuela agrego un campo llamado Sala de graduacion","","","","","","0");
INSERT INTO cronologia VALUES("5","Usuario escuela agrego un evento llamado Evento de graduacion","","","","","","0");
INSERT INTO cronologia VALUES("6","Usuario escuela agrego un estudiante llamado Nestor Gabriel","","","","","","0");
INSERT INTO cronologia VALUES("7","Usuario escuela modifico al estudiante Nestor Gabriel","","","","","","0");
INSERT INTO cronologia VALUES("8","Usuario escuela agrego un estudiante llamado Debora Maria","","","","","","0");
INSERT INTO cronologia VALUES("9","agrego un proximo evento llamado","Nestor Gabriel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("10","agrego un proximo evento llamado","Debora Maria","El usuario","","","user","0");
INSERT INTO cronologia VALUES("11","agrego un proximo evento llamado","Debora Maria","El usuario","","","user","0");
INSERT INTO cronologia VALUES("12","agrego un proximo evento llamado","Debora Maria","El usuario","","","user","0");
INSERT INTO cronologia VALUES("13","agrego un proximo evento llamado","Debora Maria","El usuario","","","user","0");
INSERT INTO cronologia VALUES("14","agrego un proximo evento llamado","Nestor Gabriel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("15","Usuario super modifico un evento llamado Evento de graduacion","","","","","","0");
INSERT INTO cronologia VALUES("16","Usuario super modifico un evento llamado Evento de graduacion","","","","","","0");



DROP TABLE IF EXISTS espacios;

CREATE TABLE `espacios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Capacidad` varchar(70) NOT NULL,
  `Disponibilidad` varchar(70) NOT NULL,
  `lugar` varchar(70) NOT NULL,
  `Contacto` varchar(70) NOT NULL,
  `foto` varchar(70) NOT NULL,
  `disp` int(10) NOT NULL,
  `ide` int(11) NOT NULL,
  `dispo` int(11) NOT NULL,
  `tempo` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO espacios VALUES("1","600 personas","Disponible","Salon de reuniones","","files/escuela/66f292316aa5dfoto.png","0","17","0","0000-00-00");
INSERT INTO espacios VALUES("2","1000 personas","Ocupado","Sala de graduacion","","files/escuela/66f2926a33db0foto.png","0","17","0","2024-09-30");



DROP TABLE IF EXISTS estudiantes;

CREATE TABLE `estudiantes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ide` int(20) NOT NULL,
  `nombres` varchar(90) NOT NULL,
  `apellidos` varchar(90) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `documento` varchar(1) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `pnf` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `discapacidad` varchar(60) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `disp` int(2) NOT NULL,
  `graduando` varchar(2) NOT NULL,
  `firma` varchar(10) NOT NULL,
  `paquete` varchar(11) NOT NULL,
  `acto` varchar(11) NOT NULL,
  `medalla` varchar(11) NOT NULL,
  `est` int(11) NOT NULL,
  `activo` int(10) NOT NULL,
  `disc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO estudiantes VALUES("1","17","Nestor Gabriel","Montiel Rivero","0412635465","","30460082","Informatica","files/30460082/66f2930919207foto.png","Ninguna","La mora","0","No","No","No","No","No","0","0","0");
INSERT INTO estudiantes VALUES("2","17","Debora Maria","Mata Moros","0412635466","","31568481","Informatica","files/31568481/66f2936b02739foto.png","Ninguna","Cumana","0","No","No","No","No","No","0","0","0");



DROP TABLE IF EXISTS eventos;

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `fechai` date NOT NULL,
  `fechac` date NOT NULL,
  `espacio` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ide` int(100) NOT NULL,
  `disp` int(2) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `tipoid` varchar(3) NOT NULL,
  `Cupos` int(4) NOT NULL,
  `dispon` int(40) NOT NULL,
  `vencido` int(11) NOT NULL,
  `prof` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO eventos VALUES("1","Evento de graduacion","2024-09-26","2024-09-30","Sala de graduacion","files/Evento de graduacion/66f292ae701cbfoto.png","17","0","Acta de grado","2","500","498","0","");



DROP TABLE IF EXISTS noti;

CREATE TABLE `noti` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ide` int(255) NOT NULL,
  `texto` mediumtext NOT NULL,
  `fecha` datetime NOT NULL,
  `accion` mediumtext NOT NULL,
  `accion2` mediumtext NOT NULL,
  `disp` int(11) NOT NULL,
  `nombre` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO noti VALUES("1","1","El estudiante Nestor Gabriel notifico que asistira por Acta","2024-09-24 12:26:31","","","0","");
INSERT INTO noti VALUES("3","0","El estudiante Debora Maria notifico que asistira por Secretaria","2024-09-24 12:32:32","","","0","");
INSERT INTO noti VALUES("4","17","El estudiante Debora Maria notifico que asistira por Secretaria","2024-09-24 12:33:39","","","0","");
INSERT INTO noti VALUES("5","17","El estudiante Debora Maria notifico que asistira por Secretaria","2024-09-24 12:34:24","","","0","");
INSERT INTO noti VALUES("6","17","El estudiante Nestor Gabriel notifico que asistira por Acta","2024-09-24 12:35:21","","","0","");



DROP TABLE IF EXISTS profes;

CREATE TABLE `profes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ide` int(20) NOT NULL,
  `nombre` longtext NOT NULL,
  `pnf` varchar(50) NOT NULL,
  `idee` varchar(5) NOT NULL,
  `disp` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profes VALUES("1","1","Alberto Jose Perez Jimenez (Informatica) ,Jose David Lopez Martinez (Gerente) ","","","0");



DROP TABLE IF EXISTS profesores;

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(90) NOT NULL,
  `apellido` varchar(90) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `documento` varchar(1) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `pnf` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `disp` int(2) NOT NULL,
  `ide` int(20) NOT NULL,
  `Activo` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profesores VALUES("1","Alberto Jose","Perez Jimenez","0412684611","","10629281","Informatica","files/10629281/66f290b14dc35foto.png","La victoria","0","17","0");
INSERT INTO profesores VALUES("2","Jose David","Lopez Martinez","0414668498","","11355698","Gerente","files/11355698/66f2913b5c06cfoto.png","La mora","0","17","0");



DROP TABLE IF EXISTS qr;

CREATE TABLE `qr` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ide` int(30) NOT NULL,
  `det` varchar(255) NOT NULL,
  `disp` int(30) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `evento` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO qr VALUES("5","1","Evento de graduacion","0","2","");
INSERT INTO qr VALUES("6","1","Evento de graduacion","0","1","");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `codigo` int(50) NOT NULL,
  `tutorial` int(11) NOT NULL,
  `activo` int(11) NOT NULL,
  `privilegio` int(11) NOT NULL,
  `disp` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `exp` datetime(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("2","super","$2y$10$fIdmALcnILTYmYuj8nwsPuG7J3sABL3BvVr6sziYZGHsyOzxNvMSi","nestorgabriel011@gmail.com","11111111E1","521566","1","1","1","0","","2024-09-22 16:20:18.000000");
INSERT INTO usuarios VALUES("17","escuela","$2y$10$Wfsyky1KMs4la5UX0L.Hdu3Txr0T2qqhsMlVd3.Yq6qIhCedMkeay","escuela@gmail.com","04123665189","0","1","1","0","0","","0000-00-00 00:00:00.000000");



SET FOREIGN_KEY_CHECKS=1;