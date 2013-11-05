--
-- Base de données: `mots`
--

-- --------------------------------------------------------

--
-- Structure de la table `adjectif`
--

CREATE TABLE IF NOT EXISTS `adjectif` (
  `feminin_sg` varchar(200) NOT NULL,
  `feminin_pl` varchar(200) NOT NULL,
  `masculin_sg` varchar(200) NOT NULL,
  `masculin_pl` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adjectif`
--

INSERT INTO `adjectif` (`feminin_sg`, `feminin_pl`, `masculin_sg`, `masculin_pl`, `traduction`) VALUES
('belle', 'belles', 'beau', 'beaux', 'beautiful'),
('mignonne', 'mignonnes', 'mignon', 'mignons', 'cute'),
('intelligente', 'intelligentes', 'intelligent', 'intelligents', 'smart'),
('intelligente', 'intelligentes', 'intelligent', 'intelligents', 'smart');

-- --------------------------------------------------------

--
-- Structure de la table `adverbe`
--

CREATE TABLE IF NOT EXISTS `adverbe` (
  `adverbe` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adverbe`
--

INSERT INTO `adverbe` (`adverbe`, `traduction`) VALUES
('', ''),
('toujours', 'always');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article` varchar(200) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conjonction`
--

CREATE TABLE IF NOT EXISTS `conjonction` (
  `conjonction` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `nom`
--

CREATE TABLE IF NOT EXISTS `nom` (
  `nom` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `pluriel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `preposition`
--

CREATE TABLE IF NOT EXISTS `preposition` (
  `preposition` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pronom`
--

CREATE TABLE IF NOT EXISTS `pronom` (
  `pronom` varchar(200) NOT NULL,
  `nature` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `verbe`
--

CREATE TABLE IF NOT EXISTS `verbe` (
  `infinitif` varchar(200) NOT NULL,
  `traduction` varchar(200) NOT NULL,
  `temps` varchar(200) NOT NULL,
  `1erePers` varchar(200) NOT NULL,
  `2ePers` varchar(200) NOT NULL,
  `3ePers` varchar(200) NOT NULL,
  `4ePers` varchar(200) NOT NULL,
  `5ePers` varchar(200) NOT NULL,
  `6ePers` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
