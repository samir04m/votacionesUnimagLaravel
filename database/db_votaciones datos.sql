USE db_votaciones;

INSERT INTO `facultad`(`id`, `nombre`, `created_at`, `updated_at`) VALUES 
(1,'Ingenieria','2018-05-04 03:58:05','2018-05-04 03:58:05'),
(2,'Ciencias de la Educación','2018-05-04 03:58:05','2018-05-04 03:58:05'),
(3,'Ciencias de la Salud','2018-05-04 03:58:05','2018-05-04 03:58:05'),
(4,'Humanidades','2018-05-04 03:58:05','2018-05-04 03:58:05');

INSERT INTO `programa`(`id`, `nombre`, `facultad_id`, `created_at`, `updated_at`) VALUES 
(1,'Ingenieria de Sistemas',1,'2018-05-04 03:59:01','2018-05-04 03:59:01'),
(2,'Ingeniería Electronica',1,'2018-05-04 03:59:01','2018-05-04 03:59:01'),
(3,'Medicina',3,'2018-05-04 03:59:01','2018-05-04 03:59:01'),
(4,'Derecho',4,'2018-05-04 03:59:01','2018-05-04 03:59:01');

INSERT INTO `lugar`(`id`, `nombre`, `created_at`, `updated_at`) VALUES 
(1,'Lugar N1','2018-05-04 04:06:14','2018-05-04 04:06:14'),
(2,'Lugar N2','2018-05-04 04:06:14','2018-05-04 04:06:14'),
(3,'Lugar N3','2018-05-04 04:06:14','2018-05-04 04:06:14'),
(4,'Lugar N4','2018-05-04 04:06:14','2018-05-04 04:06:14');
 
INSERT INTO `mesa`(`id`, `nombre`, `lugar_id`, `created_at`, `updated_at`) VALUES
(1,'Mesa M01',1,'2018-05-04 04:07:06','2018-05-04 04:07:06'),
(2,'Mesa M02',2,'2018-05-04 04:07:06','2018-05-04 04:07:06'),
(3,'Mesa M03',3,'2018-05-04 04:07:06','2018-05-04 04:07:06'),
(4,'Mesa M04',4,'2018-05-04 04:07:06','2018-05-04 04:07:06'); 

INSERT INTO `rol`(`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES 
('A','Administrador','Es quien como su nombre lo indica administra el sitio','2018-05-04 04:02:21','2018-05-04 04:02:21'),
('V','Votante','Es quien tiene la facultad de ejercer el voto','2018-05-04 06:01:51','2018-05-04 06:01:51');

INSERT INTO `users`(`codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `email`, `password`, 
`rol_id`, `programa_id`, `mesa_id`, `tipo`, `estado`, `created_at`, `updated_at`) VALUES
('2015110010','Admin','A','Nis','Trador','admin@gmail.com','$2y$10$gep6e5nZIlfdxc8PwWVmxOCmnjIk/SDNnXEjoJheRBYKy1Z10Ciae',
'A',NULL,NULL,NULL,NULL,'2018-05-04 04:07:06','2018-05-04 04:07:06'),
('2015110020','Juan','Jose','Meza','Gamarra','admin2@gmail.com','$2y$10$apxivIWBt4POzh2gDhoebe02J62OHTzC11bFAByaJkc4Hsyeb4RT.',
'A',NULL,NULL,NULL,NULL,'2018-05-04 04:07:06','2018-05-04 04:07:06'),
('2016114010','Andres','David','Lopez','Martinez','correo@gmail.com','$2y$10$CwOZcQvLdXtVZcF9Sbd6FOeKJrzurbajmXihEOecks6/Akjmp3Hky',
'V',1,1,'Estudiante','No ha votado','2018-05-04 04:07:06','2018-05-04 04:07:06'),
('2017114020','Luis','Fernando','Hernadez','Gamarra','2017114020@gmail.com','$2y$10$4aTUWiBMpLFFi2GyQKFyHeWKttKH8QnflG6189n4SFU5H.jlzdapC',
'V',2,2,'Docente','No ha votado','2018-05-04 04:07:06','2018-05-04 04:07:06'),
('2018114030','Jorge','Luis','Suarez','Bula','2018114030@gmail.com','$2y$10$x.b7HkcnxddLtT2CV0dPe.WrDsupLmIqzLgexYxTqTmqt3YanAo6y',
'V',3,4,'Egresado','No ha votado','2018-05-04 04:07:06','2018-05-04 04:07:06');
