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
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO asistencia VALUES("10","16","1","nestor","montiel","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("11","16","1","nestor","montiel","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("12","16","2","nelyerson","velazques","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","11598145","");
INSERT INTO asistencia VALUES("13","16","2","nelyerson","velazques","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","11598145","");
INSERT INTO asistencia VALUES("14","16","2","nelyerson","velazques","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","11598145","");
INSERT INTO asistencia VALUES("15","16","1","nestor","montiel","Acta","","0000-00-00 00:00:00","evento","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("16","18","1","nestor","montiel","Acta","","0000-00-00 00:00:00","testo","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("17","18","2","nelyerson","velazques","Secretaria","","0000-00-00 00:00:00","testo","0","0","11598145","");
INSERT INTO asistencia VALUES("18","20","1","nestor","montiel","Acta","","0000-00-00 00:00:00","ideeee","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("19","20","1","nestor","montiel","Acta","","0000-00-00 00:00:00","ideeee","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("20","20","2","nelyerson","velazques","Acta","","2024-08-31 11:01:59","ideeee","Presente","0","11598145","");
INSERT INTO asistencia VALUES("21","22","1","nestor","montiel","Acta","","0000-00-00 00:00:00","Evento Firma","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("22","28","1","nestor","montiel","Acta","","2024-08-31 19:46:37","Evento Firma","Presente","0","30460082","");
INSERT INTO asistencia VALUES("23","36","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("24","36","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("25","36","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("26","36","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("27","36","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("28","36","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("29","3","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("30","3","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("31","3","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","30460082","");
INSERT INTO asistencia VALUES("32","3","10","nestorenfermin","nestor","Acta","","0000-00-00 00:00:00","aaaaaaaaa","Sin presentarse","0","88888888","");
INSERT INTO asistencia VALUES("33","38","10","nestorenfermin","nestor","Acta","","0000-00-00 00:00:00","aaaaaaaaa","Sin presentarse","0","88888888","");
INSERT INTO asistencia VALUES("34","38","10","nestorenfermin","nestor","Acta","","0000-00-00 00:00:00","aaaaaaaaa","Sin presentarse","0","88888888","");
INSERT INTO asistencia VALUES("35","38","10","nestorenfermin","nestor","Acta","","0000-00-00 00:00:00","nelyer","Sin presentarse","0","88888888","aaaaaaaaa");
INSERT INTO asistencia VALUES("36","48","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nestor","Sin presentarse","0","30460082","ninguna");
INSERT INTO asistencia VALUES("37","48","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nestor","Sin presentarse","0","30460082","ninguna");
INSERT INTO asistencia VALUES("38","48","1","nestor","montiel","Secretaria","","0000-00-00 00:00:00","nestor","Sin presentarse","0","30460082","ninguna");
INSERT INTO asistencia VALUES("39","48","1","nestor","montiel","Acta","","0000-00-00 00:00:00","nestor","Sin presentarse","0","30460082","ninguna");
INSERT INTO asistencia VALUES("40","47","1","nestor","montiel","Acta","","2024-09-22 16:46:31","nestor","Presente","0","30460082","ninguna");
INSERT INTO asistencia VALUES("43","47","10","nestorenfermin","nestor","Secretaria","","2024-09-22 13:41:08","nestor","Presente","0","88888888","aaaaaaaaa");
INSERT INTO asistencia VALUES("44","49","10","nestorenfermin","nestor","Acta","","2024-09-22 16:42:58","eventoss","Presente","0","88888888","aaaaaaaaa");



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
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO cronologia VALUES("25","Usuario nestorT agrego a un personal llamado ","","","","","","0");
INSERT INTO cronologia VALUES("26","Usuario  agrego a un personal llamado ","","","","","","0");
INSERT INTO cronologia VALUES("27","Usuario  agrego a un personal llamado ","","","","","","0");
INSERT INTO cronologia VALUES("28","Usuario  agrego a un personal llamado nestornestor","","","","","","0");
INSERT INTO cronologia VALUES("29","Usuario  agrego a un personal llamado nestornestora","","","","","","0");
INSERT INTO cronologia VALUES("30","Usuario  los datos del personal nestornestora","","","","","","0");
INSERT INTO cronologia VALUES("31","Usuario nestorT agrego a un personal llamado tttttttttttttttt","","","","","","0");
INSERT INTO cronologia VALUES("32","Usuario  los datos del personal tttttttttttttttt","","","","","","0");
INSERT INTO cronologia VALUES("33","Usuario nestorT los datos del personal tttttttttttttttt","","","","","","0");
INSERT INTO cronologia VALUES("34","Usuario nestorT los datos del personal tttttttttttttttt","","","","","","0");
INSERT INTO cronologia VALUES("35","Usuario nestorT elimino a nestornestora de su personal","","","","","","0");
INSERT INTO cronologia VALUES("36","Usuario nestorT modifico los datos del personal nestornestor","","","","","","0");
INSERT INTO cronologia VALUES("37","Usuario nestorT modifico los datos del personal nestornestor","","","","","","0");
INSERT INTO cronologia VALUES("38","Usuario nestorT elimino a nestornestor de su personal","","","","","","0");
INSERT INTO cronologia VALUES("39","Usuario nestorT elimino a nestor de su personal","","","","","","0");
INSERT INTO cronologia VALUES("40","Usuario nestorT elimino a nestor de su personal","","","","","","0");
INSERT INTO cronologia VALUES("41","Usuario nestorT elimino a testtest de su personal","","","","","","0");
INSERT INTO cronologia VALUES("42","Usuario nestorT elimino a test de su personal","","","","","","0");
INSERT INTO cronologia VALUES("43","Usuario nestorT agrego un estudiante llamado nesttt","","","","","","0");
INSERT INTO cronologia VALUES("44","Usuario nestorT modifico al estudiante nesttt","","","","","","0");
INSERT INTO cronologia VALUES("45","Usuario nestorT elimino a  de su personal","","","","","","0");
INSERT INTO cronologia VALUES("46","Usuario nestorT elimino a ttttttttttt de su personal","","","","","","0");
INSERT INTO cronologia VALUES("47","Usuario nestorT elimino al estudiante nestor","","","","","","0");
INSERT INTO cronologia VALUES("48","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("49","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("50","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("51","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("52","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("53","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("54","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("55","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("56","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("57","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("58","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("59","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("60","agrego un proximo evento llamado","aaaa","El usuario","","","user","0");
INSERT INTO cronologia VALUES("61","Usuario nestorT modifico los datos un espacio llamado oooooooooooo","","","","","","0");
INSERT INTO cronologia VALUES("62","Usuario nestorT elimino al espacio llamado ","","","","","","0");
INSERT INTO cronologia VALUES("63","Usuario nestorT elimino al espacio llamado aaadad","","","","","","0");
INSERT INTO cronologia VALUES("64","Usuario nestorT agrego un evento llamado nelyer","","","","","","0");
INSERT INTO cronologia VALUES("65","Usuario nelyer agrego a un personal llamado testoo","","","","","","0");
INSERT INTO cronologia VALUES("66","Usuario nelyer agrego a un personal llamado aaaaaaa","","","","","","0");
INSERT INTO cronologia VALUES("67","Usuario nelyer agrego a un personal llamado aaaaaaa","","","","","","0");
INSERT INTO cronologia VALUES("68","Usuario nestorT agrego a un personal llamado nestornestornestornestornestornestornest","","","","","","0");
INSERT INTO cronologia VALUES("69","Usuario nestorT agrego un estudiante llamado nestornestor","","","","","","0");
INSERT INTO cronologia VALUES("70","Usuario nelyer agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("71","Usuario nestorT agrego un campo llamado aaaaaaaaaa","","","","","","0");
INSERT INTO cronologia VALUES("72","Usuario nelyer agrego un campo llamado oooooooooooo","","","","","","0");
INSERT INTO cronologia VALUES("73","Usuario nelyer agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("74","Usuario nelyer agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("75","Usuario nelyer agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("76","Usuario nelyer elimino al estudiante nestor","","","","","","0");
INSERT INTO cronologia VALUES("77","Usuario nelyer elimino al estudiante nestor","","","","","","0");
INSERT INTO cronologia VALUES("78","Usuario nelyer elimino al estudiante nestor","","","","","","0");
INSERT INTO cronologia VALUES("79","Usuario nelyer agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("80","Usuario nelyer agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("81","Usuario nelyer agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("82","Usuario nestorT agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("83","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");
INSERT INTO cronologia VALUES("84","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");
INSERT INTO cronologia VALUES("85","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");
INSERT INTO cronologia VALUES("86","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");
INSERT INTO cronologia VALUES("87","Usuario nestorT agrego un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("88","Usuario nestorT agrego un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("89","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("90","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("91","Usuario nelyer agrego un campo llamado espacio","","","","","","0");
INSERT INTO cronologia VALUES("92","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("93","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("94","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("95","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("96","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("97","Usuario nelyer modifico un evento llamado nelyer","","","","","","0");
INSERT INTO cronologia VALUES("98","Usuario nelyer modifico un evento llamado nelyer","","","","","","0");
INSERT INTO cronologia VALUES("99","Usuario nelyer modifico un evento llamado nelyer","","","","","","0");
INSERT INTO cronologia VALUES("100","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("101","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("102","Usuario nelyer modifico un evento llamado escacio","","","","","","0");
INSERT INTO cronologia VALUES("103","Usuario nelyer agrego un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("104","Usuario nelyer agrego un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("105","Usuario nelyer agrego un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("106","Usuario nelyer agrego un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("107","Usuario nestorT elimino un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("108","Usuario nestorT elimino un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("109","Usuario nelyer modifico un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("110","Usuario nelyer modifico un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("111","Usuario nelyer elimino un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("112","Usuario nelyer elimino un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("113","Usuario nelyer agrego un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("114","Usuario nelyer elimino un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("115","Usuario nelyer agrego un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("116","Usuario nestorT agrego un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("117","Usuario nestorT agrego un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("118","Usuario nestorT agrego a un personal llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("119","Usuario nestorT agrego a un personal llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("120","Usuario nestorT agrego a un personal llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("121","Usuario nestorT agrego a un personal llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("122","Usuario nestorT agrego a un personal llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("123","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("124","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("125","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("126","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("127","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("128","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("129","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("130","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("131","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("132","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("133","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("134","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("135","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("136","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("137","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("138","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("139","agrego un proximo evento llamado","nestor","El usuario","","","user","0");
INSERT INTO cronologia VALUES("140","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");
INSERT INTO cronologia VALUES("141","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");
INSERT INTO cronologia VALUES("142","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("143","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");
INSERT INTO cronologia VALUES("144","Usuario nelyer modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("145","Usuario nelyer modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("146","Usuario nelyer modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("147","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("148","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("149","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("150","Usuario nestorT modifico un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("151","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("152","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("153","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("154","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("155","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("156","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("157","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("158","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("159","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("160","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("161","Usuario nestorT modifico un evento llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("162","Usuario nelyer agrego un evento llamado eventoss","","","","","","0");
INSERT INTO cronologia VALUES("163","Usuario nestorT agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("164","Usuario nestorT agrego un estudiante llamado nestor","","","","","","0");
INSERT INTO cronologia VALUES("165","agrego un proximo evento llamado","nestorenfermin","El usuario","","","user","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO espacios VALUES("7","tttttttttttt","Ocupado","oooooooooooo","","files/2/66ec9bf36648efoto.jpg","1","0","0","2024-09-23");
INSERT INTO espacios VALUES("8","adadad","Disponible","aaadad","","files/2/66ec9bf36648efoto.jpg","1","0","0","0000-00-00");
INSERT INTO espacios VALUES("9","adadad","Disponible","dad","","files/2/66ec9bf36648efoto.jpg","0","3","0","0000-00-00");
INSERT INTO espacios VALUES("10","adadad","Ocupado","aaa","","files/2/66ec9bf36648efoto.jpg","0","3","0","2024-09-26");
INSERT INTO espacios VALUES("11","adadad","Disponible","aaadad","","files/2/66ec9bf36648efoto.jpg","0","0","0","0000-00-00");
INSERT INTO espacios VALUES("12","espacio","Disponible","uhiuhiuhn","","files/nestorT/66ed8146b2eaefoto.jpg","0","0","0","0000-00-00");
INSERT INTO espacios VALUES("13","aaaaaaaaaa","Disponible","aaaaaaaaaa","","files/nestorT/66edf3d242342foto.jpg","1","11","0","0000-00-00");
INSERT INTO espacios VALUES("14","oooooooooooo","Ocupado","oooooooooooo","","files/nelyer/66edf3e130a92foto.jpeg","0","3","0","2024-09-23");
INSERT INTO espacios VALUES("15","suiiiii","Ocupado","espacio","","files/nelyer/66ee089290df4foto.png","0","3","0","2024-09-27");



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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO estudiantes VALUES("1","3","nestor","montiel","0412665844","","30460082","Informatica","files/30460082/6694448d58714foto.png","ninguna","cumare","0","Si","Si","No","Si","No","1","0","0");
INSERT INTO estudiantes VALUES("2","2","ttttttttttt","ttttttttttt","66666666","","3333333333","Electronica","files/ttttttttttt2/66e4a0c14e616foto.png","ttttttttttttt","ttttttttttt","0","No","Si","No","Si","No","0","0","0");
INSERT INTO estudiantes VALUES("3","2","nesttt","nesttt","98198189","","65165198","Informatica","files/65165198/66ed90fbed056foto.png","asdasdasd","la victoria calle","0","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("4","4","nestornestor","nestornestor","0412635466","","30465584","Electronica","files/30465584/66edf21d014dafoto.jpg","ttttttttttttt","la victoria calle ","0","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("5","3","nestor","nestor","4129904522","","30551133","Informatica","files/30551133/66edf286c9c84foto.png","sadasdasd","cumana","0","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("6","3","nestor","nestor","4129904522","","68144864","Informatica","files/68144864/66edf70c02a41foto.png","Ninguna","cumana","1","","","","","","0","0","1");
INSERT INTO estudiantes VALUES("7","3","nestor","nestor","4129904522","","19819819","Informatica","files/19819819/66edf72d00b3bfoto.png","Ninguna","cumana","1","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("8","3","nestor","nestor","4129904522","","46574745","Informatica","files/46574745/66edf75266322foto.png","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","cumana","1","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("9","3","nestor","nestor","4129904522","","34654363","Informatica","files/34654363/66edf7839285cfoto.png","Ninguna","cumana","0","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("10","3","nestorenfermin","nestor","4129904522","","88888888","Informatica","files/88888888/66edf79645ba0foto.png","aaaaaaaaa","cumana","0","","Si","","0","","0","0","0");
INSERT INTO estudiantes VALUES("11","3","nestor","nestor","4129904522","","58585858","Informatica","files/58585858/66edf8b124dc3foto.png","Ninguna","cumana","0","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("12","11","nestor","nestor","0412635466","","74747487","Electronica","files/74747487/66edf8b6a66fdfoto.jpg","Ninguna","asfafaf","1","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("13","3","nestor","nestor","0412635466","","65489819","Informatica","files/65489819/66f07c46a1cc0foto.jpg","Ninguna","victoria","0","","","","","","0","0","0");
INSERT INTO estudiantes VALUES("14","3","nestor","nestor","0412635466","","15135523","Informatica","files/15135523/66f07ccaa5675foto.jpg","Ninguna","victoria","0","No","No","No","No","No","0","0","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO eventos VALUES("3","Enveot","0000-00-00","0000-00-00","El Salon de Reuniones","files/evento/66b6771486e92foto.jfif","1","1","Otro","2","32523","26","1","");
INSERT INTO eventos VALUES("18","testo","2024-08-31","2024-08-01","metropolitano merida","files/testo/66d30b64ba417foto.jpeg","1","0","Firma del libro","1","5","26","1","");
INSERT INTO eventos VALUES("19","nestor","2024-07-01","2024-05-08","test","files/nestor/66d31114dd400foto.jpg","1","0","Acta de grado","2","20","26","1","");
INSERT INTO eventos VALUES("20","ideeee","2024-08-21","2024-08-31","los teques","files/ideeee/66d313bf7214cfoto.jpg","3","1","Acta de grado","2","13","26","1","");
INSERT INTO eventos VALUES("21","vencido","2024-08-01","2024-08-31","nestor","files/vencido/66d33ad53fe6cfoto.jpg","3","1","Imposision de medalla","3","12","26","1","");
INSERT INTO eventos VALUES("22","Evento Firma","2024-08-31","2024-08-31","Salon de reuniones","files/nestor/66d354ab22b8ffoto.jpg","3","1","Firma del libro","1","15","26","1","Array");
INSERT INTO eventos VALUES("23","asdadad","2024-08-29","2024-08-31","asdadadad","files/asdadad/66d358c7ad0b4foto.png","3","1","Firma del libro","1","13","26","1","");
INSERT INTO eventos VALUES("24","asdadad","2024-08-29","2024-08-31","asdadadad","files/asdadad/66d3590145ecffoto.png","3","1","Firma del libro","1","13","26","1","nestor");
INSERT INTO eventos VALUES("25","asdadad","2024-08-29","2024-08-31","asdadadad","files/asdadad/66d3590ec4962foto.jpg","3","1","Firma del libro","1","13","26","1","riveros");
INSERT INTO eventos VALUES("26","nestor","2024-08-29","2024-08-29","test","files/nestor/66d38d31e0eccfoto.png","3","0","Firma del libro","1","30","26","1","");
INSERT INTO eventos VALUES("27","nestorDos","2024-08-29","2024-08-29","test","files/nestorDos/66d39355b955dfoto.jpg","3","0","Firma del libro","1","30","26","1","");
INSERT INTO eventos VALUES("28","Evento Firma","2024-08-31","2024-09-03","Salon de eventos","files/Evento Firma/66d3a4e81b486foto.jpeg","3","0","Acta de grado","2","29","26","1","");
INSERT INTO eventos VALUES("29","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66ddde6a53744foto.jpg","3","0","Acta de grado","2","2221","26","1","");
INSERT INTO eventos VALUES("30","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66ddde926e0fdfoto.jpg","3","0","Acta de grado","2","2221","26","1","");
INSERT INTO eventos VALUES("31","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66ddde9ed256afoto.jpg","3","0","Acta de grado","2","2221","26","1","");
INSERT INTO eventos VALUES("32","fiestaaaaaaaa","0000-00-00","0000-00-00","eeaedas","files/fiestaaaaaaaa/66dddee1f2bb9foto.jpg","3","0","Acta de grado","2","2221","26","1","");
INSERT INTO eventos VALUES("33","ventos","2024-09-13","2024-09-14","ffffrrr","files/ventos2/66e449741474dfoto.png","3","0","Acta de grado","2","25","26","1","");
INSERT INTO eventos VALUES("34","ventos","2024-09-13","2024-09-14","ffffrrr","files/ventos2/66e449741474dfoto.png","4","0","Acta de grado","2","25","26","1","");
INSERT INTO eventos VALUES("35","nestor","2024-09-19","2024-09-21","test","files/nestor/66ec335addda6foto.jpg","2","0","Firma del libro","1","15","26","1","");
INSERT INTO eventos VALUES("36","nelyer","2024-09-19","2024-09-20","test","files/nelyer/66ec35630e748foto.jpg","3","0","Firma del libro","1","12","26","1","");
INSERT INTO eventos VALUES("37","ooooooo","2024-09-20","2024-09-28","adadadadadad","files/ooooooo2/66ed8381d11e4foto.png","2","0","Acta de grado","1","23","26","0","");
INSERT INTO eventos VALUES("38","nelyer","2024-09-20","2024-09-21","nelyer","files/nelyer/66edec7cd8ae1foto.jpg","3","0","Firma del libro","1","25","26","1","");
INSERT INTO eventos VALUES("39","escacio","2024-09-20","2024-09-21","","files/escacio/66ee038b4d433foto.png","3","0","Firma del libro","1","19","26","1","");
INSERT INTO eventos VALUES("40","escacio","2024-09-20","2024-09-21","espacio","files/escacio/66ee04831c9a2foto.png","3","0","Firma del libro","1","28","26","1","");
INSERT INTO eventos VALUES("41","eventoss","2024-09-20","2024-09-21","oooooooooooo","files/eventoss/66ee09eb912d6foto.png","3","1","Firma del libro","1","30","26","1","");
INSERT INTO eventos VALUES("42","eventoss","2024-09-20","2024-09-21","espacio","files/eventoss/66ee0a2a2da9efoto.png","3","1","Firma del libro","1","30","26","1","");
INSERT INTO eventos VALUES("43","eventoss","2024-09-20","2024-09-21","espacio","files/eventoss/66ee0a5e84285foto.png","3","1","Firma del libro","1","30","26","1","");
INSERT INTO eventos VALUES("44","eventoss","2024-09-20","2024-09-21","espacio","files/eventoss/66ee0b9a7d13ffoto.png","3","1","Firma del libro","1","30","26","1","");
INSERT INTO eventos VALUES("45","eventoss","2024-09-20","2024-09-22","espacio","files/eventoss/66ee10dd8f59ffoto.png","3","1","Firma del libro","1","30","26","1","");
INSERT INTO eventos VALUES("46","eventoss","2024-09-20","2024-09-24","aaadad","files/eventoss/66ee112eee2cbfoto.png","3","0","Firma del libro","1","30","26","0","");
INSERT INTO eventos VALUES("47","nestor","2024-09-27","2024-09-23","espacio","files/nestor/66f02a37c059afoto.jpg","3","0","Acta de grado","2","25","23","0","");
INSERT INTO eventos VALUES("48","nestor","2024-09-22","2024-09-27","aaa","files/nestor/66f02ab90f230foto.jpg","3","0","Acta de grado","1","35","31","0","");
INSERT INTO eventos VALUES("49","eventoss","2024-09-22","2024-09-26","aaa","files/eventoss/66f04dfa5e78afoto.jpg","3","0","Acta de grado","2","30","29","0","");



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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO noti VALUES("5","36","el estudiante nestor notifico que asistira por Acta","0000-00-00 00:00:00","","","0","");
INSERT INTO noti VALUES("6","3","el estudiante nestor notifico que asistira por Acta","2024-09-20 00:00:00","","","1","");
INSERT INTO noti VALUES("7","3","el estudiante nestor notifico que asistira por Acta","2024-09-20 00:00:00","","","1","");
INSERT INTO noti VALUES("8","3","el estudiante nestor notifico que asistira por Acta","2024-09-20 14:37:08","","","0","");
INSERT INTO noti VALUES("9","3","El estudiante nestorenfermin notifico que asistira por Acta","2024-09-21 00:46:28","","","0","");
INSERT INTO noti VALUES("10","38","El estudiante nestorenfermin notifico que asistira por Acta","2024-09-21 00:49:18","","","0","");
INSERT INTO noti VALUES("11","38","El estudiante nestorenfermin notifico que asistira por Acta","2024-09-21 00:56:32","","","0","");
INSERT INTO noti VALUES("12","38","El estudiante nestorenfermin notifico que asistira por Acta","2024-09-21 00:58:08","","","0","");
INSERT INTO noti VALUES("13","48","El estudiante nestor notifico que asistira por Acta","2024-09-22 17:09:44","","","0","");
INSERT INTO noti VALUES("14","48","El estudiante nestor notifico que asistira por Acta","2024-09-22 17:24:13","","","0","");
INSERT INTO noti VALUES("15","48","El estudiante nestor notifico que asistira por Secretaria","2024-09-22 17:26:48","","","0","");
INSERT INTO noti VALUES("16","48","El estudiante nestor notifico que asistira por Acta","2024-09-22 17:27:08","","","0","");
INSERT INTO noti VALUES("17","47","El estudiante nestor notifico que asistira por Acta","2024-09-22 18:10:59","","","0","");
INSERT INTO noti VALUES("18","47","El estudiante nestorenfermin notifico que asistira por Acta","2024-09-22 18:16:12","","","0","");
INSERT INTO noti VALUES("19","47","El estudiante nestorenfermin notifico que asistira por Acta","2024-09-22 18:18:25","","","0","");
INSERT INTO noti VALUES("20","47","El estudiante nestorenfermin notifico que asistira por Secretaria","2024-09-22 18:20:49","","","0","");
INSERT INTO noti VALUES("21","49","El estudiante nestorenfermin notifico que asistira por Acta","2024-09-22 22:41:30","","","0","");



DROP TABLE IF EXISTS profes;

CREATE TABLE `profes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ide` int(20) NOT NULL,
  `nombre` longtext NOT NULL,
  `pnf` varchar(50) NOT NULL,
  `idee` varchar(5) NOT NULL,
  `disp` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
INSERT INTO profes VALUES("13","38","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("14","39","nestor bestt (gggggg) ,Nelyerson Velazques (Gerente) ","","","0");
INSERT INTO profes VALUES("15","40","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("16","41","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("17","42","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("18","43","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("19","44","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("20","45","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("21","46","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("22","47","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("23","47","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("24","47","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("25","47","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("26","47","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("27","47","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("28","48","nestor bestt (gggggg) ","","","0");
INSERT INTO profes VALUES("29","49","nestor bestt (gggggg) ,Nelyerson Velazques (Gerente) ","","","0");



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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO profesores VALUES("4","nestor","bestt","0412635466","","9999999999","gggggg","files/2/66e457baa2e20foto.png","la victoria calle","0","3","0");
INSERT INTO profesores VALUES("5","Nelyerson","Velazques","0412635466","","14981965","Gerente","files/14981965/66d3a43e1cbf0foto.jpg","Cumana","0","3","0");
INSERT INTO profesores VALUES("6","mmmmm","REYES","01145555","","444444444","","files/444444444/66ddf52fef156foto.jpg","jnsdfkddd","0","0","1");
INSERT INTO profesores VALUES("7","aaaaaanestora","nestor","33333333","","2342342434","","files/234234243423/66e43b6faa887foto.png","aaaaaaaa","0","0","1");
INSERT INTO profesores VALUES("8","aaaaaaaaaaaa","aaaaaaaaaaaa","234444","","2342342434","","files/234234243423/66e43bbdbb80afoto.png","aaaaaaaa","0","0","1");
INSERT INTO profesores VALUES("9","test","testtest","651651","","516569158","","files/516569158/66ed870141b2cfoto.png","test","1","0","0");
INSERT INTO profesores VALUES("10","testtest","testtest","33333333","","2342342434","testtest","files/234234243423/66ed871a1e345foto.png","aaaaaaaa","1","0","0");
INSERT INTO profesores VALUES("11","nestor","nestor","33333333","","2342342434","","files/234234243423/66ed87a2c0b77foto.jpg","aaaaaaaa","1","0","0");
INSERT INTO profesores VALUES("12","nestor","nestor","nestor","","nestor","nestor","files/nestor/66ed87eb43da2foto.png","nestor","1","0","0");
INSERT INTO profesores VALUES("13","nestornestor","nestornestor","6169581698","","19871919","nestornestor","files/19871919/66ed8aa4123e8foto.png","aaaaaaaa","1","0","0");
INSERT INTO profesores VALUES("14","nestornestora","nestornestor","6169581698","","19871919","nestornestor","files/19871919/66ed8abb48275foto.png","aaaaaaaa","1","0","0");
INSERT INTO profesores VALUES("15","tttttttttttttttt","tttttttttttttttt","33333333","","23423424","tttttttttttttttt","files/23423424/66ed8c7d6e3eafoto.png","aaaaaaaa","1","0","0");
INSERT INTO profesores VALUES("16","testoo","montiel rivero","4129904522","","2169818","testoo","files/2169818/66edee3478064foto.jpg","La Victoria","0","0","0");
INSERT INTO profesores VALUES("17","aaaaaaa","aaaaaaa","4129904522","","2169818","testoo","files/2169818/66edeeb678060foto.png","La Victoria","0","0","0");
INSERT INTO profesores VALUES("18","aaaaaaa","aaaaaaa","4129904522","","2169818","testoo","files/2169818/66edef3b1ffd5foto.png","La Victoria","0","3","0");
INSERT INTO profesores VALUES("19","nestornestornestornestornestornestornest","nestornestornestornestornestornestornest","6516511","","5616515","nestornestornestorne","files/5616515/66edef555d2b6foto.jpg","5nestornestornestornestornestornestornestnestornestornestornestornesto","0","4","0");
INSERT INTO profesores VALUES("20","nestor","nestor","33333333","","30460082","nestor","files/30460082/66f02b6180152foto.jpg","nestor","0","3","0");
INSERT INTO profesores VALUES("21","nestor","nestor","33333333","","30460082","nestor","files/30460082/66f02b9dd8219foto.jpg","aaaaaaaa","0","3","0");
INSERT INTO profesores VALUES("22","nestor","nestor","33333333","","30460082","nestor","files/30460082/66f02c104c0f6foto.jpg","aaaaaaaa","0","3","0");
INSERT INTO profesores VALUES("23","nestor","nestor","33333333","","30460082","nestor","files/30460082/66f02c9d8044efoto.jpg","aaaaaaaa","0","3","0");
INSERT INTO profesores VALUES("24","nestor","nestor","33333333","","23423424","nestor","files/23423424/66f02ceda18fcfoto.jpg","aaaaaaaa","0","3","0");



DROP TABLE IF EXISTS qr;

CREATE TABLE `qr` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ide` int(30) NOT NULL,
  `det` varchar(255) NOT NULL,
  `disp` int(30) NOT NULL,
  `idestudiante` int(11) NOT NULL,
  `evento` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO qr VALUES("13","28","Evento Firma","0","1","0");
INSERT INTO qr VALUES("14","36","nelyer","0","1","0");
INSERT INTO qr VALUES("15","36","nelyer","0","1","0");
INSERT INTO qr VALUES("16","36","nelyer","0","1","0");
INSERT INTO qr VALUES("17","36","nelyer","0","1","0");
INSERT INTO qr VALUES("18","36","nelyer","0","1","0");
INSERT INTO qr VALUES("19","36","nelyer","0","1","0");
INSERT INTO qr VALUES("20","3","nelyer","0","1","0");
INSERT INTO qr VALUES("21","3","nelyer","0","1","0");
INSERT INTO qr VALUES("22","3","nelyer","0","1","0");
INSERT INTO qr VALUES("23","3","aaaaaaaaa","0","10","0");
INSERT INTO qr VALUES("24","38","aaaaaaaaa","0","10","0");
INSERT INTO qr VALUES("25","38","aaaaaaaaa","0","10","0");
INSERT INTO qr VALUES("26","38","nelyer","0","10","0");
INSERT INTO qr VALUES("27","48","nestor","0","1","0");
INSERT INTO qr VALUES("28","48","nestor","0","1","0");
INSERT INTO qr VALUES("29","48","nestor","0","1","0");
INSERT INTO qr VALUES("30","48","nestor","0","1","0");
INSERT INTO qr VALUES("31","47","nestor","0","1","0");
INSERT INTO qr VALUES("32","47","nestor","0","10","0");
INSERT INTO qr VALUES("33","47","nestor","0","10","0");
INSERT INTO qr VALUES("34","47","nestor","0","10","0");
INSERT INTO qr VALUES("35","49","eventoss","0","10","");



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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuarios VALUES("2","nestorT","$2y$10$fIdmALcnILTYmYuj8nwsPuG7J3sABL3BvVr6sziYZGHsyOzxNvMSi","nestorgabriel011@gmail.com","11111111E1","521566","1","1","1","0","","2024-09-22 16:20:18.000000");
INSERT INTO usuarios VALUES("3","nelyer","$2y$10$B5gQpwM49uK1goWU9EOWy.WxenfW8zTBG7Q57IiPx3BzVuf8lzVci","nelyer@hotmail.com","0412665518              ","0","1","1","0","0","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("4","debora","$2y$10$qAXBrqfZ5M1Ing.vujWSEuXch.uP0LjrBtHu9Zf.8po.nbAdmTwye","debora@gmail.com","123123333131313","0","1","0","0","0","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("11","prueba","$2y$10$iQTQBgyMdli0bww94duNGeP7Ke.GdPIhOpLAh0CSh6AjGiAAfxhA.","preuba@gmail.com","04123355415   ","0","1","1","1","1","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("12","nestort","$2y$10$mWwWgaCs3W.WIQTNi6VYd.OgVuuJUoSSOnvy.GBUdCunnDocMlhn6","nestrar@gmail.com","564564645645764","0","1","1","0","0","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("13","nestorT","$2y$10$Bi1MiNiZemndFishoWw.h.9kQsDC57z6npgx1sFeKitFRLOxbYIAm","aaa@gmail.com","366334663","0","1","1","0","0","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("14","aaaaaaaaaaa","$2y$10$fIdmALcnILTYmYuj8nwsPuG7J3sABL3BvVr6sziYZGHsyOzxNvMSi","nestorgabriel011@gmail.com","04123355415","521566","1","1","0","0","","2024-09-22 16:20:18.000000");
INSERT INTO usuarios VALUES("15","pruebon","$2y$10$loTDKsXScsvyekxC9Y2DHu8fhMcrW23I6Fo3convGOPz35W32BApW","pruebon@gmail.com","04123355415","0","1","1","0","0","","0000-00-00 00:00:00.000000");
INSERT INTO usuarios VALUES("16","pruebosss","$2y$10$jbGgYtaSFUUT8IXRrbcx1e.9x/8sYQlKJf9.IjZfHPa6BdbBrFjm2","prieba@gmail.com","04123355415","0","1","1","0","0","","0000-00-00 00:00:00.000000");



SET FOREIGN_KEY_CHECKS=1;