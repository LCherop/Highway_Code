//The database is called highway_code
CREATE DATABASE `highway_code`;

//Has 4 tables, drivers,officers,offenses and committed offenses(committed offenses has info on which offense was committed,by who and noted by which officer and at what time

CREATE TABLE `highway_code`.`drivers` ( `driver_ID` INT(10) NOT NULL AUTO_INCREMENT , `driver_Name` VARCHAR(20) NOT NULL , `driver_gender` VARCHAR(10) NOT NULL , `driver_licenceNo` VARCHAR(20) NOT NULL , PRIMARY KEY (`driver_ID`)) ENGINE = InnoDB;
CREATE TABLE `highway_code`.`officers` ( `officer_ID` INT(10) NOT NULL AUTO_INCREMENT , `officer_Name` VARCHAR(20) NOT NULL , `officer_gender` VARCHAR(10) NOT NULL , `driver_serviceNo` VARCHAR(20) NOT NULL , PRIMARY KEY (`officer_ID`)) ENGINE = InnoDB;
CREATE TABLE `highway_code`.`offences` ( `offense_No` INT(20) NOT NULL AUTO_INCREMENT , `offense_ID` VARCHAR(10) NOT NULL , `offense_description` VARCHAR(100) NOT NULL , `offense_fine` int(100) NOT NULL , PRIMARY KEY (`offense_No`)) ENGINE = InnoDB;
CREATE TABLE `highway_code`.`committed_offenses`(`co_ID` int(10) NOT NULL AUTO_INCREMENT ,`driver_ID` INT(10) NOT NULL,`officer_ID` INT(10) NOT NULL,`offense_No` INT(20) NOT NULL,`co_time` timestamp  DEFAULT CURRENT_TIMESTAMP,PRIMARY KEY (`co_ID`))ENGINE = InnoDB;

//Foreign Key constraints for the committed offenses table

ALTER TABLE committed_offenses ADD CONSTRAINT FK_driverscommitedoffenses FOREIGN KEY (`driver_id`) REFERENCES drivers(driver_id)
ALTER TABLE committed_offenses ADD CONSTRAINT FK_ofiicerscommitedoffenses FOREIGN KEY (`officer_id`) REFERENCES officers(officer_id)
ALTER TABLE committed_offenses ADD CONSTRAINT FK_offensescommittedoffenses FOREIGN KEY (`offense_no`) REFERENCES offences(offense_no)

//Populate the tables with data
INSERT INTO `drivers` (`driver_ID`, `driver_Name`, `driver_gender`, `driver_licenceNo`) VALUES (NULL, 'Harriet Wanjiru', 'Female', 'ABC123'), (NULL, 'Consolas Mata', 'Male', 'ECD789');

INSERT INTO `officers` (`officer_ID`, `officer_Name`, `officer_gender`, `officer_serviceNo`) VALUES (NULL, 'Ibrahim Hassan', 'Male', '4243'), (NULL, 'Natasha Nanjala', 'Female', '6780');

INSERT INTO `offences` (`offense_No`, `offense_ID`, `offense_description`, `offense_fine`) VALUES (NULL, 'Rule 12(1)(b)', 'Learner Driving without \"L\" plates on the front and rear', '1000'), (NULL, 'Rule 25', 'Failure of a vehicle to carry warning signs(lifesavers)', '2000');

INSERT INTO `committed_offenses` (`co_ID`, `driver_id`, `officer_id`, `offense_no`, `co_time`) VALUES (NULL, '1', '1', '1', current_timestamp());
INSERT INTO `committed_offenses` (`co_ID`, `driver_id`, `officer_id`, `offense_no`, `co_time`) VALUES (NULL, '2', '2', '2', current_timestamp());

/*
This part is still under works
//Create views to be used to query the data
//The driver is only allowed to see their own info,the offenses they are responsible for and their respective fines and hence
CREATE ALGORITHM = UNDEFINED VIEW `Driver` AS SELECT offences.offense_description,offences.offense_fine,committed_offenses.co_time ,committed_offenses.driver_id FROM offences INNER JOIN committed_offenses WHERE offences.offense_No=committed_offenses.offense_no AND driver_id = 1

//The police officer is allowed to view and edit his own information and check on the offenses committed by a specific driver and reported by a specific officer

*/




