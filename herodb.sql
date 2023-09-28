DROP DATABASE IF EXISTS android;

CREATE DATABASE android;

USE android;

/* CRIAÇÃO DA TABELA */

CREATE TABLE `heroes` (
  `id` INT NOT NULL,
  `name` VARCHAR(200) NOT NULL,
  `realname` VARCHAR(200) NOT NULL,
  `rating` INT NOT NULL,
  `teamaffiliation` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `heroes`
  MODIFY `id` INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/* DADOS */

INSERT INTO `heroes` (`id`, `name`, `realname`, `rating`, `teamaffiliation`)
VALUES 
(1, 'Captain America', 'Steve Rogers', 3, 'Avengers'),
(2, 'Batman', 'Bruce Wayne', 5, 'Justice League'),
(3, 'Spider-man', 'Peter Parker', 3, 'Avengers'),
(4, 'Iron man', 'Tony Stark', 5,'Avengers'),
(5, 'Aquaman', 'Arthur Curry', 4, 'Justice League'),
(6, 'Doutor Estranho', 'Stephen Vincent Strange', 5, 'Avengers');
