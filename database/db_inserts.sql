
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
VALUES (1,'10 Wynter Drive','Portmore','St. Catherine',4.6,'Rent','Commercial','Apartment',4,3,1500000,'default-home2.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (2,'10 Orchid Path','Mona','Kingston & St.Andrew',3.5,'Lease','Residential','Housing',3,2,3560000,'default-home3.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (2,'Flagaman Housing','Treasure Beach','St. Elizabeth',4.5,'Rent','Residential','Housing',4,2,4568000,'img_6.jpg');


INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (3,'9 Arthur Lane','Spanish Town','St. Catherine',1.2,'Lease','Residential','Housing',2,2,950000,'default-home4.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (3,'5 Sunshine Blvd','Runaway Bay','St. Ann ',3.5,'Lease','Residential','Housing',3,2,3560000,'img_9.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (4,'Trident Road','Buff Bay','Portland',2.5,'Purchase','Residential','Housing',4,4,9160000,'img_12.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (4,'10 Orchid Path','Mona','Kingston & St.Andrew',3.5,'Lease','Residential','Apartment',2,1,4500000,'img_11.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (5,'35 Caledonia Road','Mandeville','Manchester',0.5,'Lease','Commercial','Office Space ',0,1,125000,'commercial_1.jpg');

INSERT INTO `mi_casa`.`property`(`userID`, `Address1`, `City`, `Parish`, `Size`, `ListingType`, `PropertyType`, `BuildingType`, `NumBedroom`, `NumBathroom`, `Price`, `PreviewImageURL`) 
VALUES (5,'bankhouse lane','Falmouth','Trelawny',30.5,'Purchase','vacant Lot','Housing',0,0,35600000,'aeriallot_1.jpg');

--GALLERY IMAGES
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (1,'1','bathroom_3.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (2,'1','bedroom_7.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (3,'1','bedroom_10.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (4,'1','Jakitchen_3.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (5,'1','livingrm_5.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (6,'2','bathroom_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (7,'2','bathroom_6.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (8,'2','bathroom_4.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (9,'2','bedroom_3.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (10,'2','bedroom_4.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (11,'2','bedroom_8.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (12,'2','bedroom_9.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (13,'2','bedroom_5.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (14,'2','livingrm_8.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (15,'2','kitchen_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (16,'3','bedroom_3.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (17,'3','bedroom_4.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (18,'3','bedroom_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (19,'3','bathroom_9.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (20,'3','bathroom_6.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (21,'3','livingrm_9.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (22,'3','kitchen_2.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (23,'4','bedroom_10.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (24,'4','bedroom_7.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (25,'4','bedroom_2.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (26,'4','bedroom_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (27,'4','bathroom_6.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (28,'4','bathroom_7.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (29,'4','kitchen_7.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (30,'4','livingrm_5.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (31,'5','bedroom_8.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (32,'5','bedroom_9.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (33,'5','bathroom_10.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (34,'5','bathroom_5.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (35,'5','livingrm_7.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (36,'5','kitchen_9.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (37,'6','bedroom_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (38,'6','bedroom_2.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (39,'6','bedroom_4.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (40,'6','bathroom_8.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (41,'6','bathroom_4.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (42,'6','livingrm_3.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (43,'6','kitchen_4.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (44,'7','bedroom_2.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (45,'7','bedroom_3.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (46,'7','bedroom_5.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (47,'7','bedroom_9.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (48,'7','bathroom_7.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (49,'7','bathroom_8.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (50,'7','bathroom_6.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (51,'7','bathroom_10.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (52,'7','livingrm_8.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (53,'7','livingrm_4.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (54,'7','kitchen_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (55,'8','bedroom_8.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (56,'8','bedroom_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (57,'8','bathroom_10.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (58,'8','livingrm_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (59,'8','kitchen_6.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (60,'9','insidecomm_1.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (61,'9','insidecomm_2.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (62,'9','comercial_BM.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (63,'9','commercial_back.jpg');
INSERT INTO `mi_casa`.`gallery`(`ImgID`, `PropertyID`, `ImageURL`) VALUES (64,'10','lotfront_1.png');































