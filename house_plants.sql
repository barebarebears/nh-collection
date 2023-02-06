# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.41)
# Database: house_plants
# Generation Time: 2023-02-06 12:03:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table plants
# ------------------------------------------------------------

DROP TABLE IF EXISTS `plants`;

CREATE TABLE `plants` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `colloquial_name` varchar(255) DEFAULT NULL,
  `latin_name` varchar(255) DEFAULT NULL,
  `size_cm` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `plants` WRITE;
/*!40000 ALTER TABLE `plants` DISABLE KEYS */;

INSERT INTO `plants` (`id`, `colloquial_name`, `latin_name`, `size_cm`, `image_url`)
VALUES
	(1,'African Milk Tree','Euphorbia trigona',220,'https://cdn.thestem.co.uk/production/imager-transforms/digitaloceanspaces/product-images/plants/african-milk-tree/133328/African-Milk-Tree-lisbon-pot_148520d693757c12d4a72d4794f95511.jpg'),
	(2,'Cheese Plant','Monstera deliciosa',60,'https://www.gardeningexpress.co.uk/media/product/f90/monstera-deliciosa-swiss-cheese-plant-b81.jpg'),
	(3,'String of Pearls','Senecio rowleyanus',75,'https://m.media-amazon.com/images/I/81ih1qxzEfL._AC_SX466_.jpg'),
	(4,'Devil\'s Ivy','Epipremnum aureum',25,'https://i.etsystatic.com/14339179/r/il/e626c6/2322638407/il_570xN.2322638407_4fsx.jpg'),
	(5,'Donkey Tail','Sedum morganianum',35,'https://cdn.shopify.com/s/files/1/0056/8970/4482/products/ffce371a49144b58ac06788f1de1ec6f.thumbnail.0000000_620x.jpg?v=1634894065'),
	(6,'Jelly Bean Plant','Sedum rubrotinctum',12,'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Sedum_rubrotinctum.jpg/640px-Sedum_rubrotinctum.jpg'),
	(7,'Snake Plant','Dracaena trifasciata',40,'https://res.cloudinary.com/patch-gardens/image/upload/c_fill,f_auto,h_840,q_auto:good,w_840/v1563806745/products/snake-plant-cc1865.jpg');

/*!40000 ALTER TABLE `plants` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
