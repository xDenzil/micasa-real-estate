CREATE TABLE `micasa`.`users` ( `username` VARCHAR(20) NOT NULL , 
`first_name` VARCHAR(20) NOT NULL , 
`last_name` VARCHAR(20) NOT NULL , 
`email` VARCHAR(50) NOT NULL , 
`phone` VARCHAR(10) NOT NULL , 
`password` VARCHAR(30) NOT NULL , 
`role` VARCHAR(5) NOT NULL DEFAULT 'user' , 
PRIMARY KEY (`username`)) ENGINE = InnoDB;

