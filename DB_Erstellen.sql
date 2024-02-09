CREATE DATABASE IF NOT EXISTS merkdata;

USE merkdata;



create table IF NOT EXISTS merkliste(`id` int auto_increment primary key, `Name` varchar(20), `Beschreibung` varchar(500),`Datum` varchar(20),`Uhrzeit` varchar(20),`Status` varchar(20));


