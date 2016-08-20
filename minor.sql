-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 11:09 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `minor`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `registration`
-- 

CREATE TABLE `registration` (
  `email` varchar(30) NOT NULL,
  `mob_no` bigint(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `conf_password` varchar(15) NOT NULL,
  `salutation` varchar(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `house_no` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `place` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(8) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `registration`
-- 

INSERT INTO `registration` (`email`, `mob_no`, `password`, `conf_password`, `salutation`, `first_name`, `last_name`, `dob`, `house_no`, `address`, `place`, `state`, `pincode`, `date`) VALUES 
('ankit210992@gmail.com', 987654321, 'aa', 'aa', 'Mr', 'Ankit', 'Jain', '2014-10-07', 'asdf', 'asdf', 'asdfg', 'Delhi', 12345, '2014-10-09');
