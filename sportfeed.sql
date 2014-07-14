-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2014 at 12:08 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sportfeed`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_swedish_ci NOT NULL,
  `link` text COLLATE utf8_swedish_ci NOT NULL,
  `guid` text COLLATE utf8_swedish_ci NOT NULL,
  `description` text COLLATE utf8_swedish_ci NOT NULL,
  `sport_id` int(11) NOT NULL,
  `time_added` bigint(20) NOT NULL,
  `pubdate` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=92 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `link`, `guid`, `description`, `sport_id`, `time_added`, `pubdate`) VALUES
(61, 'Stars of all kinds take part in softball clash', 'http://mlb.mlb.com/news/article/mlb/taco-bell-legends--celebrity-softball-game-takes-place-at-all-star-game?ymd=20140713&content_id=84630682&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/taco-bell-legends--celebrity-softball-game-takes-place-at-all-star-game?ymd=20140713&content_id=84630682&vkey=news_mlb', 'It''s the Taco Bell Legends & Celebrity softball game, where famous people from the sports world clash with the best Major Leaguers from yesteryear for a harmless exhibition game. It''s light, fun and the complete opposite from ultra-competitive, and it never disappoints.', 1, 1405306965, 'Sun, 13 Jul 2014 23:02:45 EDT\n	'),
(62, 'Cubs prospect Bryant mature beyond his years', 'http://mlb.mlb.com/news/article/mlb/mike-bauman-cubs-prospect-kris-bryant-mature-beyond-his-years?ymd=20140713&content_id=84630184&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/mike-bauman-cubs-prospect-kris-bryant-mature-beyond-his-years?ymd=20140713&content_id=84630184&vkey=news_mlb', 'In the midst of all the conjecture, speculation and, yes, even the promise of the Chicago Cubs'' future, here comes the one part of that future closest to Major league fruition. It is Kris Bryant. Sunday afternoon he started at third base and hit cleanup for the U.S. Team in the Sirius XM All-Star Futures Game at Target Field.', 1, 1405306779, 'Sun, 13 Jul 2014 22:59:39 EDT\n	'),
(63, 'Gallo enjoys breakthrough performance', 'http://mlb.mlb.com/news/article/mlb/rangers-prospect-joey-gallo-named-mvp-of-all-star-futures-game?ymd=20140713&content_id=84614092&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/rangers-prospect-joey-gallo-named-mvp-of-all-star-futures-game?ymd=20140713&content_id=84614092&vkey=news_mlb', 'He broke somebody''s windshield and struck out a couple of times. But all told, it was a pretty good day for Joey Gallo. The Rangers'' power-hitting prospect was the star of the show in the U.S. team''s 3-2 victory over the World roster in the Sirius/XM All-Star Futures Game on Sunday afternoon at Target Field, both in batting practice and in the game itself.', 1, 1405303267, 'Sun, 13 Jul 2014 22:01:07 EDT\n	'),
(64, 'Baez making case for arriving in Majors shortly', 'http://mlb.mlb.com/news/article/mlb/cubs-prospect-javier-baez-hits-two-run-homer-in-all-star-futures-game?ymd=20140713&content_id=84604296&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/cubs-prospect-javier-baez-hits-two-run-homer-in-all-star-futures-game?ymd=20140713&content_id=84604296&vkey=news_mlb', 'Javier Baez believes his time is coming fast, and on Sunday did what he could to show he''s ready. He drove a Lucas Giolito curveball over the right-field fence for an opposite-field, two-run homer in the SiriusXM All-Star Futures Game at Target Field.', 1, 1405300417, 'Sun, 13 Jul 2014 21:13:37 EDT\n	'),
(65, 'Gallo''s homer backs stellar pitching in U.S. win', 'http://mlb.mlb.com/news/article/mlb/joey-gallos-homer-backs-stellar-us-pitching-in-futures-game-win?ymd=20140713&content_id=84591360&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/joey-gallos-homer-backs-stellar-us-pitching-in-futures-game-win?ymd=20140713&content_id=84591360&vkey=news_mlb', 'Individual pitching performances dominated the Futures Game, and Rangers third-base prospect Joey Gallo connected on a two-run homer in the sixth inning to lead the U.S. to a 3-2 win over the World Team at Target Field.', 1, 1405300268, 'Sun, 13 Jul 2014 21:11:08 EDT\n	'),
(66, 'Twins ride five-run first, Dozier''s jacks to big win', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_minmlb_colmlb_1&mode=recap_away&c_id=min', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_minmlb_colmlb_1&mode=recap_away&c_id=min', 'After getting staked with a five-run lead in the first, Phil Hughes worked five innings for the Twins, and some late runs gave them breathing room as they beat the Rockies, 13-5, in the rubber game of their series.', 1, 1405306418, 'Sun, 13 Jul 2014 22:53:38 EDT\n	'),
(67, 'Battery''s history-making slams boost Giants', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_arimlb_sfnmlb_1&mode=recap_home&c_id=sf', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_arimlb_sfnmlb_1&mode=recap_home&c_id=sf', 'Madison Bumgarner hit a grand slam in the sixth inning -- one inning after Buster Posey did the same -- as the Giants ended the first half of the season with an 8-4 blasting of the D-backs at AT&T Park on Sunday. The twin slams made Bumgarner and Posey the first pitcher-catcher duo in Major League history to each hit a grand slam in the same game.', 1, 1405302904, 'Sun, 13 Jul 2014 21:55:04 EDT\n	'),
(69, 'MadBum in rare company with season''s second slam', 'http://mlb.mlb.com/news/article/mlb/giants-madison-bumgarner-second-pitcher-in-history-with-two-grand-slams-in-one-season?ymd=20140713&content_id=84582224&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/giants-madison-bumgarner-second-pitcher-in-history-with-two-grand-slams-in-one-season?ymd=20140713&content_id=84582224&vkey=news_mlb', 'With a grand slam Sunday, Giants left-hander Madison Bumgarner became just the second pitcher in history to hit two grand slams in one season. Braves right-hander Tony Cloninger is the only other pitcher to accomplish the feat,', 1, 1405300753, 'Sun, 13 Jul 2014 21:19:13 EDT\n	'),
(70, 'With Gray in control, A''s roll into All-Star break', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_oakmlb_seamlb_1&mode=recap_away&c_id=oak', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_oakmlb_seamlb_1&mode=recap_away&c_id=oak', 'Sonny Gray didn''t allow an earned run in 7 2/3 innings, Brandon Moss hit his team-leading 21st home run of the season, and the A''s avoided a three-game sweep in their last series before the All-Star break with a 4-1 win over the Mariners on Sunday.', 1, 1405298583, 'Sun, 13 Jul 2014 20:43:03 EDT\n	'),
(71, 'Reds ride power to series victory over Bucs', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_pitmlb_cinmlb_1&mode=recap_home&c_id=cin', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_pitmlb_cinmlb_1&mode=recap_home&c_id=cin', 'Rookie Kristopher Negron delivered his first Major League home run and All-Star Todd Frazier hit his 19th of the season to help Cincinnati to a 6-3 win over the Pirates at Great American Ball Park on Sunday.', 1, 1405291500, 'Sun, 13 Jul 2014 18:45:00 EDT\n	'),
(72, 'Aviles'' laser throw completes sensational double play', 'http://mlb.mlb.com/news/article/mlb/mike-aviles-laser-throw-completes-sensational-double-play?ymd=20140713&content_id=84549790&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/mike-aviles-laser-throw-completes-sensational-double-play?ymd=20140713&content_id=84549790&vkey=news_mlb', 'Mike Aviles unleashed one of the best throws of the season for the Indians on Sunday afternoon, snagging a ball deep down the left-field line in the second inning against the White Sox and then completing a seemingly impossible double play.', 1, 1405288686, 'Sun, 13 Jul 2014 17:58:06 EDT\n	'),
(73, 'Gallo puts on show during Futures batting practice', 'http://mlb.mlb.com/news/article/mlb/joey-gallo-puts-on-show-during-futures-game-batting-practice?ymd=20140713&content_id=84549788&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/joey-gallo-puts-on-show-during-futures-game-batting-practice?ymd=20140713&content_id=84549788&vkey=news_mlb', 'Rangers prospect Joey Gallo, who is tied for first among all Minor Leaguers with 31 homers, led all Futures Game participants with 15 home runs during batting practice Sunday.', 1, 1405286441, 'Sun, 13 Jul 2014 17:20:41 EDT\n	'),
(74, 'Johnson helps Braves surge into All-Star break', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_atlmlb_chnmlb_1&mode=recap_away&c_id=atl', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_atlmlb_chnmlb_1&mode=recap_away&c_id=atl', 'Chris Johnson continued his recent power surge with a three-run home run and right-hander Julio Teheran tossed seven effective innings as the Braves cruised into the All-Star break with a 10-7 victory and a series win over the Cubs on Sunday.', 1, 1405294654, 'Sun, 13 Jul 2014 19:37:34 EDT\n	'),
(75, 'Hudson replaces Bumgarner on All-Star roster', 'http://mlb.mlb.com/news/article.jsp?ymd=20140713&content_id=84540296&notebook_id=84544436&vkey=notebook_sf&c_id=sf', 'http://mlb.mlb.com/news/article.jsp?ymd=20140713&content_id=84540296&notebook_id=84544436&vkey=notebook_sf&c_id=sf', 'The fishing trip Giants starter Tim Hudson planned to take during the All-Star break is going to have to wait -- he has been named to the National League All-Star team, replacing teammate Madison Bumgarner, who pitched Sunday.', 1, 1405284133, 'Sun, 13 Jul 2014 16:42:13 EDT\n	'),
(76, 'Robinson shares memories of her dad at FanFest', 'http://mlb.mlb.com/news/article/mlb/sharon-robinson-offers-memories-of-her-dad-at-fanfest?ymd=20140713&content_id=84541242&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/sharon-robinson-offers-memories-of-her-dad-at-fanfest?ymd=20140713&content_id=84541242&vkey=news_mlb', 'Sharon Robinson is best known as the daughter of Hall of Famer Jackie Robinson, but over the last several decades, she has distinguished herself through her own contributions to the game.', 1, 1405285200, 'Sun, 13 Jul 2014 17:00:00 EDT\n	'),
(77, 'deGrom, Mets stay hot, sweep Fish to rise in East', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_miamlb_nynmlb_1&mode=recap_home&c_id=nym', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_miamlb_nynmlb_1&mode=recap_home&c_id=nym', 'The Mets wrapped up their homestand Sunday with a 9-1 win over the Marlins to complete the series sweep and give the club its eighth win in its last 10 games.', 1, 1405290486, 'Sun, 13 Jul 2014 18:28:06 EDT\n	'),
(78, 'All eyes on Stanton in new-look Home Run Derby', 'http://mlb.mlb.com/news/article/mlb/anthony-castrovince-all-eyes-on-giancarlo-stanton-yoenis-cespedes-in-new-look-home-run-derby?ymd=20140713&content_id=84530394&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/anthony-castrovince-all-eyes-on-giancarlo-stanton-yoenis-cespedes-in-new-look-home-run-derby?ymd=20140713&content_id=84530394&vkey=news_mlb', 'With a new format that should help participants remain fresh throughout the competition, fans should expect sluggers such as Giancarlo Stanton and Yoenis Cespedes to put on a show Monday night in the Home Run Derby.', 1, 1405282768, 'Sun, 13 Jul 2014 16:19:28 EDT\n	'),
(79, 'Nationals close out first half with rout of Phils', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_wasmlb_phimlb_1&mode=recap_away&c_id=was', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_wasmlb_phimlb_1&mode=recap_away&c_id=was', 'The Nationals ended the first half of the season on a positive note as they pounded the Phillies, 10-3, at Citizens Bank Park on Sunday afternoon. The Nationals ended the first half with a 51-42 record and remained in first place in the National League East.', 1, 1405294526, 'Sun, 13 Jul 2014 19:35:26 EDT\n	'),
(80, 'Ryu''s return to form leaves Dodgers atop NL at break', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_sdnmlb_lanmlb_1&mode=recap_home&c_id=la', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_sdnmlb_lanmlb_1&mode=recap_home&c_id=la', 'Hyun-Jin Ryu struck out 10 in six innings and All-Star Yasiel Puig broke up a scoreless tie in the sixth inning by singling home Dee Gordon as the Dodgers hit the break with a second consecutive 1-0 win over the Padres on Sunday.', 1, 1405304031, 'Sun, 13 Jul 2014 22:13:51 EDT\n	'),
(81, 'Gomes'' go-ahead shot powers Tribe over White Sox', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_chamlb_clemlb_1&mode=recap_home&c_id=cle', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_chamlb_clemlb_1&mode=recap_home&c_id=cle', 'Yan Gomes hit a go-ahead two-run homer in the eighth and Trevor Bauer struck out 10 in a stellar effort as the Indians downed the White Sox, 3-2, in Sunday''s first-half finale at Progressive Field.', 1, 1405289977, 'Sun, 13 Jul 2014 18:19:37 EDT\n	'),
(82, 'Simon''s starting success gets All-Star nod', 'http://mlb.mlb.com/news/article.jsp?ymd=20140713&content_id=84499572&notebook_id=84518002&vkey=notebook_cin&c_id=cin', 'http://mlb.mlb.com/news/article.jsp?ymd=20140713&content_id=84499572&notebook_id=84518002&vkey=notebook_cin&c_id=cin', 'Alfredo Simon is heading to Minneapolis as an All-Star. Selected as an All-Star for the first time in his seven-year career, Simon has posted a 2.70 ERA and 1.05 WHIP in 18 starts this season.', 1, 1405276466, 'Sun, 13 Jul 2014 14:34:26 EDT\n	'),
(83, 'Clippard to represent Nats in All-Star Game', 'http://mlb.mlb.com/news/article/mlb/nationals-tyler-clippard-added-to-national-league-all-star-team?ymd=20140713&content_id=84516478&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/nationals-tyler-clippard-added-to-national-league-all-star-team?ymd=20140713&content_id=84516478&vkey=news_mlb', 'On Sunday morning, Tyler Clippard received word that he would represent the Nationals at the All-Star Game in Minnesota. He will replace Braves right-hander Julio Teheran, who started Sunday against the Cubs.', 1, 1405291072, 'Sun, 13 Jul 2014 18:37:52 EDT\n	'),
(84, 'Buchholz shuts out Astros on Holt''s five-hit day', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_bosmlb_houmlb_1&mode=recap_away&c_id=bos', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_bosmlb_houmlb_1&mode=recap_away&c_id=bos', 'Going the distance, Clay Buchholz held the Astros to just three hits and struck out a career-high 12 in Sunday afternoon''s 11-0 victory at Minute Maid Park. The Red Sox hit early, making Houston go to the bullpen after just one out and finished their first half taking two of three. Brock Holt had a career-high five hits, including a homer to lead off the game.', 1, 1405293320, 'Sun, 13 Jul 2014 19:15:20 EDT\n	'),
(85, 'Angels roar into break with Texas-sized sweep', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_anamlb_texmlb_1&mode=recap_away&c_id=ana', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_anamlb_texmlb_1&mode=recap_away&c_id=ana', 'With their 10-7 victory completing a four-game sweep of the reeling Rangers on Sunday, the high-flying Angels come to the break having won 26 of their past 35 games, closing to within 1 1/2 games of the A''s in the American League West.', 1, 1405297033, 'Sun, 13 Jul 2014 20:17:13 EDT\n	'),
(86, 'Brewers rout Cards to close first half atop Central', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_slnmlb_milmlb_1&mode=recap_home&c_id=mil', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_slnmlb_milmlb_1&mode=recap_home&c_id=mil', 'Wily Peralta allowed just three singles over seven innings and benefited from a 19-hit attack as the Brewers snapped a seven-game losing streak with an 11-2 victory over St. Louis on Sunday for a one-game lead over the Cardinals heading into the All-Star break.', 1, 1405292338, 'Sun, 13 Jul 2014 18:58:58 EDT\n	'),
(87, 'Royals best Verlander with big five-run seventh', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_detmlb_kcamlb_1&mode=recap_home&c_id=kc', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_detmlb_kcamlb_1&mode=recap_home&c_id=kc', 'Omar Infante delivered a go-ahead two-run single as the Royals erupted for five in the seventh inning en route to a 5-2 win over the Tigers on Sunday at Kauffman Stadium.', 1, 1405294818, 'Sun, 13 Jul 2014 19:40:18 EDT\n	'),
(88, 'Braves suspend Uggla one game, add Gosselin', 'http://mlb.mlb.com/news/article/mlb/atlanta-braves-suspend-dan-uggla-for-one-game-recall-phil-gosselin-from-triple-a-gwinnett?ymd=20140713&content_id=84480346&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/atlanta-braves-suspend-dan-uggla-for-one-game-recall-phil-gosselin-from-triple-a-gwinnett?ymd=20140713&content_id=84480346&vkey=news_mlb', 'The Braves announced shortly before Sunday''s game that they suspended infielder Dan Uggla for one game. Though manager Fredi Gonzalez opted not to discuss the matter, multiple sources have said Uggla arrived late for Saturday afternoon''s game against the Cubs. Atlanta called up Philip Gosselin from Triple-A Gwinnett to take Uggla''s place for a day.', 1, 1405281738, 'Sun, 13 Jul 2014 16:02:18 EDT\n	'),
(89, 'Selig to hold annual Town Hall Chat with fans', 'http://mlb.mlb.com/news/article/mlb/commissioner-bud-selig-to-hold-annual-town-hall-chat-with-fans?ymd=20140710&content_id=84108726&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/commissioner-bud-selig-to-hold-annual-town-hall-chat-with-fans?ymd=20140710&content_id=84108726&vkey=news_mlb', 'Commissioner Bud Selig will interact with baseball fans around the globe during a live chat on MLB.com from the T-Mobile All-Star FanFest before Tuesday night''s Midsummer Classic at Target Field in Minneapolis.', 1, 1405087200, 'Fri, 11 Jul 2014 10:00:00 EDT\n	'),
(90, 'Win $25,000 in Derby Bracket Challenge', 'http://mlb.mlb.com/news/article/mlb/win-25000-for-perfect-bracket-in-home-run-derby-bracket-challenge?ymd=20140710&content_id=84059522&vkey=news_mlb', 'http://mlb.mlb.com/news/article/mlb/win-25000-for-perfect-bracket-in-home-run-derby-bracket-challenge?ymd=20140710&content_id=84059522&vkey=news_mlb', 'MLB.com presents the Derby Bracket Challenge, which gives fans an opportunity to call the game before they see it. Fans will have a chance to predict the winners of the Home Run Derby correctly, and if they have a perfect bracket, they can win $25,000 for their efforts.', 1, 1405087200, 'Fri, 11 Jul 2014 10:00:00 EDT\n	'),
(91, 'Gausman gets rain-shortened CG win over Yanks', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_nyamlb_balmlb_1&mode=recap_home&c_id=bal', 'http://mlb.mlb.com/mlb/gameday/index.jsp?gid=2014_07_13_nyamlb_balmlb_1&mode=recap_home&c_id=bal', 'The Orioles headed into the All-Star break with a series win against the Yankees, albeit an unconventional one. After waiting out rain for two hours and 22 minutes, Sunday night''s game was called in the bottom of the fifth inning, giving the first-place Orioles a 3-1 victory at Camden Yards to extend their American League East lead to four games.', 1, 1405314635, 'Mon, 14 Jul 2014 01:10:35 EDT\n	');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `sport_id` int(11) NOT NULL AUTO_INCREMENT,
  `sport` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`sport_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`sport_id`, `sport`) VALUES
(1, 'MLB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_swedish_ci NOT NULL,
  `password` text COLLATE utf8_swedish_ci NOT NULL,
  `email` text COLLATE utf8_swedish_ci NOT NULL,
  `activation_code` text COLLATE utf8_swedish_ci NOT NULL,
  `time_added` bigint(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
