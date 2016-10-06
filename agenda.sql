-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Octobre 2016 à 15:46
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `agenda`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `date` text NOT NULL,
  `heure` text NOT NULL,
  `designation` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=372 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `date`, `heure`, `designation`, `Description`) VALUES
(337, '20 Jun 2016', '11h24', 'Basket - NBA - La malÃ©diction du record', ''),
(338, '20 Jun 2016', '11h05', 'Euro - POR - Fernando Santos (sÃ©lectionneur du Portugal) : Â«Ronaldo va marquer au prochain matchÂ»', ''),
(339, '20 Jun 2016', '11h00', 'Voile - Solitaire - Charlie Dalin leader de la Solitaire du Figaro, Aymeric Decroocq dÃ©mÃ¢te', ''),
(340, '20 Jun 2016', '10h57', 'Golf - US Open - Oakmont : le swing des principaux animateurs', ''),
(341, '20 Jun 2016', '10h50', 'Euro - UKR - Ukraine : MikhaÃ¯l Fomenko Ã  la retraite', ''),
(342, '20 Jun 2016', '10h46', 'Foot - Transfert - Moritz Bauer, du Grasshopper ZÃ¼rich au Rubin Kazan', ''),
(343, '20 Jun 2016', '10h42', 'Foot - Transfert - Transfert : le NiÃ§ois Franck Honorat prÃªtÃ© Ã  Sochaux', ''),
(344, '20 Jun 2016', '10h42', 'AthlÃ© - JO - Vitaly Mutko : Â«Absurde si Yulia Stepanova est aux JO et pas les athlÃ¨tes russes ''propres''Â»', ''),
(345, '20 Jun 2016', '10h39', 'Foot - Transfert - Transfert : Roman Zobnin du Dynamo au Spartak Moscou', ''),
(346, '20 Jun 2016', '10h37', 'Euro - SÃ©curitÃ© - Euro - SÃ©curitÃ© : 1900 policiers et gendarmes mobilisÃ©s Ã  Toulouse', ''),
(347, '20 Jun 2016', '10h35', 'E21 - EDS - Faut-il uniquement retenir la premiÃ¨re place des Bleus ?', ''),
(348, '20 Jun 2016', '10h32', 'Surf - Shipstern Bluff, la machine Ã  dÃ©couper', ''),
(349, '20 Jun 2016', '10h22', 'Rugby - Top 14 - Mathieu Raynal arbitrera la finale du Top 14 vendredi', ''),
(350, '20 Jun 2016', '09h53', 'Foot - Transfert - Transfert : Le SÃ©ville FC avance sur Hatem Ben Arfa et lui propose 3 ans', ''),
(351, '20 Jun 2016', '09h29', 'Foot - Eco - Sponsoring : Dimitri Payet ambassadeur SFR', ''),
(352, '20 Jun 2016', '09h26', 'Foot - Euro - 13,5 millions devant Suisse - France sur M6', ''),
(353, '20 Jun 2016', '09h22', 'Rugby - Bleus - XV de France : En Argentine, RÃ©mi Bonfils marque des points', ''),
(354, '20 Jun 2016', '09h17', 'Foot - BRE - Corinthians - Corinthians: Cristovao Borges remplace Tite', ''),
(355, '20 Jun 2016', '09h00', 'Tennis - WTA - AprÃ¨s sa victoire Ã  Majorque, Caroline Garcia est dÃ©sormais la nÂ°1 franÃ§aise Ã  la WTA', ''),
(356, '20 Jun 2016', '08h10', 'Euro - GAL - Galles : les coups francs de Gareth Bale dÃ©cryptÃ©s', ''),
(357, '20 Jun 2016', '08h10', 'AthlÃ© - JO - Kim Collins absent aux Jeux Olympiques de Rio de Janeiro ?', ''),
(358, '20 Jun 2016', '08h01', 'Tous sports - Qui est votre champion du week-end?', ''),
(359, '20 Jun 2016', '07h59', 'Euro - Bleus - Equipe de France : Yohan Cabaye a rÃ©pondu prÃ©sent contre la Suisse', ''),
(360, '20 Jun 2016', '07h42', 'Basket - NBA - Cleveland, un titre en chiffres', ''),
(361, '20 Jun 2016', '07h37', 'Basket - NBA - Tyronne Lue : Â«LeBron, il le mÃ©rite', ''),
(362, '20 Jun 2016', '07h27', 'Basket - NBA - TitrÃ© avec Cleveland, Richard Jefferson annonce sa retraite', ''),
(363, '20 Jun 2016', '07h06', 'Basket - NBA - Steve Kerr : Â«FÃ©licitations aux CavsÂ»', ''),
(364, '20 Jun 2016', '06h56', 'Basket - NBA - Le Top 5 du match 7 : LeBron James, un contre dÃ©cisif', ''),
(365, '20 Jun 2016', '06h52', 'Basket - NBA - Stephen Curry : Â«Dur Ã  avalerÂ»', ''),
(366, '20 Jun 2016', '06h50', 'Rugby - Bleus - Guy NovÃ¨s (France) : Â«Certains garÃ§ons ont Ã©tÃ© surprenantsÂ»', ''),
(367, '20 Jun 2016', '06h37', 'Basket - NBA - Ils fÃ©licitent les Cavaliers', ''),
(368, '20 Jun 2016', '06h22', 'Basket - NBA - Les actions du match 7 des Finales NBA : LeBron James, un contre fantastique et dÃ©cisif', ''),
(369, '20 Jun 2016', '06h12', 'Basket - NBA - VidÃ©o : le triple-double de LeBron James lors du match 7 des Finales NBA', ''),
(370, '20 Jun 2016', '04h56', 'Basket - NBA - LeBron James dÃ©signÃ© MVP des Finales', ''),
(371, '20 Jun 2016', '04h40', 'Basket - NBA - Golden State Warriors - Cleveland Cavaliers : 89-93', '');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(10) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `login`, `password`, `nom`, `prenom`) VALUES
(1, 'admin', 'admin', 'hello', 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `idcontact` int(20) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `telephone` text NOT NULL,
  `ville` text NOT NULL,
  `email` text NOT NULL,
  `codepostal` text NOT NULL,
  `adresse` text NOT NULL,
  `sport` text NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `credits` double(6,2) NOT NULL,
  `date_changepass` varchar(30) NOT NULL,
  `nombre_reservations` int(11) NOT NULL,
  PRIMARY KEY (`idcontact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`idcontact`, `nom`, `prenom`, `telephone`, `ville`, `email`, `codepostal`, `adresse`, `sport`, `login`, `password`, `credits`, `date_changepass`, `nombre_reservations`) VALUES
(17, 'diouri', 'younes', '0787912284', 'paris', 'diouriyounes@hotmail.com', '92200', '9 rue soyer 92200', 'escrime', 'younes.d', 'ovelud', -2.00, '2015-12-17', 0),
(18, 'ikonomov', 'alexis', '0787912284', 'paris', 'ikonomov@gmail.com', '75010', 'rue de la sucette', 'pingpong', 'alexis.i', 'idewav', 18.00, '0000-00-00', 2),
(20, 'Mohammed', 'mohammoud', '045124565', 'rapiere', 'moha@touriste.fr', '124578', 'rue de la sorciere', 'tennis', '123', 'oukloj', -2.00, '0000-00-00', 0),
(21, 'Granduc', 'Jean Charles', '01245657', 'Paris', 'duc@alloresto.fr', '75016', 'rue de la pompe', 'escrime', '1471', 'test', 8.00, '0000-00-00', 6),
(22, 'rapachatte', 'Patrick', '06451245', 'Marseille', 'lemarseillais@gmail.com', '041254', 'rue barbes', 'pingpong', 'test', '123456789$$$', -2.00, '2015-12-17', 0),
(23, 'todus', 'maximum', '07451254', 'Rome', 'titus@colizee.fr', '666', 'Forum RUmain', 'tennis', 'monlogin', 'monpassword', -2.00, '0000-00-00', 0),
(25, 'gilli', 'laure', '45647987', 'paris', 'gillishr@aol.fr', '75016', 'aafokapofk', 'tennis', 'izidlastreet', 'lastreetoklm', -2.00, '0000-00-00', 0),
(26, 'luong van', 'brandon', '0645410872', 'Meulun', 'bradon@wanadoo.fr', '1024', '9 rue des Nems', 'tennis', 'kola', 'azroth', -2.00, '0000-00-00', 0),
(29, 'el Matador', 'Roberto', '06241578', 'Carpiennes', 'matador@gmail.es', '102040', 'rue del pielo', 'pingpong', 'bingbing', 'zoomzoom', -2.00, '0000-00-00', 0),
(30, 'ombaga', 'Narcisse', '0621547898', 'Le Havre', 'narcisse', '45121', 'youndiou', 'pingpong', 'oklahoma', 'maklahoto', -2.00, '0000-00-00', 0),
(33, 'ouallalal', 'nissyah', '0612452315', 'Paris', 'anisbenseghir@gmail.fr', '75004', 'rue crillon', 'pingpong', 'buzubay', 'bayzubu', -2.00, '0000-00-00', 0),
(42, 'diouri', 'younes', '0787912284', 'neuilly', 'younesdiouri@gmail.com', '92200', '9 rus soyer', 'tennis', 'theboss', 'diouri', -2.00, '0000-00-00', 0),
(44, 'kjhkjh', 'klhj;kk', '0525252555', 'kjhkjhkjh', 'khlkjk', '75000', 'kjhkjh', 'tennis', 'azeaze', 'unjou', -1.00, '', 0),
(45, 'bouhad', 'samira', '0524292123', 'casa', 'sambou@hotmail.com', '45000', 'talmoulkt', 'tennis', 'samirasamira', 'samsam', -1.00, '', 0),
(46, 'yous', 'yous', '040505405', 'marrakech', 'yousyous@yousyouss.Com', '75001', 'goumbalagoubmaa amama', 'tennis', 'youss', 'youss', 0.00, '', 0),
(47, 'diouri', 'ali', '0661132210', 'casa', 'diouri@gmail.com', '45000', 'sayou casa', 'tennis', 'diouriali', 'diouri', 0.00, '', 0),
(48, 'correcteurnom', 'correcteurprenom', '0624152154', 'Marseille', 'diouriyounes@gmail.com', '92200', 'rue des petits ponts', 'tennis', 'identifiant', 'dogdogout', 4.00, '2016-06-19', 1);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `descriptif` text NOT NULL,
  `titre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `date`, `descriptif`, `titre`) VALUES
(1, '2016-03-02', 'Soiree Haloween', 'Amusement'),
(3, '', 'une lettre Ã  la poste', 'azeaze'),
(4, '12-02-2016', 'soucis Ã  la poste', 'azeaze'),
(5, '07-03-2016', 'Start up confÃ©rence', 'Event'),
(6, '15-06-2016', 'Ici le patron dee la m2L', 'Bonjour la famille');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `lundi` varchar(20) DEFAULT NULL,
  `mardi` varchar(20) DEFAULT NULL,
  `mercredi` varchar(20) DEFAULT NULL,
  `jeudi` varchar(20) DEFAULT NULL,
  `vendredi` varchar(20) DEFAULT NULL,
  `samedi` varchar(20) DEFAULT NULL,
  `dimanche` varchar(20) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `sport` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `planning`
--

INSERT INTO `planning` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `user`, `sport`) VALUES
(40, 'matin', 'matin', 'jour', 'jour', 'jour', 'jour', 'jour', 'test', 'escrime'),
(41, 'matin', 'matin', 'jour', 'jour', 'matin', 'matin', 'matin', 'elfadi', 'tennis'),
(42, '0', 'matin', 'jour', 'jour', 'soir', '0', '0', '1471', 'escrime'),
(43, 'matin', 'matin', 'matin', 'matin', 'matin', 'jour', 'matin', 'samirasamira', 'tennis'),
(44, 'matin', 'matin', 'matin', 'matin', 'matin', 'matin', 'matin', 'diouriali', 'tennis'),
(45, 'jour', 'jour', 'soir', 'jour', 'soir', 'soir', 'jour', 'younes.d', 'tennis'),
(46, '0', 'soir', 'soir', 'jour', 'soir', 'soir', 'jour', 'identifiant', 'tennis');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` text NOT NULL,
  `sport` text NOT NULL,
  `heuredebut` text NOT NULL,
  `heurefin` text NOT NULL,
  `login` varchar(20) NOT NULL,
  `id_resa` int(5) NOT NULL,
  `digicode` varchar(6) NOT NULL,
  `salle` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `sport`, `heuredebut`, `heurefin`, `login`, `id_resa`, `digicode`, `salle`) VALUES
(57, '15-01-2015', 'escrime', '14:00', '17:00', 'test', 17, '154789', 1),
(59, '15-02-2015', 'tennis', '10:00', '14:00', 'samirasamira', 45, '123456', 3),
(60, '14/06/2016', 'tennis', '15:00', '17:00', 'identifiant', 48, '154564', 4),
(62, '29/06/2016', 'escrime', '12:00', '20:00', 'alexis.i', 18, '124574', 1),
(68, '10/06/2016', 'escrime', '03:00', '07:00', '1471', 21, 'A23414', 2);

--
-- Déclencheurs `reservation`
--
DROP TRIGGER IF EXISTS `majnbres`;
DELIMITER //
CREATE TRIGGER `majnbres` AFTER INSERT ON `reservation`
 FOR EACH ROW BEGIN
	UPDATE contact 
	SET nombre_reservations = nombre_reservations + 1 
	WHERE login = NEW.login;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `idsalle` int(5) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `lieu` text NOT NULL,
  PRIMARY KEY (`idsalle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`idsalle`, `nom`, `lieu`) VALUES
(1, 'Escrime', 'RDC'),
(2, 'Escrime2', 'Etage1'),
(3, 'Tennis', 'court1'),
(4, 'Tennis2', 'court2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
