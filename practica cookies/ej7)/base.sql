CREATE DATABASE Compras;
USE Compras;
CREATE TABLE catalogo (
  id INT PRIMARY KEY AUTO_INCREMENT,
  producto VARCHAR(100),
  precio DECIMAL(9, 2)
);
