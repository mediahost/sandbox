
<!-- saved from url=(0058)http://adminer.local/?username=root&db=doctrine2&dump=book -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript">function a() {	 document.addEventListener('keydown', function(e){		/*console.log('keydown');*/		var keys = [];		if(e.ctrlKey || e.shiftKey || e.altKey || e.metaKey) {			if(e.metaKey) {				keys.push('Cmd');			}			if(e.shiftKey) {				keys.push('Shift');			}			if(e.ctrlKey)			{				keys.push('Ctrl');			}			if(e.altKey) {				keys.push('Alt');			}		}		if(e.which)		{			/*console.log(e.which);*/			keys.push(String.fromCharCode(e.which));		}		/*console.log(keys.join('+'));*/		if(keys.length >= 2 && keys[keys.length-1] != '') {			window.postMessage({type: 'dolphin_shortcuts', keys:keys}, '*');		}	 });}a();</script><script type="text/javascript"> window.oncontextmenu = function(event) {    var target = event.target.getAttribute('obj_url');	 window.postMessage({type: 'dolphin_clickTarget', target:target}, '*'); };</script><style type="text/css"></style></head><body><pre style="word-wrap: break-word; white-space: pre-wrap;">-- Adminer 4.0.3 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '+01:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `doctrine2`;
CREATE DATABASE `doctrine2` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_czech_ci */;
USE `doctrine2`;

DROP TABLE IF EXISTS `author`;
CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `author` (`id`, `firstname`, `surname`) VALUES
(1,	'Aldous',	'Huxley'),
(2,	'George',	'Orwell'),
(3,	'Bohumil',	'Hrabal'),
(4,	'Dan',	'Brown'),
(5,	'J. D.',	'Salinger'),
(6,	'J. R. R.',	'Tolkien'),
(7,	'Antoine de',	'Saint-Exupéry'),
(8,	'Eco',	'Umberto'),
(9,	'J. K.',	'Rowling'),
(10,	'Dan',	'Brown'),
(11,	'Jaroslav',	'Hašek');

DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `published` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CBE5A331F675F31B` (`author_id`),
  CONSTRAINT `FK_CBE5A331F675F31B` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `book` (`id`, `author_id`, `title`, `published`) VALUES
(1,	1,	'Brave New World',	'1932-01-01 00:00:00'),
(2,	2,	'Nineteen Eighty-Four',	'1949-06-08 00:00:00'),
(3,	3,	'Ostře sledované vlaky',	'1966-11-18 00:00:00'),
(4,	3,	'Příliš hlučná samota',	'1980-01-01 00:00:00'),
(6,	4,	'The Da Vinci Code',	'2003-01-01 00:00:00'),
(7,	5,	'The Catcher in the Rye',	'1951-01-01 00:00:00'),
(8,	6,	'The Hobbit',	'1937-01-01 00:00:00'),
(9,	7,	'Le Petit Prince',	'1943-01-01 00:00:00'),
(10,	8,	'Il Nome della Rosa',	'1980-01-01 00:00:00'),
(11,	9,	'Harry Potter and the Deathly Hallows',	'2007-01-01 00:00:00'),
(12,	10,	'Angels &amp; Demons',	'2000-01-01 00:00:00'),
(13,	11,	'Osudy dobrého vojáka Švejka za světové války',	'1923-01-01 00:00:00');

-- 2014-03-07 14:45:08
</pre></body></html>