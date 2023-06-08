-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 juin 2023 à 06:26
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mvc_lite`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `slug` varchar(40) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `alt` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `prix` varchar(80) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL,
  `acc` int(11) NOT NULL,
  `extra` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_articles_categorie_idx` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `slug`, `image`, `alt`, `description`, `prix`, `categorie_id`, `acc`, `extra`) VALUES
(110, 'Explosion', 'Vous serez débarrassé de la source de vos ennuis dans un doux fracas. Protections anti-explosifs non fournies mais spectacle et frisson garanti.', 'boum', 'image/exploosion.jpg', 'Explosion', NULL, '90000', 1, 0, 0),
(111, 'Renversement par un véhicule', 'Au cours d’une balade ou en rentrant de l’épicerie, il se pourrait bien que malencontreusement une voiture percute votre cible. L’entreprise vous assure une élimination rapide sans bavure.', 'renversement', 'image/man hitted by a car 1.jpg', 'Personne reversée par une voiture', NULL, '55000', 1, 0, 1),
(112, 'Drone tueur ', 'Envoyez un drone tueur aux trousses de votre cible. Elle pourra fuir, mais pas se cacher. En cas de difficulté avec l’élimination, l’entreprise prend en charge l’envoi d’un T-800 sur le terrain pour vous assurer une satisfaction maximale.', 'bzzzzzzz', '/image/killer drone.jpg', 'Drone menaçant au dessus de quelqu\'un', NULL, '10000', 1, 0, 1),
(113, 'Meurtre au sniper', 'L’élimination sera sans accroc, que ce soit en public ou en privé. Cette solution est préférable dans les espaces dégagés comme les parcs ou les plages, là où les objets contondants sont rares et dissimuler une arme est compliqué.', 'papapapa', '/image/sniper1.png', 'Personne qui tire avec un sniper', NULL, '7500', 1, 0, 0),
(114, 'Meurtre au couteau', 'Un assassin vous garantira de poignarder votre cible sans qu’elle s’y attende. Cette solution peut se faire dans la plus grande discrétion ou vous pouvez vous révéler au dernier moment alors que la personne agonise si vous êtes plutôt du genre sombre et dramatique.', 'karma', '/image/knife murderer 1.jpg', 'Personne qui tient un couteau', NULL, '5000', 1, 0, 0),
(115, 'Assommer', 'Votre cible se verra se faire assommer, simplement, sobrement, puis emmener le plus loin possible de vous. C’est simple, efficace, classique mais tellement classe.', 'bam', '/image/assomer 2.jpg', 'Personne qui donne un coup', NULL, '6500', 2, 0, 0),
(116, 'Siège éjectable', 'Une charge explosive placée sous le siège de votre cible la fera s’envoler au loin avant qu’elle ai pu vous bassiner encore une fois avec ses photos de vacances au Seychelles alors que vous êtes resté chez vous toute les vacances parce que non, connard, on a pas tous le temps de partir en voyage dans un trou du cul paumé pour boire du jus d’ananas avec les pieds en éventails.', 'zooooom', '/image/siege ejectable 2.jpg', 'Personne qui se fait éjecter sur un siège', NULL, '16000', 2, 0, 0),
(117, 'Remplacement par un tiers', 'Votre interlocuteur est inintéressant au possible ? Grâce à cette solution, la personne avec qui vous discutez sera remplacée par un sosie qui a une vie bien plus intéressante et palpitante que l’après-midi passé chez mamie où on a réussi à placer le mot “cacophonie” 3 fois d’affilée.', 'Remplacement', '/image/remplacement 2.jpg', 'Switch entre 2 personnes', NULL, '30000', 2, 0, 1),
(118, 'Extinction de voix subite', 'Vous pourrez enfin parler dans cette discussion à sens unique jusque là lorsque votre interlocuteur aura subitement une extinction de voix. C’est sûrement dû à la fléchette pleine de produit qu’il a reçu dans la nuque peu avant.', '\"...\"', '/image/extinction de voix 2.jpg', 'Personne qui perd la voix', NULL, '10000', 2, 0, 0),
(119, 'Empoisonnement', 'Observez votre cible s’effondrer juste après avoir commencé sa 5ème assiette au restaurant alors que vous avez déjà fini de manger depuis 30 minutes. Elle se tordra de douleur et ainsi vous pourrez enfin sortir de table après un interminable dîner.', 'malade', '/image/empoisonnemen 1.jpg', 'Personne qui est empoisonnée', NULL, '17500', 3, 0, 1),
(120, 'Tir de germes à la sarbacane', 'Faites rentrer chez lui le plus rapidement possible votre interlocuteur grâce à un tir de seringue remplie de germes qui pénètreront son système immunitaire en un rien de temps. Juste assez pour qu’il soit déplacé dans l’hôpital le plus proche.', 'sfuuu', '/image/sarbacane 2.jpg', 'Personne qui tir à la sarbacane', NULL, '25000', 3, 0, 0),
(121, 'Chaman qui donne le cancer en phase terminale', 'Appréciez le spectacle de Borris le grand chaman qui se rendra à votre rendez-vous en même temps que vous et qui effectuera une danse spirituelle esthétique afin de donner un cancer en phase terminale à votre cible. De quoi occuper 10 bonnes minutes dans votre journée. ', 'hmm', '/image/shaman 1.jpg', 'Chaman qui lance des sorts', NULL, '85000', 3, 0, 0),
(122, 'Essaim de moustiques qui donnent la dengue', 'Observez lors de votre balade un essaim de moustiques faire fuir tous les enfants bruyant qui gâchait jusque là. Avec ces moustiques porteurs de la dengue, vous pouvez être sûr qu’ils ne reviendront pas.', 'zzzzzzz', '/image/moustique 1.jpg', 'Moustique plein de sang', NULL, '3000', 3, 0, 0),
(123, 'Oiseau de chasse', 'Délectez-vous du spectacle alors qu’un oiseau de chasse vient attaquer votre cible. Qu’il en prenne de la graine. (je commence à être à court de blagues)', 'cui cui cui', '/image/faucon 2.jpg', 'Aigle qui chasse ', NULL, '15000', 4, 0, 0),
(124, 'Attaque de rat', 'Solution pour ceux qui se lassent vite. La même chose que l’oiseau de chasse mais effectué par des rats. Votre cible sera rat-tatinée. (vraiment plus beaucoup d’inspiration, aidez-moi)', 'squick', '/image/rat 2.gif', 'rat qui se lave', NULL, '15000', 4, 1, 0),
(125, 'Boîte mystère', 'Cette solution est un peu spéciale, elle siéra aux habitués de nos services qui auront de nouveau des frissons au moment de l’achat. Cette boîte mystère sélectionnera une élimination au hasard parmi tous notre catalogue pour vous garantir une surprise la prochaine fois que vous vous ennuierez avec quelqu’un.', '???', '/image/mystery 1.png', 'Boîte mystère', NULL, '60000', 4, 1, 0),
(126, 'Gang de fantômes ', 'Avec cette solution qui ne manque pas d’originalité, les forces de l’au-delà viendront hanter votre interlocuteur. Notre chaman vous assure que les fantômes n’auront pas de répit avant que votre cible n\'ait passé l’arme à gauche.', 'houuuuu', '/image/fantome.jpg', 'Fantômes qui font peur', NULL, '50000', 4, 1, 0),
(127, 'Pompier immolation', 'Un pompier viendra immoler qui vous voulez. Cette solution ne manque pas de comique, à vous de vous amuser à retourner la situation.', 'pin pon pin pon', '/image/fireman 2.jpg', 'Pompier devant un feu', NULL, '30000', 4, 0, 1),
(130, 'Kidnapping', 'Avec cette solution, votre cible sera enlevée par une équipe de professionnels qui la feront disparaître pour ensuite l’attacher dans une salle dont l’accès vous sera réservé afin de faire ce que vous en voulez.', 'aaa', '/image/kidnapping 2.jpg', 'Personne qui se fait kidnapper', NULL, '12000', 4, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'Sanglante'),
(2, 'Propre'),
(3, 'Maladies'),
(4, 'Autres'),
(5, 'Extra');

-- --------------------------------------------------------

--
-- Structure de la table `humour`
--

DROP TABLE IF EXISTS `humour`;
CREATE TABLE IF NOT EXISTS `humour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lien` varchar(100) NOT NULL,
  `alt` varchar(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `humour`
--

INSERT INTO `humour` (`id`, `lien`, `alt`, `description`) VALUES
(1, '/media/bug.jpg', 'Humour Husky Dark Mode Bugs.', 'Blague éclairée ! D\'un chien lumineux'),
(2, '/media/code.jpg', 'Humour Code Propre', 'Oui mais non en fait !'),
(3, '/media/gravity.jpg', 'Chat de Newton', 'Sapin et chat à l\'envers'),
(4, '/media/hibou.jpg', 'Humour Hibou', 'Alerte au mâle Hibou'),
(5, '/media/android.png', 'Star Trek Data', 'Picard uses Android.'),
(6, '/media/programmer.jpg', 'Image des programmeurs', 'WTF'),
(7, '/media/sort.jpg', 'Humour Sort of', 'Trier ou ne pas trier telle est la question.'),
(11, '/media/7 erreurs.jpg', '7 différences', 'Haaaa les chats'),
(13, '/media/858609f89988c16820be25a90761ec7a--les-rois-french-christmas.jpg', 'Vie chère', 'Très chère'),
(16, '/media/97067549_2938991372816388_6835948348646621184_n.jpg', 'Beep beep', 'while ou do while');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` int(50) NOT NULL,
  PRIMARY KEY (`id`,`login`),
  UNIQUE KEY `mot_de_passe` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`, `email`) VALUES
(1, 'Administrateur', '$2y$12$xy3nfj9tcKWwXNPXrJr63O15rNcX4Rf5xEVgpbFmqlh0UemAbI/H.', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_categorie` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
