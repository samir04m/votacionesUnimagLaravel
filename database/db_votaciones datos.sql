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

INSERT INTO `estado`(`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'No ha votado', 'No puede votar sin autorizacion', '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
(2, 'Autorizado', 'Puede votar', '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
(3, 'Votando', 'Puede votar', '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
(4, 'Voto', 'Ya realizo el proceso de votacion', '2018-05-04 06:01:51', '2018-05-04 06:01:51');

INSERT INTO `tipo`(`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
('EST', 'Estudiante', 'Descripcion del Estudiante', '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
('DOC', 'Docente', 'Descripcion del Docente', '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
('EGR', 'Egresado', 'Descripcion del Egresado', '2018-05-04 06:01:51', '2018-05-04 06:01:51');

INSERT INTO `users` (`codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `email`, `password`, `rol_id`, `tipo_id`, `programa_id`, `mesa_id`, `estado_id`, `remember_token`, `created_at`, `updated_at`) VALUES 
('1000', 'Voto', '-', 'en Blanco', '-', 'blanco1@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
('2000', 'Voto', '-', 'en Blanco', '-', 'blanco2@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
('3000', 'Voto', '-', 'en Blanco', '-', 'blanco3@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
('4000', 'Voto', '-', 'en Blanco', '-', 'blanco4@gmal.com', '-', NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-04 06:01:51', '2018-05-04 06:01:51'),
('2015110020', 'Juan', 'Jose', 'Meza', 'Gamarra', 'admin2@gmail.com', '$2y$10$apxivIWBt4POzh2gDhoebe02J62OHTzC11bFAByaJkc4Hsyeb4RT.', 'A', NULL, NULL, NULL, NULL, NULL, '2018-05-04 09:07:06', '2018-05-04 09:07:06'),
('2015110010', 'Admin', 'A', 'Nis', 'Trador', 'admin@gmail.com', '$2y$10$gep6e5nZIlfdxc8PwWVmxOCmnjIk/SDNnXEjoJheRBYKy1Z10Ciae', 'A', NULL, NULL, NULL, NULL, NULL, '2018-05-04 09:07:06', '2018-05-04 09:07:06'),
('2012102030', 'Pedro', 'Jose', 'Pineda', 'Palaez', '2012102030@gmail.com', '$2y$10$DWIsaWSMhyddxtN8xQ310eyrM4kcqkzWH2Vb270CWE/g2vcB.xiD2', 'V', 'DOC', 3, 2, 2, NULL, '2018-05-06 05:20:33', '2018-05-06 05:20:33'),
('2013102030', 'Mariana', 'Lucia', 'Herrera', 'Gil', '2013102030@gmail.com', '$2y$10$k/WrasETksDtyGdwVQPDK.V3Q/s3iz6wxG3Xu1vVXiNy3tANdd9MG', 'V', 'EST', 2, 1, 2, NULL, '2018-05-06 05:19:30', '2018-05-06 05:27:13'),
('2014102030', 'Nicolas', 'Jose', 'Ariza', 'Nieto', '2014102030@gmail.com', '$2y$10$PvUyrRK3J684WU1j554vdOChxKRYaSp7Nrp6JVVWccFGhx4JQek/2', 'V', 'EGR', 4, 3, 2, NULL, '2018-05-06 05:15:48', '2018-05-06 05:15:48'),
('2015113040', 'Laura', 'Marcela', 'Perez', 'Lopez', '2015113040@gmail.com', '$2y$10$nkG7Wxi25IK2WpTeisyGc..vzpKa2g12O6MR78pjbwfZa6Sr7LlDq', 'V', 'EST', 4, 4, 1, NULL, '2018-05-06 05:23:39', '2018-05-06 05:28:04'),
('2016114010', 'Andrea', 'Maria', 'Lopez', 'Martinez', 'correo@gmail.com', '$2y$10$CwOZcQvLdXtVZcF9Sbd6FOeKJrzurbajmXihEOecks6/Akjmp3Hky', 'V', 'DOC', 3, 1, 1, NULL, '2018-05-04 09:07:06', '2018-05-06 05:26:30'),
('2016123040', 'Ana', 'Gabriella', 'Diaz', 'Anaya', '2016123040@gmail.com', '$2y$10$KdEhTwa7LrjIMdnwuyqM9eXbrv99qfn1HjlIMF8ZAw5.UA1phmwd6', 'V', 'EST', 3, 1, 2, NULL, '2018-05-06 05:24:42', '2018-05-06 05:24:42'),
('2017114020', 'Luis', 'Fernando', 'Hernadez', 'Gamarra', '2017114020@gmail.com', '$2y$10$4aTUWiBMpLFFi2GyQKFyHeWKttKH8QnflG6189n4SFU5H.jlzdapC', 'V', 'DOC', 2, 2, 4, NULL, '2018-05-04 09:07:06', '2018-05-06 05:09:46'),
('2018114030', 'Jorge', 'Luis', 'Suarez', 'Bula', '2018114030@gmail.com', '$2y$10$x.b7HkcnxddLtT2CV0dPe.WrDsupLmIqzLgexYxTqTmqt3YanAo6y', 'V', 'EGR', 3, 4, 2, NULL, '2018-05-04 09:07:06', '2018-05-04 09:07:06');

INSERT INTO `organo` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Consejo Superior', 'Sin descripcion', '2018-05-06 05:35:15', '2018-05-06 05:35:15'),
(2, 'Consejo Academico', 'Sin descripcion', '2018-05-06 05:35:45', '2018-05-06 05:35:45'),
(3, 'Consejo del IDEA', 'Sin descripcion', '2018-05-06 05:36:04', '2018-05-06 05:36:04'),
(4, 'Consejo de Facultad', 'Sin descripcion', '2018-05-06 05:36:20', '2018-05-06 05:36:20');

INSERT INTO `candidato` (`id`, `numero`, `foto`, `organo_id`, `created_at`, `updated_at`) VALUES
('1000', 'BLANCO', 'voto_en_blanco.jpg', 1, '2018-05-06 05:45:33', '2018-05-06 05:45:33'),
('2000', 'BLANCO', 'voto_en_blanco.jpg', 2, '2018-05-06 05:45:33', '2018-05-06 05:45:33'),
('3000', 'BLANCO', 'voto_en_blanco.jpg', 3, '2018-05-06 05:45:33', '2018-05-06 05:45:33'),
('4000', 'BLANCO', 'voto_en_blanco.jpg', 4, '2018-05-06 05:45:33', '2018-05-06 05:45:33'),
('2012102030', '02', 'candidato_2012102030.jpg', 1, '2018-05-06 05:43:02', '2018-05-06 05:43:02'),
('2014102030', '01', 'candidato_2014102030.jpg', 1, '2018-05-06 05:40:24', '2018-05-06 05:40:24'),
('2013102030', '03', 'candidato_2013102030.jpg', 2, '2018-05-06 05:44:01', '2018-05-06 05:44:01'),
('2016114010', '04', 'candidato_2016114010.jpg', 2, '2018-05-06 05:44:39', '2018-05-06 05:44:39'),
('2017114020', '06', 'candidato_2017114020.jpg', 3, '2018-05-06 05:48:45', '2018-05-06 05:48:45'),
('2018114030', '05', 'candidato_2018114030.jpg', 3, '2018-05-06 05:45:33', '2018-05-06 05:45:33'),
('2015113040', '07', 'candidato_2015113040.jpg', 4, '2018-05-06 05:46:17', '2018-05-06 05:46:17'),
('2016123040', '08', 'candidato_2016123040.jpg', 4, '2018-05-06 05:50:22', '2018-05-06 05:50:22');


