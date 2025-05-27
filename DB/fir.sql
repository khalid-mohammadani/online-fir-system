/*
SQLyog Enterprise - MySQL GUI v6.56
MySQL - 5.0.81-community-nt : Database - fir
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`fir` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fir`;

/*Table structure for table `actno` */

DROP TABLE IF EXISTS `actno`;

CREATE TABLE `actno` (
  `ActNOID` int(12) NOT NULL,
  `Act_No` varchar(12) NOT NULL,
  `FirTopicID` int(12) NOT NULL,
  PRIMARY KEY  (`ActNOID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `actno` */

insert  into `actno`(`ActNOID`,`Act_No`,`FirTopicID`) values (1,'302',1),(2,'365 A',5),(3,'363',5),(4,'279',3),(5,'337/RPC',3),(6,'376',4),(7,'6',4),(8,'392',6),(9,'173',6),(10,'395',6),(11,'550',2);

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `AdminId` int(15) NOT NULL,
  `AdminName` varchar(25) NOT NULL,
  `AdminPassword` varchar(16) NOT NULL,
  `security` varchar(25) NOT NULL,
  PRIMARY KEY  (`AdminId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`AdminId`,`AdminName`,`AdminPassword`,`security`) values (1,'Khalid','123456789','khm'),(2,'Kashif','147','bhayo'),(3,'Waheed','111','ujan');

/*Table structure for table `fir_topic` */

DROP TABLE IF EXISTS `fir_topic`;

CREATE TABLE `fir_topic` (
  `FirTopicId` int(10) NOT NULL,
  `FirTopic` varchar(25) NOT NULL,
  PRIMARY KEY  (`FirTopicId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fir_topic` */

insert  into `fir_topic`(`FirTopicId`,`FirTopic`) values (1,'Murder'),(2,'Abusing Language'),(3,'Goods Stolen'),(4,'Rap'),(5,'Kidnapping'),(6,'Roberry');

/*Table structure for table `firview` */

DROP TABLE IF EXISTS `firview`;

CREATE TABLE `firview` (
  `FIR_No` int(20) NOT NULL,
  `Type_Of_Crime_Id` int(20) NOT NULL,
  `Act/Sec_ID` varchar(20) NOT NULL,
  `Police_Station` varchar(150) NOT NULL,
  `Name` varchar(12) NOT NULL,
  `S/D/Wo` varchar(20) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Caste` varchar(20) NOT NULL,
  `Age` int(3) NOT NULL,
  `Marital_Status` varchar(12) NOT NULL,
  `General_Appearance` varchar(100) default NULL,
  `Height` varchar(50) default NULL,
  `Gender` varchar(12) NOT NULL,
  `Identification_Mark` varchar(50) default NULL,
  `Criminal_History` varchar(100) default NULL,
  `Cases_Against` varchar(100) NOT NULL,
  `Other_Details` varchar(150) default NULL,
  `RemarksId` int(10) NOT NULL,
  `incharge_Police_stataion` varchar(100) NOT NULL,
  PRIMARY KEY  (`FIR_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `firview` */

insert  into `firview`(`FIR_No`,`Type_Of_Crime_Id`,`Act/Sec_ID`,`Police_Station`,`Name`,`S/D/Wo`,`Address`,`Occupation`,`Caste`,`Age`,`Marital_Status`,`General_Appearance`,`Height`,`Gender`,`Identification_Mark`,`Criminal_History`,`Cases_Against`,`Other_Details`,`RemarksId`,`incharge_Police_stataion`) values (12,2,'550','4','Khan','Gul','sawat','shopkeeper','baloch',15,'Single','black','60','Male','a cut mark on left side','nill','khan','he was a theif',3,'Hassan'),(123,5,'365 A,363','1','khalid','Gul','kandhkot','student','baloch',24,'Married','white','45 inch','Male','a cut mark on left arm','none','khalid','none',3,'Khalid');

/*Table structure for table `missingpeople` */

DROP TABLE IF EXISTS `missingpeople`;

CREATE TABLE `missingpeople` (
  `ID` int(15) NOT NULL,
  `Name` varchar(20) default NULL,
  `Date of Missing` varchar(20) default NULL,
  `PoliceStation` varchar(20) default NULL,
  `Address` varchar(150) default NULL,
  `Age` varchar(20) default NULL,
  `Gender` varchar(20) default NULL,
  `IdentitificationMark` varchar(15) default NULL,
  `GenralApearance` varchar(15) default NULL,
  `Remarks` varchar(20) default NULL,
  `pic` varchar(30) default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `missingpeople` */

insert  into `missingpeople`(`ID`,`Name`,`Date of Missing`,`PoliceStation`,`Address`,`Age`,`Gender`,`IdentitificationMark`,`GenralApearance`,`Remarks`,`pic`) values (1,'Name','12-12-12','Jamshoro A','Jamshoro','22 years','Male','a cut mark ','Black','asdfa','Name.PNG'),(2,'Riaz','12-7-12','Jamshoro B','Hyd','12 years','Male','mil','Brown','He is not in manner','Zakir.jpg'),(3,'Mushraf','2-7-10','Sawat','Hyd','20 years','Male','a cut mark on l','white','He is made','Mushraf.jpg'),(4,'saddam','2-7-11','Hyd','Hyd','20 years','Male','a cut mark on l','white','He is made','Khalid.jpg'),(5,'Ali','15-7-11','Hyd','jamshoro','23 years','Male','a mole on left ','white','He is made','abas.jpg'),(6,'Abbass','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','abbass.jpg'),(7,'Najma','15-12-11','Sawat','Sawat','23 years','Female','a mole on left ','white','He is made','KJHK.jpg'),(8,'Abbass Ali','15-12-08','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','Winter.jpg'),(9,'Mohammad.Ali','11-09-48','Ziarat','Ziarat','65 years','Male','a mole on left ','white','He is made','podel ka bap.jpg'),(10,'Abbass','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','jamal.jpg'),(11,'Shahid','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','Copy of 27042008033.jpg'),(12,'Abbass','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','abbass.jpg'),(13,'Abbass','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','abbass.jpg'),(14,'Imdad','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','abbass.jpg'),(15,'Abbass','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','abbass.jpg'),(16,'Ali.Abbass','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','abbass.jpg'),(17,'M.Abbass','15-12-01','Sawat','jamshoro','23 years','Male','a mole on left ','white','He is made','abbass.jpg');

/*Table structure for table `police_station` */

DROP TABLE IF EXISTS `police_station`;

CREATE TABLE `police_station` (
  `PolicestationId` int(15) NOT NULL auto_increment,
  `PolicestationLocation` varchar(50) NOT NULL,
  `PsSection` varchar(10) NOT NULL,
  `ShoID` int(15) NOT NULL,
  PRIMARY KEY  (`PolicestationId`),
  KEY `FK_police_station` (`ShoID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `police_station` */

insert  into `police_station`(`PolicestationId`,`PolicestationLocation`,`PsSection`,`ShoID`) values (1,'Jamshoro','A ',1),(2,'Jamshoro','B',2),(3,'Sawat','Mangora ',3),(4,'Hyd','A',4);

/*Table structure for table `remarks` */

DROP TABLE IF EXISTS `remarks`;

CREATE TABLE `remarks` (
  `RemarksID` int(10) NOT NULL,
  `Remarks` varchar(250) NOT NULL,
  PRIMARY KEY  (`RemarksID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `remarks` */

insert  into `remarks`(`RemarksID`,`Remarks`) values (1,'Case solve'),(2,'Case in Progress'),(3,'New Case Entry');

/*Table structure for table `reqfir` */

DROP TABLE IF EXISTS `reqfir`;

CREATE TABLE `reqfir` (
  `ReqFIRId` int(15) NOT NULL auto_increment,
  `To` varchar(20) NOT NULL,
  `From` varchar(20) NOT NULL,
  `TopicOfFir` int(12) NOT NULL,
  PRIMARY KEY  (`ReqFIRId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reqfir` */

/*Table structure for table `rock` */

DROP TABLE IF EXISTS `rock`;

CREATE TABLE `rock` (
  `Id` int(11) default NULL,
  `Name` varchar(255) default NULL,
  `Address` varchar(255) default NULL,
  `php_mysql_auto_increment_id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`php_mysql_auto_increment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rock` */

/*Table structure for table `sho` */

DROP TABLE IF EXISTS `sho`;

CREATE TABLE `sho` (
  `SHOId` int(15) NOT NULL,
  `SHOName` varchar(25) NOT NULL,
  `SHOPassword` varchar(20) NOT NULL,
  `PoliceStationID` int(15) NOT NULL,
  `SecurityCode` varchar(50) NOT NULL,
  PRIMARY KEY  (`SHOId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sho` */

insert  into `sho`(`SHOId`,`SHOName`,`SHOPassword`,`PoliceStationID`,`SecurityCode`) values (1,'Rehmat','123',1,'khm'),(2,'Khan','123',2,'opp'),(3,'Farooq','156',3,'asd'),(4,'Hassan','123',4,'Khalid');

/*Table structure for table `vehiclefir` */

DROP TABLE IF EXISTS `vehiclefir`;

CREATE TABLE `vehiclefir` (
  `FirNo` int(20) NOT NULL,
  `PoliceStationId` int(15) NOT NULL,
  `dateOfLoadingFIR` varchar(18) NOT NULL,
  `TypeOfVehicle` varchar(20) default NULL,
  `Make` varchar(15) default NULL,
  `Model` varchar(25) default NULL,
  `EngineNo` varchar(25) default NULL,
  `RegistrationNo` varchar(25) default NULL,
  `Color` varchar(15) default NULL,
  `Remarks` varchar(20) default NULL,
  PRIMARY KEY  (`FirNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehiclefir` */

insert  into `vehiclefir`(`FirNo`,`PoliceStationId`,`dateOfLoadingFIR`,`TypeOfVehicle`,`Make`,`Model`,`EngineNo`,`RegistrationNo`,`Color`,`Remarks`) values (112,2,'2-2-2011','vdasffdasfs','kkljk','j','jjjjj','jjjj','','jjj'),(123,3,'123','Car','123132','1321','321','123','123','132'),(456,1,'1-1-2012','456dsaf','fdsgf456','56','465','465','465fsa','465');

/*Table structure for table `vehiclestatus` */

DROP TABLE IF EXISTS `vehiclestatus`;

CREATE TABLE `vehiclestatus` (
  `VEHICLEStatusId` int(10) NOT NULL,
  `VEHICLEStatus` varchar(25) NOT NULL,
  PRIMARY KEY  (`VEHICLEStatusId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `vehiclestatus` */

insert  into `vehiclestatus`(`VEHICLEStatusId`,`VEHICLEStatus`) values (1,'Black'),(2,'White');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
