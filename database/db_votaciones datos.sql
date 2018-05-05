USE db_votaciones;

INSERT INTO `facultad`(`id`, `nombre`, `created_at`, `updated_at`) VALUES 
(1,'Ingenieria','2018-05-04 03:58:05','2018-05-04 03:58:05');

INSERT INTO `programa`(`id`, `nombre`, `facultad_id`, `created_at`, `updated_at`) VALUES 
(1,'Ingenieria de Sistemas',1,'2018-05-04 03:59:01','2018-05-04 03:59:01');

INSERT INTO `lugar`(`id`, `nombre`, `created_at`, `updated_at`) VALUES 
(1,'lugar 1','2018-05-04 04:06:14','2018-05-04 04:06:14');
 
INSERT INTO `mesa`(`id`, `nombre`, `lugar_id`, `created_at`, `updated_at`) VALUES
(1,'Mesa 001',1,'2018-05-04 04:07:06','2018-05-04 04:07:06'); 

INSERT INTO `rol`(`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES 
('A','Administrador','Es el que tiene el control del sitio','2018-05-04 04:02:21','2018-05-04 04:02:21'),
('V','Votante','Es quien puede votar','2018-05-04 06:01:51','2018-05-04 06:01:51');

INSERT INTO `users`(`id`, `codigo`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `email`, `password`, 
`rol_id`, `programa_id`, `mesa_id`, `tipo`, `estado`) VALUES
(1,'2015114010','Juan','Jose','Meza','Gamarra','email@gmail.com','$2y$10$gep6e5nZIlfdxc8PwWVmxOCmnjIk/SDNnXEjoJheRBYKy1Z10Ciae','A',1,1,NULL,NULL),
(2,'2015114020','Andres','David','Lopez','Martinez','correo@gmail.com','$2y$10$CwOZcQvLdXtVZcF9Sbd6FOeKJrzurbajmXihEOecks6/Akjmp3Hky','V',1,1,'Estudiante','No ha votado');