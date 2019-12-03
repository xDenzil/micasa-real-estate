
-- USERS

INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Michael','Porter','michaelp@outlook.com','8764568932','mikey','Danger12');


INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Roel','Reid','rsimpson@gmail.com','8767654253','rreid','scammer3');


INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Crystal','Wright','ckrys@gmail.com','8763998754','crys','Cool45');

INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Samantha','Kim','samm@gmail.com','8762562754','sammy1','brave876');

INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Kerry-Ann','Brown','kerryb@gmail.com','8763562894','kerry2','scandal101');

-- Admin
INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Rushane','Brown','admin@micasa.com','8768980320','micasadmin','micasa#123');

-- PROPERTIES


INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `Address2`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (1,'30 Burlington Ave','Half Way Tree','Kingston','Kingston & St. Andrew',0.9,'Purchase','Commercial','Apartment',2,1,3500000,'default-home1.jpg');


INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (1,'10 Wynter Drive','Portmore','St. Catherine',4.6,'Rent','Commercial','Apartment',4,4,1500000,'default-home2.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (2,'10 Orchid Path','Mona','Kingston & St.Andrew',3.5,'Lease','Residential','Housing',3,2,3560000,'img_5.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (2,'Flagaman Housing','Treasure Beach','St. Elizabeth',4.5,'Rent','Residential','Housing',4,2,4568000,'img_6.jpg');


INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (3,'9 Arthur Lane','Spanish Town','St. Catherine',1.2,'Lease','Residential','Housing',2,2,950000,'default-home3.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (3,'5 Sunshine Blvd','Runaway Bay','St. Ann ',3.5,'Lease','Residential','Housing',3,2,3560000,'img_7.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (4,'Trident Road','Buff Bay','Portland',2.5,'Purchase','Residential','Housing',5,4,9160000,'img_12.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (4,'10 Orchid Path','Mona','Kingston & St.Andrew',3.5,'Lease','Residential','Apartment',3,1,4500000,'img_11.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (5,'35 Caledonia Road','Mandeville','Manchester',0.5,'Lease','Commercial','Office Space ',0,1,125000,'commercial_1.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (5,'bankhouse lane','Falmouth','Trelawny',30.5,'Purchase','vacant Lot','Housing',0,0,35600000,'aeriallot_1.jpg');


