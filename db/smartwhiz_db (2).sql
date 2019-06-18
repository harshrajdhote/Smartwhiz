-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 05:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartwhiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `Activ_Id` varchar(11) NOT NULL,
  `Activ_Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`Activ_Id`, `Activ_Description`) VALUES
('AId001', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId002', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId003', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId004', 'INDUSTRIAL VISIT, GUEST LECTURE, SEMINARS'),
('AId005', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS - EVENTS(Talentine)'),
('AId006', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId007', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS - EVENTS(Avishkar) '),
('AId008', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS - EVENTS(Sprint)'),
('AId009', 'INDUSTRIAL VISIT - GUEST LECTURE, SEMINARS - EVENTS(Alma mater - Convocation ceremony , Drishti)'),
('AId010', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS - EVENTS(Drishti)'),
('AId011', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS - EVENTS(Drishti)'),
('AId012', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS - EVENTS(Drishti)'),
('AId013', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId014', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId015', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId016', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId017', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId018', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId019', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId020', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId021', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId022', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId023', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId024', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId025', 'INDUSTRIAL VISIT - GUEST LECTURE - SEMINARS'),
('AId026', 'INDUSTRIAL VISIT, GUEST LECTURE, SEMINARS - EVENTS(Manfest)');

-- --------------------------------------------------------

--
-- Table structure for table `clg_activities`
--

CREATE TABLE `clg_activities` (
  `Clg_Id` varchar(11) NOT NULL,
  `Activ_Id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clg_activities`
--

INSERT INTO `clg_activities` (`Clg_Id`, `Activ_Id`) VALUES
('M001', 'AId001'),
('M002', 'AId002'),
('M003', 'AId003'),
('M004', 'AId004'),
('M005', 'AId005'),
('M006', 'AId006'),
('M007', 'AId007'),
('M008', 'AId008'),
('M009', 'AId009'),
('M010', 'AId010'),
('M011', 'AId011'),
('M012', 'AId012'),
('M013', 'AId013'),
('M014', 'AId014'),
('M015', 'AId015'),
('M016', 'AId016'),
('M017', 'AId017'),
('M018', 'AId018'),
('M019', 'AId019'),
('M020', 'AId020'),
('M021', 'AId021'),
('M022', 'AId022'),
('M023', 'AId023'),
('M024', 'AId024'),
('M025', 'AId025'),
('M026', 'AId026'),
('M027', 'AId027');

-- --------------------------------------------------------

--
-- Table structure for table `college_course_map`
--

CREATE TABLE `college_course_map` (
  `Clg_Id` varchar(11) NOT NULL,
  `Course_Id` varchar(11) NOT NULL,
  `Intake` varchar(10) NOT NULL,
  `Duration` varchar(15) NOT NULL,
  `Full/Part Time` varchar(25) NOT NULL,
  `Course Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_course_map`
--

INSERT INTO `college_course_map` (`Clg_Id`, `Course_Id`, `Intake`, `Duration`, `Full/Part Time`, `Course Type`) VALUES
('M001', 'CR026', '120', '2 yrs', 'Full Time', 'PG Diploma'),
('M001', 'CR001', '60', '2 yrs', 'Full Time', 'PG Diploma'),
('M001', 'CR002', '60', '2 yrs', 'Full Time', 'PG Diploma'),
('M001', 'CR003', '60', '2 yrs', 'Full Time', 'PG Diploma'),
('M002', 'CR026', '120', '2 yrs', 'Full Time', 'PG Diploma'),
('M003', 'CR026', '120', '2 yrs', 'Full Time', 'PG Diploma'),
('M004', 'CR026', '120', '2 yrs', 'Full Time', 'PG Diploma'),
('M005', 'CR026', '120', '2 yrs', 'Full Time', 'PG Diploma'),
('M006', 'CR026', '120', '2 yrs', 'Full Time', 'PG Degree'),
('M006', 'CR004', '120', '2 yrs', 'Full Time', 'PG Diploma'),
('M007', 'CR026', '60', '2 yrs', 'Full Time', 'PG Diploma'),
('M007', 'CR005', '60', '15 Months', 'Full Time', 'PG Degree'),
('M008', 'CR028', '0', '15 Months', 'Full Time', 'PG Degree'),
('M008', 'CR026', '0', '15 Months', 'Full Time', 'PG Degree'),
('M008', 'CR026', 'N/A', '15 Months', 'Full Time', 'PG Degree'),
('M008', 'CR028', 'N/A', '15 Months', 'Full Time', 'PG Degree'),
('M009', 'CR005', 'N/A', '15 Months', 'Full Time', 'PG Degree'),
('M009', 'CR005', 'N/A', '15 Months', 'Full Time', 'PG Degree'),
('M010', 'CR030', 'N/A', '15 Months', 'Full Time', 'PG Diploma'),
('M010', 'CR031', 'N/A', '2 Years', 'Full Time', 'PG Diploma'),
('M011', 'CR008', 'N/A', '4 Years', 'Full Time', 'UG+PG Degree'),
('M012', 'CR009', '240', '2 Years ', 'Full Time', 'PG Degree'),
('M012', 'CR026', '120', '2 Years', 'Full Time', 'PG Diploma'),
('M013', 'CR026', '240', '2 Years ', 'Full Time', 'PG Diploma'),
('M013', 'CR032', '60', '2 Years', 'Full TIme', 'PG Diploma'),
('M013', 'CR009', '60', '2 Years', 'Full Time', 'PG Degree'),
('M014', 'CR009', '60', '2 Years ', 'Full Time', 'PG Degree'),
('M015', 'CR009', '60', '2 Years ', 'Full Time', 'PG Degree'),
('M016', 'CR026', '120', '2 Years ', 'Full Time', 'PG Diploma'),
('M016', 'CR010', 'N/A', 'N/A', 'N/A', 'N/A'),
('M016', 'CR011', '60', 'N/A', 'N/A', 'N/A'),
('M016', 'CR012', '60', 'N/A', 'N/A', 'N/A'),
('M017', 'CR026', '120', '2 Years ', 'Full Time', 'PG Diploma'),
('M017', 'CR013', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M017', 'CR011', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M018', 'CR014', '60', '2 Years ', 'Full Time', 'PG Diploma'),
('M018', 'CR015', '120', '2 Years', 'Full Time', 'PG Diploma'),
('M018', 'CR013', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M019', 'CR002', '60', '2 Years ', 'Full Time', 'PG Diploma'),
('M019', 'CR032', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M019', 'CR033', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M020', '17', 'N/A', '2 Years ', 'Full Time', 'PG Degree'),
('M020', '18', 'N/A', '25 Months', 'Full Time', 'PG Diploma'),
('M020', '34', 'N/A', '2 Years', 'Full Time', 'PG Degree'),
('M020', '009', 'N/A', '2 Years', 'Full TIme', 'PG Degree'),
('', '', '', '', '', ''),
('M021', 'CR032', '180', '2 Years ', 'Full Time', 'PG Diploma'),
('M021', 'CR019', '180', '2 Years', 'Full Time', 'PG Diploma'),
('M021', 'CR020', '120', '2 Years', 'Full Time', 'PG Diploma'),
('M021', 'CR003', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M021', 'CR021', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M022', 'CR026', '60', '2 Years ', 'Full Time', 'PG Diploma'),
('M022', 'CR009', 'N/A', '2 Years', 'Full Time', 'PG Degree'),
('M022', 'CR022', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M022', 'CR026', '60', '2 Years ', 'Full Time', 'PG Diploma'),
('M022', 'CR009', 'N/A', '2 Years', 'Full Time', 'PG Degree'),
('M022', 'CR022', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M023', 'CR026', '120', '2 Years ', 'Full Time', 'PG Diploma'),
('M022', 'CR023', 'N/A', '2 Years', 'Full Time', 'PG Degree'),
('M024', 'CR009', 'N/A', '2 Years ', 'Full Time', 'PG Degree'),
('M025', 'CR026', '180', '2 Years ', 'Full Time', 'PG Diploma'),
('M025', 'CR033', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M025', 'CR002', '60', '2 Years', 'Full Time', 'PG Diploma'),
('M026', 'CR026', '180', '2 Years ', 'Full Time', 'PG Diploma'),
('M027', 'CR026', '240', '2 Years ', 'Full Time', 'PG Diploma'),
('M027', 'CR009', 'N/A', '2 Years', 'Full Time', 'PG Degree'),
('M027', 'CR033', '180', '2 Years', 'Full Time', 'PG Diploma'),
('M027', 'CR032', '60', '2 Years', 'Full Time', 'PG Diploma');

-- --------------------------------------------------------

--
-- Table structure for table `college_details`
--

CREATE TABLE `college_details` (
  `Clg_Id` varchar(11) NOT NULL,
  `Name` varchar(90) NOT NULL,
  `Trust` varchar(50) NOT NULL,
  `Establishment` int(11) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Priv_gov` varchar(30) NOT NULL,
  `Afiliated` varchar(90) NOT NULL,
  `Approved_by` varchar(30) NOT NULL,
  `Campus` varchar(80) NOT NULL,
  `Specialization` varchar(200) NOT NULL,
  `Events` varchar(700) NOT NULL,
  `Industrial_visit` varchar(10) NOT NULL,
  `Guest_lect` varchar(10) NOT NULL,
  `Seminars` varchar(10) NOT NULL,
  `Hostel_mess` varchar(10) NOT NULL,
  `Cafeteria` varchar(10) NOT NULL,
  `Conference_room` varchar(10) NOT NULL,
  `Lab` varchar(10) NOT NULL,
  `wifi` varchar(10) NOT NULL,
  `Library` varchar(11) NOT NULL,
  `Gym` varchar(11) NOT NULL,
  `Website` varchar(30) NOT NULL,
  `City` varchar(11) NOT NULL,
  `Zip_code` int(11) NOT NULL,
  `Program` varchar(30) NOT NULL,
  `Courses` varchar(50) NOT NULL,
  `Course_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_details`
--

INSERT INTO `college_details` (`Clg_Id`, `Name`, `Trust`, `Establishment`, `Address`, `Priv_gov`, `Afiliated`, `Approved_by`, `Campus`, `Specialization`, `Events`, `Industrial_visit`, `Guest_lect`, `Seminars`, `Hostel_mess`, `Cafeteria`, `Conference_room`, `Lab`, `wifi`, `Library`, `Gym`, `Website`, `City`, `Zip_code`, `Program`, `Courses`, `Course_type`) VALUES
('M001', 'ITM Business School - Navi Mumbai', 'ITM GROUP OF INSTITUTION', 1991, 'Navi Mumbai', 'Private', 'N/A', 'AICTE', 'ITM Business School – Navi Mumbai', 'Specializations in Finance, Marketing, Supply Chain Management and Information Technology.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Navi Mumbai', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M002', 'ITM BUSINESS SCHOOL', 'ITM Group of Institution', 2010, 'Mumbai', 'Private', 'N/A', 'AICTE', 'ITM Business School – Mumbai (Dombivli)', 'Specializations in Finance and Marketing & Digital Media.', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Mumbai', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M003', 'ITM BUSINESS SCHOOL', 'ITM Group of Institution', 1992, 'Bangalore', 'Private', 'N/A', 'AICTE', 'ITM Business School – Banglore', 'Specialization in second year: Finance, Marketing & Digital Media and Human Resource Management', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Bangalore', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M004', 'ITM BUSINESS SCHOOL', 'ITM Group of Institution', 1993, 'Chennai', 'Private', 'N/A', 'AICTE', 'ITM Business School – Chennai', 'Marketing, Supply Chain and Operations Management and Human Resources Management.', 'No', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'Yes', 'No', 'www.example.com', 'Chennai', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M005', 'ITM BUSINESS SCHOOL', 'ITM Group of Institution', 1995, 'Warangal', 'Private', 'N/A', 'AICTE', 'ITM Business School – Warangal', 'specializations in Finance, Marketing and Human Resource Management.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'No', 'www.example.com', 'Warangal', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M006', 'Kohinoor Business School, (KBS)', 'Kohinoor Education Trust', 2005, 'Mumbai', 'Private', 'University of Mumbai', 'AICTE', 'N/A', ' Specializations offered are Marketing, Finance, Human Resources, Systems/ IT and Operations. Specializations offered are Marketing, Finance, Human Resources, Systems/ IT and Operations.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Mumbai', 0, 'PGDM', 'PG Degree', 'Full Time'),
('M007', 'Universal Business School', 'Strive India Education Foundation', 2009, 'Mumbai', 'Private', 'N/A', 'AICTE', 'N/A', 'Specializations offered in MBA course is Marketing, Human Resource, Financial, Operations, Health Sector, Product and Project Management', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Mumbai', 0, 'MBA + PGDM + PGPM', 'PG Degree', 'Full Time'),
('M008', 'Indira Institute of Management Pune, (IIMP)', 'Shree Chanakya Education society’s', 1994, 'Pune', 'Private', 'Savitribai Phule Pune ', 'AICTE', 'Indira Institute of Management Pune, (IIMP), Tathawade, Pune', '', 'Talentine', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.exaple.com', 'Pune', 0, 'MBA', 'PG Degree', 'Full TIme'),
('M009', 'Indira School of Business Studies (ISBS)', 'Shree Chanakya Education society’s', 2013, 'Pune', 'Private', 'Savitribai Phule Pune University', 'AICTE', 'Indira School of Business Studies (ISBS), Tathawade, Pune', 'specializations: Marketing Management, Financial Management, Operations, HR Management, Supply Chain Management & International Business.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.exapmle.com', 'Pune', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M010', 'Indira College of Engineering and Management(ICEM)', 'Shree Chanakya Education society’s', 2007, 'Parandwadi, Pune', 'Private', 'Savitribai Phule Pune University', 'AICTE', 'Indira College of Engineering and Management, Parandwadi, Pune', 'Specializations offered are Marketing Management, Financial Management, Human Resource Management, Supply Chain Management', 'Avishkar\r\nIndira College of Engineering and Management arranges Avishkar every year. Avishkar is a festival that helps students to present their skills in the technical field, arts, sports and other intrinsic qualities. It covers three different activities namely, sports event, technical event and cultural event under its canopy.', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Pune', 0, 'MBA', 'PG Degree', 'Full Time'),
('M011', 'Indira Global Business School (IGBS)', 'Shree Chanakya Education society’s', 2009, 'Pune', 'Private', 'Savitribai Phule Pune University', 'AICTE', 'Indira Global Business School (IGBS), Parandwadi, Pune', 'Specialization offered are:\r\nMarketing, Finance, HR, International Business and Supply Chain\r\n', 'Sprint\r\nSprint is the IGBS annual sports extravaganza. The event emphasized the value and importance of Sports in our life. It is a single day event. The activities includes in the event are: Cricket, Badminton, Table Tennis, Carom, Chess and Volleyball', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Pune', 0, 'MBA', 'PG Degree', 'Full TIme'),
('M012', 'Balaji Institute of Modern Management (BIMM)', 'Sri Balaji Society`s', 1999, 'Tathawade,Pune', 'Private', 'AICTE', 'AICTE', 'Balaji Institute of Modern Management (BIMM) Tathawade,Pune', 'Sales and Marketing (Including Retail & Insurance), Finance and Financial Services, Operations and Supply Chain Management including Logistics and Systems.', 'ALMA MATER , CONVOCATION CEREMONY , DRISHTI', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Pune', 0, 'PGDM', 'PG Diploma', 'Full TIme'),
('M013', 'Balaji Institute of Telecom Management (BITM)', 'Sri Balaji Society', 2002, 'athawade,Pune', 'Private', 'N/A', 'AICTE', 'Balaji Institute of Telecom Management (BITM)  Tathawade,Pune', 'No', 'Drishti\r\nDrishti is a cultural event in which all the four management institute of Sri Balaji Society, Pune compete for the ‘Rathininathammal Trophy’, annually. This event involves cultural, sports and management games/ other relevant competition, which are judged carefully. It gives an opportunities to every student to take part and showcase their talents. The winner of this event is awarded with a sum of Rs. 1,00,000 as the award money.', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Pune', 0, 'PGDM', 'PG Diploma', 'Full TIme'),
('M014', 'Balaji Institute of International Business (BIIB) ', 'Sri Balaji Society', 2003, 'Pune', 'Private', 'N/A', 'AICTE', 'Balaji Institute of International Business (BIIB) Tathawade,Pune Balaji ', 'No', 'Drishti\r\nDrishti is a cultural event in which all the four management institute of Sri Balaji Society, Pune compete for the ‘Rathininathammal Trophy’, annually. This event involves cultural, sports and management games/ other relevant competition, which are judged carefully. It gives an opportunities to every student to take part and showcase their talents. The winner of this event is awarded with a sum of Rs. 1,00,000 as the award money.', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Pune', 0, 'PGDM in Marketing', 'PG Diploma', 'Full Time'),
('M015', 'Ramachandran International Institute of Management, (RIIM)', 'Arihant Group of Institute', 2005, 'Pune', 'Private', 'Savitribai Phule Pune Univeristy', 'AICTE', 'N/A', 'Offers specializations in Marketing, Finance, HR, IT and Operations.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Pune', 0, 'PGDM in Marketing', 'PG Degree', 'Full TIme'),
('M016', 'Siva Sivani Institute of Management (SSIM)', 'N/A', 1992, 'Hyderabad', 'Private', 'N/A', 'AICTE', 'N/A', 'Offers specializations in Marketing, Finance, HR, IT and Operations.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Hyderabad', 0, 'PGDM in Marketing', 'PG Degree', 'Full Time'),
('M017', 'Vishwa Vishwani Institute of Systems and Management', 'N/A', 1998, 'Hakeempet, Hyderabad', 'Private', 'N/A', 'AICTE', 'N/A', ' Specialization offered are Marketing, Financial Management, Banking & Finance, Business Analytics, Pharma, Agribusiness, Healthcare Management, HRM, IB, Operations, Retail, MIS, E-Commerce', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Hyderabad', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M018', 'MYRA SCHOOL OF BUSINESS', 'N/A', 2012, 'Mysore', 'Private', 'University of Mysore', 'AICTE', 'N/A', 'Offered dual specialisations in Finance, Accounting, Marketing, Supply Chain Management, Management / Strategy, Analytics and Information Systems.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Mysore', 0, 'PGDM', 'PG DIPLOMA', 'Full Time'),
('M019', 'Institute of Management, Christ University', 'N/A', 1994, 'Hosur Road, Bangalore', 'Private', 'Christ University', 'AICTE', 'N/A', 'Offered dual specialisations in Finance, Accounting, Marketing, Supply Chain Management, Management / Strategy, Analytics and Information Systems.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Bangalore', 0, 'MBA', 'PG DIPLOMA', 'Full Time'),
('M020', 'IFIM Business School', 'N/A', 1995, 'Bangalore', 'Private', 'Visvesvaraya Technological University', 'AICTE', 'N/A', ' Course offers specialization in Marketing, Finance, Human Resources, International Business, Analytics and Entrepreneurship, Banking & Financial Services and Capital Markets.', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Bangalore', 0, 'PGDM', 'PG Diploma', 'Full TIme'),
('M021', 'INDUS  BUSINESS  ACADEMY', 'N/A', 2001, 'Bangalore', 'Private', 'N/A', 'AICTE', 'N/A', 'Offers dual specialization in the following: Marketing, Finance, Human Resource Management, Business Analytics & E-Business, Retail, Operations, International Business and Entrepreneurship Management', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Bangalore', 0, 'PGDM', 'PG DIPLOMA                                       ', 'Full Time'),
('M022', 'NEW DELHI INSTITUTE OF MANAGEMENT ', 'N/A', 1992, 'Delhi', 'Private', 'N/A', 'AICTE', 'N/A', 'Specializations offered are: Marketing, Finance, Production and Supply chain, Human Resource Development, Information Technology, International Business, Media and Communication', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Delhi', 0, 'PGDM', 'PG Diploma', 'Full TIme'),
('M023', 'IILM COLLEGE OF MANAGEMENT STUDIES', 'N/A', 2003, 'Greater Noida', 'Private', 'N/A', 'AICTE', 'N/A', 'Specializations offered in:-\r\nMarketing, Finance, Human Resource, Operations\r\nCAT  MAT  XAT  CMAT', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'No', 'www.example.com', 'Noida', 0, 'PGDM', 'PG Diploma', 'Full Time'),
('M024', 'JAIPURIA INSTITUTE OF MANAGEMENT', 'N/A', 2004, 'Noida', 'Private', 'N/A', 'AICTE', 'N/A', 'The course is offered with dual specialization in Marketing, Finance, Human Resource, Operations, International Business and Strategy', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Noida', 0, 'PGDM', 'PG Diploma', 'Full TIme'),
('M025', 'Taxila Business School', 'N/A', 2003, 'Jaipur', 'Private', 'N/A', 'AICTE', 'N/A', ' Course is dual specialization offered in:\r\nFinance, International Business Management, Marketing, HR Management, Operations, Rural Management, IT, Family Business Management', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Jaipur', 0, 'PGDM', 'PG Diploma', 'Full TIme'),
('M026', 'Doon Business School, (DBS)', 'N/A', 2007, 'Dehradun', 'Private', 'Hemvati Nandan Bahuguna Garhwal University ', 'AICTE', 'N/A', ' Provides specialization in Marketing, Finance, Human Resource Management & International Business.', 'MANFEST', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Dehradun', 0, 'MBA', 'PG Degree', 'Full Time'),
('M027', 'Balaji Institute of Management and Human Resource Development, (BIMHRD)', 'Sri Balaji Society', 2004, 'Pune', 'Private', 'N/A', 'AICTE', 'Balaji Institute of Management and Human Resource Development(BIMHR)', 'Specializations offered are Sales and Marketing (including Retail and Insurance), Finance & Financial Services and Operations & Supply Chain Management (including Logistics and Systems)', 'Drishti\r\nDrishti is a cultural event in which all the four management institute of Sri Balaji Society, Pune compete for the ‘Rathininathammal Trophy’, annually. This event involves cultural, sports and management games/ other relevant competition, which are judged carefully. It gives an opportunities to every student to take part and showcase their talents. The winner of this event is awarded with a sum of Rs. 1,00,000 as the award money.', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'www.example.com', 'Pune', 0, 'PGDM', 'PG Diploma', 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `Course_ID` varchar(11) NOT NULL,
  `Course_Name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`Course_ID`, `Course_Name`) VALUES
('CR001', 'PGDM In Management and Marketing'),
('CR002', 'PGDM In International Business'),
('CR003', 'PGDM In Human Resource Management'),
('CR004', 'MMS'),
('CR005', 'MBA + PGDM'),
('CR006', 'PG Diploma'),
('CR007', 'PG Degree'),
('CR008', 'Global Progressive BBA + MBA'),
('CR009', 'MBA'),
('CR010', 'PGDM in IT & Marketing'),
('CR011', 'PGDM in PM & HRD'),
('CR012', 'PGDM Executive'),
('CR013', 'PGDM in Marketing & Finance'),
('CR014', 'PGDM in Telecom & Marketing'),
('CR015', 'PGDM in Telecom '),
('CR016', 'PGDM in International Business and Economics+PGDM'),
('CR017', 'MBA + Advanced Employ ability and Leadership Development Program + Post Graduate Program + Digital Marketing'),
('CR018', 'PGDM+  (1 Month Residential Program in London)'),
('CR019', 'PGDM (Triple Spezialisation)'),
('CR020', 'PGDM in Banking, Insurance, Finance & Allied Servi'),
('CR021', 'PGDM in Global Business'),
('CR022', 'PGDM in Bussinessl Analytics'),
('CR023', 'Global  MBA'),
('CR024', 'PGDM in Service Management'),
('CR025', 'PGDM+SAP'),
('CR026', 'PGDM'),
('CR027', 'PGDM-Global'),
('CR028', 'MBA + PGDM + PGPM'),
('CR029', 'MBA + PGCM'),
('CR030', 'PGPM + PGCM'),
('CR031', 'PGP on Rubber Technology & Management'),
('CR032', 'PGDM in Marketing'),
('CR033', 'PGDM in Finance'),
('CR034', 'MBA + Advanced Employability and Leadership Development Program');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_fees`
--

CREATE TABLE `hostel_fees` (
  `Clg_Id` varchar(11) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Fees` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_fees`
--

INSERT INTO `hostel_fees` (`Clg_Id`, `Year`, `Fees`) VALUES
('M001', '1st Yr', 'Rs. 1,47,000'),
('M001', '2nd Yr', 'Rs. 1,37,000'),
('M002', 'N/A', 'N/A'),
('M002', 'N/A', 'N/A'),
('M003', 'N/A', 'N/A'),
('M004', 'N/A', 'N/A'),
('M005', 'N/A', 'N/A'),
('M006', 'N/A', 'INR 199600/-'),
('M006', 'N/A', 'INR 148000/-'),
('M007', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `Clg_Id` varchar(11) NOT NULL,
  `Survey` varchar(25) NOT NULL,
  `Date` varchar(11) NOT NULL,
  `Year` varchar(11) NOT NULL,
  `Rank` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`Clg_Id`, `Survey`, `Date`, `Year`, `Rank`) VALUES
('M001', '0', '0', '0', '0'),
('M002', 'N/A', 'N/A', 'N/A', 'N/A'),
('M003', 'N/A', 'N/A', 'N/A', 'N/A'),
('M004', 'N/A', 'N/A', 'N/A', 'N/A'),
('M005', 'N/A', 'N/A', 'N/A', 'N/A'),
('M006', 'Times B School', 'N/A', 'N/A', '10th'),
('M007', 'N/A', 'N/A', '2016', '83'),
('M008', 'N/A', 'N/A', 'N/A', 'N/A'),
('M009', 'N/A', 'N/A', 'N/A', 'N/A'),
('M010', 'N/A', 'N/A', 'N/A', 'N/A'),
('M011', 'N/A', 'N/A', 'N/A', 'N/A'),
('M012', '0', '0', '0', '0'),
('M013', 'N/A', 'N/A', '2016', '77'),
('M014', 'N/A', 'N/A', '2016', '108'),
('M015', 'N/A', 'N/A', '2016', '93'),
('M016', 'N/A', 'N/A', 'N/A', 'N/A'),
('M017', 'N/A', 'N/A', '2015', '71'),
('M018', 'N/A', 'N/A', 'N/A', 'N/A'),
('M019', 'N/A', 'N/A', 'N/A', 'N/A'),
('M020', 'N/A', 'N/A', '2016', '45'),
('M021', 'N/A', 'N/A', '2016', '47'),
('M022', 'N/A', 'N/A', 'N/A', 'N/A'),
('M023', 'N/A', 'N/A', 'N/A', 'N/A'),
('M024', 'N/A', 'N/A', 'N/A', 'N/A'),
('M025', 'N/A', 'N/A', '2017', '43'),
('M026', 'N/A', 'N/A', '2016', '192'),
('M027', 'N/A', 'N/A', '2016', 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`Activ_Id`);

--
-- Indexes for table `college_details`
--
ALTER TABLE `college_details`
  ADD PRIMARY KEY (`Clg_Id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`Course_ID`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`Clg_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
