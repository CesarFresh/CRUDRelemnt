-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 27, 2020 at 06:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CRUD`
--

-- --------------------------------------------------------

--
-- Table structure for table `Empleados`
--

CREATE TABLE `Empleados` (
  `Id_Empleado` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido_Paterno` varchar(65) NOT NULL,
  `Apellido_Materno` varchar(65) NOT NULL,
  `Sueldo` varchar(45) NOT NULL,
  `Puesto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Empleados`
--

INSERT INTO `Empleados` (`Id_Empleado`, `Nombre`, `Apellido_Paterno`, `Apellido_Materno`, `Sueldo`, `Puesto`) VALUES
(1, 'Roberto', 'Ramos', 'Nungaray', '10000', 'Salesman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Empleados`
--
ALTER TABLE `Empleados`
  ADD PRIMARY KEY (`Id_Empleado`),
  ADD UNIQUE KEY `Id_Empleado_UNIQUE` (`Id_Empleado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Empleados`
--
ALTER TABLE `Empleados`
  MODIFY `Id_Empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
