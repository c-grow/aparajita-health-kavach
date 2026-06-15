-- Aparajita Health Kavach Database Setup
-- Run this script in your MySQL/MariaDB database (e.g. via phpMyAdmin or MySQL CLI)

-- Create database if not exists (uncomment if creating a new database)
-- CREATE DATABASE IF NOT EXISTS u123456789_aparajita DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- USE u123456789_aparajita;

-- --------------------------------------------------------
-- Table structure for table `contacts`
-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `contacts` (
    `id`          INT AUTO_INCREMENT PRIMARY KEY,
    `name`        VARCHAR(100) NOT NULL,
    `email`       VARCHAR(100) DEFAULT '',
    `phone`       VARCHAR(20)  NOT NULL,
    `service`     VARCHAR(100) DEFAULT '',
    `message`     TEXT DEFAULT NULL,
    `status`      ENUM('Pending', 'Called', 'Interested', 'Not Interested') DEFAULT 'Pending',
    `created_at`  TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_status` (`status`),
    INDEX `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------
-- Optional: Insert a sample lead (for testing)
-- --------------------------------------------------------
-- INSERT INTO `contacts` (`name`, `email`, `phone`, `service`, `message`, `status`) VALUES
-- ('Aman Verma', 'aman@example.com', '9876543210', 'Home Nursing Care', 'Need 24/7 nursing for elder recovery post-surgery.', 'Pending');
