-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 11:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `book_title` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_id` int(50) NOT NULL,
  `description` varchar(1000) COLLATE utf8_bin NOT NULL,
  `book_image` varchar(100) COLLATE utf8_bin NOT NULL,
  `published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `user_id`, `description`, `book_image`, `published`) VALUES
(1, 'Harry Potter and the Philosopher\'s Stone', 1, 'Turning the envelope over, his hand trembling, Harry saw a purple wax seal bearing a coat of arms; a lion, an eagle, a badger and a snake surrounding a large letter \'H\'.\"  Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his gri', 'uploads/books/philosophers_stone.jpg', '2017-06-04 17:31:51'),
(2, 'PYTHON: PROGRAMMING', 2, 'Python is the easiest to learn and once you have a good grounding in it, you can move on to another, more complicated language. Python is a beautiful computer language. It is simple, and it is intuitive. Python is used by a sorts of people – data scientists use it for much of their number crunching and analytics; security testers use it for testing out security and IT attacks; it is used to develo', 'uploads/books/python.jpg', '2017-06-04 17:31:56'),
(3, 'Persuasion', 7, 'Willa Knight: Dweller? Bad-ass? Notorious pet to five magical beings?  In Blesswood, there are rules, and someone is trying to teach her how to follow them. The only problem is Willa. Which shouldn’t be anything new, since she has been a problem since birth—something her pseudo-sister Emmy would agree on.  So it definitely shouldn’t be new … but it is.   Because things are starting to happen that ', 'uploads/books/persuasion.jpg', '2017-06-04 17:32:04'),
(4, 'Charcoal Tears', 7, 'You see, there is safety in simplicity… in a life of simple peace, where the electricity doesn\\’t dance across the backs of my eyelids, and the sparks don’t slither over my consciousness. Only asinine peace, where my paintings don’t seem to paint themselves, leaving me with terrible feelings of premonition and a chill beneath my fingernails.You see, there is safety in simplicity…You see, there is safety in simplicity… in a life of simple peace, where the electricity doesn’t dance across the backs of my eyelids, and the sparks don’t slither over my consciousness. Only asinine peace, where my paintings don’t seem to paint themselves, leaving me with terrible feelings of premonition and a chill beneath my fingernails.You see, there is safety in simplicity… in a life of simplYou see, there is safety in simplicity… in a life of simple peace, where the electricity doesn’t dance across the backs of my eyelids, and the sparks don’t slither over my consciousness. Only asinine peace, where my pa', 'uploads/books/charcoal_tears.jpg', '2017-06-04 17:32:16'),
(5, 'Fantastic Beasts', 1, 'J.K. Rowling\'s screenwriting debut is captured in this exciting hardcover edition of the Fantastic Beasts and Where to Find Them screenplay.  When Magizoologist Newt Scamander arrives in New York, he intends his stay to be just a brief stopover. However, when his magical case is misplaced and some of Newt\'s fantastic beasts escape, it spells trouble for everyone…  Fantastic Beasts and Where to Find Them marks the screenwriting debut of J.K. Rowling, author of the beloved and internationally bestselling Harry Potter books. Featuring a cast of remarkable characters, this is epic, adventure-packed storytelling at its very best.  Whether an existing fan or new to the wizarding world, this is a perfect addition to any reader\'s bookshelf.', 'uploads/books/fantastic_beasts.jpg', '2017-06-04 17:32:19'),
(6, 'Say Goodbye for Now', 8, 'Catherine Ryan Hyde delivers once again with this feel-good story guaranteed to be a hit…” —Redbook  On an isolated Texas ranch, Dr. Lucy cares for abandoned animals. The solitude allows her to avoid the people and places that remind her of the past. Not that any of the townsfolk care. In 1959, no one is interested in a woman doctor. Nor are they welcoming Calvin and Justin Bell, a newly arrived African American father and son.  When Pete Solomon, a neglected twelve-year-old boy, and Justin bring a wounded wolf-dog hybrid to Dr. Lucy, the outcasts soon find refuge in one another. Lucy never thought she’d make connections again, never mind fall in love. Pete never imagined he’d find friends as loyal as Justin and the dog. But these four people aren’t allowed to be friends, much less a family, when the whole town turns violently against them.  With heavy hearts, Dr. Lucy and Pete say goodbye to Calvin and Justin. But through the years they keep hope alive…waiting for the world to catch u', 'uploads/books/say_goodbye_for_now.jpg', '2017-06-04 17:32:23'),
(7, 'Hardest Part of Love', 8, 'There\'s a split second between having it all, and losing everything. Hayden briefly has it all: a wife and daughter he adores and a baby on the way. But when his son dies at birth, a deep anger emerges, robbing Hayden of everything. Years on, Hayden is living in self-imposed exile. He\'s just lost his beloved dog and is now losing Laurel, the only woman he\'s loved since...But just as Hayden\'s rage rises again, a young figure from the past emerges, forcing him to re-visit his long-buried childhood...', 'uploads/books/hardest_part_of_love.jpg', '2017-06-04 17:32:35'),
(9, 'A Game of Thrones vol.1', 11, 'HBOs hit series A GAME OF THRONES is based on George R R Martins internationally bestselling series A SONG OF ICE AND FIRE, the greatest fantasy epic of the modern age. A GAME OF THRONES is the first volume in the series.  ‘Completely immersive’ Guardian  ‘When you play the game of thrones, you win or you die. There is no middle ground’  Summers span decades. Winter can last a lifetime. And the struggle for the Iron Throne has begun.  From the fertile south, where heat breeds conspiracy, to the vast and savage eastern lands, all the way to the frozen north, kings and queens, knights and renegades, liars, lords and honest men . . . all will play the Game of Thrones.', 'uploads/books/ice_and_fire.jpg', '2017-06-04 17:32:48'),
(15, 'A Dance with Dragons ', 11, 'A DANCE WITH DRAGONS\r\nA SONG OF ICE AND FIRE: BOOK FIVE\r\n \r\nIn the aftermath of a colossal battle, the future of the Seven Kingdoms hangs in the balanceâ€”beset by newly emerging threats from every direction. In the east, Daenerys Targaryen, the last scion of House Targaryen, rules with her three dragons as queen of a city built on dust and death. But Daenerys has thousands of enemies, and many have set out to find her. As they gather, one young man embarks upon his own quest for the queen, with an entirely different goal in mind.\r\n\r\nFleeing from Westeros with a price on his head, Tyrion Lannister, too, is making his way to Daenerys. But his newest allies in this quest are not the rag-tag band they seem, and at their heart lies one who could undo Daenerysâ€™s claim to Westeros forever.\r\n\r\nMeanwhile, to the north lies the mammoth Wall of ice and stoneâ€”a structure only as strong as those guarding it. There, Jon Snow, 998th Lord Commander of the Nightâ€™s Watch, will face his greatest c', 'uploads/books/a_dance_with_dragons.jpg', '2017-06-05 06:06:46'),
(16, 'Fevre Dream', 11, 'A THRILLING REINVENTION OF THE VAMPIRE NOVEL BY THE MASTER OF MODERN FANTASY, GEORGE R. R. MARTIN\r\n \r\nAbner Marsh, a struggling riverboat captain, suspects that somethingâ€™s amiss when he is approached by a wealthy aristocrat with a lucrative offer. The hauntingly pale, steely-eyed Joshua York doesnâ€™t care that the icy winter of 1857 has wiped out all but one of Marshâ€™s dilapidated fleet; nor does he care that he wonâ€™t earn back his investment in a decade. Yorkâ€™s reasons for traversing the powerful Mississippi are to be none of Marshâ€™s concernâ€”no matter how bizarre, arbitrary, or capricious Yorkâ€™s actions may prove. Not until the maiden voyage of Fevre Dream does Marsh realize that he has joined a mission both more sinister, and perhaps more noble, than his most fantastic nightmareâ€”and humankindâ€™s most impossible dream.', 'uploads/books/51z669Ii3ZL.jpg', '2017-06-04 22:06:58');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `book_id` int(10) NOT NULL,
  `catagory_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`book_id`, `catagory_id`) VALUES
(1, 2),
(2, 1),
(3, 8),
(4, 4),
(4, 8),
(5, 4),
(5, 8),
(6, 6),
(6, 2),
(7, 3),
(7, 2),
(7, 6),
(3, 3),
(4, 3),
(8, 5),
(9, 6),
(9, 4),
(9, 2),
(1, 3),
(1, 4),
(10, 3),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL,
  `photo` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `photo`) VALUES
(1, 'J. K Rowling', 'imjk@gmail.com', '123456', NULL),
(2, 'Ramsey Hamilton', 'ramsey@gmail.com', '123456', NULL),
(6, 'test', 'test@gmail.com', '1234567', NULL),
(7, ' Jane Washington', 'jane@gmail.com', '1234567', NULL),
(8, ' Catherine Ryan', 'catherine@gmail.com', '123456', NULL),
(9, 'Antonia Felix', 'antonia@gmail.com', '123456', NULL),
(10, 'Dannika Dark', 'dannika@gmail.com', '123456', NULL),
(11, 'George R. R. Martin', 'martin@gmail.com', '1234567', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
