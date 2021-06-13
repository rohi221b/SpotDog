create database admin_side;
use admin_side;


create table dogs(
	id int(11) primary key auto_increment,
    name varchar(20),
    breed varchar(20) not null,
    gender varchar(10) not null,
    filename varchar(100),
    info text
); 

INSERT INTO `dogs` (`id`, `name`, `breed`, `gender`, `filename`, `info`) VALUES
(5, 'Shyloh', 'Boxer', 'male', 'Boxer3.jpg', 'He is 2 months old.'),
(6, 'Daniel', 'Pomeranian', 'female', 'Pomeranian3.jpg', 'She is 8 months old.'),
(7, 'Duke', 'German Shepherd', 'male', 'Ger_shep1.jpg', 'He is 1 year old'),
(9, 'Phoebe', 'Beagle', 'female', 'Beagle1.jpg', 'She is 4 months old.'),
(10, 'Bruno', 'Great Dane', 'male', 'Great_dane2.jpg', 'He is 2 years old.'),
(11, 'Malikah', 'pug', 'female', 'Great_dane1.jpg', 'jhokl'),
(12, 'Dexter', 'Pomeranian', 'male', 'Pomeranian2.jpg', 'She is 5 months old'),
(13, 'Joey', 'Boxer', 'male', 'Boxer2.jpg', 'He is 3 years old.'),
(14, 'rocky', 'Pug', 'male', 'pug3.jpg', 'He is 2 months old.');

CREATE TABLE `adoption` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `areacode` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `stradrr1` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `hours` int(100) NOT NULL,
  `min` int(100) NOT NULL,
  `brief` text NOT NULL,
  `notify` varchar(20) NOT NULL
);


CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `Id` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
);

INSERT INTO `contact` (`Name`, `Id`, `Email`, `phoneno`, `subject`, `message`) VALUES
('Bhushan AVINASH PANDE', 5, 'bhushanpande06@gmail.com', '9838419212', 'Purchasing the dog', 'Rohit please send the dog'),
('Bhushan AVINASH PANDE', 6, 'bhushanpande06@gmail.com', '9838419212', 'Purchasing the dog', 'askadjaskj'),
('Bhushan AVINASH PANDE', 7, 'bhushanpande06@gmail.com', '09838419212', 'Purchasing the dog', 'This is it'),
('Bhushan PANDE', 8, 'bhushanpande06@gmail.com', '09359041286', 'dog', 'helllll');

CREATE TABLE `loginuser` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ;

CREATE TABLE `registerationuser` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpass` varchar(100) NOT NULL
);

INSERT INTO `registerationuser` (`username`, `password`, `confirmpass`) VALUES
('bhushanpande06@gmail.com', 'sureshraina', 'sureshraina'),
('kewal@gmail.com', 'kew', 'kew'),
('ojash@gmail.com', 'kew', 'kew');

CREATE TABLE `registeruser` (
  `username` varchar(100) NOT NULL,
  `confirmpass` varchar(100) NOT NULL
) ;

INSERT INTO `registeruser` (`username`, `confirmpass`) VALUES
('', 'sureshraiina'),
('', 'sureshraina'),
('', 'sureshraina'),
('', 'sureshraina'),
('', 'sureshraina');

ALTER TABLE `adoption`
  ADD PRIMARY KEY (`email`);
  
  ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);
  
  ALTER TABLE `registerationuser`
  ADD PRIMARY KEY (`username`);
  
  ALTER TABLE `contact`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

-- -----------------------------------------------------------------------------
-- To be added  
alter table adoption add username varchar(30); 

alter table dogs add adoptedby varchar(30);

