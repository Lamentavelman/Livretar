CREATE DATABASE IF NOT EXISTS `wda_crud` 
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;

USE `wda_crud`;

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `birthdate` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `hood` varchar(100) NOT NULL,
  `zip_code` varchar(8) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `ie` varchar(15) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `customers` (`id`, `name`, `cpf_cnpj`, `birthdate`, `address`, `hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `ie`, `created`, `modified`) 
VALUES
(3, 'Gabriel Rodrigues Neto', '44444444000', '2024-09-03 00:00:00', 'Antenor Maciel', 'yttiktyhk', '18053458', 'Sorocaba', 'SP', '81228128', '15981228128', 'uj8888888', '2024-09-16 20:16:16', '2024-09-16 20:16:16');

CREATE TABLE IF NOT EXISTS `livros` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `estadolivro` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `datacadastro` datetime NOT NULL,
  `resumo` text DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `livros` (`id`, `nome`, `autor`, `estadolivro`, `preco`, `datacadastro`, `resumo`, `obs`, `foto`) 
VALUES
(1, '1984', 'George Orwell', 'Novo', 27, '2024-09-16 00:00:00', 'Utopia', '', '1984.jpg');

COMMIT;
