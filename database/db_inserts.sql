
-- USERS

INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Michael','Porter','michaelp@outlook.com','8764568932','mikey','password');


INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Roel','Reid','rsimpson@gmail.com','8767654253','rreid','password');


INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Crystal','Wright','ckrys@gmail.com','8763998754','crys','password');


INSERT INTO `mi_casa`.`register`(`FirstName`, `LastName`, `Email`, `Telephone`, `Username`, `Password`) 
VALUES ('Rushane','Brown','admin@micasa.com','8768980320','micasadmin','micasa#123');

-- PROPERTIES


INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `Address2`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (1,'30 Burlington Ave','Half Way Tree','Kingston','Kingston & St. Andrew',35,'Purchase','Commercial','Apartment',2,1,3500000,'default-home1.jpg');


INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (1,'10 Wynter Drive','Portmore','St. Catherine',22,'Rent','Commercial','Apartment',4,4,1500000,'default-home2.jpg');


INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (3,'9 Arthur Lane','Spanish Town','St. Catherine',56,'Lease','Residential','Housing',2,2,950000,'default-home3.jpg');

