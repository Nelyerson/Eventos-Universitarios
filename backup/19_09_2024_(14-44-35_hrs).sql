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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO asistencia VALUES("10","16","1","nestor","montiel","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","30460082");
INSERT INTO asistencia VALUES("11","16","1","nestor","montiel","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","30460082");
INSERT INTO asistencia VALUES("12","16","2","nelyerson","velazques","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","11598145");
INSERT INTO asistencia VALUES("13","16","2","nelyerson","velazques","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","11598145");
INSERT INTO asistencia VALUES("14","16","2","nelyerson","velazques","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","11598145");
INSERT INTO asistencia VALUES("15","16","1","nestor","montiel","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","30460082");
INSERT INTO asistencia VALUES("16","18","1","nestor","montiel","Acta","","0000-00-00 00:00:00","testo","Sin presentarse","0","30460082");
INSERT INTO asistencia VALUES("17","18","2","nelyerson","velazques","Secretaria","","0000-00-00 00:00:00","testo","0","0","11598145");
INSERT INTO asistencia VALUES("18","20","1","nestor","montiel","Acta","","0000-00-00 00:00:00","ideeee","Sin presentarse","0","30460082");
INSERT INTO asistencia VALUES("19","20","1","nestor","montiel","Acta","","0000-00-00 00:00:00","ideeee","Sin presentarse","0","30460082");
INSERT INTO asistencia VALUES("20","20","2","nelyerson","velazques","Acta","","2024-08-31 11:01:59","ideeee","Presente","0","11598145");
INSERT INTO asistencia VALUES("21","22","1","nestor","montiel","Acta","","0000-00-00 00:00:00","Evento Firma","Sin presentarse","0","30460082");
INSERT INTO asistencia VALUES("22","28","1","nestor","montiel","Acta","","2024-08-31 19:46:37","Evento Firma","Presente","0","30460082");
INSERT INTO asistencia VALUES("23","36","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082");



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
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO cronologia VALUES("1","agrego un proximo evento llamado","super","El usuario","","","","0");
INSERT INTO cronologia VALUES("2","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("3","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("4","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("5","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("6","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("7","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("8","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("9","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("10","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("11","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("12","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("13","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("14","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("15","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("16","creo un estudiante llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("17","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("18","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("19","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("20","agrego un proximo evento llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("21","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("22","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("23","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("24","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("25","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("26","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("27","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("28","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("29","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("30","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("31","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("32","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("33","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("34","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("35","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("36","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("37","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("38","agrego una lista llamado","super","El usuario","","","user","0");
INSERT INTO cronologia VALUES("39","agrego un proximo evento llamado","eventouno","El usuario","","","user","0");
INSERT INTO cronologia VALUES("40","agrego un proximo evento llamado","lista","El usuario","","","user","0");
INSERT INTO cronologia VALUES("41","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("42","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("43","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("44","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("45","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("46","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("47","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("48","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("49","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("50","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("51","agrego un proximo evento llamado","evento","El usuario","","","user","0");
INSERT INTO cronologia VALUES("52","agrego un proximo evento llamado","evento","El usuario","","","user","0");
INSERT INTO cronologia VALUES("53","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("54","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("55","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("56","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("57","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("58","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("59","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("60","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("61","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("62","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("63","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("64","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("65","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("66","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("67","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("68","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("69","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("70","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("71","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("72","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("73","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("74","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("75","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("76","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("77","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("78","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("79","agrego un proximo evento llamado","fiesta","El usuario","","","user","0");
INSERT INTO cronologia VALUES("80","agrego un proximo evento llamado","fiesta","El usuario","","","user","0");
INSERT INTO cronologia VALUES("81","agrego un proximo evento llamado","fiestaaaaaaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("82","elimino un entrenador llamado","","El usuario","","","","0");
INSERT INTO cronologia VALUES("83","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("84","agrego un proximo evento llamado","testo","El usuario","","","user","0");
INSERT INTO cronologia VALUES("85","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("86","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("87","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("88","agrego un proximo evento llamado","ideeee","El usuario","","","user","0");
INSERT INTO cronologia VALUES("89","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("90","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("91","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("92","agrego un proximo evento llamado","nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("93","agrego un proximo evento llamado","vencido","El usuario","","","user","0");
INSERT INTO cronologia VALUES("94","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("95","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("96","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("97","creo un estudiante llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("98","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("99","agrego un proximo evento llamado","asdadad","El usuario","","","user","0");
INSERT INTO cronologia VALUES("100","agrego un proximo evento llamado","asdadad","El usuario","","","user","0");
INSERT INTO cronologia VALUES("101","agrego un proximo evento llamado","asdadad","El usuario","","","user","0");
INSERT INTO cronologia VALUES("102","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("103","agrego un proximo evento llamado","nestorDos","El usuario","","","user","0");
INSERT INTO cronologia VALUES("104","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("105","creo un estudiante llamado","Nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("106","creo un estudiante llamado","Nelyerson","El usuario","","","user","0");
INSERT INTO cronologia VALUES("107","agrego un proximo evento llamado","Evento Firma","El usuario","","","user","0");
INSERT INTO cronologia VALUES("108","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("109","agrego un proximo evento llamado","fiestaaaaaaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("110","agrego un proximo evento llamado","fiestaaaaaaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("111","agrego un proximo evento llamado","fiestaaaaaaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("112","agrego un proximo evento llamado","fiestaaaaaaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("113","agrego un proximo evento llamado","ffffffffff","El usuario","","","user","0");
INSERT INTO cronologia VALUES("114","creo un estudiante llamado","mmmmm","El usuario","","","user","0");
INSERT INTO cronologia VALUES("115","creo un estudiante llamado","mmmmm","El usuario","","","user","0");
INSERT INTO cronologia VALUES("116","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("117","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("118","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("119","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("120","creo un estudiante llamado","aaaaaanestora","El usuario","","","user","0");
INSERT INTO cronologia VALUES("121","creo un estudiante llamado","aaaaaaaaaaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("122","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("123","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("124","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("125","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("126","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("127","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("128","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("129","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("130","agrego un proximo evento llamado","","El usuario","","","user","0");
INSERT INTO cronologia VALUES("131","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("132","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("133","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("134","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("135","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("136","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("137","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("138","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("139","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("140","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("141","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("142","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("143","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("144","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("145","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("146","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("147","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("148","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("149","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("150","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("151","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("152","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("153","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("154","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("155","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("156","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("157","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("158","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("159","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("160","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("161","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("162","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("163","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("164","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("165","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("166","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("167","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("168","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("169","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("170","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("171","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("172","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("173","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("174","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("175","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("176","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("177","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("178","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("179","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("180","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("181","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("182","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("183","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("184","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("185","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("186","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("187","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("188","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("189","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("190","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("191","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("192","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("193","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("194","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("195","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("196","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("197","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("198","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("199","agrego un proximo evento llamado","nelyer","El usuario","","","user","0");
INSERT INTO cronologia VALUES("200","agrego un proximo evento llamado","nestor","El usuario","","","user","0");



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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO espacios VALUES("7","aaaaaaaaaa","Disponible","ooooooooo","","files/2/66e4adfe9ebfcfoto.jpg","0","0","0");



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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO estudiantes VALUES("1","3","nestor","montiel","0412665844","","30460082","Informatica","files/30460082/6694448d58714foto.png","ninguna","cumare","0","No","No","No","Si","No","1","0");
INSERT INTO estudiantes VALUES("2","2","ttttttttttt","ttttttttttt","66666666","","3333333333","Electronica","files/ttttttttttt2/66e4a0c14e616foto.png","ttttttttttttt","ttttttttttt","0","No","Si","No","Si","No","0","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO eventos VALUES("16","Enveot","0000-00-00","0000-00-00","El Salon de Reuniones","files/evento/66b6771486e92foto.jfif","1","1","Otro","2","32523","25","1","");
INSERT INTO eventos VALUES("18","testo","2024-08-31","2024-08-01","metropolitano merida","files/testo/66d30b64ba417foto.jpeg","1","0","Firma del libro","1","5","3","1","");
INSERT INTO eventos VALUES("19","nestor","2024-07-01","2024-05-08","test","files/nestor/66d31114dd400foto.jpg","1","0","Acta de grado","2","20","20","1","");
INSERT INTO eventos VALUES("20","ideeee","2024-08-21","2024-08-31","los teques","files/ideeee/66d313bf7214cfoto.jpg","3","1","Acta de grado","2","13","10","1","");
INSERT INTO eventos VALUES("21","vencido","2024-08-01","2024-08-31","nestor","files/vencido/66d33ad53fe6cfoto.jpg","3","1","Imposision de medalla","3","12","12","1","");
INSERT INTO eventos VALUES("22","Evento Firma","2024-08-31","2024-08-31","Salon de reuniones","files/nestor/66d354ab22b8ffoto.jpg","3","1","Firma del libro","1","15","14","1","Array");
INSERT INTO eventos VALUES("23","asdadad","2024-08-29","2024-08-31","asdadadad","files/asdadad/66d358c7ad0b4foto.png","3","1","Firma del libro","1","13","13","1","");
INSERT INTO eventos VALUES("24","asdadad","2024-08-29","2024-08-31","asdadadad","files/asdadad/66d3590145ecffoto.png","3","1","Firma del libro","1","13","13","1","nestor");
INSERT INTO eventos VALUES("25","asdadad","2024-08-29","2024-08-31","asdadadad","files/asdadad/66d3590ec4962foto.jpg","3","1","Firma del libro","1","13","13","1","riveros");
INSERT INTO eventos VALUES("26","nestor","2024-08-29","2024-08-29","test","files/nestor/66d38d31e0eccfoto.png","3","0","Firma del libro","1","30","30","1","");
INSERT INTO eventos VALUES("27","nestorDos","2024-08-29","2024-08-29","test","files/nestorDos/66d39355b955dfoto.jpg","3","0","Firma del libro","1","30","30","1","");
INSERT INTO eventos VALUES("28","Evento Firma","2024-08-31","2024-09-03","Salon de eventos","files/Evento Firma/66d3a4e81b486foto.jpeg","3","0","Acta de grado","2","29","28","1","");
INSERT INTO eventos VALUES("29","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66ddde6a53744foto.jpg","3","0","Acta de grado","2","2221","2221","1","");
INSERT INTO eventos VALUES("30","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66ddde926e0fdfoto.jpg","3","0","Acta de grado","2","2221","2221","1","");
INSERT INTO eventos VALUES("31","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66ddde9ed256afoto.jpg","3","0","Acta de grado","2","2221","2221","1","");
INSERT INTO eventos VALUES("32","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66dddee1f2bb9foto.jpg","3","0","Acta de grado","2","2221","2221","1","");
INSERT INTO eventos VALUES("33","ventos","2024-09-13","2024-09-14","ffffrrr","files/ventos2/66e449741474dfoto.png","3","0","Acta de grado","2","25","23","1","");
INSERT INTO eventos VALUES("34","ventos","2024-09-13","2024-09-14","ffffrrr","files/ventos2/66e449741474dfoto.png","4","0","Acta de grado","2","25","23","1","");
INSERT INTO eventos VALUES("35","nestor","2024-09-19","2024-09-21","test","files/nestor/66ec335addda6foto.jpg","2","0","Firma del libro","1","15","15","0","");
INSERT INTO eventos VALUES("36","nelyer","2024-09-19","2024-09-20","test","files/nelyer/66ec35630e748foto.jpg","3","0","Firma del libro","1","12","11","0","");



DROP TABLE IF EXISTS profes;

CREATE TABLE `profes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ide` int(20) NOT NULL,
  `nombre` longtext NOT NULL,
  `pnf` varchar(50) NOT NULL,
  `idee` varchar(5) NOT NULL,
  `disp` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profes VALUES("3","22","nestor Montiel Rivero (Informatica) ,Abner ramos Allup turmero (Gerente) ","","","0");
INSERT INTO profes VALUES("4","3","nestor Montiel Rivero (Informatica) ","","","0");
INSERT INTO profes VALUES("5","28","Nestor Montiel (Informatica) ,Nelyerson Velazques (Gerente) ","","","0");
INSERT INTO profes VALUES("6","29","Nestor Montiel (Informatica) ","","","0");
INSERT INTO profes VALUES("7","30","Nestor Montiel (Informatica) ","","","0");
INSERT INTO profes VALUES("8","31","Nestor Montiel (Informatica) ","","","0");
INSERT INTO profes VALUES("9","32","Nestor Montiel (Informatica) ","","","0");
INSERT INTO profes VALUES("10","33","Nestor Montiel (Informatica) ","","","0");
INSERT INTO profes VALUES("11","36","nestor bestt (gggggg) ,Nelyerson Velazques (Gerente) ","","","0");
INSERT INTO profes VALUES("12","36","nestor bestt (gggggg) ,Nelyerson Velazques (Gerente) ","","","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profesores VALUES("4","nestor","bestt","0412635466","","9999999999","gggggg","files/2/66e457baa2e20foto.png","la victoria calle","0","3","0");
INSERT INTO profesores VALUES("5","Nelyerson","Velazques","0412635466","","14981965","Gerente","files/14981965/66d3a43e1cbf0foto.jpg","Cumana","0","3","0");
INSERT INTO profesores VALUES("6","mmmmm","REYES","01145555","","444444444","","files/444444444/66ddf52fef156foto.jpg","jnsdfkddd","0","0","1");
INSERT INTO profesores VALUES("7","aaaaaanestora","nestor","33333333","","2342342434","","files/234234243423/66e43b6faa887foto.png","aaaaaaaa","0","0","1");
INSERT INTO profesores VALUES("8","aaaaaaaaaaaa","aaaaaaaaaaaa","234444","","2342342434","","files/234234243423/66e43bbdbb80afoto.png","aaaaaaaa","0","0","1");



DROP TABLE IF EXISTS qr;

CREATE TABLE `qr` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ide` int(30) NOT NULL,
  `det` varchar(255) NOT NULL,
  `disp` int(30) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `evento` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO qr VALUES("13","28","Evento Firma","0","1","0");
INSERT INTO qr VALUES("14","36","nelyer","0","1","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("2","nestorT","$2y$10$mtrIy5UaaImF3H3Zx6iPdeEfFJdTNw0ZBD5IYx9aVxPl656zn.Bk2","nestorgabriel011@gmail.com","11111111E1","294823","1","1","1","0","","2024-09-19 15:46:18.000000");
INSERT INTO usuarios VALUES("3","nelyer","$2y$10$B5gQpwM49uK1goWU9EOWy.WxenfW8zTBG7Q57IiPx3BzVuf8lzVci","nelyer@hotmail.com","123123333131313","0","1","1","0","0","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("4","debora","$2y$10$qAXBrqfZ5M1Ing.vujWSEuXch.uP0LjrBtHu9Zf.8po.nbAdmTwye","debora@gmail.com","123123333131313","0","1","0","0","0","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("11","prueba","$2y$10$iQTQBgyMdli0bww94duNGeP7Ke.GdPIhOpLAh0CSh6AjGiAAfxhA.","preuba@gmail.com","04123355415","0","1","1","0","0","","0000-00-00 00:00:00.000000");



SET FOREIGN_KEY_CHECKS=1;