-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2022 at 06:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jokes_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `joke_table`
--

CREATE TABLE `joke_table` (
  `JokeID` int(11) NOT NULL,
  `Joke_question` varchar(500) NOT NULL,
  `Joke_answer` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joke_table`
--

INSERT INTO `joke_table` (`JokeID`, `Joke_question`, `Joke_answer`, `user_id`) VALUES
(1, 'What time is it when an elephant sits on your fence?', 'Time to buy a new fence.', 2),
(2, 'What is the biggest lie in the entire universe?', '\"I have read and agree to the Terms & Conditions.\"', 1),
(3, 'What do you call it when you have your mom\'s mom on speed dial?', 'Instagram.', 2),
(4, 'What should you do after your Nintendo game ends in a tie?', 'Ask for a Wii-match!', 2),
(5, 'How does a computer get drunk?', 'It takes screenshots.', 2),
(6, 'Why did the PowerPoint Presentation cross the road?', 'To get to the other slide.', 1),
(7, 'What do you call an iPhone that isn\'t kidding around?', 'Dead Siri-ous', 1),
(8, 'Why was six afraid of seven?', 'Becuase seven eight(ate) nine.', 1),
(9, 'How much money does a pirate pay for corn?', 'A buccaneer.', 2),
(11, 'Which country\'s capital has the fastest-growing population?', 'Ireland. Every day it\'s Dublin.', 2),
(12, 'stevie boi', 'jobbin', 6),
(13, 'a', 'b', 6),
(14, 'testtest', 'hahahha', 7),
(15, '', '', 11),
(16, 'easy', 'nice.', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'shad', 'password'),
(2, 'bob', 'secret123'),
(3, 'evan', 'pass'),
(4, 'evan2', 'wass'),
(5, 'matt', 'stone'),
(6, 'steve', 'jobs'),
(7, 'helloworld', 'python'),
(8, 'evee', '$2y$10$oOAiYJBjKwvrSigdozwSHuS1V2hurGpKc3MfTCp87t9fsBXHuNn..'),
(9, 'a', '$2y$10$B5AvPQ0Nwhdna0ZZ1OU8quQNQyAyVMbS6qPYRK.hUG4BFdl5tocBy'),
(10, 'aa', '$2y$10$0P3/5piRkzb59gC6i213i.O0l6WFt6GmfeQB4W.U5mmlvmpFK4J3K'),
(11, 'ryan', '$2y$10$shjULycjTK/F0Xy6ddXG7evpxqnugDnT3MxZQG1YLiQ9RYcTbqoxC'),
(12, 'hello', '$2y$10$z7ZsLdX.ComD.nnw/CYc0eQv.fh9e.HdmQaCNTKIMb2OSV1cwKn9K'),
(13, 'hello2', '$2y$10$NiI7r75q3SKX/963qndnRO4Kd7jY0SlBLfdvjSXB683vdfmqAcdvm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joke_table`
--
ALTER TABLE `joke_table`
  ADD PRIMARY KEY (`JokeID`,`user_id`),
  ADD KEY `fk_joke_table_table1_idx` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joke_table`
--
ALTER TABLE `joke_table`
  MODIFY `JokeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joke_table`
--
ALTER TABLE `joke_table`
  ADD CONSTRAINT `fk_joke_table_table1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
