
-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2015 at 03:44 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6831370_h4`
--

-- --------------------------------------------------------

--
-- Table structure for table `pFO15`
--

CREATE TABLE `pFO15` (
  `Numero` tinyint(4) NOT NULL,
  `Pregunta` tinytext COLLATE latin1_general_ci NOT NULL,
  `A` tinytext COLLATE latin1_general_ci NOT NULL,
  `B` tinytext COLLATE latin1_general_ci NOT NULL,
  `C` tinytext COLLATE latin1_general_ci NOT NULL,
  `D` tinytext COLLATE latin1_general_ci NOT NULL,
  `Respuesta` tinytext COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pFO15`
--

INSERT INTO `pFO15` VALUES(1, 'A: Hi, I ___ Bruno Russell. \nB: Nice to meet you, Bruno.\n', '''re', '''m', '''d', '''s', 'm');
INSERT INTO `pFO15` VALUES(2, 'A: Nicole, this is Paul Foster. He ___ my friend.\nB: Hi, Paul. Nice to meet you.\n', '''m', '''d', '''s', '''re', '''s');
INSERT INTO `pFO15` VALUES(3, 'A: Are you and James tennis players?\nB: No. We ___ soccer players.\n', 'is', 'are', 'am', 'be', 'are');
INSERT INTO `pFO15` VALUES(4, 'A: Are Sue and Kathy nurses?\nB: No. They ___ doctors.\n', 'are', 'am', 'be', 'is', 'are');
INSERT INTO `pFO15` VALUES(5, 'A: ___ Sophia a good lawyer?\nB: Absolutely.\n', 'Are', 'Be', 'Is', 'Am', 'Is');
INSERT INTO `pFO15` VALUES(6, 'A: ___you a university student?\nB: Yes, Madam. \n', 'Is', 'Are', 'Am', 'Be', 'Are');
INSERT INTO `pFO15` VALUES(7, 'A: ___ Lionel Messi from Argentina?\nB: Yes, that''s right.\n', 'Are', 'Am', 'Is', 'Be', 'Is');
INSERT INTO `pFO15` VALUES(8, 'A: ___ Frank  and Mike tall?\nB: Yes, very tall. \n', 'Is', 'Are', 'Am', 'Be', 'Are');
INSERT INTO `pFO15` VALUES(9, 'A: Is Daniel Radcliffe ___actor?\nB: Yes, he''s very good. \n', 'an', 'any', 'a', 'one', 'an');
INSERT INTO `pFO15` VALUES(10, 'A: Is Alanna ___ model?\nB: Yes, she''s very pretty.\n', 'one', 'any', 'an', 'a', 'a');
INSERT INTO `pFO15` VALUES(11, 'A: Is that __  Tablet?\nB: That''s right. \n', 'a', 'and', 'any', 'an', 'a');
INSERT INTO `pFO15` VALUES(12, 'This is __ important email address.', 'a', 'any', 'and', 'an', 'an');
INSERT INTO `pFO15` VALUES(13, 'Jonathan ___married. He''s single.', 'aren''t', 'not be', 'isn''t', 'not', 'isn''t');
INSERT INTO `pFO15` VALUES(14, 'I ___ Nathaniel Harris. My name is Nathan Morris.', 'isn''t', '''m not', 'not', 'aren''t', '''m not');
INSERT INTO `pFO15` VALUES(15, 'Shania Twain ___ from Arabia. She''s Canadian. ', 'aren''t', 'not be', 'not', ' isn''t', ' isn''t');
INSERT INTO `pFO15` VALUES(16, 'Albert and Jim ___ in class today. They''re absent. ', 'not be', 'isn''t', 'aren''t', 'not', 'aren''t');
INSERT INTO `pFO15` VALUES(17, 'A: ___ is your favorite painter?\nB: Pablo Picasso\n', 'Where', 'When', 'Who', 'What', 'Who');
INSERT INTO `pFO15` VALUES(18, 'A: ___ is this, Dad?\nB: It''s a videocamera. \n', 'Which', 'What', 'When', 'Who', 'What');
INSERT INTO `pFO15` VALUES(19, 'A: ___''s Emma Watson from?\nB: From England.\n', 'What', 'When', 'Who', 'Where', 'Where');
INSERT INTO `pFO15` VALUES(20, 'A: ___ is your birthday?\nB: On July 7th.\n', 'When', 'Where', 'What', 'How', 'When');
INSERT INTO `pFO15` VALUES(21, 'A: Where ___ Brian from?\nB: New York.\n', 'is', 'am', 'be', 'are', 'is');
INSERT INTO `pFO15` VALUES(22, 'A: Where ___ John and Steve from?\nB: Australia\n', 'is', 'am', 'are', 'be', 'are');
INSERT INTO `pFO15` VALUES(23, 'How old ___ Jackie Chong?', 'are', 'is', 'am', 'be', 'is');
INSERT INTO `pFO15` VALUES(24, 'How old ___ Tom and Sylvie Soderling?', 'is', 'are', 'am', 'be', 'are');
INSERT INTO `pFO15` VALUES(25, 'I''m Rupert Kipling. I''m from Canada, but ___ family is from\nFrance.\n', 'your', 'his', 'my', 'mine', 'my');
INSERT INTO `pFO15` VALUES(26, 'Harold''s from Scotland, and ___ wife is from Germany.', 'my', 'its', 'his', 'her', 'his');
INSERT INTO `pFO15` VALUES(27, 'Those  students are from France. ___ names are Edith  and Dennise.', 'Their', 'Her', 'Its', 'Our', 'Their');
INSERT INTO `pFO15` VALUES(28, 'A: Helen, please turn off ___ mobile phone.\nB: Yes. I''m sorry.\n', 'her', 'my', 'his', 'your', 'your');
INSERT INTO `pFO15` VALUES(29, 'Natalie is my mother and Frank  is my father. They are my ___.', 'grandparents', 'parents', 'children', 'cousins', 'parents');
INSERT INTO `pFO15` VALUES(30, 'A: Mrs. Chong has two daughters: Pam and Marianne.\nB: I see. Marianne is Pam''s ___.\n', 'sister', 'brother', 'son', 'daughter', 'sister');
INSERT INTO `pFO15` VALUES(31, 'A: What time ___ ?\nB: 9:30\n', 'is it', 'its', 'it''s', 'is', 'is it');
INSERT INTO `pFO15` VALUES(32, 'We are very late for class! ___ 7:25.', 'Is it', 'It''s', 'Is', 'It', 'It''s');
INSERT INTO `pFO15` VALUES(33, '___ a pizza  on the table. ', 'Is', 'They are', 'There is', 'There are', 'There is');
INSERT INTO `pFO15` VALUES(34, '___ two bottles of orange juice in the refrigerator, Mike?', 'There are', 'Is there', 'Are there', 'Is', 'Are there');
INSERT INTO `pFO15` VALUES(35, '___ good restaurants  near your home?', 'There is', 'There are', 'Is there', 'Are there', 'Are there');
INSERT INTO `pFO15` VALUES(36, '___ a chocolate cake in your office. Happy Birthday!', 'There is', 'They are', 'There are', 'Is', 'There is');
INSERT INTO `pFO15` VALUES(37, 'I ___ to the gym every day.', 'goes', 'to go', 'going', 'go', 'go');
INSERT INTO `pFO15` VALUES(38, 'A: Congratulations. You ___ very well.\nB: Thank you.\n', 'dances', 'dancing', 'dance', 'to dance', 'dance');
INSERT INTO `pFO15` VALUES(39, 'Joe really ___ Japanese restaurants.', 'like', 'to like', '''s likes', 'likes', 'likes');
INSERT INTO `pFO15` VALUES(40, 'My aunt Kim and her family ___ in Europe.', '''re live', 'to live', 'live', 'lives', 'live');
INSERT INTO `pFO15` VALUES(41, 'My sister ___ at Galo''s restaurant every day.', '''s eat', 'eat', 'eats', 'to eat', 'eats');
INSERT INTO `pFO15` VALUES(42, 'I ___ have a car.', 'don''t', 'am not', 'not', 'no', 'don''t');
INSERT INTO `pFO15` VALUES(43, 'Cindy ___ love dogs.', 'isn''t', 'don''t', 'doesn''t', 'not', 'doesn''t');
INSERT INTO `pFO15` VALUES(44, 'Michael and Linda are Biology students. They ___study Medicine.', 'not', 'aren''t', 'don''t', 'no', 'don''t');
INSERT INTO `pFO15` VALUES(45, 'Jessica ___ like soccer.', 'doesn''t', 'don''t', 'not', 'isn''t', 'doesn''t');
INSERT INTO `pFO15` VALUES(46, '___ you have friends in Canada?', 'Does', 'Are', 'Do', 'Is', 'Do');
INSERT INTO `pFO15` VALUES(47, 'A:___ your parents ___videogames with you?\nB: Sometimes.\n', 'Do...plays', 'Do...play', 'Does...plays', 'Does...play', 'Do...play');
INSERT INTO `pFO15` VALUES(48, '___ your father ___ from 9 to 5 every day?', 'Do...work', 'Does...works', 'Does...work', 'Do...works', 'Does...work');
INSERT INTO `pFO15` VALUES(49, 'A: When ___ Mr. Langfold ___ French?\nB: Mondays and Thursdays.\n', 'do ... teaches', 'does ... teach', 'does ... teaches', 'do ... teach', 'does...teach');
INSERT INTO `pFO15` VALUES(50, 'Where_____your brother_____piano lessons?\r\n', 'does ... take', 'does ... takes', 'do ... take', 'do ... takes', 'does ... take');
INSERT INTO `pFO15` VALUES(51, 'A: I can''t go to the park now. I ___ my homework.\nB: Ok, no problem.\n', 'can do', 'do', 'am doing', 'doing', 'am doing');
INSERT INTO `pFO15` VALUES(52, 'Danna ___ her piano lesson now because she''s sick. ', 'doesn''t take', 'isn''t taking', 'not take', 'not taking', 'isn''t taking');
INSERT INTO `pFO15` VALUES(53, 'A: What ___ the kids ___ right now? They are so quiet!\nB: I can''t tell. It''s a surprise. \n', 'will ... doing', 'did ... do', 'do ... do', 'are ... doing', 'are ... doing');
INSERT INTO `pFO15` VALUES(54, 'Brian and Tom met last year. They ___ friends five years ago.', 'weren''t', 'wasn''t', 'don''t', 'didn''t', 'weren''t');
INSERT INTO `pFO15` VALUES(55, 'A: ___ Liza Minnelli  very popular in the 1970''s?\nB: Yes. She appeared in many films from that decade.\n', 'Is', 'Were', 'Was', 'Did', 'Was');
INSERT INTO `pFO15` VALUES(56, 'Louise and Mark didn''t go  to a party yesterday. They ___ home all day. ', 'were', 'was', 'are', 'be', 'were');
INSERT INTO `pFO15` VALUES(57, 'We ___ delicious  seafood  in Los Cabos last summer.', 'ate', 'eating', 'eats', 'eat', 'ate');
INSERT INTO `pFO15` VALUES(58, 'You and your brother ___ a beautiful play for the theater festival last\nweek. Congratulations!\n', 'are writing', 'write', 'wrote', 'can write', 'wrote');
INSERT INTO `pFO15` VALUES(59, 'You __ to the movies yesterday evening, right?', 'go', 'went', 'are going', 'can go', 'went');
INSERT INTO `pFO15` VALUES(60, 'Last Friday my children ___ eat the chicken soup because it was too\nspicy.\n', 'don''t', 'won''t', 'can''t', 'didn''t', 'didn''t');
INSERT INTO `pFO15` VALUES(61, 'Michael was out of town last weekend so he ___ have time to finish the\nreport.\n', 'can''t', 'don''t', 'didn''t', 'won''t', 'didn''t');
INSERT INTO `pFO15` VALUES(62, 'Nathan''s family ___ go camping a week ago because of the rain.', 'don''t', 'won''t', 'can''t', 'didn''t', 'didn''t');
INSERT INTO `pFO15` VALUES(63, 'A: How ___ you and your family   celebrate your father''s birthday last week?\nB: We had dinner together at a fancy restaurant.\n', 'do', 'did', 'are', 'does', 'did');
INSERT INTO `pFO15` VALUES(64, 'A: Where ___  Cindy ___on her last vacation?\nB: To San Diego  with her family.\n', 'does....go', 'did....go', 'is...going', 'do....go', 'did....go');
INSERT INTO `pFO15` VALUES(65, 'A: Hello, Car Rental Services. Can I help you?\nB: I ___ in San Diego next week and I need a car.\n', '''m', 'was', '''m going to be', 'being', '''m going to be');
INSERT INTO `pFO15` VALUES(66, 'A: ___ you ___ a taxi to the airport tomorrow?\nB: No, my parents want to drive me there.\n', 'Do ... like taking', 'Did ... take', 'Are ... good at taking', 'Are ... going to take', 'Are ... going to take');
INSERT INTO `pFO15` VALUES(67, 'A: Do you have any plans for your next vacation?\nB: Yes. My family and I  ___ my cousin Steve in New York.\n', 'visit', 'visiting', 'visited', 'are going to visit', 'are going to visit');
INSERT INTO `pFO15` VALUES(68, 'Jessica  is ____ than her roommate.', 'the most attractive', 'more attractive', 'as attractive', 'most attractive', 'more attractive');
INSERT INTO `pFO15` VALUES(69, 'A: Which cell  phone should I buy?\nB: The LG is ___ the Nokia, but the Nokia is more practical.\n', 'prettier than', 'as pretty', 'more pretty than', 'prettier', 'prettier than');
INSERT INTO `pFO15` VALUES(70, 'A: Who is the ___ in your family?\nB: My brother Jim  is.\n', 'taller', 'taller than', 'tallest', 'as tall', 'tallest');
INSERT INTO `pFO15` VALUES(71, 'A: Does Kelly  like her new apartment?\nB: She does, but she says that the neighborhood isn''t ___ the previous\none.\n', 'less quiet than', 'as quiet as', 'quiet enough', 'so quiet that', 'as quiet as');
INSERT INTO `pFO15` VALUES(72, 'Mrs. Cooper  is ____ than her sisters.', 'more diligent', 'most diligent', 'diligent', 'as diligent', 'more diligent');
INSERT INTO `pFO15` VALUES(73, 'My parents ___ to Paris three times since they  got  married.', 'can be', 'will be', 'are', 'have been', 'have been');
INSERT INTO `pFO15` VALUES(74, 'Pete ___his homework yet, so he can''t go out.', 'didn''t finish', 'isn''t finishing', 'hasn''t finished', 'doesn''t finish', 'hasn''t finished');
INSERT INTO `pFO15` VALUES(75, 'I am getting a diploma next week because I ___ just ___ my German\ncourse.\n', 'have ... finished ', 'will ... finish', 'am ... finished', 'should ... finish', 'have ... finished ');
INSERT INTO `pFO15` VALUES(76, 'A: Hi, Rihanna!\nB: Steve! What a surprise! I ___ you since high school!\n', 'couldn''t see', 'haven''t seen', 'didn''t see', '''m not seeing', 'haven''t seen');
INSERT INTO `pFO15` VALUES(77, 'Since we graduated, my friends and I ___ to San Diego four times.', 'traveled', 'are traveling', 'will travel', 'have traveled ', 'have traveled ');
INSERT INTO `pFO15` VALUES(78, 'A: I went to France on my last vacation.\nB: That''s great! I''ve been to Germany and Spain but I haven''t\nvisited France  ___.\n', 'never', 'already', 'yet', 'after', 'yet');
INSERT INTO `pFO15` VALUES(79, 'Gilbert ___ his friends yet. He''s been very busy.', 'didn''t see', 'hasn''t seen', 'doesn''t see', 'isn''t seeing', 'hasn''t seen');
INSERT INTO `pFO15` VALUES(80, 'A:  Has Paul  read a lot of books?\nB: I bet he hasn''t. There are ___ books in his house\n', 'no', 'any', 'nothing', 'none ', 'no');
INSERT INTO `pFO15` VALUES(81, 'A: I don''t think we should be playing with dad''s smartphone.\nB: Don''t worry. ____ bad is going to happen.\n', 'Something', 'Anything', 'Nothing', 'Everything', 'Nothing');
INSERT INTO `pFO15` VALUES(82, 'A: My father was cooking lunch ___ my mother was washing the car.\nB: Really?\n', 'which', 'where', 'that', 'while ', 'while ');
INSERT INTO `pFO15` VALUES(83, 'I was designing a mind map when my computer ___ working.', 'stopped ', 'stops', 'has stopped', 'was stopped', 'stopped ');
INSERT INTO `pFO15` VALUES(84, 'A: What do the Browns  do to stay in shape?\nB: I really don''t know. They ___ to the gym twice a week but they don''t\nanymore.\n', 'used to go', 'went', 'usually go', ' have gone', 'used to go');
INSERT INTO `pFO15` VALUES(85, 'My sister and I love  eating fruit and vegetables now, but we ____.', 'not used to', 'didn''t use to', 'didn''t used to ', 'not using to', 'didn''t use to');
INSERT INTO `pFO15` VALUES(86, 'When John was a child, he ___spend his vacation with his grandparents.', 'use', 'use', 'used ', 'used to ', 'used to ');
INSERT INTO `pFO15` VALUES(87, 'Annie always brings cake if there ___ a birthday at the office.', 'is', 'will be', 'was', ' has been', 'is');
INSERT INTO `pFO15` VALUES(88, 'If Jake doesn''t finish work late, he ___ to the party tonight.', 'goes', 'will go', 'would go', 'is going', 'will go');
INSERT INTO `pFO15` VALUES(89, 'Patrick is a great cyclist. He'' ll win this tournament if he ______ lose control. ', 'can''t', 'wouldn''t', 'doesn''t', 'not ', 'doesn''t');
INSERT INTO `pFO15` VALUES(90, 'A: I think I have a fever.\nB: You  ___ go to work today.\n', 'shouldn''t', 'couldn''t', 'don''t', 'wouldn''t', 'shouldn''t');
INSERT INTO `pFO15` VALUES(91, 'Well-mannered  people  _______ chew with the mouth open.', 'are not going to', 'won''t be able to', 'must not', 'aren''t able to', 'must not');
INSERT INTO `pFO15` VALUES(92, 'The new BMW car is incredible, but it is ___ expensive for me to  buy.', 'enough', 'much', 'too', 'excessive', 'too');
INSERT INTO `pFO15` VALUES(93, 'Pamela is late for work again. She isn''t responsible ___ for this job.', 'sufficiently', 'enough', 'very', 'too', 'enough');
INSERT INTO `pFO15` VALUES(94, 'Joe''s parents  are simply  too nice to him. Believe me, If he  were my son, I  ____ demand a lot  more from him. ', 'will', 'would', 'be able to ', 'can', 'would');
INSERT INTO `pFO15` VALUES(95, 'MAN:  Myrna has just bought a luxurious  apartment. \nWOMAN: Well, I''d buy an expensive one too if I ___  as  much money as she does.  \n', 'made', 'make', 'making', 'would make', 'made');
INSERT INTO `pFO15` VALUES(96, 'A: How often does Peter  go to dance clubs?\nB: Never. He can''t stand  ___.\n', 'danced', 'dances', 'dancing', 'dance', 'dancing');
INSERT INTO `pFO15` VALUES(97, 'A: Do you want to take a taxi home?\nB: That''s OK. I don''t mind ___.\n', 'walking', 'walk', 'to walk', 'walked', 'walking');
INSERT INTO `pFO15` VALUES(98, 'A: Would you like to go to a karaoke on Friday?\r\nB: Not really. I can''t stand ___.\r\n', 'to sing', 'sing', 'singing', 'sang', 'singing');
INSERT INTO `pFO15` VALUES(99, 'A: Did Paul ask you ___ him with his school project yesterday?\nB:  He did, but  I was terribly busy.\n', 'helping', 'help', 'to help', 'helps', 'to help');
INSERT INTO `pFO15` VALUES(100, 'LISA: Where did I leave my jacket?\nBILL: It''s in the car. Let me ___ it for you.\n', 'get', 'to get', 'got', 'getting', 'get');
INSERT INTO `pFO15` VALUES(101, 'Let''s go out and do something fun! I''m ___.', 'boring', 'bore', 'bored', 'to bore', 'bored');
INSERT INTO `pFO15` VALUES(102, 'A:Did you like the Cloisters Museum and Gardens in New York?\nB:I did. I ___so many art pieces in one single place before. I loved it!\n', 'was never seen', 'never saw', 'has never seen', 'had never seen ', 'had never seen ');
INSERT INTO `pFO15` VALUES(103, 'A: The traffic was very heavy when Sally left, so she missed her bus. \r\nB:  I wish she ___ too late to the station so she could''ve caught the bus.\r\n', 'didn''t arrive', 'wouldn''t arrived', 'hadn''t arrived', 'isn''t arriving ', 'hadn''t arrived');
INSERT INTO `pFO15` VALUES(104, 'Karl Marx''s Capital is one of the most important texts in economics  and politics. It ___ for the first time in 1867.', 'is published', 'was publishing', 'has published', 'was published', 'was published');
INSERT INTO `pFO15` VALUES(105, 'Will you hurry up with that report? You know the boss dislikes  reports\n___ on time.\n', 'won''t be finished', 'not being finished', 'aren''t finished', 'not finishing', 'not being finished');
INSERT INTO `pFO15` VALUES(106, 'A: Did you have fun with your little brother  last weekend?\nB: Yes, he ___ to the amusement park.\n', 'enjoyed taking', 'enjoyed being taken', 'were enjoying taken', 'was being taken', 'enjoyed being taken');
INSERT INTO `pFO15` VALUES(107, 'A: It''s a shame your uncle  never finished that coffee table.\nB: He  ___ completed it if  he''d had enough time and money.\n', 'would like', 'would have been', 'would have', 'would be', 'would have');
INSERT INTO `pFO15` VALUES(108, 'My parents ___ longer in Chicago if they had had  more money.', 'would have stayed', 'will stay', 'had stayed', ' have stayed', 'would have stayed');
INSERT INTO `pFO15` VALUES(109, 'A: Shall we do something special tonight?\nB: Sure! But I don''t know ___ to go dancing or to the opera.\n', 'or', 'neither', 'whether', 'either', 'whether');
INSERT INTO `pFO15` VALUES(110, 'A: That girl over there is a knockout.\nB: Do you like her? I like the girl___ the photo booth.\n', 'that''s standing by', 'is standing by', 'is standing where', 'who''s standing where', 'that''s standing by');
INSERT INTO `pFO15` VALUES(111, 'That''s  the little restaurant___ Linda and Harry met.', 'which', 'where', 'that', 'what', 'where');
INSERT INTO `pFO15` VALUES(112, 'Mr. White called me today. He wanted to know what time ____ tomorrow.', 'does the show begin ', 'did the show begin', 'the show began', 'the show begin', 'the show began');
INSERT INTO `pFO15` VALUES(113, 'I ___ fixed last week. It doesn''t make funny noises anymore.', 'took my car', 'had my car to being ', 'had my car ', '''ll have my car', 'had my car ');
INSERT INTO `pFO15` VALUES(114, 'My driver''s license was expired, so I went to the motor vehicle\noffice __ renewed.\n', 'for to get it', 'to have it to be', 'it has been', 'to have it ', 'to have it ');
INSERT INTO `pFO15` VALUES(115, 'A: How old were you in this picture, grandpa?\nB: I think I was 20. Look at my hair. It ___ during the 60''s.\n', 'must have been taken', 'would be taken', 'will be taken', ' probably was', 'must have been taken');
