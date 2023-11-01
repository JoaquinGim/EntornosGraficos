REATE DATABASE Capitales;

USE Capitales;

CREATE TABLE Ciudades (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(100),
  pais VARCHAR(100),
  poblacion INT
);
CREATE USER 'trabajoentornos'@'localhost' IDENTIFIED VIA mysql_native_password USING '**';GRANT ALL PRIVILEGES ON.* TO 'trabajoentornos'@'localhost' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS trabajoentornos;GRANT ALL PRIVILEGES ON trabajoentornos.* TO 'trabajoentornos'@'localhost';
