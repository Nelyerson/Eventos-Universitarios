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
  `asistencia` int(255) NOT NULL,
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
  `asis_estudiante` int(99) NOT NULL,
  `asistencial` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO asistencia VALUES("1","1","2","Diego Armando","Herrera Castro","Secretaria","","2025-03-31 13:24:07","","2","0","32684941","Ninguna","","","10","00:00:00","Masculino","416998453\n","banana@gmail,","1","0","");
INSERT INTO asistencia VALUES("15","5","1","Miguel Angel","Perez Ramirez","","","2025-03-31 13:48:46","","3","0","30849513","Ninguna","","","","00:00:00","Masculino","0412684219\n","banana@gmail.com","0","0","");
INSERT INTO asistencia VALUES("24","8","6","nestor","montiel","","","2025-04-05 10:16:58","","1","0","30460082","Ninguna","","","","00:00:00","Masculino","04123665,,,,\n","nestor@gmail.com","0","0","Presente");
INSERT INTO asistencia VALUES("28","6","2","Diego Armando","Herrera Castro","","","2025-07-15 22:28:21","","1","0","32684941","","","","","00:00:00","Masculino","416998453","","0","1","Rezagado");
INSERT INTO asistencia VALUES("29","6","1","Miguel Angel","Perez Ramirez","","","2024-11-23 13:35:44","","20","0","30849513","","","","","00:00:00","Masculino","0412684219","","0","34","Rezagado");
INSERT INTO asistencia VALUES("32","10","3","Ana Suarez","Fernandez Perez","","","2025-11-23 14:52:02","","5","0","31589456","Ninguna","","","","00:00:00","Masculino","0414681253","ana@gmail.com","0","6","Presente");



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
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
INSERT INTO cronologia VALUES("20","Usuario escuela agrego un evento llamado Prueba","escuela","2025-01-18 09:01:07","","","","0");
INSERT INTO cronologia VALUES("21","agrego un proximo evento llamado","Diego Armando","El usuario","","","user","0");
INSERT INTO cronologia VALUES("22","Usuario escuela agrego un evento llamado Pruebaaaa","escuela","2025-01-18 13:25:13","","","","0");
INSERT INTO cronologia VALUES("23","Usuario escuela agrego un evento llamado Otraf","escuela","2025-01-18 13:31:46","","","","0");
INSERT INTO cronologia VALUES("24","agrego un proximo evento llamado","Miguel Angel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("25","agrego un proximo evento llamado","Miguel Angel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("26","agrego un proximo evento llamado","Miguel Angel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("27","agrego un proximo evento llamado","Miguel Angel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("28","agrego un proximo evento llamado","Miguel Angel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("29","agrego un proximo evento llamado","Miguel Angel","El usuario","","","user","0");
INSERT INTO cronologia VALUES("30","agrego un proximo evento llamado","Diego Armando","El usuario","","","user","0");
INSERT INTO cronologia VALUES("31","agrego un proximo evento llamado","Diego Armando","El usuario","","","user","0");
INSERT INTO cronologia VALUES("32","agrego un proximo evento llamado","Diego Armando","El usuario","","","user","0");
INSERT INTO cronologia VALUES("33","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("34","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("35","agrego un proximo evento llamado","ecuela","El usuario","","","user","0");
INSERT INTO cronologia VALUES("36","agrego un proximo evento llamado","ecuela","El usuario","","","user","0");
INSERT INTO cronologia VALUES("37","agrego un proximo evento llamado","nnnnn","El usuario","","","user","0");
INSERT INTO cronologia VALUES("38","agrego un proximo evento llamado","nnnnn","El usuario","","","user","0");
INSERT INTO cronologia VALUES("39","agrego un proximo evento llamado","kkkkk","El usuario","","","user","0");
INSERT INTO cronologia VALUES("40","agrego un proximo evento llamado","escuela","El usuario","","","user","0");
INSERT INTO cronologia VALUES("41","agrego un proximo evento llamado","escuelabbb","El usuario","","","user","0");
INSERT INTO cronologia VALUES("42","agrego un proximo evento llamado","escuelannn","El usuario","","","user","0");
INSERT INTO cronologia VALUES("43","agrego un proximo evento llamado","escuelannn","El usuario","","","user","0");
INSERT INTO cronologia VALUES("44","agrego un proximo evento llamado","escuelammm","El usuario","","","user","0");
INSERT INTO cronologia VALUES("45","agrego un proximo evento llamado","escuelaaaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("46","agrego un proximo evento llamado","escuela","El usuario","","","user","0");
INSERT INTO cronologia VALUES("47","agrego un proximo evento llamado","alfor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("48","agrego un proximo evento llamado","Universidad","El usuario","","","user","0");
INSERT INTO cronologia VALUES("49","Usuario super agrego un evento llamado eventopro","super","2025-04-01 09:48:30","","","","0");
INSERT INTO cronologia VALUES("50","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("51","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("52","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("53","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("54","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("55","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("56","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("57","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("58","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("59","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("60","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("61","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("62","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("63","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("64","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("65","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("66","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("67","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("68","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("69","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("70","Usuario super agrego un evento llamado noevento","super","2025-04-01 10:24:26","","","","0");
INSERT INTO cronologia VALUES("71","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("72","Usuario Universidad agrego un campo llamado Espacio A","Universidad","2025-04-05 09:37:18","","","","0");
INSERT INTO cronologia VALUES("73","Usuario Universidad agrego un evento llamado Evento Firma","Universidad","2025-04-05 09:38:10","","","","0");
INSERT INTO cronologia VALUES("74","Usuario Universidad agrego un estudiante llamado Nestor","Universidad","2025-04-05 09:42:40","","","","0");
INSERT INTO cronologia VALUES("75","Usuario institucion agrego un campo llamado Espaciouno","institucion","2025-04-08 09:56:04","","","","0");
INSERT INTO cronologia VALUES("76","Usuario institucion agrego un evento llamado Evento","institucion","2025-04-08 09:56:47","","","","0");
INSERT INTO cronologia VALUES("77","Usuario institucion modifico un evento llamado Eventodos","institucion","2025-04-08 09:57:01","","","","0");
INSERT INTO cronologia VALUES("78","Usuario institucion agrego un estudiante llamado Nelyerson","institucion","2025-04-08 09:57:47","","","","0");
INSERT INTO cronologia VALUES("79","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("80","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("81","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("82","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("83","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("84","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("85","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("86","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("87","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("88","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("89","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("90","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("91","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("92","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("93","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("94","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("95","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("96","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("97","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("98","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("99","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("100","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("101","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("102","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("103","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("104","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("105","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("106","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("107","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("108","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("109","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("110","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("111","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("112","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("113","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("114","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("115","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("116","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("117","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("118","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("119","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("120","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("121","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("122","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("123","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("124","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("125","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("126","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("127","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("128","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("129","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("130","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("131","Ha notificado sobre la realizacion de un pago","","El usuario","","","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","0");
INSERT INTO cronologia VALUES("132","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("133","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("134","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("135","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("136","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("137","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("138","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("139","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("140","Usuario escuela modifico al estudiante Ana Suarez","escuela","2025-07-06 23:56:06","","","","0");
INSERT INTO cronologia VALUES("141","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("142","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("143","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("144","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("145","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("146","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("147","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("148","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("149","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("150","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("151","Usuario escuela agrego un evento llamado evento deportivo","escuela","2025-11-23 13:40:23","","","","0");
INSERT INTO cronologia VALUES("152","agrego un proximo evento llamado","Ana Suarez","El usuario","","","user","0");
INSERT INTO cronologia VALUES("153","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("154","Ha notificado sobre la realizacion de un pago","","El usuario","","","","0");
INSERT INTO cronologia VALUES("155","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");
INSERT INTO cronologia VALUES("156","Ha notificado sobre la realizacion de un pago","","El usuario","","","Ana Suarez","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO espacios VALUES("1","300 personas","Disponible","Sala de reunion A","","files/escuela/67581a5316d88foto.png","0","2","0","2025-04-04");
INSERT INTO espacios VALUES("2","2000 Personas","Disponible","Sala de reunion B","","files/escuela/67581a8385f73foto.png","0","2","0","2025-11-26");
INSERT INTO espacios VALUES("3","30","Disponible","Espacio A","","files/Universidad/67f1320e6dc49foto.png","0","7","0","2025-04-08");
INSERT INTO espacios VALUES("4","16","Disponible","Espaciouno","","files/institucion/67f52af4d41f4foto.png","0","8","0","2025-04-20");



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
  `fecha_expiracion` date NOT NULL,
  `referencia` int(99) NOT NULL,
  `otro` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO estudiantes VALUES("1","2","Miguel Angel","Perez Ramirez","0412684219","","30849513","Electronica","files/30849513/675816a1e1abefoto.png","Ninguna","la mora","0","Si","No","No","Si","No","0","0","0","Masculino","0000-00-00","0","");
INSERT INTO estudiantes VALUES("2","2","Diego Armando","Herrera Castro","416998453","","32684941","Informatica","files/32684941/6758192ee4955foto.png","Ninguna","la mora","0","Si","Si","No","Si","Si","0","0","0","Masculino","0000-00-00","0","");
INSERT INTO estudiantes VALUES("3","2","Ana Suarez","Fernandez Perez","0414681253","","31589456","Informatica","files/31589456/67581c58394dffoto.png","Ninguna","la mora","0","Si","No","No","No","No","0","1","0","Masculino","2025-12-23","0","Si");
INSERT INTO estudiantes VALUES("6","7","Nestor","Montiel","0412635513","","30460082","informatica","files/30460082/67f13350574b8foto.png","Ninguna","La mora","0","No","Si","No","No","No","0","0","0","Masculino","0000-00-00","0","");
INSERT INTO estudiantes VALUES("7","8","Nelyerson","Velasquez","0412635513","","11198422","administracion","files/11198422/67f52b5bb1fb5foto.png","Ninguna","La mora dos","0","No","No","No","No","No","0","0","0","Masculino","0000-00-00","0","");



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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO eventos VALUES("1","Evento de Acta de grado","2025-01-09","2027-03-27","Sala de reunion A","files/Evento de Acta de grado/67581b05ced1ffoto.png","2","0","Acta de grado","2","30","29","1","","20","5","Culminado","#ffc750","09:00:00","12:00:00","Evento de acta de grado de informática ","82","Informatica");
INSERT INTO eventos VALUES("3","Prueba","2025-01-18","2025-01-18","Sala de reunion B","files/Prueba/678ba6135691afoto.png","2","0","Acta de grado","2","20","20","1","","30","5","Culminado","#ff407b","09:03:00","09:04:00","Prueba","0","Informatica");
INSERT INTO eventos VALUES("4","Pruebaaaa","2025-01-18","2025-01-18","Sala de reunion A","files/Pruebaaaa/678be3f902bc6foto.png","2","0","Acta de grado","2","20","20","1","","0","5","Culminado","#ff407b","13:25:00","17:25:00","Prueba","0","Informatica");
INSERT INTO eventos VALUES("5","Otraf","2025-01-18","2027-01-18","","files/Otraf/678be582c4eeefoto.png","2","0","Acta de grado","2","20","19","1","","100","5","Culminado","#ff407b","13:31:00","13:31:00","Prueba","82","Informatica");
INSERT INTO eventos VALUES("6","eventopro","2025-04-01","2025-04-05","Sala de reunion B","files/eventopro/67ebeeaeab4b1foto.png","2","0","Acta de grado","2","20","18","1","","400","20","Culminado","#ffc750","09:48:00","12:48:00","eventopro","41","administracion");
INSERT INTO eventos VALUES("7","noevento","2025-04-01","2025-04-04","Sala de reunion A","files/noevento/67ebf71a7df7ffoto.png","2","0","Firma del libro","1","20","20","1","","400","20","Culminado","#5969ff","01:30:00","03:00:00","noevento","0","administracion");
INSERT INTO eventos VALUES("8","Evento Firma","2025-04-05","2025-04-08","Espacio A","files/Evento Firma/67f132425aaa6foto.png","7","0","Firma del libro","1","5","4","1","","25","5","Culminado","#ff407b","09:00:00","12:00:00","Firma Del libro","1","construccion civil");
INSERT INTO eventos VALUES("9","Eventodos","2025-04-08","2025-04-20","Espaciouno","files/Evento/67f52b1f58af9foto.jpg","8","0","Firma del libro","3","25","25","1","","625","25","Culminado","#ff407b","10:00:00","13:00:00","Evento","0","administracion");
INSERT INTO eventos VALUES("10","evento deportivo","2025-11-25","2025-11-26","Sala de reunion B","files/evento deportivo/69234707236c4foto.png","2","0","Otro","0","5","4","1","","25","5","Culminado","#ffc750","13:40:00","20:00:00","deportes","8","informatica");



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
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO noti VALUES("1","2","El estudiante Diego Armando notifico que asistira por Secretaria","2025-01-18 11:05:49","","","0","");
INSERT INTO noti VALUES("2","2","El estudiante Miguel Angel notifico que asistira por Secretaria","2025-01-26 00:33:58","","","0","");
INSERT INTO noti VALUES("3","2","El estudiante Miguel Angel notifico que asistira por Secretaria","2025-01-26 00:36:30","","","0","");
INSERT INTO noti VALUES("4","2","El estudiante Miguel Angel notifico que asistira por Secretaria","2025-01-26 00:37:16","","","0","");
INSERT INTO noti VALUES("5","2","El estudiante Miguel Angel notifico que asistira por Secretaria","2025-01-26 00:41:40","","","0","");
INSERT INTO noti VALUES("6","2","El estudiante Miguel Angel notifico que asistira por Secretaria","2025-01-26 00:43:23","","","0","");
INSERT INTO noti VALUES("7","2","El estudiante Miguel Angel notifico que asistira por Secretaria","2025-01-26 00:51:29","","","0","");
INSERT INTO noti VALUES("8","2","El estudiante Diego Armando notifico que asistira por Acta","2025-02-02 09:02:18","","","0","");
INSERT INTO noti VALUES("9","2","El estudiante Diego Armando notifico que asistira por Secretaria","2025-02-06 02:42:01","","","0","");
INSERT INTO noti VALUES("10","2","El estudiante Diego Armando notifico que asistira por Secretaria","2025-02-08 16:36:19","","","0","");
INSERT INTO noti VALUES("11","2","Hay un nuevo evento llamado eventopro","2025-04-01 09:48:30","1","","0","");
INSERT INTO noti VALUES("12","2","El estudiante Ana Suarez notifico que asistira por Secretaria","2025-04-01 10:02:12","","","0","");
INSERT INTO noti VALUES("13","2","El estudiante Ana Suarez notifico que asistira por Secretaria","2025-04-01 10:09:33","","","0","");
INSERT INTO noti VALUES("14","2","El estudiante Ana Suarez notifico que asistira por Secretaria","2025-04-01 10:10:58","","","0","");
INSERT INTO noti VALUES("15","2","El estudiante Ana Suarez notifico que asistira por Acta","2025-04-01 10:18:27","","","0","");
INSERT INTO noti VALUES("16","2","Hay un nuevo evento llamado noevento","2025-04-01 10:24:26","1","","0","");
INSERT INTO noti VALUES("17","2","El estudiante Ana Suarez notifico que asistira por Acta","2025-04-01 10:47:48","","","0","");
INSERT INTO noti VALUES("18","7","Hay un nuevo evento llamado Evento Firma","2025-04-05 09:38:10","1","","0","");
INSERT INTO noti VALUES("19","8","Hay un nuevo evento llamado Evento","2025-04-08 09:56:47","1","","0","");
INSERT INTO noti VALUES("20","2","Ha sido notificado de un pago del usuario","2025-06-30 00:00:00","","","0","");
INSERT INTO noti VALUES("21","2","Ha sido notificado de un pago del usuario","2025-06-30 00:00:00","","","0","");
INSERT INTO noti VALUES("22","2","Ha sido notificado de un pago del usuario","2025-06-30 00:00:00","","","0","");
INSERT INTO noti VALUES("23","2","Ha sido notificado de un pago del usuario","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("24","2","Ha sido notificado de un pago del usuario","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("25","2","Ha sido notificado de un pago del usuario","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("26","3","Ha sido notificado de un pago del usuario","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("27","2","Ha sido notificado de un pago del usuario","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("28","3","Ha sido notificado de un pago del usuario","2025-07-01 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("29","3","Ha sido notificado de un pago del usuario","2025-07-01 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("30","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("31","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("32","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("33","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("34","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("35","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("36","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("37","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("38","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("39","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("40","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("41","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("42","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("43","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("44","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("45","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("46","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("47","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("48","2","Ha sido aprovado su pago","2025-07-01 00:00:00","","","0","");
INSERT INTO noti VALUES("49","2","Ha sido aprovado su pago","2025-07-02 00:00:00","","","0","");
INSERT INTO noti VALUES("50","2","Ha sido aprovado su pago","2025-07-02 00:00:00","","","0","");
INSERT INTO noti VALUES("51","1","Ha sido aprovado su pago","2025-07-04 00:00:00","","","0","");
INSERT INTO noti VALUES("52","2","Ha sido aprovado su pago","2025-07-04 00:00:00","","","0","");
INSERT INTO noti VALUES("53","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("54","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("55","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("56","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("57","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("58","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("59","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("60","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("61","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("62","3","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("63","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","","0","");
INSERT INTO noti VALUES("64","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","","0","");
INSERT INTO noti VALUES("65","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","","0","");
INSERT INTO noti VALUES("66","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","<br /><b>Warning</b>:  Trying to access array offset on value of type null in <b>C:xampphtdocsProEvento V.1.2phpSuspender.php</b> on line <b>111</b><br />","","0","");
INSERT INTO noti VALUES("67","0","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("68","0","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("69","3","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("70","3","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("71","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("72","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("73","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("74","1","Ha sido aprovado su pago","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("75","1","Ha sido aprovado su pago","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("76","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("77","1","Ha sido aprovado su pago","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("78","0","Ha sido aprovado su pago","2025-07-07 00:00:00","","super","0","");
INSERT INTO noti VALUES("79","2","Ha sido notificado de un pago del usuario","2025-07-07 00:00:00","","","0","");
INSERT INTO noti VALUES("80","0","Ha sido aprovado su pago","2025-07-07 00:00:00","","super","0","");
INSERT INTO noti VALUES("81","0","Ha sido aprovado su pago","2025-07-07 00:00:00","","super","0","");
INSERT INTO noti VALUES("82","0","Ha sido aprovado su pago","2025-07-07 00:00:00","","super","0","");
INSERT INTO noti VALUES("83","0","Ha sido aprovado su pago","2025-07-07 00:00:00","","super","0","");
INSERT INTO noti VALUES("84","2","Hay un nuevo evento llamado evento deportivo","2025-11-23 13:40:23","1","","0","");
INSERT INTO noti VALUES("85","2","El estudiante Ana Suarez notifico que asistira por Acta","2025-11-23 14:40:33","","","0","");
INSERT INTO noti VALUES("86","2","Ha sido notificado de un pago del usuario","2025-11-23 00:00:00","","","0","");
INSERT INTO noti VALUES("87","0","Ha sido rechazado su pago","2025-11-23 00:00:00","","super","0","");
INSERT INTO noti VALUES("88","0","Ha sido rechazado su pago","2025-11-23 00:00:00","","super","0","");
INSERT INTO noti VALUES("89","0","Ha sido rechazado su pago","2025-11-23 00:00:00","","super","0","");
INSERT INTO noti VALUES("90","0","Ha sido rechazado su pago","2025-11-23 00:00:00","","super","0","");
INSERT INTO noti VALUES("91","0","Ha sido rechazado su pago","2025-11-23 00:00:00","","super","0","");
INSERT INTO noti VALUES("92","0","Ha sido aprovado su pago","2025-11-23 00:00:00","","super","0","");
INSERT INTO noti VALUES("93","3","Ha sido notificado de un pago del usuario","2025-11-23 00:00:00","Ana Suarez","","0","");
INSERT INTO noti VALUES("94","3","Ha sido rechazado su pago","2025-11-23 00:00:00","","escuela","0","");
INSERT INTO noti VALUES("95","3","Ha sido aprovado su pago","2025-11-23 00:00:00","","escuela","0","");



DROP TABLE IF EXISTS pagos;

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(99) NOT NULL,
  `ide` varchar(99) NOT NULL,
  `code` int(99) NOT NULL,
  `disp` int(99) NOT NULL,
  `status1` varchar(99) NOT NULL,
  `foto` varchar(99) NOT NULL,
  `referencia` int(99) NOT NULL,
  `fechar` date NOT NULL,
  `fecha` date NOT NULL,
  `idee` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO pagos VALUES("31","escuela","2","1","0","Aprobado","files/1/686b4b6585083foto.png","323234","0000-00-00","2025-04-07","");
INSERT INTO pagos VALUES("32","escuela","2","1","0","Aprobado","files/1/686b4f56d56aafoto.png","32323444","0000-00-00","2025-07-07","");
INSERT INTO pagos VALUES("33","escuela","2","1","0","Aprobado","files/1/686bce60de0e4foto.png","99999","0000-00-00","2025-07-07","");
INSERT INTO pagos VALUES("34","Universidad","7","1","0","Aprobado","files/1/69235f0833aadfoto.png","2147483647","2025-11-23","2025-11-23","");
INSERT INTO pagos VALUES("35","Ana Suarez","2","1","0","Aprobado","files/1/69236add52d4ffoto.jpg","2147483647","2025-11-23","2025-11-23","3");



DROP TABLE IF EXISTS profes;

CREATE TABLE `profes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ide` int(20) NOT NULL,
  `nombre` longtext NOT NULL,
  `pnf` varchar(50) NOT NULL,
  `idee` varchar(5) NOT NULL,
  `disp` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profes VALUES("1","1","Luis Alejandro Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("2","2","Luis Alejandro Rodriguez Gonzales (Informatica) ,Juan Carlos Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("3","2","Luis Alejandro Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("4","4","Luis Alejandro Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("5","5","Juan Carlos Bodoque Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("6","6","Luis Alejandro Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("7","7","Luis Alejandro Rodriguez Gonzales (Informatica) ","","","0");
INSERT INTO profes VALUES("8","10","Luis Alejandro Rodriguez Gonzales (Informatica) ","","","0");



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
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ide` int(30) NOT NULL,
  `det` varchar(255) NOT NULL,
  `disp` int(30) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `evento` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO qr VALUES("1","5","Otraf","0","1","");
INSERT INTO qr VALUES("2","1","Evento de Acta de grado","0","2","");
INSERT INTO qr VALUES("5","6","eventopro","0","3","");
INSERT INTO qr VALUES("7","8","Evento Firma","0","6","");
INSERT INTO qr VALUES("8","10","evento deportivo","0","3","");
INSERT INTO qr VALUES("9","10","evento deportivo","0","3","");
INSERT INTO qr VALUES("10","10","evento deportivo","0","3","");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
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
  `banco` varchar(99) NOT NULL,
  `referencia` int(99) NOT NULL,
  `membresia` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("1","super","$2y$10$rBrlSk2qUxua08PU9/0HQOH4ACvR08RJCQJcdmbisF4U0GlPcwkQK","super@gmail.com","04126658123","0","1","1","1","0","files/2/67581471b9b4afoto.jpg","0000-00-00 00:00:00.000000","","","","0191 04143547539 14730804","0","40$");
INSERT INTO usuarios VALUES("2","escuela","$2y$10$0DopzIgU679CtJbkJghcDe/nHOKbKhu2OKVw5mQzrWNHvRRUvhOl6","escuela@gmail.com","04146651831","0","2","1","0","0","files//675814d161550foto.png","0000-00-00 00:00:00.000000","la mora","1980-02-10","Institucion la mora","0102 04243547539 14830804","99999","25$");
INSERT INTO usuarios VALUES("3","sanbrito","$2y$10$Mb.XZUKa4eXFXVYKbZ/JoOKRWnJ2GMYLjaUlpjZuZwYI5sq2GBs6m","sanbrito@gmail.com","0412328458","0","2","1","0","0","files//67581dd00e0bafoto.png","0000-00-00 00:00:00.000000","la mercedez","1947-11-05","Institucion san brito","","0","");
INSERT INTO usuarios VALUES("4","escuelammm","$2y$10$lkTK5kYx/i6HxFk0KdoEceyMZ8LBTdhgP3Ar8meM3v/TVJjvDgrMO","nelmfrson2@gmail.com","0413993823","0","0","0","0","0","files/escuelammm/67eadce1b670efoto.png","0000-00-00 00:00:00.000000","","","","","0","");
INSERT INTO usuarios VALUES("5","escuelaaaaa","$2y$10$08c20B1tqOKL/STtLR0PhuT3XRciPAKvgU2lFRXwzOHJCIfNTPBKa","nefrson2@gmail.com","0413903823","0","0","0","0","0","files/escuelaaaaa/67eadd4bcc4e0foto.png","0000-00-00 00:00:00.000000","","","","","0","");
INSERT INTO usuarios VALUES("6","escuela","$2y$10$7wXY0D2P05xWajGh8YCRAetI3vj2iID7y.IeX4xwa4D3okZM3.ye6","nefrs2@gmail.com","0413903823","0","0","1","0","0","files/escuela/67eade121c236foto.png","0000-00-00 00:00:00.000000","","","","","99999","");
INSERT INTO usuarios VALUES("7","Universidad","$2y$10$fiBFQp6axJBnjyboHcOMc.09c6OQJnF7D7X7LqitMEFsJjtXfmoeq","universidad@gmail.com","041449823","0","0","1","0","0","files/2/67ebfe7f35be4foto.png","0000-00-00 00:00:00.000000","","","San Brito","","2147483647","");
INSERT INTO usuarios VALUES("8","institucion","$2y$10$t62laolRdMAHmaVoJQoaBeFOZmQXO4XbdhY98VDPgwZcl.erUFzc2","institucion@gmail.com","04123695415","0","2","1","0","0","files//67f527af552ccfoto.png","0000-00-00 00:00:00.000000","La mora 2","1986-05-13","Institucion","","0","");



SET FOREIGN_KEY_CHECKS=1;