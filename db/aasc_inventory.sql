-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2012 at 06:46 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_session_mgr`
--

-- --------------------------------------------------------

--
-- Table structure for table `aasc_inventory`
--

CREATE TABLE IF NOT EXISTS `aasc_inventory` (
  `ClientAccountNumber` varchar(25) NOT NULL,
  `VIN` varchar(17) DEFAULT NULL,
  `AuctionID` varchar(4) DEFAULT NULL,
  `PickupDate` date DEFAULT NULL,
  `DropOffDate` date DEFAULT NULL,
  `DeleteCancelRequest` varchar(6) DEFAULT NULL,
  `SecondaryClient` varchar(50) DEFAULT NULL,
  `ModelYear` int(4) DEFAULT NULL,
  `Make` varchar(30) DEFAULT NULL,
  `Model` varchar(30) DEFAULT NULL,
  `Series` varchar(30) DEFAULT NULL,
  `BodyStyle` varchar(4) DEFAULT NULL,
  `ExteriorColor` varchar(20) DEFAULT NULL,
  `Classification` int(3) DEFAULT NULL,
  `InteriorColor` varchar(20) DEFAULT NULL,
  `ClientField1` varchar(35) DEFAULT NULL,
  `ClientField2` varchar(35) DEFAULT NULL,
  `DriversName` varchar(50) DEFAULT NULL,
  `ReplacementVehicleNumber` varchar(25) DEFAULT NULL,
  `ReplacementVehicleModelYear` int(4) DEFAULT NULL,
  `ReplacementVehicleColor` varchar(20) DEFAULT NULL,
  `PayoutAmount` decimal(8,2) DEFAULT NULL,
  `LocationType` int(3) DEFAULT NULL,
  `LocationName` varchar(50) DEFAULT NULL,
  `LocationAddress1` varchar(50) DEFAULT NULL,
  `LocationAddress2` varchar(50) DEFAULT NULL,
  `LocationCity` varchar(50) DEFAULT NULL,
  `LocationState` varchar(20) DEFAULT NULL,
  `LocationZip` varchar(20) DEFAULT NULL,
  `ContactPerson1` varchar(50) DEFAULT NULL,
  `ContactPerson2` varchar(50) DEFAULT NULL,
  `Phone1` varchar(30) DEFAULT NULL,
  `Phone2` varchar(30) DEFAULT NULL,
  `Fax1` varchar(30) DEFAULT NULL,
  `Fax2` varchar(30) DEFAULT NULL,
  `Email1` varchar(60) DEFAULT NULL,
  `Email2` varchar(60) DEFAULT NULL,
  `LegalSaleDate` date DEFAULT NULL,
  `HoldStatus` int(3) DEFAULT NULL,
  `HoldUntil` date DEFAULT NULL,
  `VehicleIsOperable` int(1) DEFAULT NULL,
  `PickupOrDropOffNote` varchar(255) DEFAULT NULL,
  `FloorPrice` decimal(8,2) DEFAULT NULL,
  `ClientWorkStatus` varchar(2) DEFAULT NULL,
  `ClearVehicleForSale` date DEFAULT NULL,
  `RedeemVehicle` date DEFAULT NULL,
  `TitleSent` date DEFAULT NULL,
  `RequestedRunOrder` int(4) DEFAULT NULL,
  `FundsReceived` date DEFAULT NULL,
  `ReplacementVehicleMake` varchar(30) DEFAULT NULL,
  `ReplacementVehicleModel` varchar(30) DEFAULT NULL,
  `TitleShipmentMethod` varchar(1) DEFAULT NULL,
  `TitleShipmentTrackingNumber` varchar(15) DEFAULT NULL,
  `ClientInternetSellingSuggestion` varchar(1) DEFAULT NULL,
  `SendNotificationsToEmail1` varchar(1) DEFAULT NULL,
  `SendNotificationsToEmail2` varchar(1) DEFAULT NULL,
  `PrivateBookValue` decimal(7,2) DEFAULT NULL,
  `PrivateComment1` varchar(50) DEFAULT NULL,
  `PrivateComment2` varchar(50) DEFAULT NULL,
  `PrivateAmount1` decimal(7,2) DEFAULT NULL,
  `PrivateAmount2` decimal(7,2) DEFAULT NULL,
  `PrivateDate1` date DEFAULT NULL,
  `PrivateDate2` date DEFAULT NULL,
  `PrivateCode1` varchar(15) DEFAULT NULL,
  `PrivateCode2` varchar(15) DEFAULT NULL,
  `TransportationMethod` int(2) DEFAULT NULL,
  `TransportationCompany` varchar(30) DEFAULT NULL,
  `AccountType` varchar(10) DEFAULT NULL,
  `PrivateFloorPrice` decimal(7,2) DEFAULT NULL,
  `VehicleType` int(3) DEFAULT NULL,
  `VehicleKeyCode` varchar(5) DEFAULT NULL,
  `VehicleContact` varchar(20) DEFAULT NULL,
  `TrueMileageUnknown` int(1) DEFAULT NULL,
  `TrueMileageUnknownReason` varchar(30) DEFAULT NULL,
  `ExcessWearAndUseClient` decimal(7,2) DEFAULT NULL,
  `CleaningLevelRequested` int(2) DEFAULT NULL,
  `ManagedMaintenanceProgram` int(1) DEFAULT NULL,
  `WarrantyExpirationDate` date DEFAULT NULL,
  `WarrantyExpirationMileage` int(7) DEFAULT NULL,
  `WarrantyProvider` varchar(50) DEFAULT NULL,
  `ClientDate1` date DEFAULT NULL,
  `ClientDate2` date DEFAULT NULL,
  `ActualCashValue` decimal(7,2) DEFAULT NULL,
  `CauseOfClaim` int(3) DEFAULT NULL,
  `DateOfLoss` date DEFAULT NULL,
  `AdjusterName` varchar(50) DEFAULT NULL,
  `AdjustPhone` varchar(40) DEFAULT NULL,
  `DamageAmount` decimal(7,2) DEFAULT NULL,
  `TransportLoadID` varchar(12) DEFAULT NULL,
  `AuctionBusinessUnit` varchar(2) DEFAULT NULL,
  `ReservedIT` varchar(15) DEFAULT NULL,
  `ReservedCT` varchar(15) DEFAULT NULL,
  `LicensePlate` varchar(10) DEFAULT NULL,
  `SubSeries` varchar(20) DEFAULT NULL,
  `ClientAmount1` decimal(7,2) DEFAULT NULL,
  `OnlinePricingDate` date DEFAULT NULL,
  `OnlinePricingBy` varchar(50) DEFAULT NULL,
  `AlternateClientUniqueID` varchar(25) DEFAULT NULL,
  `OnlineFixedPrice` decimal(7,2) DEFAULT NULL,
  `OnlineStartingBid` decimal(7,2) DEFAULT NULL,
  `OnlineBidIncrement` decimal(7,2) DEFAULT NULL,
  `OnlineFloorPrice` decimal(7,2) DEFAULT NULL,
  `MarshalVehicle` int(1) DEFAULT NULL,
  `CRRequested_Marshal` int(1) DEFAULT NULL,
  `MarshalingPurpose` varchar(50) DEFAULT NULL,
  `MarshaledVehicleReleaseInstructions` varchar(200) DEFAULT NULL,
  `ClientAmount2` decimal(7,2) DEFAULT NULL,
  `ClientAmount3` decimal(7,2) DEFAULT NULL,
  `ClientAmount4` decimal(7,2) DEFAULT NULL,
  `ClientAmount5` decimal(7,2) DEFAULT NULL,
  `ClientAmount6` decimal(7,2) DEFAULT NULL,
  `CC_ID` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aasc_inventory`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
