-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: localhost    Database: crm
-- ------------------------------------------------------
-- Server version	5.7.23-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actions`
--

DROP TABLE IF EXISTS `actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `actions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actions`
--

LOCK TABLES `actions` WRITE;
/*!40000 ALTER TABLE `actions` DISABLE KEYS */;
/*!40000 ALTER TABLE `actions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blood_groups`
--

DROP TABLE IF EXISTS `blood_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `blood_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blood_groups`
--

LOCK TABLES `blood_groups` WRITE;
/*!40000 ALTER TABLE `blood_groups` DISABLE KEYS */;
INSERT INTO `blood_groups` VALUES (1,'A','2019-05-14 10:09:11','2019-05-14 10:09:11'),(2,'B','2019-05-14 10:09:11','2019-05-14 10:09:11'),(3,'AB','2019-05-14 10:09:48','2019-05-14 10:09:48'),(4,'O','2019-05-14 10:09:48','2019-05-14 10:09:48');
/*!40000 ALTER TABLE `blood_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_categories`
--

DROP TABLE IF EXISTS `contact_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contact_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_categories`
--

LOCK TABLES `contact_categories` WRITE;
/*!40000 ALTER TABLE `contact_categories` DISABLE KEYS */;
INSERT INTO `contact_categories` VALUES (1,'Grand compte','2019-05-03 23:32:45','2019-05-03 23:32:45');
/*!40000 ALTER TABLE `contact_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_reasons`
--

DROP TABLE IF EXISTS `contact_reasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contact_reasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_reasons`
--

LOCK TABLES `contact_reasons` WRITE;
/*!40000 ALTER TABLE `contact_reasons` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_reasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_reasons_contacts`
--

DROP TABLE IF EXISTS `contact_reasons_contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contact_reasons_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_reasons_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`contact_reasons_id`,`contact_id`),
  KEY `fk_contact_reasons_has_contact_statuses_contact_reasons1_idx` (`contact_reasons_id`),
  KEY `fk_contact_status_reasons_contacts1_idx` (`contact_id`),
  CONSTRAINT `fk_contact_reasons_has_contact_statuses_contact_reasons1` FOREIGN KEY (`contact_reasons_id`) REFERENCES `contact_reasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_contact_status_reasons_contacts1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_reasons_contacts`
--

LOCK TABLES `contact_reasons_contacts` WRITE;
/*!40000 ALTER TABLE `contact_reasons_contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_reasons_contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_statuses`
--

DROP TABLE IF EXISTS `contact_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contact_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_statuses`
--

LOCK TABLES `contact_statuses` WRITE;
/*!40000 ALTER TABLE `contact_statuses` DISABLE KEYS */;
INSERT INTO `contact_statuses` VALUES (1,'Client potentiel','2019-05-03 23:35:58','2019-05-03 23:35:58');
/*!40000 ALTER TABLE `contact_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone_number` varchar(25) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `contact_status_id` int(11) NOT NULL,
  `contacted_first_on` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX` (`id`),
  KEY `fk_Contacts_Categories1_idx` (`category_id`),
  KEY `fk_Contacts_Sources1_idx` (`source_id`),
  KEY `fk_Contacts_Communes1_idx` (`town_id`),
  KEY `fk_Contacts_Users1_idx` (`user_id`),
  KEY `fk_Contacts_Organizations1_idx` (`organization_id`),
  KEY `fk_contacts_Contact_statuses1_idx` (`contact_status_id`),
  CONSTRAINT `fk_Contacts_Categories1` FOREIGN KEY (`category_id`) REFERENCES `contact_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contacts_Communes1` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contacts_Organizations1` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contacts_Sources1` FOREIGN KEY (`source_id`) REFERENCES `sources` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Contacts_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_contacts_Contact_statuses1` FOREIGN KEY (`contact_status_id`) REFERENCES `contact_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (4,'Boukhecheba','Moncef','princeofgame3@gmail.com','0549201307','',1,1,1,1,1,1,'2019-05-04 00:00:00','2019-05-04 00:00:48','2019-05-04 00:00:48'),(6,'bobo','lolo','fofo@gmail.com','111111345','',1,1,1,1,1,1,'2019-05-06 09:02:00','2019-05-06 09:02:11','2019-05-06 09:02:11');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts_opportunities`
--

DROP TABLE IF EXISTS `contacts_opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `contacts_opportunities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opportunity_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`opportunity_id`,`contact_id`),
  KEY `fk_Opportunities_has_Contacts_Contacts1_idx` (`contact_id`),
  KEY `fk_Opportunities_has_Contacts_Opportunities1_idx` (`opportunity_id`),
  CONSTRAINT `fk_Opportunities_has_Contacts_Contacts1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Opportunities_has_Contacts_Opportunities1` FOREIGN KEY (`opportunity_id`) REFERENCES `opportunities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts_opportunities`
--

LOCK TABLES `contacts_opportunities` WRITE;
/*!40000 ALTER TABLE `contacts_opportunities` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts_opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Algerie','2019-05-03 23:31:57','2019-05-03 23:32:14');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Informatique','2019-04-30 00:00:00','2019-04-30 00:00:00');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_types`
--

DROP TABLE IF EXISTS `document_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `document_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_types`
--

LOCK TABLES `document_types` WRITE;
/*!40000 ALTER TABLE `document_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `document_types_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`),
  KEY `fk_documents_document_types1_idx` (`document_types_id`),
  CONSTRAINT `fk_documents_document_types1` FOREIGN KEY (`document_types_id`) REFERENCES `document_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents_employees`
--

DROP TABLE IF EXISTS `documents_employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `documents_employees` (
  `documents_id` int(11) NOT NULL,
  `employees_id` int(11) NOT NULL,
  PRIMARY KEY (`documents_id`,`employees_id`),
  KEY `fk_documents_has_employees_employees1_idx` (`employees_id`),
  KEY `fk_documents_has_employees_documents1_idx` (`documents_id`),
  CONSTRAINT `fk_documents_has_employees_documents1` FOREIGN KEY (`documents_id`) REFERENCES `documents` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_documents_has_employees_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents_employees`
--

LOCK TABLES `documents_employees` WRITE;
/*!40000 ALTER TABLE `documents_employees` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents_employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_categories`
--

DROP TABLE IF EXISTS `employee_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `employee_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_categories`
--

LOCK TABLES `employee_categories` WRITE;
/*!40000 ALTER TABLE `employee_categories` DISABLE KEYS */;
INSERT INTO `employee_categories` VALUES (1,'Rank 3','2019-04-30 00:00:00','2019-04-30 00:00:00');
/*!40000 ALTER TABLE `employee_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `department_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL,
  `employee_category_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_entered` date NOT NULL,
  `date_birth` date NOT NULL,
  `blood_group_id` int(11) NOT NULL,
  `date_out` date DEFAULT NULL,
  `postal_address` varchar(150) DEFAULT NULL,
  `last_name_father` varchar(150) DEFAULT NULL,
  `first_name_father` varchar(150) DEFAULT NULL,
  `last_name_mother` varchar(150) DEFAULT NULL,
  `first_name_mother` varchar(150) DEFAULT NULL,
  `ccp_number` varchar(45) DEFAULT NULL,
  `ss_number` varchar(45) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `matricule_UNIQUE` (`matricule`),
  KEY `fk_Employees_Departments1_idx` (`department_id`),
  KEY `fk_Employees_Services1_idx` (`services_id`),
  KEY `fk_employees_employee_categories1_idx` (`employee_category_id`),
  KEY `fk_employees_roles1_idx` (`role_id`),
  KEY `fk_employees_blood_group1_idx` (`blood_group_id`),
  CONSTRAINT `fk_Employees_Departments1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Employees_Services1` FOREIGN KEY (`services_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_employees_blood_group1` FOREIGN KEY (`blood_group_id`) REFERENCES `blood_groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_employees_employee_categories1` FOREIGN KEY (`employee_category_id`) REFERENCES `employee_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_employees_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` VALUES (1,'c12-19234-846','Boukhecheba','Moncef','princeofgame3@gmail.com','0549201307',1,2,1,1,'2019-05-14','1999-05-25',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-14 10:11:51','2019-05-14 10:11:51');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employees_skills`
--

DROP TABLE IF EXISTS `employees_skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `employees_skills` (
  `employees_id` int(11) NOT NULL,
  `skills_id` int(11) NOT NULL,
  PRIMARY KEY (`employees_id`,`skills_id`),
  KEY `fk_employees_has_skills_skills1_idx` (`skills_id`),
  KEY `fk_employees_has_skills_employees1_idx` (`employees_id`),
  CONSTRAINT `fk_employees_has_skills_employees1` FOREIGN KEY (`employees_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_employees_has_skills_skills1` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employees_skills`
--

LOCK TABLES `employees_skills` WRITE;
/*!40000 ALTER TABLE `employees_skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `employees_skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_types`
--

DROP TABLE IF EXISTS `notification_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `notification_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_types`
--

LOCK TABLES `notification_types` WRITE;
/*!40000 ALTER TABLE `notification_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) DEFAULT NULL,
  `source_id` int(11) DEFAULT NULL,
  `destination_id` int(11) NOT NULL,
  `notification_type_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX` (`id`),
  KEY `fk_Notifications_Users1_idx` (`source_id`),
  KEY `fk_Notifications_Users2_idx` (`destination_id`),
  KEY `fk_Notifications_Notification_types1_idx` (`notification_type_id`),
  CONSTRAINT `fk_Notifications_Notification_types1` FOREIGN KEY (`notification_type_id`) REFERENCES `notification_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Notifications_Users1` FOREIGN KEY (`source_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Notifications_Users2` FOREIGN KEY (`destination_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objectives`
--

DROP TABLE IF EXISTS `objectives`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `objectives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objectives`
--

LOCK TABLES `objectives` WRITE;
/*!40000 ALTER TABLE `objectives` DISABLE KEYS */;
/*!40000 ALTER TABLE `objectives` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunities`
--

DROP TABLE IF EXISTS `opportunities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opportunities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `date_begin` date NOT NULL,
  `date_end_estimated` date DEFAULT NULL,
  `budget` decimal(20,2) DEFAULT NULL,
  `opportunity_status_id` int(11) NOT NULL,
  `opportunity_type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `estimate_submitted` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Opportunities_Opportunity_statuses1_idx` (`opportunity_status_id`),
  KEY `fk_Opportunities_Opportunity_types1_idx` (`opportunity_type_id`),
  KEY `fk_opportunities_users1_idx` (`user_id`),
  CONSTRAINT `fk_Opportunities_Opportunity_statuses1` FOREIGN KEY (`opportunity_status_id`) REFERENCES `opportunity_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Opportunities_Opportunity_types1` FOREIGN KEY (`opportunity_type_id`) REFERENCES `opportunity_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_opportunities_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunities`
--

LOCK TABLES `opportunities` WRITE;
/*!40000 ALTER TABLE `opportunities` DISABLE KEYS */;
INSERT INTO `opportunities` VALUES (10,'etdbc','2019-05-06',NULL,700.00,4,1,1,0,'2019-05-06 13:13:58','2019-05-06 13:14:08'),(11,'trghjk','2019-05-06',NULL,1233456.00,1,1,1,0,'2019-05-06 13:16:40','2019-05-06 13:16:40'),(12,'nono','2019-05-12','2020-01-04',700.00,1,1,1,1,'2019-05-12 10:58:58','2019-05-12 10:58:58');
/*!40000 ALTER TABLE `opportunities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunities_opportunity_reasons`
--

DROP TABLE IF EXISTS `opportunities_opportunity_reasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opportunities_opportunity_reasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `opportunity_reasons_id` int(11) NOT NULL,
  `opportunity_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`opportunity_reasons_id`,`opportunity_id`),
  KEY `fk_opportunity_reasons_has_opportunities_opportunities1_idx` (`opportunity_id`),
  KEY `fk_opportunity_reasons_has_opportunities_opportunity_reason_idx` (`opportunity_reasons_id`),
  CONSTRAINT `fk_opportunity_reasons_has_opportunities_opportunities1` FOREIGN KEY (`opportunity_id`) REFERENCES `opportunities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_opportunity_reasons_has_opportunities_opportunity_reasons1` FOREIGN KEY (`opportunity_reasons_id`) REFERENCES `opportunity_reasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunities_opportunity_reasons`
--

LOCK TABLES `opportunities_opportunity_reasons` WRITE;
/*!40000 ALTER TABLE `opportunities_opportunity_reasons` DISABLE KEYS */;
/*!40000 ALTER TABLE `opportunities_opportunity_reasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunities_products`
--

DROP TABLE IF EXISTS `opportunities_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opportunities_products` (
  `id` int(11) NOT NULL,
  `opportunity_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`opportunity_id`,`product_id`),
  KEY `fk_opportunities_has_products_products1_idx` (`product_id`),
  KEY `fk_opportunities_has_products_opportunities1_idx` (`opportunity_id`),
  CONSTRAINT `fk_opportunities_has_products_opportunities1` FOREIGN KEY (`opportunity_id`) REFERENCES `opportunities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_opportunities_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunities_products`
--

LOCK TABLES `opportunities_products` WRITE;
/*!40000 ALTER TABLE `opportunities_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `opportunities_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunity_reasons`
--

DROP TABLE IF EXISTS `opportunity_reasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opportunity_reasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunity_reasons`
--

LOCK TABLES `opportunity_reasons` WRITE;
/*!40000 ALTER TABLE `opportunity_reasons` DISABLE KEYS */;
/*!40000 ALTER TABLE `opportunity_reasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunity_statuses`
--

DROP TABLE IF EXISTS `opportunity_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opportunity_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunity_statuses`
--

LOCK TABLES `opportunity_statuses` WRITE;
/*!40000 ALTER TABLE `opportunity_statuses` DISABLE KEYS */;
INSERT INTO `opportunity_statuses` VALUES (1,'En attente','2019-05-04 19:01:34','2019-05-04 19:01:42'),(2,'En cours','2019-05-04 19:01:57','2019-05-04 19:01:57'),(3,'Aboutie','2019-05-04 19:02:04','2019-05-04 19:02:04'),(4,'Non aboutie','2019-05-04 19:02:10','2019-05-04 19:02:10');
/*!40000 ALTER TABLE `opportunity_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opportunity_types`
--

DROP TABLE IF EXISTS `opportunity_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `opportunity_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opportunity_types`
--

LOCK TABLES `opportunity_types` WRITE;
/*!40000 ALTER TABLE `opportunity_types` DISABLE KEYS */;
INSERT INTO `opportunity_types` VALUES (1,'Long terme','2019-05-04 19:00:58','2019-05-04 19:00:58');
/*!40000 ALTER TABLE `opportunity_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization_categories`
--

DROP TABLE IF EXISTS `organization_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `organization_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_categories`
--

LOCK TABLES `organization_categories` WRITE;
/*!40000 ALTER TABLE `organization_categories` DISABLE KEYS */;
INSERT INTO `organization_categories` VALUES (1,'PME','2019-05-03 23:33:35','2019-05-03 23:33:35');
/*!40000 ALTER TABLE `organization_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organization_types`
--

DROP TABLE IF EXISTS `organization_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `organization_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organization_types`
--

LOCK TABLES `organization_types` WRITE;
/*!40000 ALTER TABLE `organization_types` DISABLE KEYS */;
INSERT INTO `organization_types` VALUES (1,'Entreprise','2019-05-03 23:33:52','2019-05-03 23:33:52');
/*!40000 ALTER TABLE `organization_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `telephone_number` varchar(100) NOT NULL,
  `postal_address` varchar(500) DEFAULT NULL,
  `organization_type_id` int(11) NOT NULL,
  `organization_category_id` int(11) NOT NULL,
  `nis_number` varchar(45) DEFAULT NULL,
  `nif_number` varchar(45) DEFAULT NULL,
  `trade_registery_number` varchar(45) DEFAULT NULL,
  `imposition_article` varchar(45) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_Organizations_Organization_types1_idx` (`organization_type_id`),
  KEY `fk_organizations_organization_categories1_idx` (`organization_category_id`),
  CONSTRAINT `fk_Organizations_Organization_types1` FOREIGN KEY (`organization_type_id`) REFERENCES `organization_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_organizations_organization_categories1` FOREIGN KEY (`organization_category_id`) REFERENCES `organization_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations`
--

LOCK TABLES `organizations` WRITE;
/*!40000 ALTER TABLE `organizations` DISABLE KEYS */;
INSERT INTO `organizations` VALUES (1,'Intellix','0557 57 57 67','49, Cité Abziou (Mouline) Douera، 16049',1,1,'5454','1999','254','111','2019-05-03 23:35:10','2019-05-03 23:35:10');
/*!40000 ALTER TABLE `organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `organizations_towns`
--

DROP TABLE IF EXISTS `organizations_towns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `organizations_towns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) NOT NULL,
  `town_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`organization_id`,`town_id`),
  KEY `fk_Organizations_has_Towns_Towns1_idx` (`town_id`),
  KEY `fk_Organizations_has_Towns_Organizations1_idx` (`organization_id`),
  CONSTRAINT `fk_Organizations_has_Towns_Organizations1` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Organizations_has_Towns_Towns1` FOREIGN KEY (`town_id`) REFERENCES `towns` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizations_towns`
--

LOCK TABLES `organizations_towns` WRITE;
/*!40000 ALTER TABLE `organizations_towns` DISABLE KEYS */;
/*!40000 ALTER TABLE `organizations_towns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parameter_types`
--

DROP TABLE IF EXISTS `parameter_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `parameter_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parameter_types`
--

LOCK TABLES `parameter_types` WRITE;
/*!40000 ALTER TABLE `parameter_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `parameter_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parameters`
--

DROP TABLE IF EXISTS `parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  `parameter_type_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  UNIQUE KEY `code_UNIQUE` (`code`),
  KEY `INDEX` (`id`),
  KEY `fk_Parameters_Parameter_types1_idx` (`parameter_type_id`),
  CONSTRAINT `fk_Parameters_Parameter_types1` FOREIGN KEY (`parameter_type_id`) REFERENCES `parameter_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parameters`
--

LOCK TABLES `parameters` WRITE;
/*!40000 ALTER TABLE `parameters` DISABLE KEYS */;
/*!40000 ALTER TABLE `parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_interface_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `permission` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`user_interface_id`,`action_id`,`profile_id`),
  KEY `fk_Permissions_Interfaces1_idx` (`user_interface_id`),
  KEY `fk_Permissions_Actions1_idx` (`action_id`),
  KEY `fk_Permissions_Profiles1_idx` (`profile_id`),
  CONSTRAINT `fk_Permissions_Actions1` FOREIGN KEY (`action_id`) REFERENCES `actions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Permissions_Interfaces1` FOREIGN KEY (`user_interface_id`) REFERENCES `user_interfaces` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Permissions_Profiles1` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Site web','2019-05-04 00:25:24','2019-05-04 00:25:24'),(2,'Hebergement','2019-05-04 00:25:31','2019-05-04 00:25:31');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Closer','2019-05-03 21:26:50','2019-05-03 21:26:59');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospect_reasons`
--

DROP TABLE IF EXISTS `prospect_reasons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `prospect_reasons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospect_reasons`
--

LOCK TABLES `prospect_reasons` WRITE;
/*!40000 ALTER TABLE `prospect_reasons` DISABLE KEYS */;
/*!40000 ALTER TABLE `prospect_reasons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospect_reasons_prospects`
--

DROP TABLE IF EXISTS `prospect_reasons_prospects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `prospect_reasons_prospects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propsect_reason_id` int(11) NOT NULL,
  `prospect_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`,`propsect_reason_id`,`prospect_id`),
  KEY `fk_propsect_reasons_has_propsect_statuses_propsect_reasons1_idx` (`propsect_reason_id`),
  KEY `fk_propsect_statuses_reasons_prospects1_idx` (`prospect_id`),
  CONSTRAINT `fk_propsect_reasons_has_propsect_statuses_propsect_reasons1` FOREIGN KEY (`propsect_reason_id`) REFERENCES `prospect_reasons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_propsect_statuses_reasons_prospects1` FOREIGN KEY (`prospect_id`) REFERENCES `prospects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospect_reasons_prospects`
--

LOCK TABLES `prospect_reasons_prospects` WRITE;
/*!40000 ALTER TABLE `prospect_reasons_prospects` DISABLE KEYS */;
/*!40000 ALTER TABLE `prospect_reasons_prospects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospect_statuses`
--

DROP TABLE IF EXISTS `prospect_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `prospect_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospect_statuses`
--

LOCK TABLES `prospect_statuses` WRITE;
/*!40000 ALTER TABLE `prospect_statuses` DISABLE KEYS */;
INSERT INTO `prospect_statuses` VALUES (1,'Pas interessé','2019-05-03 21:28:13','2019-05-06 10:05:49'),(3,'Interessé','2019-05-06 10:05:33','2019-05-06 10:05:33'),(4,'NOUe','2019-05-12 11:19:35','2019-05-12 11:19:35');
/*!40000 ALTER TABLE `prospect_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prospects`
--

DROP TABLE IF EXISTS `prospects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `prospects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone_number` varchar(25) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `source_id` int(11) NOT NULL,
  `propsect_status_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX` (`id`),
  KEY `fk_Prospects_Users1_idx` (`user_id`),
  KEY `fk_Prospects_Sources1_idx` (`source_id`),
  KEY `fk_prospects_propsect_statuses1_idx` (`propsect_status_id`),
  CONSTRAINT `fk_Prospects_Sources1` FOREIGN KEY (`source_id`) REFERENCES `sources` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Prospects_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_prospects_propsect_statuses1` FOREIGN KEY (`propsect_status_id`) REFERENCES `prospect_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prospects`
--

LOCK TABLES `prospects` WRITE;
/*!40000 ALTER TABLE `prospects` DISABLE KEYS */;
INSERT INTO `prospects` VALUES (9,'Moncef Boukhecheba','Moncef','princeofgame3@gmail.com','68386838',1,1,0,'2019-05-06 10:13:57','2019-05-12 04:16:25'),(10,'kk','','','',1,1,0,'2019-05-12 04:40:46','2019-05-12 04:40:46');
/*!40000 ALTER TABLE `prospects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raise_statuses`
--

DROP TABLE IF EXISTS `raise_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `raise_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raise_statuses`
--

LOCK TABLES `raise_statuses` WRITE;
/*!40000 ALTER TABLE `raise_statuses` DISABLE KEYS */;
INSERT INTO `raise_statuses` VALUES (1,'En attente','2019-05-09 07:57:19','2019-05-09 07:57:19'),(2,'Aboutie','2019-05-09 07:57:30','2019-05-09 07:57:30'),(3,'Non aboutie','2019-05-09 07:57:36','2019-05-09 07:57:36');
/*!40000 ALTER TABLE `raise_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raise_types`
--

DROP TABLE IF EXISTS `raise_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `raise_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raise_types`
--

LOCK TABLES `raise_types` WRITE;
/*!40000 ALTER TABLE `raise_types` DISABLE KEYS */;
INSERT INTO `raise_types` VALUES (1,'Emailing','2019-05-09 07:56:29','2019-05-09 07:56:29'),(2,'Appel telephonique','2019-05-09 07:56:36','2019-05-09 07:56:36');
/*!40000 ALTER TABLE `raise_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `raises`
--

DROP TABLE IF EXISTS `raises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `raises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `date_notification` datetime NOT NULL,
  `raise_type_id` int(11) NOT NULL,
  `raise_status_id` int(11) NOT NULL,
  `opportunity_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Raises_Raise_types1_idx` (`raise_type_id`),
  KEY `fk_Raises_Raise_statuses1_idx` (`raise_status_id`),
  KEY `fk_Raises_Opportunities1_idx` (`opportunity_id`),
  CONSTRAINT `fk_Raises_Opportunities1` FOREIGN KEY (`opportunity_id`) REFERENCES `opportunities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Raises_Raise_statuses1` FOREIGN KEY (`raise_status_id`) REFERENCES `raise_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Raises_Raise_types1` FOREIGN KEY (`raise_type_id`) REFERENCES `raise_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `raises`
--

LOCK TABLES `raises` WRITE;
/*!40000 ALTER TABLE `raises` DISABLE KEYS */;
/*!40000 ALTER TABLE `raises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Closer','2019-04-30 00:00:00','2019-04-30 00:00:00');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'Web','2019-04-30 00:00:00','2019-05-01 19:58:09'),(3,'truc','2019-05-01 18:16:19','2019-05-01 18:16:19');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill_categories`
--

DROP TABLE IF EXISTS `skill_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `skill_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill_categories`
--

LOCK TABLES `skill_categories` WRITE;
/*!40000 ALTER TABLE `skill_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `skill_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `skill_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`),
  KEY `fk_Skills_Skill_categories1_idx` (`skill_category_id`),
  CONSTRAINT `fk_Skills_Skill_categories1` FOREIGN KEY (`skill_category_id`) REFERENCES `skill_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sources`
--

DROP TABLE IF EXISTS `sources`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `sources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sources`
--

LOCK TABLES `sources` WRITE;
/*!40000 ALTER TABLE `sources` DISABLE KEYS */;
INSERT INTO `sources` VALUES (1,'Linkedin','2019-05-03 21:29:25','2019-05-03 21:29:25'),(2,'fefe','2019-05-12 05:31:31','2019-05-12 05:31:31'),(6,'ertyuiokp','2019-05-12 08:12:35','2019-05-12 08:12:35'),(7,'fada','2019-05-12 08:14:54','2019-05-12 08:14:54'),(8,'afea','2019-05-12 08:17:30','2019-05-12 08:17:30'),(10,'paioije','2019-05-12 08:18:55','2019-05-12 08:18:55'),(11,'drtfyguhio','2019-05-12 08:19:10','2019-05-12 08:19:10'),(12,'fjiefjei','2019-05-12 08:19:37','2019-05-12 08:19:37'),(13,'gyuhijokp','2019-05-12 08:20:34','2019-05-12 08:20:34'),(14,'douze','2019-05-12 11:34:57','2019-05-12 11:34:57'),(15,'huit','2019-05-12 11:36:28','2019-05-12 11:36:28'),(16,'huite','2019-05-12 11:37:04','2019-05-12 11:37:04'),(17,'klouklou','2019-05-12 11:50:15','2019-05-12 11:50:15'),(18,'rienx','2019-05-12 11:52:28','2019-05-12 11:52:28'),(19,'Intellix','2019-05-12 12:07:43','2019-05-12 12:07:43'),(20,'kjkmlùù','2019-05-12 12:30:58','2019-05-12 12:30:58');
/*!40000 ALTER TABLE `sources` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `towns`
--

DROP TABLE IF EXISTS `towns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `towns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `postal_code` varchar(45) NOT NULL,
  `wilaya_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`),
  KEY `fk_Towns_Wilayas1_idx` (`wilaya_id`),
  CONSTRAINT `fk_Towns_Wilayas1` FOREIGN KEY (`wilaya_id`) REFERENCES `wilayas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `towns`
--

LOCK TABLES `towns` WRITE;
/*!40000 ALTER TABLE `towns` DISABLE KEYS */;
INSERT INTO `towns` VALUES (1,'Baba Hassen','16081',1,'2019-05-03 23:32:35','2019-05-03 23:32:35');
/*!40000 ALTER TABLE `towns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_interfaces`
--

DROP TABLE IF EXISTS `user_interfaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_interfaces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `section_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX` (`id`),
  KEY `fk_Interfaces_Sections1_idx` (`section_id`),
  CONSTRAINT `fk_Interfaces_Sections1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_interfaces`
--

LOCK TABLES `user_interfaces` WRITE;
/*!40000 ALTER TABLE `user_interfaces` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_interfaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_parameters`
--

DROP TABLE IF EXISTS `user_parameters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `user_parameters` (
  `user_id` int(11) NOT NULL,
  `parameter_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`parameter_id`),
  KEY `fk_Users_has_Parameters_Parameters1_idx` (`parameter_id`),
  KEY `fk_Users_has_Parameters_Users1_idx` (`user_id`),
  CONSTRAINT `fk_Users_has_Parameters_Parameters1` FOREIGN KEY (`parameter_id`) REFERENCES `parameters` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_has_Parameters_Users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_parameters`
--

LOCK TABLES `user_parameters` WRITE;
/*!40000 ALTER TABLE `user_parameters` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_parameters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `INDEX` (`id`),
  KEY `fk_Users_Profiles_idx` (`profile_id`),
  KEY `fk_Users_Employees1_idx` (`employee_id`),
  CONSTRAINT `fk_Users_Employees1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_Profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Boukhecheba','Moncef','moncefbkb','M245136m','moncefbkb@gmail.com',1,1,'2019-05-03 21:27:34','2019-05-03 21:27:34'),(2,'Koko','Soso','kokososo','kokososo','gogo@gmail.com',1,3,'2019-05-06 09:04:38','2019-05-06 09:04:38'),(3,'Boukhecheba','Moncef','po','123','princeofgame3@gmail.com',1,1,'2019-05-14 09:12:07','2019-05-14 09:12:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilayas`
--

DROP TABLE IF EXISTS `wilayas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wilayas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `country_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `INDEX` (`id`),
  KEY `fk_Wilayas_Country1_idx` (`country_id`),
  CONSTRAINT `fk_Wilayas_Country1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilayas`
--

LOCK TABLES `wilayas` WRITE;
/*!40000 ALTER TABLE `wilayas` DISABLE KEYS */;
INSERT INTO `wilayas` VALUES (1,'Alger',1,'2019-05-03 23:32:19','2019-05-03 23:32:19'),(2,'Blida',1,'2019-05-14 12:25:55','2019-05-14 12:25:55');
/*!40000 ALTER TABLE `wilayas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-15 12:57:50
