CREATE DATABASE ejercicios_php;
USE ejercicios_php;

CREATE TABLE ejercicios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    archivo VARCHAR(255) NOT NULL
);

CREATE TABLE resultados_generales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ejercicio_id INT NOT NULL,
    resultado TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ejercicio_id) REFERENCES ejercicios(id)
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(255) NOT NULL,
    clave VARCHAR(255) NOT NULL
);

CREATE TABLE formularios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ejercicio_id INT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    datos JSON NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ejercicio_id) REFERENCES ejercicios(id)
);

CREATE TABLE pedidos_pizza (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    pizzas JSON NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pedidos_historial (
    id INT AUTO_INCREMENT PRIMARY KEY,
    contenido TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO ejercicios (nombre, descripcion, archivo) VALUES
('Generación de Número Aleatorio', 'Genera un número aleatorio e indica si es mayor o menor a 50.', 'ejercicio1.php'),
('Tipos de Variables', 'Ejemplo de diferentes tipos de variables.', 'ejercicio2.php'),
('Variables de Tipo String', 'Uso de variables tipo string y concatenación.', 'ejercicio3.php'),
('Número en Texto', 'Convierte un número en su representación textual.', 'ejercicio4.php'),
('Tabla del 2', 'Crea la tabla del 2 con distintos bucles.', 'ejercicio5.php'),
('Formulario de Edad', 'Captura el nombre y la edad de un usuario.', 'procesar_edad.php'),
('Formulario de Estudios', 'Captura el nivel de estudios de un usuario.', 'procesar_estudios.php'),
('Formulario de Deportes', 'Selecciona los deportes favoritos.', 'procesar_deportes.php'),
('Formulario de Ingresos', 'Selecciona el rango de ingresos del usuario.', 'procesar_ingresos.php'),
('Formulario de Contrato', 'Completa un contrato predefinido.', 'procesar_contrato.php'),
('Pedido de Pizzas', 'Realiza pedidos de pizzas con cantidades.', 'procesar_pedido.php'),
('Pedidos de Pizzas', 'Muestra el historial de pedidos almacenados.', 'historial_pizzas.php'),
('Registro de Usuario', 'Permite registrar un usuario con validación de contraseña.', 'procesar_usuario.php');

INSERT INTO resultados_generales (ejercicio_id, resultado) 
VALUES (1, 'El número generado fue 45, menor a 50');

INSERT INTO formularios (ejercicio_id, nombre, datos) 
VALUES (6, 'Juan Pérez', '{"edad": 25}');

INSERT INTO pedidos_pizza (nombre, direccion, pizzas) 
VALUES ('María', 'Calle Falsa 123', '{"Jamon y queso": 2, "Muzzarella": 1}');

INSERT INTO pedidos_historial (contenido) 
VALUES ('Nombre: María\nDirección: Calle Falsa 123\nPedidos: Jamón y Queso - 2, Muzzarella - 1');

INSERT INTO usuarios (nombre_usuario, clave) 
VALUES ('usuario1', MD5('clave123'));

