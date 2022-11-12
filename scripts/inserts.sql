use teceatsfinal;	

INSERT INTO comidas (nombre,disponibilidad,tipo_id,precio,tiempo_id) VALUES ('Gallo Pinto',1,1,"800",1),
('Pancakes',1,1,"900",1),('Natilla',1,2,"100",1),('Tostadas',1,2,"200",1), ('Jugo de Naranja',1,3,"300",1),
('Frutas',1,4,"600",1),('Arroz con pollo',1,1,"800",2),('Lasaña',1,1,"1400",2), ('Sopa',1,2,"500",2),
('Ensalada',1,2,"400",2),('Té Frío',1,3,"300",2),('Budín',1,4,"500",2),('Pizza',1,1,"1500",3),('Sandwich',1,1,"2000",3),
('Bizcochos',1,2,"400",3),('Café',1,3,"400",3), ('Pie de limón',1,4,"1200",3),('Tacos',1,1,"800",4),
('Sopa de tomate',1,1,"800",4),('Cereal',1,2,"500",4),('Limonada',1,3,"500",4),('Tiramisú',1,4,"1000",4);

INSERT INTO tipos (id,nombre) VALUES (1,'Plato Principal'), (2,'Adicional'), (3,'Bebida'), (4,'Postre');

INSERT INTO tiempos (id,nombre) VALUES (1,'Desayuno'),(2,'Almuerzo'),(3,'Media Tarde'),(4,'Cena');

insert into usuario (nombre,apellido1,apellido2,correo,usuario,passw,tipoUsuario)
values ("Pedro","Torres","Arias","correo@gmail.com","Pedro1","Dinosaurio1?",true);
