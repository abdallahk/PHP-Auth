-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table far-dashboard.settings: ~0 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping data for table far-dashboard.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `user_role`, `created_at`) VALUES
	(21, 'admin', 'admin@admin.com', '$2y$10$JkopCp9Jfi93ZbzmeSVYJeEuDSrQlasWYNNXD31YKWoufZH7jpfCK', 'admin', '2018-06-06 14:51:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table far-dashboard.user_roles: ~4 rows (approximately)
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` (`id`, `role_name`, `permissions`, `user_type`) VALUES
	(7, 'admin', 'Permission1, Permission2, Permission3, Permission4, Permission5, Permission6, Permission7, Permission8', 'superadmin'),
	(8, 'test', 'Permission1, Permission2, Permission3, Permission4, Permission5', 'superadmin'),
	(9, 'admin', 'Permission5, Permission6, Permission7, Permission8', 'admin'),
	(10, 'test', 'Permission1, Permission2, Permission3, Permission4, Permission5, Permission6, Permission7, Permission8', 'superadmin');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
