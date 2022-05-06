-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 13, 2021 at 08:15 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `taller_prototipos`
--
CREATE DATABASE IF NOT EXISTS `Chimuelo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Chimuelo`;

-- --------------------------------------------------------

--
-- Table structure for table `mi_perfil`
--

CREATE TABLE `usuario` (
  'idUsuario' int(10) NOT NULL,
  'nombre' varchar(50) NOT NULL,
  'password' varchar(50) NOT NULL,
  'apPaterno' varchar(50) NOT NULL,
  'apMaterno' varchar(50) NOT NULL,
  'correo' varchar(20) NOT NULL,
  'direccion' varchar(50),
  'telefono' varchar(15) NOT NULL,
  'hora_creacion' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mi_perfil`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `password`, `apPaterno`, `apMaterno`, `correo`, `direccion`, `telefono`, `hora_creacion`) VALUES
(1, 'Mario', '123', 'Jimenez', 'Monsalve', 'MJimenez@gmail.com', 'Paula pineda 43', '938284882', '2021-06-12 12:36:18'),
(2, 'Javiera', '123', 'Díaz', 'Cuevas', 'JCuevas@gmail.com', 'Laguna redonda 42', '958382818', '2021-06-12 12:36:18'),
(3, 'Catalina', '123', 'Campos', 'Muñoz', 'CMUñoz@gmail.com', 'Los acacios 34', '974892994', '2021-06-12 12:36:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mi_perfil`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mi_perfil`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
