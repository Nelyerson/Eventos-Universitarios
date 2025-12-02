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
  `famdisp` varchar(100) NOT NULL,
  `familia` varchar(100) NOT NULL,
  `familiares` varchar(30) NOT NULL,
  `1hora` time NOT NULL,
  `genero` varchar(20) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `estado` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO asistencia VALUES("1","1","2","Diego Armando","Herrera Castro","Por Definir","","0000-00-00 00:00:00","","Sin presentarse","0","32684941","Ninguna","","","","00:00:00","Masculino","416998453\n","banana@gmail,","0");



DROP TABLE IF EXISTS clientes;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `dni` varchar(25) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `celular` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2796 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO clientes VALUES("2794","LOLA","lopez","DNI","FIMFOWRE2FMKS@GMS.COM","43534");
INSERT INTO clientes VALUES("2795","fff ff","FFF","9898","","");



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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO cronologia VALUES("3","Usuario escuela agrego un estudiante llamado Miguel Angel","escuela","2024-12-10 06:23:29","","","","0");
INSERT INTO cronologia VALUES("4","Usuario escuela elimino a Juan Carlos de su personal","escuela","2024-12-10 06:29:03","","","","0");
INSERT INTO cronologia VALUES("5","creo un personal llamado Juan Carlos","escuela","2024-12-10 06:32:44","","","","0");
INSERT INTO cronologia VALUES("6","Usuario escuela agrego un estudiante llamado Diego Armando","escuela","2024-12-10 06:34:22","","","","0");
INSERT INTO cronologia VALUES("7","Usuario escuela agrego un campo llamado Sala de reunion A","escuela","2024-12-10 06:39:15","","","","0");
INSERT INTO cronologia VALUES("8","Usuario escuela agrego un campo llamado Sala de reunion B","escuela","2024-12-10 06:40:03","","","","0");
INSERT INTO cronologia VALUES("9","Usuario escuela agrego un evento llamado Evento de Acta de grado","escuela","2024-12-10 06:42:13","","","","0");
INSERT INTO cronologia VALUES("10","Usuario escuela agrego un estudiante llamado Ana Sofia","escuela","2024-12-10 06:47:52","","","","0");
INSERT INTO cronologia VALUES("11","Usuario escuela agrego un evento llamado evento prub","escuela","2024-12-10 09:43:45","","","","0");
INSERT INTO cronologia VALUES("12","Usuario escuela cancelo un evento llamado evento prub","escuela","2024-12-10 09:57:40","","","","0");
INSERT INTO cronologia VALUES("13","Usuario escuela modifico un evento llamado Evento de Acta de grado","escuela","2024-12-10 10:07:44","","","","0");
INSERT INTO cronologia VALUES("14","Usuario super modifico los datos un espacio llamado Sala de reunion B","super","2012-11-01 00:09:34","","","","0");
INSERT INTO cronologia VALUES("15","Usuario super modifico los datos un espacio llamado Sala de reunion Z","super","2012-11-01 00:09:41","","","","0");
INSERT INTO cronologia VALUES("16","Usuario super modifico los datos un espacio llamado Sala de reunion B","super","2012-11-01 00:09:48","","","","0");
INSERT INTO cronologia VALUES("17","Usuario super modifico al estudiante Ana Suarez","super","2012-11-01 00:10:13","","","","0");
INSERT INTO cronologia VALUES("18","Usuario super modifico los datos del personal Juan Carlos Bodoque","super","2012-11-01 00:10:36","","","","0");
INSERT INTO cronologia VALUES("19","Usuario super modifico un evento llamado Evento de Acta de grado","super","2012-11-01 00:11:38","","","","0");



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

INSERT INTO espacios VALUES("1","300 personas","Ocupado","Sala de reunion A","","files/escuela/67581a5316d88foto.png","0","2","0","2024-12-30");
INSERT INTO espacios VALUES("2","2000 Personas","Disponible","Sala de reunion B","","files/escuela/67581a8385f73foto.png","0","2","0","2024-12-26");



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
  `sexo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO estudiantes VALUES("1","2","Miguel Angel","Perez Ramirez","0412684219","","30849513","Electronica","files/30849513/675816a1e1abefoto.png","Ninguna","la mora","0","No","No","No","No","No","0","0","0","Masculino");
INSERT INTO estudiantes VALUES("2","2","Diego Armando","Herrera Castro","416998453","","32684941","Informatica","files/32684941/6758192ee4955foto.png","Ninguna","la mora","0","Si","No","No","Si","Si","0","0","0","Masculino");
INSERT INTO estudiantes VALUES("3","2","Ana Suarez","Fernandez Perez","0414681253","","31589456","Informatica","files/31589456/67581c58394dffoto.png","Ninguna","la mora","0","No","No","No","No","No","0","0","0","Masculino");



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
  `famdisp` varchar(50) NOT NULL,
  `familia` varchar(50) NOT NULL,
  `estatus` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `horai` time NOT NULL,
  `horac` time NOT NULL DEFAULT current_timestamp(),
  `detalle` varchar(50) NOT NULL,
  `asis` int(11) NOT NULL,
  `pnf` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO eventos VALUES("1","Evento de Acta de grado","2024-12-10","2024-12-21","Sala de reunion A","files/Evento de Acta de grado/67581b05ced1ffoto.png","2","0","Acta de grado","2","30","29","0","","30","30","Vigente","#ffc750","09:00:00","12:00:00","Evento de acta de grado de informática ","1","Informatica");



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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




DROP TABLE IF EXISTS profes;

CREATE TABLE `profes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ide` int(20) NOT NULL,
  `nombre` longtext NOT NULL,
  `pnf` varchar(50) NOT NULL,
  `idee` varchar(5) NOT NULL,
  `disp` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profes VALUES("1","1","Luis Alejandro Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("2","2","Luis Alejandro Rodriguez Gonzales (Informatica) ,Juan Carlos Rodriguez Gonzales (Informatica) ","","","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profesores VALUES("1","Luis Alejandro","Rodriguez Gonzales","0412348951","","12002206","Informatica","files/12002206/675815f87a2abfoto.png","Cumana","0","2","0");
INSERT INTO profesores VALUES("2","Juan Carlos","Fernandez Perez","0414668421","","13694829","Base de datos","files/13694829/6758163b12a49foto.png","La victoria","1","2","0");
INSERT INTO profesores VALUES("3","Juan Carlos Bodoque","Rodriguez Gonzales","0413598448","","13948451","Informatica","files/13948451/675818cc8492ffoto.png","La victoria","0","2","0");



DROP TABLE IF EXISTS prueba;

CREATE TABLE `prueba` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `dni` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO prueba VALUES("LOLA","lopez","DNI","FIMFOWRE2FMKS@GMS.COM","43534");
INSERT INTO prueba VALUES("fff ff","FFF","9898","","");
INSERT INTO prueba VALUES("Nestor",";Montiel",";35515;banana@gmail",";33516981\n","");
INSERT INTO prueba VALUES("Nestor",";Montiel",";35515;banana@gmail",";33516981\n","");
INSERT INTO prueba VALUES("Nestor,","Montiel,","35515","banana@gmail,","33516981\n");



DROP TABLE IF EXISTS qr;

CREATE TABLE `qr` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ide` int(30) NOT NULL,
  `det` varchar(255) NOT NULL,
  `disp` int(30) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `evento` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO qr VALUES("1","1","Evento de Acta de grado","0","2","");



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
  `direccion` varchar(25) NOT NULL,
  `fundacion` varchar(100) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("1","super","$2y$10$rBrlSk2qUxua08PU9/0HQOH4ACvR08RJCQJcdmbisF4U0GlPcwkQK","super@gmail.com","04126658123","0","1","1","1","0","files/2/67581471b9b4afoto.jpg","0000-00-00 00:00:00.000000","","","");
INSERT INTO usuarios VALUES("2","escuela","$2y$10$0DopzIgU679CtJbkJghcDe/nHOKbKhu2OKVw5mQzrWNHvRRUvhOl6","escuela@gmail.com","04146651831","0","2","1","0","0","files//675814d161550foto.png","0000-00-00 00:00:00.000000","la mora","1980-02-10","Institucion la mora");
INSERT INTO usuarios VALUES("3","sanbrito","$2y$10$Mb.XZUKa4eXFXVYKbZ/JoOKRWnJ2GMYLjaUlpjZuZwYI5sq2GBs6m","sanbrito@gmail.com","0412328458","0","2","1","0","0","files//67581dd00e0bafoto.png","0000-00-00 00:00:00.000000","la mercedez","1947-11-05","Institucion san brito");



SET FOREIGN_KEY_CHECKS=1;