-- SQL to create missing application tables (safe to re-run)
CREATE TABLE IF NOT EXISTS `register` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `registraion` varchar(100) DEFAULT NULL,
  `section` varchar(100) DEFAULT NULL,
  `roll` varchar(100) DEFAULT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `session` varchar(50) DEFAULT NULL,
  `department` varchar(150) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `additional_message` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
