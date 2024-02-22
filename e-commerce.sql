-- Dumping database structure for brainbox
CREATE DATABASE IF NOT EXISTS `e-commerce`;
USE `e-commerce`;

-- Dumping structure for table e-commerce.products
CREATE TABLE IF NOT EXISTS `products` (
    `product_id` int(11) NOT NULL AUTO_INCREMENT,
    `product_name` varchar(100) NOT NULL,
    `product_category` varchar(100) NOT NULL,
    `product_description` varchar(255) NOT NULL,
    `product_image` varchar(255) NOT NULL,
    `product_image2` varchar(255) NOT NULL,
    `product_image3` varchar(255) NOT NULL,
    `product_image4` varchar(255) NOT NULL,
    `product_price` decimal(6,2) NOT NULL,
    `product_special_offer` int(2) NOT NULL,
    `product_color` varchar(100) NOT NULL,
    PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table e-commerce.products: ~1 rows (approximately)
INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image1`, `product_image2`
, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
	(1, 'Nice black shoes', 'Shoes', 'This is nice shoes', 'shoes1.jpeg', 'shoes2.jpeg', 'shoes3.jpeg', 'shoes4.jpeg', '345', '0', 'black') ;

-- Dumping structure for table e-commerce.orders
CREATE TABLE IF NOT EXISTS `orders` (
    `order_id` int(11) NOT NULL AUTO_INCREMENT,
    `order_cost` decimal(6,2) NOT NULL,
    `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
    `user_id` int(11) NOT NULL,
    `user_phone` int(11) NOT NULL,
    `user_city` varchar(255) NOT NULL,
    `user_address` varchar(255) NOT NULL,
    `order_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- Dumping structure for table e-commerce.order_items
CREATE TABLE IF NOT EXISTS `order_items` (
    `item_id` int(11) NOT NULL AUTO_INCREMENT,
    `order_id` int(11) NOT NULL,
    `product_id` int(11) NOT NULL,
    `product_name` varchar(255) NOT NULL,
    `product_image` varchar(255) NOT NULL,
    `product_price` decimal(6,2) NOT NULL,
	`product_quantity` int(11) NOT NULL,
    `user_id` int(11) NOT NULL,
    `order_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping structure for table e-commerce.users
CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
    `user_name` varchar(100) NOT NULL,
    `user_email` varchar(100) NOT NULL,
    `user_password` varchar(100) NOT NULL,
    PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping structure for table e-commerce.admins
CREATE TABLE IF NOT EXISTS `admins` (
    `admin_id` int(11) NOT NULL AUTO_INCREMENT,
    `admin_name` text NOT NULL,
    `admin_email` text NOT NULL,
    `admin_password` varchar(100) NOT NULL,
    PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Dumping data for table e-commerce.products: ~1 rows (approximately)
INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
	(1, 'sara', 'sara@gmail.com', 'sara123') ;
