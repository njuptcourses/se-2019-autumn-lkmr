CREATE DATABASE `foodies` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `foodies`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `email` varchar(30) NOT NULL,
  `qty1` int(10) NOT NULL,
  `qty2` int(10) NOT NULL,
  `qty3` int(10) NOT NULL,
  `qty4` int(10) NOT NULL,
  `qty5` int(10) NOT NULL,
  `qty6` int(10) NOT NULL,
  `qty7` int(10) NOT NULL,
  `qty8` int(10) NOT NULL,
  `qty9` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`email`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `qty7`, `qty8`, `qty9`) VALUES
('alwhite@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('muhammedp@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('chang2chang@bing.com', 0, 0, 0, 0, 0, 0, 0, 0, 0);


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'alwhite', 'alwhite201912', '2019-12-13 20:20:53'),
(2, 'frimp', '$2y$10$KIv95qLQxlWDZmVqbGfzY.s.MwO79zcX9GYW5Ka5XT5oBYatwjQ0m', '2019-12-13 20:26:43'),
(3, 'maggie', '$2y$10$slepg6PnoTbnuqnFiygmX./CTs/dNS6uOCm0rh0DIna0cVkMa/pDK', '2019-12-13 22:37:57'),
(4, 'DUC', '$2y$10$okcMNf7ScuXJ3l7hKwx1.ubGobPymnAaK6M8l.8M3/vrhBd81r8fq', '2019-12-14 16:45:09');