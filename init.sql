create database snm_training;

use snm_training;

create table Feedback (
Id INT AUTO_INCREMENT PRIMARY KEY,
FullName varchar(30) NOT NULL, 
Email varchar(30) NOT NULL,
Phone varchar(30) NOT NULL,
UserComment varchar(512) NOT NULL
)