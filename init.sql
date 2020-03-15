create database snm_training;

use snm_training;

create table Feedback (
Id INT AUTO_INCREMENT PRIMARY KEY,
DateCreated DateTime NOT NULL,
Title varchar(30) NULL,
FullName varchar(30) NOT NULL, 
Email varchar(30) NOT NULL,
Phone varchar(30) NOT NULL,
UserComment varchar(512) NOT NULL,
Priority varchar(30) NULL,
IssueStatus varchar(30) NULL
)

CREATE TRIGGER DateCreated BEFORE INSERT ON  Feedback 
FOR EACH ROW 
SET NEW.DateCreated = NOW();