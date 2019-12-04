-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.26 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour fil_rouge
DROP DATABASE IF EXISTS `fil_rouge`;
CREATE DATABASE IF NOT EXISTS `fil_rouge` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fil_rouge`;

-- Listage de la structure de la table fil_rouge. client
DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `cli_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `cli_nom` varchar(50) NOT NULL,
  `cli_prenom` varchar(50) NOT NULL,
  `cli_rue` varchar(50) NOT NULL,
  `cli_code_postal` varchar(20) NOT NULL,
  `cli_ville` varchar(50) NOT NULL,
  `cli_pays` varchar(50) NOT NULL,
  `cli_mail` varchar(50) DEFAULT NULL,
  `cli_telephone` varchar(20) DEFAULT NULL,
  `cli_statut` varchar(50) DEFAULT NULL,
  `cli_coefficient` decimal(4,2) NOT NULL DEFAULT '3.00',
  `cli_emp_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  KEY `cli_emp_id` (`cli_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.client : 16 rows
DELETE FROM `client`;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` (`cli_id`, `cli_nom`, `cli_prenom`, `cli_rue`, `cli_code_postal`, `cli_ville`, `cli_pays`, `cli_mail`, `cli_telephone`, `cli_statut`, `cli_coefficient`, `cli_emp_id`) VALUES
	(1, 'Yurtsev', 'Maëly', '4588 Summit Junction', '94254 CEDEX', 'Gentilly', 'France', 'Maë.Yurtsev@mail.com', '276-47-8726', 'professionel', 2.00, NULL),
	(2, 'Swanborrow', 'Östen', '7 Vermont Road', '82037 CEDEX', 'Montauban', 'France', 'Öst.Swanborrow@mail.com', '865-81-0304', 'professionel', 2.00, NULL),
	(3, 'Bes', 'Anaëlle', '19 Bowman Junction', '74041 CEDEX', 'Annecy', 'France', 'Ana.Bes@mail.com', '280-83-8709', 'professionel', 2.00, NULL),
	(4, 'Tolumello', 'Anaël', '576 Scoville Trail', '54046 CEDEX', 'Nancy', 'France', 'Ana.Tolumello@mail.com', '642-92-9923', 'professionel', 2.00, NULL),
	(5, 'Salsberg', 'Michèle', '89 Pearson Point', '78897 CEDEX', 'Saint-Quentin-en-Yvelines', 'France', 'Mic.Salsberg@mail.com', '745-23-9796', 'professionel', 2.00, NULL),
	(6, 'Loftus', 'Kévina', '690 Steensland Junction', '94414 CEDEX', 'Saint-Maurice', 'France', 'Kév.Loftus@mail.com', '119-03-7753', 'professionel', 2.00, NULL),
	(7, 'Linfitt', 'Océane', '72 Nelson Street', '84304 CEDEX', 'Cavaillon', 'France', 'Océ.Linfitt@mail.com', '168-87-1106', 'professionel', 2.00, NULL),
	(8, 'Loch', 'Gaïa', '916 Corben Place', '13253 CEDEX 06', 'Marseille', 'France', 'Gaï.Loch@mail.com', '791-84-2097', 'professionel', 2.00, NULL),
	(9, 'Laverock', 'Loïc', '0136 Eastlawn Lane', '77794 CEDEX', 'Nemours', 'France', 'Loï.Laverock@mail.com', '200-12-2825', 'professionel', 2.00, NULL),
	(10, 'Vassman', 'Zhì', '2673 Warrior Parkway', '14654 CEDEX', 'Carpiquet', 'France', 'Zhì.Vassman@mail.com', '218-95-0963', 'professionel', 2.00, NULL),
	(11, 'Winspar', 'Stévina', '4 Bluejay Terrace', '94525 CEDEX 1', 'Rungis', 'France', 'Sté.Winspar@mail.com', '275-52-7061', NULL, 3.00, NULL),
	(12, 'Papachristophorou', 'Daphnée', '4152 Logan Point', '89102 CEDEX', 'Sens', 'France', 'Dap.Papachristophorou@mail.com', '501-40-4761', NULL, 3.00, NULL),
	(13, 'Orknay', 'Maï', '914 Evergreen Plaza', '95761 CEDEX 1', 'Roissy Charles-de-Gaulle', 'France', 'Maï.Orknay@mail.com', '542-30-0982', NULL, 3.00, NULL),
	(14, 'Dwire', 'Mégane', '44258 Pleasure Crossing', '77414 CEDEX', 'Claye-Souilly', 'France', 'Még.Dwire@mail.com', '179-04-9808', NULL, 3.00, NULL),
	(15, 'Boscott', 'Pò', '6135 Kropf Pass', '75976 CEDEX 20', 'Paris 20', 'France', 'Pò.Boscott@mail.com', '523-65-0245', NULL, 3.00, NULL),
	(16, 'Duester', 'Sélène', '06804 Delaware Point', '01069 CEDEX 9', 'Bourg-en-Bresse', 'France', 'Sél.Duester@mail.com', '517-82-7525', NULL, 3.00, NULL);
/*!40000 ALTER TABLE `client` ENABLE KEYS */;

-- Listage de la structure de la table fil_rouge. commande
DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `com_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `com_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `com_reduction` decimal(3,2) DEFAULT '1.00',
  `com_total_HT` decimal(12,2) DEFAULT NULL,
  `com_total_TTC` decimal(12,2) DEFAULT NULL,
  `com_etat` varchar(40) DEFAULT NULL,
  `com_livraison_rue` varchar(100) NOT NULL,
  `com_livraison_code_postal` varchar(20) NOT NULL,
  `com_livraison_ville` varchar(50) NOT NULL,
  `com_livraison_pays` varchar(50) NOT NULL,
  `com_livraison_avancement` varchar(50) DEFAULT NULL,
  `com_paiement_date` date DEFAULT NULL,
  `com_facture_numero` varchar(10) DEFAULT NULL,
  `com_facture_date` date DEFAULT NULL,
  `com_facture_rue` varchar(100) NOT NULL,
  `com_facture_code_postal` varchar(20) NOT NULL,
  `com_facture_ville` varchar(50) NOT NULL,
  `com_facture_pays` varchar(50) NOT NULL,
  `com_cli_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`com_id`),
  UNIQUE KEY `com_facture_numero` (`com_facture_numero`),
  KEY `com_cli_id` (`com_cli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.commande : 30 rows
DELETE FROM `commande`;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` (`com_id`, `com_date`, `com_reduction`, `com_total_HT`, `com_total_TTC`, `com_etat`, `com_livraison_rue`, `com_livraison_code_postal`, `com_livraison_ville`, `com_livraison_pays`, `com_livraison_avancement`, `com_paiement_date`, `com_facture_numero`, `com_facture_date`, `com_facture_rue`, `com_facture_code_postal`, `com_facture_ville`, `com_facture_pays`, `com_cli_id`) VALUES
	(1, '2016-03-05 00:00:00', 1.00, 2680.00, NULL, 'soldée', '718 Ludington Lane', '14074 CEDEX 5', 'Colmar', 'France', 'livrée 100%', '2016-03-26', '1', '2016-04-04', '5 Jana Pass', '68020 CEDEX', 'Caen', 'France', 1),
	(2, '2019-07-25 00:00:00', 1.00, 2320.00, NULL, 'soldée', '81 Moulton Hill', '59425 CEDEX', 'Paris 01', 'France', 'livrée 100%', '2019-08-15', '2', '2019-08-24', '96384 Spohn Way', '75100 CEDEX 01', 'Armentières', 'France', 3),
	(3, '2016-08-26 00:00:00', 1.00, 2798.00, NULL, 'soldée', '8712 Kropf Place', '01009 CEDEX', 'Metz', 'France', 'livrée 100%', '2016-09-16', '3', '2016-09-25', '92 Lyons Street', '57016 CEDEX 01', 'Bourg-en-Bresse', 'France', 2),
	(4, '2017-06-16 00:00:00', 1.00, 2856.00, NULL, 'soldée', '9954 Rowland Plaza', '44335 CEDEX 3', 'Rennes', 'France', 'livrée 100%', '2017-07-07', '4', '2017-07-16', '86 Ludington Court', '35203 CEDEX 2', 'Nantes', 'France', 2),
	(5, '2017-11-28 00:00:00', 1.00, 3012.00, NULL, 'soldée', '685 Swallow Pass', '29825 CEDEX 9', 'Romans-sur-Isère', 'France', 'livrée 100%', '2017-12-19', '5', '2017-12-28', '85627 Armistice Alley', '26109 CEDEX', 'Brest', 'France', 3),
	(6, '2016-05-02 00:00:00', 1.00, 482.00, NULL, 'soldée', '66 Springview Street', '56504 CEDEX', 'Fresnes', 'France', 'livrée 100%', '2016-05-23', '6', '2016-06-01', '685 Chive Place', '94264 CEDEX', 'Locminé', 'France', 1),
	(7, '2016-01-31 00:00:00', 1.00, 444.00, NULL, 'soldée', '6195 Little Fleur Junction', '68504 CEDEX', 'Bergerac', 'France', 'livrée 100%', '2016-02-21', '7', '2016-03-01', '99 Mariners Cove Hill', '24111 CEDEX', 'Guebwiller', 'France', 4),
	(8, '2016-08-01 00:00:00', 1.00, 2000.00, NULL, 'soldée', '6098 Oak Valley Park', '78990', 'Roissy Charles-de-Gaulle', 'France', 'livrée 100%', '2016-08-22', '8', '2016-08-31', '9181 Comanche Parkway', '95974 CEDEX 2', 'Élancourt', 'France', 5),
	(9, '2018-09-21 00:00:00', 1.00, 76.00, NULL, 'soldée', '160 Linden Place', '26109 CEDEX', 'Paris 02', 'France', 'livrée 100%', '2018-10-20', '9', '2018-10-21', '688 Barby Center', '75075 CEDEX 02', 'Romans-sur-Isère', 'France', 5),
	(10, '2018-08-31 00:00:00', 1.00, 11256.00, NULL, 'soldée', '59165 Bunting Point', '67098 CEDEX 2', 'Vincennes', 'France', 'livrée 100%', '2018-09-29', '10', '2018-09-30', '93 Colorado Hill', '94309 CEDEX', 'Strasbourg', 'France', 6),
	(11, '2019-09-01 00:00:00', 1.00, 156.00, NULL, 'soldée', '513 Westend Center', '79021 CEDEX', 'Lorient', 'France', 'livrée 100%', '2019-09-30', '11', '2019-10-01', '033 Transport Place', '56326 CEDEX', 'Niort', 'France', 6),
	(12, '2019-01-29 00:00:00', 1.00, 1526.00, NULL, 'soldée', '4471 Emmet Drive', '35102 CEDEX 3', 'Marseille', 'France', 'livrée 100%', '2019-02-27', '12', '2019-02-28', '656 Bayside Lane', '13316 CEDEX 15', 'Rennes', 'France', 6),
	(13, '2017-12-06 00:00:00', 1.00, 84.00, NULL, 'soldée', '993 Vermont Point', '71024 CEDEX 9', 'Niort', 'France', 'livrée 100%', '2018-01-04', '13', '2018-01-05', '99 Atwood Trail', '79004 CEDEX', 'Mâcon', 'France', 6),
	(14, '2018-03-04 00:00:00', 1.00, 36.00, NULL, 'soldée', '2 Carberry Lane', '92709 CEDEX', 'Saint-Étienne', 'France', 'livrée 100%', '2018-04-02', '14', '2018-04-03', '65056 1st Alley', '42021 CEDEX 1', 'Colombes', 'France', 7),
	(15, '2018-08-20 00:00:00', 1.00, 19.40, NULL, 'soldée', '8073 Twin Pines Parkway', '84274 CEDEX', 'Vincennes', 'France', 'livrée 100%', '2018-09-18', '15', '2018-09-19', '131 Darwin Way', '94685 CEDEX', 'Vedène', 'France', 7),
	(16, '2017-11-07 00:00:00', 1.00, 234.00, NULL, 'soldée', '5514 Lake View Alley', '13540', 'Paris 19', 'France', 'livrée 100%', '2017-12-06', '16', '2017-12-07', '07643 Eastlawn Terrace', '75166 CEDEX 19', 'Aix-en-Provence', 'France', 8),
	(17, '2016-05-04 00:00:00', 1.00, 33.60, NULL, 'retard de paiement', '72117 Ronald Regan Park', '12020 CEDEX 9', 'Strasbourg', 'France', 'livrée 100%', NULL, '17', '2016-06-03', '3 High Crossing Crossing', '67961 CEDEX 9', 'Rodez', 'France', 9),
	(18, '2019-02-26 00:00:00', 1.00, 120.00, NULL, 'retard de paiement', '81050 Anderson Circle', '86104 CEDEX', 'Arpajon', 'France', 'livrée 100%', NULL, '18', '2019-03-28', '357 Maple Wood Crossing', '91295 CEDEX', 'Châtellerault', 'France', 10),
	(19, '2019-03-07 00:00:00', 1.00, 3480.00, NULL, 'retard de paiement', '53 North Avenue', '93604 CEDEX', 'Paris 06', 'France', 'livrée 100%', NULL, '19', '2019-04-06', '51 Clemons Drive', '75270 CEDEX 06', 'Aulnay-sous-Bois', 'France', 10),
	(20, '2018-04-01 00:00:00', 1.00, 1020.00, NULL, 'soldée', '58 Hudson Pass', '83164 CEDEX', 'Nancy', 'France', 'livrée 100%', '2018-04-01', '20', '2018-04-01', '255 Becker Junction', '54039 CEDEX', 'La Valette-du-Var', 'France', 11),
	(21, '2019-06-22 00:00:00', 1.00, 1428.00, NULL, 'soldée', '12 Drewry Park', '07309 CEDEX', 'Vanves', 'France', 'livrée 100%', '2019-06-22', '21', '2019-06-22', '19 Clyde Gallagher Alley', '92179 CEDEX', 'Tournon-sur-Rhône', 'France', 11),
	(22, '2019-09-17 00:00:00', 1.00, 6777.00, NULL, 'soldée', '03056 Muir Place', '93584 CEDEX', 'Redon', 'France', 'livrée 100%', '2019-09-17', '22', '2019-09-17', '572 Johnson Court', '35605 CEDEX', 'Saint-Ouen', 'France', 11),
	(23, '2018-07-25 00:00:00', 1.00, 1446.00, NULL, 'soldée', '7 Riverside Center', '75151 CEDEX 03', 'Aix-en-Provence', 'France', 'livrée 100%', '2018-07-25', '23', '2018-07-25', '9471 Westridge Road', '13540', 'Paris 03', 'France', 12),
	(24, '2018-10-13 00:00:00', 1.00, 222.00, NULL, 'soldée', '8 Dwight Hill', '80089 CEDEX 2', 'Marseille', 'France', 'livrée 100%', '2018-10-13', '24', '2018-10-13', '78793 Grayhawk Drive', '13192 CEDEX 20', 'Amiens', 'France', 13),
	(25, '2018-09-07 00:00:00', 1.00, 4525.20, NULL, 'soldée', '64 Westerfield Lane', '75567 CEDEX 12', 'Le Mans', 'France', 'livrée 100%', '2018-09-07', '25', '2018-09-07', '3 Sycamore Center', '72029 CEDEX 2', 'Paris 12', 'France', 13),
	(26, '2016-08-21 00:00:00', 1.00, 768.00, NULL, 'expédiée', '0 Waxwing Lane', '66845 CEDEX', 'La Ferté-Bernard', 'France', 'livrée partiellement', '2016-08-21', '26', '2016-08-21', '0900 Gateway Drive', '72404 CEDEX', 'Perpignan', 'France', 13),
	(27, '2018-09-10 00:00:00', 1.00, 9108.00, NULL, 'expédiée', '6 Merry Drive', '25035 CEDEX', 'Évreux', 'France', 'livrée partiellement', '2018-09-10', '27', '2018-09-10', '86 Heath Hill', '27022 CEDEX', 'Besançon', 'France', 14),
	(28, '2017-05-30 00:00:00', 1.00, 861.00, NULL, 'en préparation', '5220 Birchwood Road', '60477 CEDEX', 'Arras', 'France', 'à livrer', '2017-05-30', '28', '2017-05-30', '9517 Express Lane', '62036 CEDEX', 'Compiègne', 'France', 15),
	(29, '2017-04-21 00:00:00', 1.00, 7434.00, NULL, 'en préparation', '277 Crowley Junction', '64185 CEDEX', 'Tours', 'France', 'à livrer', '2017-04-21', '29', '2017-04-21', '38 Mayer Terrace', '37016 CEDEX 1', 'Bayonne', 'France', 16),
	(30, '2018-08-13 00:00:00', 1.00, 2301.00, NULL, 'en préparation', '9 Monica Alley', '34934 CEDEX 9', 'Saint-Maurice', 'France', 'à livrer', '2018-08-13', '30', '2018-08-13', '1 Mcbride Trail', '94414 CEDEX', 'Montpellier', 'France', 16);
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;

-- Listage de la structure de la procédure fil_rouge. Commande_etat
DROP PROCEDURE IF EXISTS `Commande_etat`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `Commande_etat`(IN _com_id mediumint)
BEGIN
	SELECT com_etat AS 'état de la commande'
	FROM Commande
	WHERE com_id=_com_id;	
END//
DELIMITER ;

-- Listage de la structure de la table fil_rouge. contenir
DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_pro_id` mediumint(9) DEFAULT NULL,
  `con_liv_id` mediumint(9) DEFAULT NULL,
  `con_liv_quantite_BL` decimal(15,2) NOT NULL,
  PRIMARY KEY (`con_id`),
  KEY `con_pro_id` (`con_pro_id`),
  KEY `con_liv_id` (`con_liv_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.contenir : 33 rows
DELETE FROM `contenir`;
/*!40000 ALTER TABLE `contenir` DISABLE KEYS */;
INSERT INTO `contenir` (`con_id`, `con_pro_id`, `con_liv_id`, `con_liv_quantite_BL`) VALUES
	(1, 1, 1, 3.00),
	(2, 2, 1, 2.00),
	(3, 2, 2, 2.00),
	(4, 3, 3, 1.00),
	(5, 4, 3, 1.00),
	(6, 5, 3, 1.00),
	(7, 4, 4, 3.00),
	(8, 5, 5, 2.00),
	(9, 6, 6, 1.00),
	(10, 8, 7, 3.00),
	(11, 8, 8, 2.00),
	(12, 9, 9, 1.00),
	(13, 10, 10, 3.00),
	(14, 11, 11, 2.00),
	(15, 12, 12, 1.00),
	(16, 13, 13, 3.00),
	(17, 14, 14, 2.00),
	(18, 15, 15, 1.00),
	(19, 16, 16, 3.00),
	(20, 17, 17, 2.00),
	(21, 1, 18, 1.00),
	(22, 2, 19, 3.00),
	(23, 3, 20, 2.00),
	(24, 4, 21, 1.00),
	(25, 5, 22, 3.00),
	(26, 6, 23, 2.00),
	(27, 7, 24, 1.00),
	(28, 8, 25, 3.00),
	(29, 17, 25, 1.00),
	(30, 1, 26, 1.00),
	(31, 9, 26, 2.00),
	(32, 2, 27, 1.00),
	(33, 10, 27, 1.00);
/*!40000 ALTER TABLE `contenir` ENABLE KEYS */;

-- Listage de la structure de la table fil_rouge. employé
DROP TABLE IF EXISTS `employé`;
CREATE TABLE IF NOT EXISTS `employé` (
  `emp_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `emp_nom` varchar(50) NOT NULL,
  `emp_prenom` varchar(50) NOT NULL,
  `emp_telephone` varchar(20) DEFAULT NULL,
  `emp_mail` varchar(50) DEFAULT NULL,
  `emp_fonction` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.employé : 12 rows
DELETE FROM `employé`;
/*!40000 ALTER TABLE `employé` DISABLE KEYS */;
INSERT INTO `employé` (`emp_id`, `emp_nom`, `emp_prenom`, `emp_telephone`, `emp_mail`, `emp_fonction`) VALUES
	(1, 'Stenbridge', 'Celestyna', NULL, NULL, NULL),
	(2, 'Pasek', 'Jermaine', NULL, NULL, NULL),
	(3, 'Kolyagin', 'Lian', NULL, NULL, NULL),
	(4, 'MacTrustey', 'Jobina', NULL, NULL, NULL),
	(5, 'Hugo', 'Sayers', NULL, NULL, NULL),
	(6, 'Liddel', 'Nataniel', NULL, NULL, NULL),
	(7, 'Torricina', 'Vergil', NULL, NULL, NULL),
	(8, 'Folcarelli', 'Krisha', NULL, NULL, NULL),
	(9, 'Burrows', 'Yvette', NULL, NULL, NULL),
	(10, 'Maso', 'Dory', NULL, NULL, NULL),
	(11, 'Whalley', 'Pattin', NULL, NULL, NULL),
	(12, 'Berr', 'Giovanni', NULL, NULL, NULL);
/*!40000 ALTER TABLE `employé` ENABLE KEYS */;

-- Listage de la structure de la table fil_rouge. fournisseur
DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fou_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `fou_nom` varchar(50) NOT NULL,
  `fou_rue` varchar(100) NOT NULL,
  `fou_code_postal` varchar(20) NOT NULL,
  `fou_ville` varchar(50) NOT NULL,
  `fou_pays` varchar(50) NOT NULL,
  `fou_mail` varchar(50) DEFAULT NULL,
  `fou_telephone` varchar(20) DEFAULT NULL,
  `fou_contact_nom` varchar(50) DEFAULT NULL,
  `fou_contact_telephone` varchar(20) DEFAULT NULL,
  `fou_emp_id` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`fou_id`),
  KEY `fou_emp_id` (`fou_emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.fournisseur : 7 rows
DELETE FROM `fournisseur`;
/*!40000 ALTER TABLE `fournisseur` DISABLE KEYS */;
INSERT INTO `fournisseur` (`fou_id`, `fou_nom`, `fou_rue`, `fou_code_postal`, `fou_ville`, `fou_pays`, `fou_mail`, `fou_telephone`, `fou_contact_nom`, `fou_contact_telephone`, `fou_emp_id`) VALUES
	(1, 'Coolwind', '4 Bartelt Alley', '94675 CEDEX', 'Charenton-le-Pont', 'France', NULL, NULL, NULL, NULL, NULL),
	(2, 'Getzen', '320 Emmet Avenue', '75778 CEDEX 16', 'Paris 16', 'France', NULL, NULL, NULL, NULL, NULL),
	(3, 'Jupiter', '262 Morrow Crossing', '75080 CEDEX 02', 'Paris 02', 'France', NULL, NULL, NULL, NULL, NULL),
	(4, 'Nuvo', '387 Eastwood Alley', '13327 CEDEX 15', 'Marseille', 'France', NULL, NULL, NULL, NULL, NULL),
	(5, 'Altus', '23 Brentwood Road', '06293 CEDEX 3', 'Nice', 'France', NULL, NULL, NULL, NULL, NULL),
	(6, 'Voomm', '04 Heath Street', '37205 CEDEX 3', 'Tours', 'France', NULL, NULL, NULL, NULL, NULL),
	(7, 'SML Accessoires', '51 rue de l\'anis', '13051', 'Pastaga', 'France', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `fournisseur` ENABLE KEYS */;

-- Listage de la structure de la table fil_rouge. livraison
DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `liv_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `liv_datetime` datetime DEFAULT NULL,
  `liv_com_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`liv_id`),
  KEY `liv_com_id` (`liv_com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.livraison : 27 rows
DELETE FROM `livraison`;
/*!40000 ALTER TABLE `livraison` DISABLE KEYS */;
INSERT INTO `livraison` (`liv_id`, `liv_datetime`, `liv_com_id`) VALUES
	(1, '2016-03-05 00:00:03', 1),
	(2, '2019-07-25 00:00:03', 2),
	(3, '2016-08-26 00:00:03', 3),
	(4, '2017-06-16 00:00:03', 4),
	(5, '2017-11-30 00:00:00', 5),
	(6, '2016-05-02 00:00:03', 6),
	(7, '2016-02-05 00:00:00', 7),
	(8, '2016-08-01 00:00:04', 8),
	(9, '2018-09-21 00:00:09', 9),
	(10, '2018-09-04 00:00:00', 10),
	(11, '2019-09-01 00:00:04', 11),
	(12, '2019-02-02 00:00:00', 12),
	(13, '2017-12-06 00:00:04', 13),
	(14, '2018-03-04 00:00:04', 14),
	(15, '2018-08-20 00:00:04', 15),
	(16, '2017-11-07 00:00:05', 16),
	(17, '2016-05-04 00:00:05', 17),
	(18, '2019-03-02 00:00:00', 18),
	(19, '2019-03-07 00:00:02', 19),
	(20, '2018-04-01 00:00:02', 20),
	(21, '2019-06-22 00:00:02', 21),
	(22, '2019-09-17 00:00:02', 22),
	(23, '2018-07-25 00:00:02', 23),
	(24, '2018-10-13 00:00:02', 24),
	(25, '2018-09-07 00:00:02', 25),
	(26, '2016-08-21 00:00:02', 26),
	(27, '2018-09-10 00:00:02', 27);
/*!40000 ALTER TABLE `livraison` ENABLE KEYS */;

-- Listage de la structure de la table fil_rouge. posseder
DROP TABLE IF EXISTS `posseder`;
CREATE TABLE IF NOT EXISTS `posseder` (
  `pos_id` int(11) NOT NULL AUTO_INCREMENT,
  `pos_pro_id` mediumint(9) DEFAULT NULL,
  `pos_com_id` mediumint(9) DEFAULT NULL,
  `pos_quantite_commandee` decimal(15,2) NOT NULL,
  `pos_sous_total_HT` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`pos_id`),
  KEY `pos_pro_id` (`pos_pro_id`),
  KEY `pos_com_id` (`pos_com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.posseder : 39 rows
DELETE FROM `posseder`;
/*!40000 ALTER TABLE `posseder` DISABLE KEYS */;
INSERT INTO `posseder` (`pos_id`, `pos_pro_id`, `pos_com_id`, `pos_quantite_commandee`, `pos_sous_total_HT`) VALUES
	(1, 1, 1, 3.00, 360.00),
	(2, 2, 1, 2.00, 2320.00),
	(3, 2, 2, 2.00, 2320.00),
	(4, 3, 3, 1.00, 340.00),
	(5, 4, 3, 1.00, 952.00),
	(6, 5, 3, 1.00, 1506.00),
	(7, 4, 4, 3.00, 2856.00),
	(8, 5, 5, 2.00, 3012.00),
	(9, 6, 6, 1.00, 482.00),
	(10, 7, 7, 3.00, 444.00),
	(11, 8, 8, 2.00, 2000.00),
	(12, 9, 9, 1.00, 76.00),
	(13, 10, 10, 3.00, 11256.00),
	(14, 11, 11, 2.00, 156.00),
	(15, 12, 12, 1.00, 1526.00),
	(16, 13, 13, 3.00, 84.00),
	(17, 14, 14, 2.00, 36.00),
	(18, 15, 15, 1.00, 19.40),
	(19, 16, 16, 3.00, 234.00),
	(20, 17, 17, 2.00, 33.60),
	(21, 1, 18, 1.00, 120.00),
	(22, 2, 19, 3.00, 3480.00),
	(23, 3, 20, 2.00, 1020.00),
	(24, 4, 21, 1.00, 1428.00),
	(25, 5, 22, 3.00, 6777.00),
	(26, 6, 23, 2.00, 1446.00),
	(27, 7, 24, 1.00, 222.00),
	(28, 8, 25, 3.00, 4500.00),
	(29, 17, 25, 1.00, 25.20),
	(30, 1, 26, 3.00, 540.00),
	(31, 9, 26, 2.00, 228.00),
	(32, 2, 27, 2.00, 3480.00),
	(33, 10, 27, 1.00, 5628.00),
	(34, 3, 28, 1.00, 510.00),
	(35, 11, 28, 3.00, 351.00),
	(36, 4, 29, 2.00, 2856.00),
	(37, 12, 29, 2.00, 4578.00),
	(38, 5, 30, 1.00, 2259.00),
	(39, 13, 30, 1.00, 42.00);
/*!40000 ALTER TABLE `posseder` ENABLE KEYS */;

-- Listage de la structure de la table fil_rouge. produit
DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `pro_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `pro_libelle_court` varchar(60) NOT NULL,
  `pro_libelle_long` varchar(300) DEFAULT NULL,
  `pro_prix_achat` decimal(13,4) NOT NULL,
  `pro_photo` varchar(150) DEFAULT NULL,
  `pro_rub_id` mediumint(9) DEFAULT NULL,
  `pro_emp_id` mediumint(9) DEFAULT NULL,
  `pro_fou_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `pro_rub_id` (`pro_rub_id`),
  KEY `pro_emp_id` (`pro_emp_id`),
  KEY `pro_fou_id` (`pro_fou_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.produit : 17 rows
DELETE FROM `produit`;
/*!40000 ALTER TABLE `produit` DISABLE KEYS */;
INSERT INTO `produit` (`pro_id`, `pro_libelle_court`, `pro_libelle_long`, `pro_prix_achat`, `pro_photo`, `pro_rub_id`, `pro_emp_id`, `pro_fou_id`) VALUES
	(1, 'Coolwind Trompette Sib, plastique rouge', 'Fabriqués à base de plastique ABS, les produits Coolwind vous permettent de jouer partout ! Ne vous souciez plus d’abimer votre instrument principal lorsque vous vous déplacez ou jouez en extérieur', 60.0000, NULL, 8, NULL, 1),
	(2, 'Getzen Trompette Sib étudiant vernie 490-SC', 'Une trompette d\'étude, certes, mais avec des qualités de semi-professionnelle.', 580.0000, NULL, 8, NULL, 2),
	(3, 'Coolwind Euphonium Sib en plastique rouge', 'Fabriqués à base de plastique ABS, les produits Coolwind vous permettent de jouer partout ! Ne vous souciez plus d’abimer votre instrument principal lorsque vous vous déplacez ou jouez en extérieur', 170.0000, NULL, 10, NULL, 1),
	(4, 'Jupiter Saxhorn baryton de défilé verni JBR1000M', '', 476.0000, NULL, 10, NULL, 3),
	(5, 'Altus Flûte en Ut plateaux creux AS807RI', 'Cet instrument, fabriqué à la main, disponible en patte d’Ut ou en patte de Si, est une porte d’entrée vers le monde des flûtes japonaises.', 753.0000, NULL, 7, NULL, 5),
	(6, 'Jupiter Flûte en Ut goutte d\'eau JFL700WD', 'Avec sa flûte traversière goutte d’eau JFL700WD primée au Red Dot Design Award, Jupiter a su s’imposer sur le marché comme une marque novatrice au service des musiciens.', 241.0000, NULL, 7, NULL, 3),
	(7, 'Coolwind Trombone complet plastique red CTB-200RD', 'Trombone complet en Sib et en Fa avec noix, un corps en plastique ABS et une coulisse en fibre de carbone, un pavillon au diamètre de 216 mm et une perce de 13,9 mm.', 74.0000, NULL, 9, NULL, 1),
	(8, 'Jupiter Trombone ténor complet pro JTB1150FOQ', 'Tonalité : Sib/Fa Perce :13,89mm Pavillon : 215mm, laiton verni Noix, Open Wrap Tubes extérieurs coulisse de jeu : maillechort Tubes intérieurs : maillechort chromé', 500.0000, NULL, 9, NULL, 3),
	(9, 'Nuvo Saxophone d\'éveil ABS noir et rose', 'Le jSax n\'est pas un jouet mais un véritable instrument de musique même si son aspect très coloré attire les plus jeunes !', 38.0000, NULL, 5, NULL, 4),
	(10, 'Jupiter Saxophone baryton pro plaqué argent', 'Au-delà des brevets d\'ergonomie de ses instruments d\'étude, la marque Jupiter a su poursuivre ses innovations pour proposer ce modèle professionnel doté d\'un bocal qui lui confère une sonorité unique au monde.', 1876.0000, NULL, 5, NULL, 3),
	(11, 'Jupiter Saxonett JRS700', 'Jupiter Clarinettes JRS700 présentation Le Saxonett JRS700 constitue un passage idéal pour les jeunes joueurs de flûtes à bec souhaitant apprendre à jouer du saxophone ou de la clarinette. Il associe le bec de la clarinette avec le corps de la flûte à bec.', 39.0000, NULL, 6, NULL, 3),
	(12, 'Jupiter Clarinette basse ABS clés argentées', 'Jupiter Clarinettes JRC1000S haut de gamme', 763.0000, NULL, 6, NULL, 3),
	(13, 'Nuvo Clarinette d\'éveil ABS noire et bleue', 'Nuvo met la musique à la portée de tous les enfants ! Un concept simple et ingénieux pour de véritables instruments de qualité.', 14.0000, NULL, 6, NULL, 4),
	(14, 'Sml Accessoires Bec saxophone alto ébonite', 'Bec ébonite avec ligature métal et couvre-bec plastique', 9.0000, NULL, 11, NULL, 7),
	(15, 'Sml Accessoires Bec clarinette Sib ébonite', 'Bec ébonite avec ligature métal et couvre-bec plastique', 9.7000, NULL, 11, NULL, 7),
	(16, 'Sml Accessoires Extracteur d\'embouchure', 'Prend appui sur le boisseau de la branche d\'embouchure. Un système de vis sans fin retire l\'embouchure coincée.', 39.0000, NULL, 12, NULL, 7),
	(17, 'Sml Accessoires Embouchure trompette plastique 3C', 'L\'embouchure pour débutant par excellence !', 8.4000, NULL, 12, NULL, 7);
/*!40000 ALTER TABLE `produit` ENABLE KEYS */;

-- Listage de la structure de la procédure fil_rouge. Retard_paiement
DROP PROCEDURE IF EXISTS `Retard_paiement`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `Retard_paiement`()
BEGIN
	SELECT cli_nom AS 'client en retard de paiement',com_id AS 'numéro de la commande'
	FROM `client`
	JOIN commande ON `client`.cli_id=commande.com_cli_id
	WHERE com_paiement_date IS null;
END//
DELIMITER ;

-- Listage de la structure de la table fil_rouge. rubrique
DROP TABLE IF EXISTS `rubrique`;
CREATE TABLE IF NOT EXISTS `rubrique` (
  `rub_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `rub_nom` varchar(50) NOT NULL,
  `rub_libelle` varchar(250) DEFAULT NULL,
  `rub_id_1` mediumint(9) DEFAULT NULL,
  PRIMARY KEY (`rub_id`),
  KEY `rub_id_1` (`rub_id_1`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Listage des données de la table fil_rouge.rubrique : 12 rows
DELETE FROM `rubrique`;
/*!40000 ALTER TABLE `rubrique` DISABLE KEYS */;
INSERT INTO `rubrique` (`rub_id`, `rub_nom`, `rub_libelle`, `rub_id_1`) VALUES
	(1, 'les instruments à vents', 'toute la panoplie des instruments à vents ainsi que leurs accessoires sont à votre disposition ici!!', NULL),
	(2, 'les bois', 'toute la panoplie des bois', 1),
	(3, 'les cuivres', 'toute la panoplie des cuivres', 1),
	(4, 'les accessoires', 'toute la panoplie pour entrenir votre matériel !!', 1),
	(5, 'les saxophones', 'toute la panoplie de nos saxophones !!', 2),
	(6, 'les clarinettes', 'toute la panoplie de nos plus belles clarinettes !!', 2),
	(7, 'les flûtes', 'toute la panoplie de nos plus belles flûtes avec en exclusivité nos plus beaux pipeaux !!', 2),
	(8, 'les trompettes', 'toute la panoplie de nos plus belles trompettes !!', 3),
	(9, 'les trombonnes', 'toute la panoplie de nos plus beaux trombones !!', 3),
	(10, 'les gros cuivres', 'toute la panoplie de nos plus beaux gros cuivres !!', 3),
	(11, 'les becs', 'toute la panoplie de nos plus beaux gros cuivres !!', 4),
	(12, 'les embouchures', 'toute la panoplie de nos plus beaux gros cuivres !!', 4);
/*!40000 ALTER TABLE `rubrique` ENABLE KEYS */;

-- Listage de la structure de la vue fil_rouge. vue1
DROP VIEW IF EXISTS `vue1`;
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `vue1` (
	`com_id` MEDIUMINT(9) NOT NULL,
	`pro_id` MEDIUMINT(9) NOT NULL,
	`pos_quantite_commandee` DECIMAL(15,2) NOT NULL
) ENGINE=MyISAM;

-- Listage de la structure de la vue fil_rouge. vue2
DROP VIEW IF EXISTS `vue2`;
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `vue2` (
	`com_id` MEDIUMINT(9) NOT NULL,
	`pro_id` MEDIUMINT(9) NOT NULL,
	`con_liv_quantite_BL` DECIMAL(15,2) NOT NULL
) ENGINE=MyISAM;

-- Listage de la structure de la vue fil_rouge. v_produit_fournisseur
DROP VIEW IF EXISTS `v_produit_fournisseur`;
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `v_produit_fournisseur` (
	`pro_id` MEDIUMINT(9) NOT NULL,
	`pro_libelle_court` VARCHAR(60) NOT NULL COLLATE 'latin1_swedish_ci',
	`pro_libelle_long` VARCHAR(300) NULL COLLATE 'latin1_swedish_ci',
	`pro_prix_achat` DECIMAL(13,4) NOT NULL,
	`pro_photo` VARCHAR(150) NULL COLLATE 'latin1_swedish_ci',
	`pro_rub_id` MEDIUMINT(9) NULL,
	`pro_emp_id` MEDIUMINT(9) NULL,
	`pro_fou_id` MEDIUMINT(9) NOT NULL,
	`fou_id` MEDIUMINT(9) NOT NULL,
	`fou_nom` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`fou_rue` VARCHAR(100) NOT NULL COLLATE 'latin1_swedish_ci',
	`fou_code_postal` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`fou_ville` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`fou_pays` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`fou_mail` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`fou_telephone` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`fou_contact_nom` VARCHAR(50) NULL COLLATE 'latin1_swedish_ci',
	`fou_contact_telephone` VARCHAR(20) NULL COLLATE 'latin1_swedish_ci',
	`fou_emp_id` MEDIUMINT(9) NULL
) ENGINE=MyISAM;

-- Listage de la structure de la vue fil_rouge. v_produit_rubrique
DROP VIEW IF EXISTS `v_produit_rubrique`;
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `v_produit_rubrique` (
	`pro_libelle_court` VARCHAR(60) NOT NULL COLLATE 'latin1_swedish_ci',
	`sous-rubrique` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`rubrique secondaire` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`rubrique principal` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Listage de la structure de la vue fil_rouge. vue1
DROP VIEW IF EXISTS `vue1`;
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `vue1`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue1` AS select `commande`.`com_id` AS `com_id`,`produit`.`pro_id` AS `pro_id`,`posseder`.`pos_quantite_commandee` AS `pos_quantite_commandee` from ((`commande` join `posseder` on((`posseder`.`pos_com_id` = `commande`.`com_id`))) join `produit` on((`posseder`.`pos_pro_id` = `produit`.`pro_id`)));

-- Listage de la structure de la vue fil_rouge. vue2
DROP VIEW IF EXISTS `vue2`;
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `vue2`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vue2` AS select `commande`.`com_id` AS `com_id`,`produit`.`pro_id` AS `pro_id`,`contenir`.`con_liv_quantite_BL` AS `con_liv_quantite_BL` from (((`contenir` join `livraison` on((`livraison`.`liv_id` = `contenir`.`con_liv_id`))) join `commande` on((`commande`.`com_id` = `livraison`.`liv_com_id`))) join `produit` on((`contenir`.`con_pro_id` = `produit`.`pro_id`)));

-- Listage de la structure de la vue fil_rouge. v_produit_fournisseur
DROP VIEW IF EXISTS `v_produit_fournisseur`;
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `v_produit_fournisseur`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_produit_fournisseur` AS select `produit`.`pro_id` AS `pro_id`,`produit`.`pro_libelle_court` AS `pro_libelle_court`,`produit`.`pro_libelle_long` AS `pro_libelle_long`,`produit`.`pro_prix_achat` AS `pro_prix_achat`,`produit`.`pro_photo` AS `pro_photo`,`produit`.`pro_rub_id` AS `pro_rub_id`,`produit`.`pro_emp_id` AS `pro_emp_id`,`produit`.`pro_fou_id` AS `pro_fou_id`,`fournisseur`.`fou_id` AS `fou_id`,`fournisseur`.`fou_nom` AS `fou_nom`,`fournisseur`.`fou_rue` AS `fou_rue`,`fournisseur`.`fou_code_postal` AS `fou_code_postal`,`fournisseur`.`fou_ville` AS `fou_ville`,`fournisseur`.`fou_pays` AS `fou_pays`,`fournisseur`.`fou_mail` AS `fou_mail`,`fournisseur`.`fou_telephone` AS `fou_telephone`,`fournisseur`.`fou_contact_nom` AS `fou_contact_nom`,`fournisseur`.`fou_contact_telephone` AS `fou_contact_telephone`,`fournisseur`.`fou_emp_id` AS `fou_emp_id` from (`produit` join `fournisseur` on((`fournisseur`.`fou_id` = `produit`.`pro_fou_id`)));

-- Listage de la structure de la vue fil_rouge. v_produit_rubrique
DROP VIEW IF EXISTS `v_produit_rubrique`;
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `v_produit_rubrique`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_produit_rubrique` AS select `produit`.`pro_libelle_court` AS `pro_libelle_court`,`a`.`rub_nom` AS `sous-rubrique`,`b`.`rub_nom` AS `rubrique secondaire`,`c`.`rub_nom` AS `rubrique principal` from (((`produit` join `rubrique` `a` on((`a`.`rub_id` = `produit`.`pro_rub_id`))) join `rubrique` `b` on((`a`.`rub_id_1` = `b`.`rub_id`))) join `rubrique` `c` on((`b`.`rub_id_1` = `c`.`rub_id`)));

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
