-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 04 nov. 2024 à 13:41
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boite_a_vinyles_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` longtext,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artists`
--

INSERT INTO `artists` (`id`, `name`, `description`, `country_id`) VALUES
(1, 'Oasis', 'Groupe fraternel qui a puisé son inspiration dans les belles années de l’invasion britannique, Oasis a donné un nouveau souffle à la pop à guitares durant les années 90.\n- Formé en 1991, Oasis connaîtra plusieurs changements de personnel au cours de sa fulgurante carrière, le binôme des frères Gallagher (Liam au chant et Noel à la composition et aux guitares) demeurant la seule constante.\n- Lancé par Creation Records, leur premier album, Definitely Maybe (1994), devient le fer de lance du courant pop rock à guitares, baptisé britpop.\n- Durant les années 90, la presse musicale anglaise alimente la rivalité entre Oasis et le groupe Blur. En matière de popularité et de ventes, les frères Gallagher remportent la « bataille de la britpop ».\n- Le troisième projet de la formation, Be Here Now (1997), s’écoule à près de 700 000 exemplaires pendant sa première semaine en magasin. Jusqu’à la parution de 25 d’Adele, en 2015, aucun album ne s’était vendu aussi rapidement dans l’histoire de la pop britannique.\n- La rivalité entre les frères Gallagher est si intense qu’en 1996, Noel décide de partir en tournée sans Liam, estimant qu’il peut jouer et chanter lui-même les chansons qu’il a composées.', 1),
(2, 'Metallica', 'Metallica n’a pas seulement contribué à inventer le heavy metal, il a grandi avec lui. Formé en 1981 lorsqu’un adolescent « ringard et marginalisé » — selon les mots de Lars Ulrich — du comté d’Orange en Californie, a placé une petite annonce mentionnant Iron Maiden et Diamond Head, le groupe a fait ses débuts en 1983 avec Kill ’Em All et a été le pionnier de cette synthèse éblouissante de punk et de métal britannique que nous appelons aujourd’hui thrash. \nAprès s’être installé dans la Bay Area au début des années 1980 pour faire la cour au bassiste Cliff Burton, Metallica — Ulrich à la batterie, le guitariste Kirk Hammett, le guitariste-vocaliste James Hetfield, et Burton — a fait du metal une sorte de forme artistique, délaissant l’attrait glamour du hair metal pour des suites de chansons graves, progressives et complexes, qui exploraient des sujets comme le suicide, la corruption politique et l’horreur psychologique de la guerre. Burton, décédé dans un accident de bus à la fin de l’année 1986, a été remplacé par Jason Newsted et le groupe s’est retrouvé pour l’album historique de 1988, ... And Justice for All. \nMême s’il est devenu un phénomène mondial dans le sillage de son album éponyme de 1991, qui a battu tous les records, Metallica a continué de suivre sa propre voie, avec différents line-ups, s’essayant au rock sudiste (Load, 1996), aux hymnes funèbres conceptuels (Lulu, leur collaboration clivante avec Lou Reed, en 2011), au hardcore dépouillé (St. Anger, 2003) et même à des albums live avec orchestre (S&M, 1999). \nEn 2022, l’intégration de leur chanson « Master of Puppets » dans le dernier épisode de la série Stranger Things donne naissance à l’un des moments les plus iconiques de l’histoire de la télévision. Le parcours de Metallica recoupe, par essence, l’évolution du metal lui-même : un va-et-vient entre simplicité et complexité qui ne cesse de questionner notre compréhension de la vitesse et du volume sonore.', 2),
(3, 'The Doors', 'Inscrit dans l’histoire des années 60, The Doors a marqué une époque avec son rock psychédélique et ses titres emblématiques tels que \"Break On Through\" ou \"Light My Fire\".', 2),
(4, 'Muse', 'L’excentricité de Muse trouve sa parfaite illustration en 2016, alors que le groupe tente de concevoir une scène magnétique pour donner l’impression de léviter — comme des superhéros. Cette scène n’a jamais vu le jour, mais cela démontre bien là toute l’insolence de Muse. Le trio originaire de Devon, en Angleterre, a pour ambition dès le milieu des années 90 de revisiter le rock progressif des années 70 à la sauce contemporaine. Ils proposent à cette époque une musique hybride, entre Queen, l’électro et le glamour, auquel ils associent des récits sur des drones de guerre, l’oppression gouvernementale et l’idée que nous sommes tous des lignes de code dans un programme que l’on appelle réalité. Des sujets dignes de blockbusters qui contribuent alors à relancer l’intérêt autour du rock. Leur approche a bien entendu évolué au fil des années (le tournant classique sur Absolution en 2003, le hard rock sur Drones en 2015, les influences électro sur Simulation Theory en 2018), mais l’essence de leur musique est restée la même, tout en démesure. Un sens des grandeurs que le groupe a toujours su contrebalancer avec tout autant d’autodérision. En 2015, lors d’un entretien avec Apple Music, le chanteur Matt Bellamy s’est ainsi souvenu d’une nuit pendant laquelle le bassiste Christopher Wolstenholme s’est littéralement retrouvé coincé en plein concert sur une partie complexe de la scène. Bellamy déclarait alors : « On oscille constamment entre sérieux et ironie, tout en cherchant à dépasser ces deux états d’esprit ».', 1),
(5, 'Nirvana', 'Les premiers accords insolents de « Smells Like Teen Spirit » de Nirvana , sorti en 1991, n’étaient pas un simple riff de guitare – ce single était une bombe à retardement, déclenchant une explosion qui a instantanément changé le visage de la culture pop, et dont les ondes de choc se font encore sentir aujourd’hui. Le titre phare du deuxième album du trio de Seattle, Nevermind, n’a pas seulement propulsé le son grunge de la scène underground du Nord-Pacifique américain vers le mainstream, il a incité les stations de radio rock à orienter leur programmation vers l’alternatif presque du jour au lendemain, a transformé les chemises en flanelle des magasins de fripes en un accessoire de mode incontournable et a amené l’industrie musicale à écumer les scènes indépendantes d’un bout à l’autre du pays à la recherche du prochain groupe émergent. C’est un destin sur lequel peu auraient parié lorsque le groupe formé à Aberdeen, Washington, a sorti son premier album en 1989, Bleach, qui le positionnait comme le petit frère des caïds du grunge, Mudhoney. Mais au milieu de la facétie corrosive de « About a Girl » — la chanson évoquant la relation chaotique de Kurt Cobain avec sa petite amie d’alors — le chanteur-guitariste révélait une sensibilité mélodique digne de John Lennon, en contradiction avec l’orthodoxie DIY-punk de rigueur. Après que Cobain et le bassiste Krist Novoselic aient remplacé le batteur Chad Channing par la locomotive Bonham-esque Dave Grohl, le groupe est passé du label Sub Pop de Seattle à DGC. Il a alors sorti un album qui fusionnait les mélodies pop des années 60, la puissance du hard rock des années 70, le bruit du post-hardcore des années 80 et l’angoisse éternelle des adolescents, pour imposer ce qui allait devenir le son définitif des années 1990. Le succès fulgurant de Nevermind, qui a — tout un symbole — détrôné Michael Jackson de la première place du classement Billboard en janvier 1992, a fait de Cobain le genre de figures massivement influentes qui peuvent convertir des jeunes de banlieue en punks conscients des problèmes sociaux ou faire signer à des artistes obscurs (comme le petit pape de la lo-fi Daniel Johnston) de gros contrats d’enregistrement par le simple fait de porter leur t-shirt (sur la scène des MTV Awards de 1992). Mais son mariage tumultueux avec Courtney Love, la chanteuse de Hole, a aussi fait de lui une cible de choix pour les tabloïds. Cette expérience de la pression permanente irrigue tout In Utero, le successeur caustique de Nevermind, et sans doute l’album le plus brutal et le plus furieux à avoir jamais été classé Numéro 1 des charts dès sa sortie. Cependant, ce troisième album montre également l’évolution de Cobain en tant qu’auteur-compositeur sur la gracieuse « All Apologies », chanson finale de l’album en même temps que la chanson d’adieu du chanteur : en avril 1994, Cobain s’est suicidé à l’âge de 27 ans. Évidemment, une icône de cette ampleur ne meurt jamais vraiment : Nirvana continue d’influencer des artistes de rock indépendant comme Courtney Barnett et Ty Segall, tandis que les Foo Fighters de Grohl maintiennent en tête des hit-parades un rock aussi puissant que mélodieux. Mais Cobain est également devenu une personnalité marquante pour le hip-hop moderne, à la fois modèle d’intégrité pour des MCs de renom tels Kendrick Lamar et JAY-Z, et archétype de la figure tragique pour les emo-rappers nés sur SoundCloud, comme Lil Peep et Juice WRLD, qui, comme leur héros, ont fait de leur sous-culture un phénomène pop et ont quitté ce monde bien trop tôt. ', 2),
(6, 'Fleetwood Mac', 'En 50 ans de carrière, au gré des turpitudes sentimentales de ses membres, Fleetwood Mac n’a cessé de se réinventer. Le groupe de blues rock britannique des années 60 en est venu à incarner le parangon de la pop californienne des années 70, avant de devenir une référence pour les amateurs de post-punk.\n- Formé à Londres en 1967 par le batteur Mick Fleetwood et le bassiste John McVie, le groupe développe une identité musicale forte, capable d’accueillir en son sein des personnalités hors norme, à commencer par Peter Green, le petit génie de la guitare, qui inspirera les premiers tubes, comme « Black Magic Woman » (repris par Santana).\n- Après le départ de Green en 1970, le groupe connaît différentes figures dont Danny Kirwan et Bob Welch, tandis que la claviériste et épouse de McVie, Christine, devient la voix féminine du groupe en entonnant de discrets contre-chants.\n- Installé à Los Angeles, il accueille le chanteur-compositeur Lindsey Buckingham et sa partenaire, à la scène comme à la ville, Stevie Nicks : c’est le début de la grande période soft rock, dont l’album éponyme de 1975 est emblématique.\n- Le succès soudain provoque la désintégration des relations au sein du groupe, mais là encore Fleetwood Mac trouve les ressources pour se réinventer. Rumours, sorti en 1977, est un authentique album rock doux-amer, en même temps qu’une audacieuse thérapie de couple.\n- Rumours se vend à 40 millions d’exemplaires, et la célébration est unanime. L’album est par exemple cité par Courtney Love comme une de ses influences, et le candidat à l’élection présidentielle Bill Clinton l’utilise comme tube de campagne.\n- Lassés par le statut de pop-star, les membres du groupe enregistrent en 1979 un double album aux sonorités post-punk, Tusk, dont le faible succès commercial au moment de sa sortie a depuis été éclipsé par le culte que lui vouent un public averti de rock indé.\n- Tout au long des années 80, et jusqu’à aujourd’hui, Fleetwood Mac a continué sa mue perpétuelle, au gré des drames et des séparations, des départs et des retours surprises dans le giron du groupe.', 1),
(7, 'Deftones', 'Riffs hypnotiques, voix tantôt éthérées, tantôt menaçantes et expérimentations sonores : voilà les trois ingrédients qui rendent Deftones instantanément reconnaissable. ', 2),
(8, 'Rage Against The Machine', 'Pionnier du rap métal connu pour ses pièces explosives où s’entremêlent guitares endiablées et textes engagés, Rage Against the Machine a prêté sa voix à la colère d’une génération.\n- Lancé en 1992, Rage Against the Machine est encensé par la presse spécialisée, qui apprécie la verve et l’énergie du groupe. En pleine vague grunge, RATM propose à la génération X un moyen d’extérioriser son ressentiment envers les injustices et les aberrations du système.\n- Critique cinglante de la brutalité policière et du complexe militaro-industriel, le premier extrait, « Killing In the Name », devient un hymne pour les rebelles des quatre coins du monde.\n- Evil Empire (1996) se hisse rapidement au sommet des palmarès, ce qui permet au groupe d’ajouter trois certifications platine à sa collection.\n- Malgré le succès de The Battle of Los Angeles (1999), Zach de la Rocha annonce qu’il quitte la formation. De leur côté, Tom Morello, Tim Commerford et Brad Wilk fondent Audioslave avec l’ancien chanteur de Soundgarden, Chris Cornell.\n- Au fil des ans, les tensions entre les membres originaux s’estompent et RATM reprend du service en 2008 pour présenter une série de spectacles.', 2),
(9, 'Depeche Mode', 'Pionniers de l’électronique devenus titan de la pop, Depeche Mode n’est pas seulement une icône de la New Wave.\nDès ses premières années, le groupe incarne le glissement sismique qui a mis les synthétiseurs au centre de la carte pop mondiale. Lorsque le groupe britannique fait ses débuts en 1980, le punk avait fait table rase du passé, les jeunes musiciens troquaient les guitares pour l’électronique, et tout semblait possible. Depeche Mode le prouve en créant un son austère, mais envoûtant et mélodieux, fondé sur des synthétiseurs dernier cri et des beats électroniques aux lignes épurées. Leur musique s’assombrit après un premier album relativement joyeux (Speak & Spell, 1981) lorsque leur membre fondateur Vince Clarke quitte le groupe pour former Yazoo, puis Erasure. Il est remplacé par Alan Wilder, qui fait partie de Depeche Mode jusqu’en 1995, Martin Gore, Dave Gahan et Andy Fletcher restant les membres originaux de la formation.\nSous la plume de Martin Gore, des thèmes clés émergent : les plaisirs du péché et le soulagement de la rédemption, avec des incursions occasionnelles dans un genre de philosophie de dortoirs (« Blasphemous Rumours ») qui fait de Depeche Mode un des groupes préférés de plusieurs générations d’adolescents gothiques. Le titre de Music for the Masses, sorti en 1987, finit par ressembler à une prémonition : en 1988, ils rassemblent 75 000 fans pour un concert à Los Angeles — des chiffres qui, quelques années auparavant, auraient été inouïs pour un groupe de synth-pop. \nAlors que leur son reste majoritairement électronique, Gahan développe la voix lascive et la présence scénique louche d’une rock star tapageuse, tandis qu’une guitare électrique fait son apparition sur le bluesy « Personal Jesus » de 1989 — que Johnny Cash lui-même reprendra plus tard. Violator, sorti en 1990, est considéré comme le chef-d’œuvre du groupe : luxuriant, mystérieux et multidimensionnel, il associe certaines des compositions les plus convaincantes de Depeche Mode à son design sonore électronique le plus avancé. Ce disque établit la formule qu’ils ont continuée à peaufiner album après album. Ayant inspiré des artistes de la techno, du rock alternatif, de l’emo et de la pop, Depeche Mode est intronisé au Rock & Roll Hall of Fame en 2020, confirmation ultime de l’influence durable du synthétiseur sur la musique populaire.', 1),
(10, 'Liam Gallagher', 'Après avoir régné sur les années 90, Oasis explose en pleine tournée en 2009, laissant les frères Noel et Liam Gallagher avec leur amertume et leurs reproches réciproques, volontiers attisés par la presse autant que par leurs propres soins.\nFondant Beady Eye avec trois ex-Oasis, Liam (né à Manchester en 1972) livre un premier effort collectif sous la forme de Different Gear, Still Speeding en 2011, suivi par un second effort en 2013, BE, avant de se lancer sous son nom en 2017 avec As You Were, premier effort solo embrassant pleinement ses influences de jeunesse, à commencer par les travaux de John Lennon.\nDeux ans plus tard, en 2019, le mancunien revient avec Why Me? Why Not., son second recueil.', 1),
(11, 'Supertramp', 'Supertramp a débuté comme un ambitieux projet d‘art-rock qui s‘est transformé en superpuissance pop à la fin des années 1970. Formé à Londres en 1970 par Richard Davies et Roger Hodgson (compositeurs et chanteurs), Richard Palmer (guitariste-compositeur) et Robert Millar (batteur), le groupe sort la même année son premier album éponyme qui passe incognito. Palmer quitte bientôt le groupe pour devenir le parolier de King Crimson, tandis que Davies et Hodgson réunissent une nouvelle formation pour Indelibly Stamped (1971) qui connaît un destin commercial similaire. Tout change lorsque Davies et Hodgson reviennent à la formation « classique » composée du saxophoniste John Anthony Helliwell, du batteur Bob Siebenberg et du bassiste Dougie Thomson. Tout en conservant une touche arty, le groupe adopte une approche plus pop sur Crime of the Century (1974) qui perce avec les morceaux « Dreamer » et « Bloody Well Right », atteignant la quatrième place du classement des albums britanniques. Cette transition se poursuit sur les deux albums suivants, avec notamment l‘hymne acoustique « Give a Little Bit » qui fait un tabac en 1977 des deux côtés de l‘Atlantique. Mais c’est avec Breakfast In America (1979) que Supertramp devient un groupe de superstars internationales grâce à trois grands succès — le doux-amer « Take the Long Way Home », l‘accrocheur et obsédant « The Logical Song » et son morceau-titre entêtant — qui en font un blockbuster pop, véritable marqueur son époque. Après Famous Last Words en 1982, Hodgson part pour une carrière solo et ne reviendra jamais, tandis que Davies dirige le groupe jusqu‘en 1988. Le groupe se reforme (sans Hodgson) plusieurs fois au cours des deux décennies suivantes, sortant de nouveaux albums en 1997 et 2002 qui montrent le talent inentamé de Davies et ses musiciens. Mais au milieu des années 2010, les problèmes de santé de Davies semblent mettre fin au groupe dont l’héritage reste à jamais un art de la pop aussi élégant qu’irrésistible.', 1),
(12, 'Led Zeppelin', 'Il ne serait pas tout à fait vrai de dire que Led Zeppelin a inventé le heavy metal. Formé en 1968 par Jimmy Page, le guitariste des Yardbirds (à l’origine sous le nom de The New Yardbirds), le quatuor a d’abord fait partie de cette vague de groupes qui ont rendu plus fort et bruyant le son de la « British Invasion », fondé sur le blues. Cependant, aucune autre formation n’a exercé sa puissance de feu avec un sens aussi affirmé du groove et de l’emphase. Sous les doigts de Page, les riffs blues sont devenus aussi complexes que ses solos, tandis que la section rythmique de Led Zep comprenait un batteur (John Bonham) aux coups de grosse caisse explosifs et un bassiste en guise d’arme secrète (John Paul Jones), qui cimentait l’ensemble du groupe de manière industrielle. Si la puissance avait été le seul attribut de Led Zeppelin, leur place dans l’histoire du rock serait de toute façon assurée. Mais leur son tonitruant a toujours été contre-balancé par une désarmante délicatesse, comme l’illustre la lente montée du calme vers la tempête de « Stairway to Heaven », immortel succès des radios classic-rock. Bien sûr, la voix puissante et suraiguë de Robert Plant, leur « Golden God » [ainsi qu’il s’est lui-même surnommé lors d’une fête pour l’anniversaire de John Bonham en 1975, NDR] pouvait convoquer à elle seule une flotte de Vikings déchaînés (sur « Immigrant Song », en 1970). Mais son obsession pour les groupes de folk psychédélique comme The Incredible String Band a été le creuset de tendres sérénades acoustiques. Plant a d’ailleurs vite remplacé les blues sur les filles infidèles par des contes merveilleux à la Tolkien, annonciateurs de la fascination du metal pour la mythologie médiévale. Par ailleurs, Page n’était pas seulement une redoutable machine à riffs, c’était aussi un producteur visionnaire qui a redéfini l’album de rock comme une épopée guerrière sur grand écran. On peut entendre cette sensibilité cinématographique dans le break central déconcertant de « Whole Lotta Love » (le boogie blues rock le plus avant-gardiste de l’an 1969) et atteindre son apogée sur « Kashmir » en 1975, une odyssée épique inspirée par l’Orient où l’arrangement lugubre de Jones au Mellotron s’avère plus puissant que n’importe quel rock à guitares de leur répertoire. Led Zeppelin semble entrer dans une nouvelle phase fascinante avec In Through the Out Door (1979), traversé de synthétiseurs, avant que la mort prématurée de Bonham, un an plus tard, ne mette fin au groupe. Mais, dans les gémissements des hair-bands des années 1980, le rap metal militant de Rage Against the Machine, le blues meurtri de The White Stripes ou l’arrogance de Greta Van Fleet au XXIe siècle, les répliques du canon sismique de Led Zeppelin n’ont jamais cessé de résonner.', 1),
(13, 'Pearl Jam', 'Devenu l’un des groupes phares du grunge en ayant contribué à populariser le genre à travers le monde, Pearl Jam et son leader Eddie Vedder chantent des sujets graves, parfois politiques.\n• En 1990, le guitariste Stone Gossard et le bassiste Jeff Ament de Seattle (anciennement de Mother Love Bone) invitent le chanteur Eddie Vedder, installé à San Diego, à se joindre à eux dans le groupe Mookie Blaylock.\n• Ils se renomment rapidement Pearl Jam, et pendant longtemps, la rumeur court que le nom fait référence à l’arrière-grand-mère de Vedder, Pearl, et à sa fameuse confiture au peyotl. Il semble plutôt qu’Ament ait proposé le mot « pearl » [« perle »] et que « jam » [« séance d’improvisation »] renvoie à la façon qu’avait Neil Young de jouer de longs morceaux dans ses spectacles.\n• L’album Ten (1991) connaît un succès phénoménal dès sa sortie. Il sera certifié 13 fois platine aux États-Unis et restera dans le Billboard 200 durant près de cinq ans.\n• Le groupe est réputé pour avoir popularisé le grunge, qui se reconnaît dans leur son dur autant que dans leur attitude critique envers l’industrie de la musique.\n• Tout au long de sa carrière, la formation prend position sur des sujets sociopolitiques, se déclarant en faveur de l’avortement ou contre la présidence de George W. Bush.', 2),
(14, 'Eagles', 'Originaires de Californie, les Eagles sont un groupe de country rock qui a pris d’assaut les États-Unis dans les années 1970 avant de conquérir le monde avec ses chansons aériennes et populaires.\n- Le guitariste Glenn Frey décide de monter un groupe avec le batteur et chanteur Don Henley en 1971. Ils recrutent alors le bassiste Randy Meisner et Bernie Leadon, qui a façonné le country rock primitif du groupe.\n- Les Eagles connaissent d’emblée un grand succès avec leur premier album éponyme qui voit le jour en 1972, grâce aux titres « Take it easy » et « Witchy women ».\n- Lorsque le guitariste Don Felder rejoint les Eagles sur l’album On the Border, leur soft rock se durcit et s’empare de l’actualité politique alors inquiétante.\n- Avec l’arrivée du guitariste sulfureux Joe Walsh, les Eagles continuent de chanter le côté sombre du rêve américain avec Hotel America, qui signe l’apogée du groupe en 1976. \n- La sortie de leur première compilation Their Greatest Hits (1971-1975) marque un record historique en devenant l’album américain le plus vendu du XXe siècle.\n- Toujours célébrés aux quatre coins du monde malgré leur longue absence, les Eagles dévoilent un ultime album intitulé Long Road Out of Eden en 2007.\n- La mort de Glenn Frey en 2016 entraîne la fin d’une ère pour le groupe, qui a pourtant réussi à ancrer ses classiques dans la culture populaire.', 2),
(15, 'Red Hot Chili Peppers', 'Le rock alternatif des Red Hot Chili Peppers est gorgé du soleil de leur Californie natale, et plus précisément de Los Angeles.\n- Le groupe se forme en 1983 avec Anthony Kiedis, Michael Balzary, Hillel Slovak et Jack Irons. \n- John Frusciante les rejoint à la guitare en 1988. \n- Avec Blood Sugar Sex Majik, certifié multi-disque de platine, RHCP se taille dès 1991 une place de choix dans la scène alternative émergente. \n- Huit ans plus tard, l’album Californication, prouve la prise en maturité du groupe dont les membres tournent le dos à leurs différentes addictions. \n- Suivent By the Way en 2002, puis Stadium Arcadium en 2006, I’m With You en 2011, The Getaway en 2016 et Unlimited Love en 2022.', 2),
(16, 'Guns N’ Roses', 'Les altercations publiques, les pétages de plomb et la décadence scandaleuse participent à la légende à la fois clivante et captivante des Guns N‘ Roses. Si les fans de rock ont passionnément adopté la fusion de hard rock, de heavy metal et de punk produite par le groupe sur son premier album, Appetite for Destruction (1987), c’est sans doute parce qu‘elle dégageait cette atmosphère grinçante et dangereuse, à des années-lumière des groupes de garçons-coiffeurs de l‘époque. Ainsi, « Welcome to the Jungle » est peut-être un fantastique modèle pour des performances d’air-guitar, mais c‘est surtout une expédition enragée dans les ruelles miteuses du rêve américain. Même « Sweet Child O‘ Mine », qui commence comme une exaltante ballade, se noie finalement dans les affres du doute de son chanteur Axl Rose. La célébrité tumultueuse du groupe n‘a cependant pas entamé son ambition. Alors que le guitariste iconique Slash continue de balancer ses riffs à la Rolling Stones sur les albums Use Your Illusion I et II (1991), les pierres angulaires de ces albums sont des psychodrames épiques, comme « November Rain », qui reflètent l‘amour de Rose pour l’opulence extravertie d’un groupe comme Queen. Les fans doivent ensuite attendre 17 ans pour que Rose, qui a repris le projet en solo et qui s‘est résolument tourné vers le rock industriel, leur offre de nouveaux morceaux originaux avec Chinese Democracy (2008). Ils sont alors nombreux à avoir abandonné tout espoir de reformation des Guns N‘ Roses, jusqu‘à ce qu‘en 2016, Slash et le bassiste Duff McKagan les stupéfient en annonçant leur retour dans le groupe. Têtes d‘affiche du festival Coachella, les Guns N’ Roses se lancent ensuite dans une tournée mondiale à guichets fermés, prouvant une fois de plus leur popularité sur fond de controverses.', 2),
(17, 'Ben Harper', 'Né en Californie en 1969, Ben Harper est un artiste multi-instrumentiste plusieurs fois récompensé aux GRAMMY Awards. Intégrant la fièvre du blues aux vibrations du reggae, Harper a développé un son unique. Le monde découvre son melting-pot musical avec son premier album, Welcome to the Cruel World, en 1994. Il forme le groupe The Innocent Criminals qui l‘accompagne sur la plupart de ses albums. À plusieurs reprises, il travaillera sur des disques en collaboration avec des légendes comme Les Blind Boys of Alabama et Charlie Musselwhite. Il est vu comme l‘un des meilleurs guitaristes de sa génération. ', 2),
(18, 'Nick Carr', 'Chanteur et ingénieur du son. Il fut l’interprète des génériques de Pole Position, Jayce et les Conquérants de la Lumière, MASK et COPS.', 3),
(19, 'Franck Olivier', 'Claude Vangansbeck dit Franck Olivier est un auteur-compositeur-interprète. Il interprète le générique de la série télévisée Albator 84 ainsi que celui d‘Astro, le petit robot en 1985.', 3),
(20, 'Various Artists', 'Collectif multi-interprètes', 2),
(22, 'Test artiste', 'test insertion nouvel artiste', 1),
(23, 'Michel', 'yeuzyuifkkdfsfdfd', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Live/OST'),
(4, 'Metal/Grunge'),
(5, 'Pépites');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `comment_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vinyl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `comment_date`, `status`, `user_id`, `vinyl_id`) VALUES
(1, 'Pellentesque ultrices mattis odio. Donec vitae nisi.', '2024-04-21 00:00:00', 0, 8, 9),
(2, 'Aenean lectus. Pellentesque eget nunc.', '2023-07-14 00:00:00', 0, 10, 18),
(3, 'Praesent blandit lacinia erat.', '2024-02-22 00:00:00', 0, 15, 8),
(4, 'Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', '2023-11-25 00:00:00', 0, 3, 11),
(5, 'In hac habitasse platea dictumst.', '2024-05-12 00:00:00', 0, 1, 25),
(6, 'In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '2023-08-31 00:00:00', 0, 12, 27),
(7, 'Suspendisse potenti.', '2024-02-06 00:00:00', 0, 12, 26),
(8, 'In hac habitasse platea dictumst.', '2024-05-19 00:00:00', 0, 7, 14),
(9, 'In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '2024-05-18 00:00:00', 1, 5, 18),
(10, 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque.', '2023-07-24 00:00:00', 0, 12, 2),
(11, 'Donec ut dolor.', '2023-07-08 00:00:00', 1, 13, 15),
(12, 'Vivamus vestibulum sagittis sapien.', '2024-04-25 00:00:00', 1, 3, 8),
(13, 'In quis justo. Maecenas rhoncus aliquam lacus.', '2023-05-29 00:00:00', 0, 10, 26),
(14, 'Morbi porttitor lorem id ligula.', '2023-10-22 00:00:00', 1, 13, 12),
(15, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', '2024-02-23 00:00:00', 1, 7, 25),
(16, 'Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', '2023-06-28 00:00:00', 0, 3, 27),
(17, 'Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', '2023-12-27 00:00:00', 1, 14, 21),
(18, 'Etiam justo. Etiam pretium iaculis justo.', '2024-04-17 00:00:00', 0, 4, 8),
(19, 'Vestibulum ac est lacinia nisi venenatis tristique.', '2023-09-25 00:00:00', 1, 12, 13),
(20, 'Suspendisse potenti.', '2023-09-17 00:00:00', 1, 4, 4),
(21, 'Vivamus vestibulum sagittis sapien.', '2023-12-25 00:00:00', 1, 5, 22),
(23, 'Praesent blandit lacinia erat.', '2024-03-13 00:00:00', 1, 5, 26),
(24, 'In est risus, auctor sed, tristique in, tempus sit amet, sem.', '2024-04-02 00:00:00', 1, 15, 20),
(25, 'Phasellus id sapien in sapien iaculis congue.', '2024-05-10 00:00:00', 1, 7, 2),
(26, 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat.', '2024-02-25 00:00:00', 0, 5, 2),
(27, 'Nulla nisl. Nunc nisl.', '2023-09-15 00:00:00', 0, 15, 13),
(28, 'Proin eu mi. Nulla ac enim.', '2024-04-12 00:00:00', 0, 7, 21),
(29, 'Nulla ut erat id mauris vulputate elementum. Nullam varius.', '2024-04-22 00:00:00', 0, 8, 19),
(30, 'Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '2024-01-07 00:00:00', 1, 14, 13),
(32, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', '2024-03-15 00:00:00', 0, 13, 28),
(33, 'Duis mattis egestas metus.', '2024-02-16 00:00:00', 0, 5, 9),
(34, 'Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus. Suspendisse potenti.', '2023-07-14 00:00:00', 0, 13, 18),
(35, 'Phasellus in felis. Donec semper sapien a libero.', '2023-08-24 00:00:00', 1, 2, 22),
(36, 'Sed vel enim sit amet nunc viverra dapibus.', '2023-07-04 00:00:00', 0, 11, 13),
(37, 'Pellentesque at nulla. Suspendisse potenti.', '2024-03-17 00:00:00', 1, 1, 3),
(38, 'Nullam varius.', '2023-12-14 00:00:00', 1, 10, 26),
(39, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', '2023-07-23 00:00:00', 1, 15, 27),
(40, 'Integer tincidunt ante vel ipsum.', '2024-01-15 00:00:00', 0, 14, 13),
(41, 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue.', '2023-12-15 00:00:00', 0, 12, 18),
(42, 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus.', '2023-12-09 00:00:00', 0, 1, 3),
(43, 'Donec dapibus.', '2024-05-07 00:00:00', 1, 11, 17),
(44, 'Nam dui.', '2023-06-21 00:00:00', 0, 2, 1),
(45, 'Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '2023-09-16 00:00:00', 0, 7, 23),
(46, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '2024-01-07 00:00:00', 1, 3, 18),
(47, 'Proin interdum mauris non ligula pellentesque ultrices.', '2024-04-03 00:00:00', 0, 2, 19),
(48, 'Duis at velit eu est congue elementum.', '2024-02-16 00:00:00', 1, 8, 21),
(49, 'Aliquam non mauris.', '2023-10-22 00:00:00', 1, 1, 19),
(50, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '2023-09-22 00:00:00', 1, 4, 15),
(52, 'test', '2024-05-08 00:00:00', 1, 4, 8),
(61, 'nouveau test', '2024-05-28 22:31:26', 0, 4, 8),
(62, 'dtfyuyuijokoko', '2024-05-28 22:34:03', 1, 4, 21),
(63, 'au top', '2024-05-31 09:39:25', 1, 2, 27),
(64, 'encore un test', '2024-06-07 10:56:55', 1, 7, 8),
(65, 'génial !!!', '2024-06-10 20:29:33', 1, 6, 17),
(66, 'genial!!!', '2024-06-18 23:47:01', 1, 32, 2),
(68, 'gfgfgfffdgf', '2024-06-19 14:07:11', 1, 3, 7),
(69, 'au top !!!', '2024-06-19 22:07:04', 0, 3, 16),
(70, 'au top !!!!', '2024-06-30 13:22:58', 1, 39, 8),
(72, 'au top !!!!', '2024-07-01 13:24:44', 1, 31, 12);

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Royaume-Uni'),
(2, 'USA'),
(3, 'France');

-- --------------------------------------------------------

--
-- Structure de la table `tracklists`
--

CREATE TABLE `tracklists` (
  `id` int(11) NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `vinyl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tracklists`
--

INSERT INTO `tracklists` (`id`, `title`, `vinyl_id`) VALUES
(1, 'Smells Like Teen Spirit', 1),
(2, 'In Bloom', 1),
(3, 'Come as You Are', 1),
(4, 'Breed', 1),
(5, 'Lithium', 1),
(6, 'Polly', 1),
(7, 'Territorial Pissings', 1),
(8, 'Drain You', 1),
(9, 'Lounge Act', 1),
(10, 'Stay Away', 1),
(11, 'On a Plain', 1),
(12, 'Something in the Way', 1),
(13, 'You Know You‘re Right', 2),
(14, 'About a Girl', 2),
(15, 'Been a Son', 2),
(16, 'Sliver', 2),
(17, 'Smells Like Teen Spirit', 2),
(18, 'Come as You Are', 2),
(19, 'Lithium', 2),
(20, 'In Bloom', 2),
(21, 'Heart-Shaped Box', 2),
(22, 'Pennyroyal Tea', 2),
(23, 'Rape Me', 2),
(24, 'Dumb', 2),
(25, 'All Apologies', 2),
(26, 'The Man Who Sold the World', 2),
(27, 'Feiticeira', 3),
(28, 'Digital Bath', 3),
(29, 'Elite', 3),
(30, 'RX Queen', 3),
(31, 'Street Carp', 3),
(32, 'Teenager', 3),
(33, 'Knife Party', 3),
(34, 'Korea', 3),
(35, 'Passenger', 3),
(36, 'Change', 3),
(37, 'Pink Maggit', 3),
(38, 'Once', 4),
(39, 'Even Flow', 4),
(40, 'Alive', 4),
(41, 'Why Go', 4),
(42, 'Black', 4),
(43, 'Jeremy', 4),
(44, 'Oceans', 4),
(45, 'Porch', 4),
(46, 'Garden', 4),
(47, 'Deep', 4),
(48, 'Release', 4),
(49, 'Bombtrack', 5),
(50, 'Killing in the Name', 5),
(51, 'Take the Power Back', 5),
(52, 'Settle for Nothing', 5),
(53, 'Bullet in the Head', 5),
(54, 'Know Your Enemy', 5),
(55, 'Wake Up', 5),
(56, 'Fistfull of Steel', 5),
(57, 'Township Rebellion', 5),
(58, 'Freedom', 5),
(59, 'Under the Bridge', 6),
(60, 'Give It Away', 6),
(61, 'Californication', 6),
(62, 'Scar Tissue', 6),
(63, 'Soul to Squeeze', 6),
(64, 'Otherside', 6),
(65, 'Suck My Kiss', 6),
(66, 'By the Way', 6),
(67, 'Parallel Universe', 6),
(68, 'Breaking the Girl', 6),
(69, 'My Friends', 6),
(70, 'Higher Ground', 6),
(71, 'Universally Speaking', 6),
(72, 'Road Trippin‘', 6),
(73, 'Fortune Faded', 6),
(74, 'Save the Population', 6),
(75, 'Gone Hollywood', 7),
(76, 'The Logical Song', 7),
(77, 'Goodbye Stranger', 7),
(78, 'Breakfast in America', 7),
(79, 'Oh Darling', 7),
(80, 'Take the Long Way Home', 7),
(81, 'Lord Is It Mine', 7),
(82, 'Just Another Nervous Wreck', 7),
(83, 'Casual Conversations', 7),
(84, 'Child of Vision', 7),
(85, 'Welcome to the Jungle', 8),
(86, 'Sweet Child O‘Mine', 8),
(87, 'Shadow of Your Love', 8),
(88, 'Patience', 8),
(89, 'Paradise City', 8),
(90, 'Knockin‘ on Heaven‘s Door', 8),
(91, 'Civil War', 8),
(92, 'You Could Be Mine', 8),
(93, 'Don‘t Cry', 8),
(94, 'Novembre Rain', 8),
(95, 'Live and Let Die', 8),
(96, 'Yesterdays', 8),
(97, 'Ain‘t It Fun', 8),
(98, 'Since I Don‘t Have You', 8),
(99, 'Sympathy for the Devil', 8),
(100, 'Break on Through', 9),
(101, 'Soul Kitchen', 9),
(102, 'The Crystal Ship', 9),
(103, 'Twentieth Century Fox', 9),
(104, 'Alabama Song', 9),
(105, 'Light My Fire', 9),
(106, 'Back Door Man', 9),
(107, 'I Looked at You', 9),
(108, 'End of the Night', 9),
(109, 'Take it as it Comes', 9),
(110, 'The End', 9),
(111, 'Whole Lotta Love', 10),
(112, 'What is and What Should Never Be', 10),
(113, 'The Lemon Song', 10),
(114, 'Thank You', 10),
(115, 'Heartbreaker', 10),
(116, 'Livin‘ Lovin‘ Maid', 10),
(117, 'Ramble On', 10),
(118, 'Moby Dick', 10),
(119, 'Bring it on Home', 10),
(120, 'Black Dog', 11),
(121, 'Rock and Roll', 11),
(122, 'The Battle of Evermore', 11),
(123, 'Stairway to Heaven', 11),
(124, 'Misty Mountain Hop', 11),
(125, 'Four Sticks', 11),
(126, 'Going to California', 11),
(127, 'When the Levee Breaks', 11),
(128, 'Rock‘n‘Roll Star', 12),
(129, 'Shakermaker', 12),
(130, 'Live Forever', 12),
(131, 'Up in the Sky', 12),
(132, 'Columbia', 12),
(133, 'Sad Song', 12),
(134, 'Supersonic', 12),
(135, 'Bring it on Down', 12),
(136, 'Cigarettes and Alcohol', 12),
(137, 'Digsy‘s Dinner', 12),
(138, 'Slide Away', 12),
(139, 'Married With Children', 12),
(140, 'Hello', 13),
(141, 'Roll With It', 13),
(142, 'Wonderwall', 13),
(143, 'Don‘t Look Back in Anger', 13),
(144, 'Hey Now !', 13),
(145, 'sans titre (extrait 1 de The Swamp Song', 13),
(146, 'Bonehead‘s Bank Holiday', 13),
(147, 'Some Might Say', 13),
(148, 'Cast No Shadow', 13),
(149, 'She‘s Electric', 13),
(150, 'Morning Glory', 13),
(151, 'sans titre (extrait 2 de The Swamp Song', 13),
(152, 'Champagne Supernova', 13),
(153, 'Intro', 14),
(154, 'Apocalypse Please', 14),
(155, 'Time is Running Out', 14),
(156, 'Sing for Absolution', 14),
(157, 'Stockholm Syndrome', 14),
(158, 'Falling Away with You', 14),
(159, 'Interlude', 14),
(160, 'Hysteria', 14),
(161, 'Blackout', 14),
(162, 'Butterflies and Hurricanes', 14),
(163, 'Endlessly', 14),
(164, 'Thoughts of a Dying Atheist', 14),
(165, 'Ruled by Secrecy', 14),
(166, 'People are People', 15),
(167, 'Master and Servant', 15),
(168, 'It‘s Called a Heart', 15),
(169, 'Just Can‘t Get Enough', 15),
(170, 'See You', 15),
(171, 'Shake the Disease', 15),
(172, 'Everything Counts', 15),
(173, 'New Life', 15),
(174, 'Blasphemous Rumours', 15),
(175, 'Leave in Silence', 15),
(176, 'Get The Balance Right', 15),
(177, 'Love in Itself', 15),
(178, 'Dreaming of Me', 15),
(179, 'Hotel California', 16),
(180, 'New Kid in Town', 16),
(181, 'Life in the Fast Lane', 16),
(182, 'Wasted Time', 16),
(183, 'Wasted Time (reprise)', 16),
(184, 'Victim of Love', 16),
(185, 'Pretty Maids All in a Row', 16),
(186, 'Try and Love Again', 16),
(187, 'The Last Resort', 16),
(188, 'Second Hand News', 17),
(189, 'Dreams', 17),
(190, 'Never Going Back Again', 17),
(191, 'Don‘t Stop', 17),
(192, 'Go Your Own Way', 17),
(193, 'Songbird', 17),
(194, 'The Chain', 17),
(195, 'You Make Loving Fun', 17),
(196, 'I Don‘t Want to Know', 17),
(197, 'Oh Daddy', 17),
(198, 'Gold Dust Woman', 17),
(199, 'The Ectasy of Gold', 18),
(200, 'The Call of Ktulu', 18),
(201, 'Master of Puppets', 18),
(202, 'Of Wolf and Man', 18),
(203, 'The Thing That Should Not Be', 18),
(204, 'Fuel', 18),
(205, 'The Memory Remains', 18),
(206, 'No Leaf Clover', 18),
(207, 'Hero of the Day', 18),
(208, 'Devil‘s Dance', 18),
(209, 'Bleeding Me', 18),
(210, 'Nothing Else Matters', 18),
(211, 'Until it Sleeps', 18),
(212, 'For Whom The Bell Tolls', 18),
(213, 'Human', 18),
(214, 'Wherever I May Roam', 18),
(215, 'The Outlaw Torn', 18),
(216, 'Sad but True', 18),
(217, 'One', 18),
(218, 'Enter Sandman', 18),
(219, 'Battery', 18),
(220, 'The Ectasy of Gold', 19),
(221, 'The Call of Ktulu', 19),
(222, 'For Whom The Bell Tolls', 19),
(223, 'The Day That Never Comes', 19),
(224, 'The Memory Remains', 19),
(225, 'Confusion', 19),
(226, 'Moth into Flame', 19),
(227, 'The Outlaw Torn', 19),
(228, 'No Leaf Clover', 19),
(229, 'Halo on Fire', 19),
(230, 'Intro to Scythian Suite', 19),
(231, 'Scythian Suite, Opus 20 II: The Enemy God and the Dance of the Dark Spirits', 19),
(232, 'Intro to the Iron Foundry', 19),
(233, 'The Unforgiven III', 19),
(234, 'All Within My Hands', 19),
(235, 'Anesthesia - Pulling Teeth', 19),
(236, 'Wherever I May Roam', 19),
(237, 'One', 19),
(238, 'Master of Puppets', 19),
(239, 'Nothing Else Matters', 19),
(240, 'Enter Sandman', 19),
(241, 'Wall of Glass', 20),
(242, 'Bold', 20),
(243, 'Greedy Soul', 20),
(244, 'Paper Crown', 20),
(245, 'For What It‘s Worth', 20),
(246, 'When I‘m in Need', 20),
(247, 'You Better Run', 20),
(248, 'I Get By', 20),
(249, 'Chinatown', 20),
(250, 'Come Back To Me', 20),
(251, 'Universal Gleam', 20),
(252, 'I‘ve All I Need', 20),
(253, 'Shockwave', 21),
(254, 'One of Us', 21),
(255, 'Now That I‘ve Found You', 21),
(256, 'Halo', 21),
(257, 'Why me? Why not.', 21),
(258, 'Be Still', 21),
(259, 'Alright Now', 21),
(260, 'Meadow', 21),
(261, 'The River', 21),
(262, 'Gone', 21),
(263, 'More Power', 22),
(264, 'Diamond in the Dark', 22),
(265, 'Don‘t Go Halfway', 22),
(266, 'C‘mon You Know', 22),
(267, 'Too Good for Giving Up', 22),
(268, 'It Was Not Meant To Be', 22),
(269, 'Everything‘s Electric', 22),
(270, 'World‘s in Need', 22),
(271, 'Moscow Rules', 22),
(272, 'I‘m Free', 22),
(273, 'Better Days', 22),
(274, 'Oh Sweet Children', 22),
(275, 'Wall of Glass', 23),
(276, 'Some Might Say', 23),
(277, 'Now That I‘ve Found You', 23),
(278, 'One of Us', 23),
(279, 'Stand By Me', 23),
(280, 'Sad Song', 23),
(281, 'Cast no Shadow', 23),
(282, 'Once', 23),
(283, 'Gone', 23),
(284, 'Champagne Supernova', 23),
(285, 'Hooked on a Feeling', 24),
(286, 'Go All The Way', 24),
(287, 'Spirit in the Sky', 24),
(288, 'Moonage Daydream', 24),
(289, 'Fooled Around and Fell in Love', 24),
(290, 'I Want You Back', 24),
(291, 'I‘m Not in Love', 24),
(292, 'Come and Get Your Love', 24),
(293, 'Cherry Bomb', 24),
(294, 'Escape', 24),
(295, 'O-O-H Child', 24),
(296, 'Ain‘t no Mountain High Enough', 24),
(297, 'Mr. Blue Sky', 25),
(298, 'Fox on the Run', 25),
(299, 'Lake Shore Drive', 25),
(300, 'The Chain', 25),
(301, 'Bring it on Home to Me', 25),
(302, 'Southern Nights', 25),
(303, 'My Sweet Lord', 25),
(304, 'Brandy', 25),
(305, 'Come a Little Bit Closer', 25),
(306, 'Wham Bam Shang-A-Lang', 25),
(307, 'Surrender', 25),
(308, 'Father and Son', 25),
(309, 'Flash Light', 25),
(310, 'Guardians Inferno', 25),
(311, 'Burning Heart', 26),
(312, 'Heart‘s on Fire', 26),
(313, 'Double or Nothing', 26),
(314, 'Eye of the Tiger', 26),
(315, 'War', 26),
(316, 'Living in America', 26),
(317, 'No Easy Way Out', 26),
(318, 'One Way Street', 26),
(319, 'The Sweetest Victory', 26),
(320, 'Training Montage', 26),
(321, 'Chanson Originale - Générique', 27),
(322, 'Instrumental - Générique', 27),
(323, 'Chanson Originale - Générique', 28),
(324, 'Instrumental - Générique', 28),
(325, 'The Changeling', 32),
(326, 'With My Own Two Hands', 35),
(327, 'Good Times Bad Times', 33),
(328, 'D&#039;You Know What i Mean ?', 34),
(329, 'Acquiesce', 36),
(330, 'Fuckin&#039; in the Bushes', 37);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(70) NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `lastname`, `firstname`, `username`, `email`, `password`, `role`, `status`) VALUES
(1, 'Farrell', 'Verlie', 'annie11', 'dbode@hotmail.com', '$2y$10$cS2nAOPB5S0VrETeVVXR.OSpHQMx6hQiMx7D9q98FVtfw9oQAlFOe', 'USER', 0),
(2, 'Stokes', 'Lazaro', 'lritchie', 'francesco.greenholt@hotmail.com', '$2y$10$MtH7ccU5jQA96vyMvoBVeuY3qzIdhcPt3n1e1iFqiJlQ97FirfA4m', 'USER', 1),
(3, 'Raynor', 'Duncan', 'lschulist', 'einar72@marks.info', '$2y$10$V8NM24V5rIVSvB2zNCdFmOjOEV1dlFOVB.CN6qme1suV6dBiJjRrW', 'USER', 1),
(4, 'Wiegand', 'Eleanora', 'kozey.emanuel', 'rkutch@yahoo.com', '$2y$10$BC0osgPIvYe6JKr0B6qnsefHZPBD4vf2mA73n0He6QoZNeSWQmNKm', 'USER', 1),
(5, 'Tromp', 'Ashly', 'jast.kraig', 'annabell.stoltenberg@koss.com', '$2y$10$kQiz.l/R0PQL2t4Ey/v7pOYym1OUiMSY1RFNUN3vQ0TvNAPLbINJ.', 'USER', 1),
(6, 'Labadie', 'Jakayla', 'dora37', 'zthompson@lindgren.com', '$2y$10$3gkhHchjs2httDM.4wTIueAyDSocvf.R9nWLNak25GijTn/TNyG3i', 'USER', 1),
(7, 'Daugherty', 'Bradly', 'szboncak', 'xavier31@ohara.info', '$2y$10$x9Q3oj0jFnzXjYrwIMSFOuan/XtvpiSodA5aUFrBuG5njDpUmg8XG', 'USER', 0),
(8, 'Kuhlman', 'Barney', 'runte.drake', 'kshlerin.llewellyn@yahoo.com', '$2y$10$ASZF2FwcHGp7Dsc4Y08m0Owxl2.3nvTapLGVbaKaKqTP45hc/XdzG', 'USER', 1),
(9, 'Greenfelder', 'Emelie', 'mclaughlin.kristofer', 'jakubowski.alfredo@leannon.com', '$2y$10$NyrQZnvCpuh660HNwLaNIO84SCGz3jFp.DJXHJtyCVHlZC2jB.ZIa', 'USER', 1),
(10, 'Rohan', 'Myrna', 'morissette.ethelyn', 'astiedemann@gmail.com', '$2y$10$/ZIkXMTt2WJmED.UZgwQ2.k0Qvk27LH2bHhBLq1e1uJ5PXcHvBPIa', 'USER', 1),
(11, 'Koss', 'Dominic', 'enola22', 'yjohns@gmail.com', '$2y$10$nPvuL3jSvY8sACftSNV2uu4VnfWpUzdZ45QODKi20rMO5Bfjy1TW6', 'USER', 0),
(12, 'Conn', 'Catalina', 'kamron.bogan', 'nayeli47@funk.info', '$2y$10$0QGJFyaOBHJxUllEbIo9/ui5Too2g/c41SucIkX11zYJr3ACmiWJu', 'USER', 0),
(13, 'Mueller', 'Leone', 'tressa.gibson', 'jabari.douglas@stamm.info', '$2y$10$izpc1rCWtLEjoNXZ28sqROdTuRU0jEMPdL9vk9PkMBBFjBgACBEoW', 'USER', 0),
(14, 'Leannon', 'Leonard', 'hiram34', 'uwuckert@hotmail.com', '$2y$10$.D154w4a8qdV4jmWOjcGTO2bCW3OUO4.OvN2/4E4jQF0L3CgU0IbW', 'USER', 1),
(15, 'Spinka', 'Griffin', 'hudson.waldo', 'nella69@gmail.com', '$2y$10$Y9jRg8BlmzHc2WFkEZ3oQ.4upvU5JqqnDyRhNF3Ugu57NX21xHSb6', 'USER', 1),
(16, 'Kohler', 'Agustina', 'raven86', 'misael15@gmail.com', '$2y$10$2YesNdKHq9zOloSVI8mQIuHcFL1GlfDWaPV6WQnZUJJSNR7bO97HK', 'USER', 1),
(17, 'Lemke', 'Frances', 'idurgan', 'zeffertz@lind.com', '$2y$10$/mSx0ilQ65KQkkV1PWTJZuPbPAhWR3DM4IkTSB6FNrvJd6j.DyYAS', 'USER', 1),
(18, 'Dickens', 'Liliana', 'daugherty.rene', 'mnienow@orn.com', '$2y$10$fXAQG8BVOK283mVOorj3Eu2zUwtZlSoUwVpzUnMi7G97xBLIa3ZDW', 'USER', 0),
(19, 'Streich', 'Arielle', 'pmclaughlin', 'bfeeney@hotmail.com', '$2y$10$cUbXylHC01vaSs//7r18fOzFWS5rydxsjR0BZvMZFmub34pBXJ696', 'USER', 1),
(30, 'Gallagher', 'Liam', 'Liam00', 'admin@admin.fr', '$2y$10$QK5NMzbJ6yJaIAp7YKgqhO.51k4pw13KJEwqAbsW10kyT.Pcu4E.W', 'ADMINISTRATEUR', 1),
(31, 'Cobain', 'Kurt', 'Kurt27', 'kurt01@test.fr', '$2y$10$Z/1uM09Bzuol5RRL9m5cmudIvtecFwhQBQ.nigUhrxa6ubRIEnMqm', 'USER', 1),
(32, 'Morrisson', 'Jim', 'Jim02', 'jim02@test.fr', '$2y$10$mwuRPeKMAbZhL64gev3aLulnvdl274d8bkZIw5Z4bas9Zl1EY6S9S', 'USER', 0),
(39, 'Talbot', 'Jerome', 'Jerome27', 'jerome@jeh.fr', '$2y$10$XcjojCxaxB.UspB0OlpDVewJGoydFrsV1GoKOYF1Nvn5Zlpa5.IOu', 'USER', 1),
(40, 'Jerome', 'jerome', 'jerome55', 'jerome44@test.fr', '$2y$10$y8mOIG9sky.1NhSgASxwSurpVXkQQqdwLiNF.vuD7yVIWxKS2k9xy', 'USER', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vinyls`
--

CREATE TABLE `vinyls` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `preview` varchar(50) DEFAULT NULL,
  `alt` varchar(100) DEFAULT NULL,
  `description` longtext,
  `release_date` year(4) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vinyls`
--

INSERT INTO `vinyls` (`id`, `name`, `preview`, `alt`, `description`, `release_date`, `artist_id`, `category_id`, `likes`) VALUES
(1, 'Nevermind', '236ac9c79aeaaf4a2cd4385366897c5b.webp', 'pochette album Nevermind - Nirvana', 'Aujourd’hui classé parmi les plus grandes révolutions du rock, le deuxième album du groupe de Seattle sort en 1991 sans laisser présager un tel succès. Puis, les singles s’enchaînent, à commencer par « Smells Like Teen Spirit », et transforment Nevermind en référence ultime du grunge. Cette pochette iconique entre dans tous les foyers et fait basculer le groupe dans la culture pop. Entre un Kurt Cobain à l’apogée de son inspiration, l’arrivée de Dave Grohl derrière les fûts et la puissance des lignes de basse de Kris Novoselic, le groupe marie des mélodies pop avec la rage du punk.', 2000, 5, 4, 12),
(2, 'Nirvana', '2e4ad637b7522f5021c1848ddc64c2ea.webp', 'pochette album Nirvana - Nirvana', 'Nirvana est la première compilation posthume du groupe américain de grunge Nirvana sorti le 29 octobre 2002 par le label DGC Records. C’est le troisième disque publié après la mort de Kurt Cobain en 1994.\r\nL’album présente l’inédit You Know You’re Right enregistré pendant la dernière session d’enregistrement en studio du groupe le 30 janvier 1994. Figurent également sur l’album une sélection des chansons les plus connues du groupe, actif de 1987 à 1994.', 2002, 5, 4, 4),
(3, 'White Pony', '63597dc78c2246aa3b424f3eed9d2f02.webp', 'pochette album White Pony - Deftones', 'Le groupe de Sacramento, en Californie, effectue une entrée fracassante dans le nouveau millénaire en modelant un son qui se dissocie peu à peu du nu metal. Sur ce troisième album, la palette vocale de Chino Moreno s’élargit, et les influences musicales se multiplient. Les enchevêtrements de guitares de « Pink Maggit » recèlent des airs de shoegaze, alors que le premier single, « Change (In the House of Flies) », relève du post-rock et les moments de langueur de « Passenger », du trip hop.', 2000, 7, 4, 8),
(4, 'Ten', '9b8a1c89e478efbc930a81711de6b9ea.webp', 'pochette album Ten - Pearl Jam', 'Sorti en 1991, Ten, le premier album de Pearl Jam, reste leur disque de référence. Au fil de singles comme « Even Flow », « Alive » ou encore « Jeremy », Eddie Vedder et son groupe cristallisent les sentiments de frustration d’une jeunesse à l’affût d’un nouvelle puissance rock. Plus proche du classic rock que celle des confrères de Seattle, leur approche du grunge martèle son énergie à coups de refrains de géants sur fond de guitares furieuses, invitant harmonies ou solos généreux. Elle trouve rapidement écho auprès des fans de rock plus traditionnel et crée un pont avec la pop rock.', 1991, 13, 4, 2),
(5, 'Rage Against The Machine', 'd6eb3b92904ad6bede782656933baab1.webp', 'pochette album Rage Against The Machine - Rage Against The Machine', 'Encensé par la critique et le public, le premier album éponyme de Rage Against The Machine se démarque dès sa sortie en 1992. Joué intégralement sur des instruments organiques, l’album est un savant mélange de rap et de heavy metal qui permet au groupe de se hisser très vite au sommet grâce à un son unique. À travers ces dix morceaux, les membres du groupe démontrent leur sens aigu de la mélodie et leur amour des riffs de guitares incendiaires.', 1992, 8, 4, 1),
(6, 'Greatest Hits', '1b1077fad415f5a3628afc094e7477ff.webp', 'pochette album Greatest Hits - Red Hot Chili Peppers', 'Greatest Hits est le deuxième album compilation des Red Hot Chili Peppers, sorti en 2003. Il prend la suite de What Hits!?, première compilation du groupe californien. Il s’agit d’une compilation des meilleures chansons depuis l’album Mother’s Milk jusqu’à By the Way. C’est durant cette période que les Red Hot ont véritablement connu un succès international, cet album regroupe donc la majorité des singles les plus vendus par le groupe.', 2003, 15, 1, 21),
(7, 'Breakfast in America', 'bcafcc3f678eed52a0be4d49f4bf6347.webp', 'pochette album Breakfast in America - Supertramp', 'Breakfast in America est le sixième album studio du groupe britannique Supertramp, sorti en mars 1979. Selon certaines sources, l’album se serait vendu à 20 millions d’exemplaires. En France, l’album se vend à environ 3 millions d’exemplaires, ce qui en fait le quatrième album le plus vendu.', 1979, 11, 1, 3),
(8, 'Greatest Hits', '5be557218f790ea7c467406022b9eb2e.webp', 'pochette album Greatest Hits - Guns N’ Roses', 'Greatest Hits est une compilation qui regroupe tous les succès du groupe Guns N’ Roses. L’album est sorti le 23 mars 2004 sous le label Geffen Records.\r\nIl regroupe 13 des titres les plus populaires du groupe. On retrouve aussi sur l’album une chanson inédite, Sympathy for the Devil. C’est une reprise du groupe The Rolling Stones que Guns N’ Roses avait enregistré pour la bande originale du film Entretien avec un vampire.', 2004, 16, 1, 26),
(9, 'The Doors', '4bab13be4899ae76b07f3e9054c4b639.webp', 'pochette album The Doors - The Doors', 'The Doors est le premier disque du groupe éponyme, sorti en janvier 1967. Il contient des titres devenus des classiques de la musique rock (Break on Through, Light My Fire, The End...), ainsi que des reprises : Bertolt Brecht et Kurt Weil (Alabama Song) et Willie Dixon (Back Door Man).', 1967, 3, 1, 9),
(10, 'Led Zeppelin II', 'cea2e9411f2df175f31cc5c2296039a5.webp', 'pochette album Led Zeppelin II - Led Zeppelin', 'Avec le succès de son premier album, Led Zeppelin conquit l’autre côté de l’Atlantique dans la sueur de concerts foudroyants. Puisant dans cette fureur sans limite sur scène, la formation londonienne délivre des hymnes passionnés et immortels, tels que « Whole Lotta Love » et « Bring It On Home », qui deviendront cultes. Derrière la déflagration, les riffs blues se font plus musclés et grandiloquents, offrant à Robert Plant l’espace idéal pour ses incantations étourdissantes.', 1969, 12, 1, 11),
(11, 'Led Zeppelin IV', '55f7f90e301161d25fdab968bc6e1516.webp', 'pochette album Led Zeppelin IV - Led Zeppelin', 'Au début des années 70 et après trois albums colossaux, Led Zeppelin confirme son statut de plus grand groupe rock au monde. « Led Zeppelin IV » ne fait pas exception, reposant en grande partie sur l’attitude bouillonnante de Robert Plant et de son énergie charnelle. Sa voix rugissante et envoûtante est transportée par des riffs vicieux, plus mystiques que jamais. Une escalade qui atteint les sommets mélodiques vertigineux sur « Stairway to Heaven », un des plus grands classiques de la formation.', 1971, 12, 1, 19),
(12, 'Definitely Maybe', 'e35aef98d05924f3ccfd7ab3d84600ed.webp', 'pochette album Definitely Maybe - Oasis', 'Definitely Maybe est le premier album du groupe anglais Oasis sorti le 30 août 1994. Il est considéré comme une référence pour de nombreux groupes des années 2000. Aujourd’hui encore, les frères Gallagher estiment cet album comme étant leur meilleur, notamment grâce aux hymnes Live Forever, Supersonic, l’explosif Cigarettes And Alcohol, Rock’N’Roll Star, la ballade Married With Children, Bring It On Down et Slide Away qui feront d’Oasis un groupe majeur dans l’histoire musicale des années 1990, lançant par la même occasion l’« Oasismania », cette immense popularité mondiale, rarement atteinte par un groupe de rock depuis les Beatles et les Rolling Stones. L’album fut 7 fois disque de platine au Royaume-Uni avec 7 millions d’exemplaires vendus dont 1 million aux États-Unis et 2,1 dans leur pays d’origine, et figure souvent dans le top 100 des classements des meilleurs albums de tous les temps.', 1994, 1, 2, 34),
(13, 'What’s the Story Morning Glory ?', 'fafccee58004f5a19f43a89d4ba40414.webp', 'pochette album What’s the Story Morning Glory ? - Oasis', 'What’s the Story Morning Glory ? est le deuxième album du groupe de rock anglais Oasis, sorti le 2 octobre 1995 chez Creation Records. L’enregistrement de l’album est interrompu par une violente bagarre entre les frères Gallagher et se fait donc en deux temps. Il contient les premiers tubes d’Oasis, Some Might Say, Champagne Supernova, Don’t Look Back in Anger, et bien sûr Wonderwall qui connaît un très grand succès. Le son du groupe se fait moins brut que celui de Definitely Maybe avec des arrangements plus variés.', 1995, 1, 2, 30),
(14, 'Absolution', '85d358d49ff415621667977653bfbfca.webp', 'pochette album Absolution - Muse', 'Absolution est le troisième album studio du groupe de rock anglais Muse. Il est publié le 29 septembre 2003 au Royaume-Uni par le label Taste Media et six mois plus tard, le 23 mars 2004, aux États-Unis. L’album atteint la première place des ventes au Royaume-Uni et en France, et permet au groupe de commencer à percer aux États-Unis grâce aux singles Time is Running Out et Hysteria. L’album Absolution est vendu à près de 4.5 millions d’exemplaires dans le monde. Cet album est à ce jour le plus rock du groupe avec beaucoup de sonorités Hard Rock.', 2003, 4, 2, 7),
(15, 'The Singles 81/85', '382c21014fd5365a826652d754ca12b0.webp', 'pochette album The Singles 81/85 - Depeche Mode', ' The Singles 81/85 est la première compilation de Depeche Mode, sortie en 1985 et comprenant leurs 13 singles de l’époque dont deux morceaux inédits (Shake the Disease et It’s Called a Heart). Le disque est réédité en CD en 1998 accompagné d’une suite : The Singles 86/98.\r\nL’album s’est classé à la 6e place des charts britanniques et à la 10e place des charts français.\r\nAux États-Unis, il est sorti le 11 novembre 1985 sous le titre Catching Up With Depeche Mode avec une liste de chansons légèrement différente.\r\nEn parallèle une compilation de vidéo a été publiée sous le nom de Some Great Videos.', 1985, 9, 2, 10),
(16, 'Hotel California', 'dcc0cf762d5c3813ccd87735190c49df.webp', 'pochette album Hotel California - Eagles', 'Sans surprise, le morceau titre de cet album monument, sorti fin 1976, a remporté le GRAMMY de l’enregistrement de l’année. Autour de l’incontournable ballade, le groupe explore des sonorités blues, voire hard rock, sur des chansons comme « Life In the Fast Lane » et « Victim of Love ». Combinées aux influences country des débuts d’Eagles, elles ont contribué à populariser le son californien sur toute la planète. Après plusieurs décennies, il reste l’un des albums les plus vendus de tous les temps.', 1976, 14, 1, 2),
(17, 'Rumours', '283ecf0ae1370dffee63d115a02f44e4.webp', 'pochette album Rumours - Fleetwood Mac', 'Cascades de guitares et d’harmonies pour des morceaux inoubliables. Rumours est le onzième album studio du groupe de rock Fleetwood Mac. Il est sorti le 4 février 1977 sur le label Warner Bros. Records et a été produit par le groupe, Ken Caillat et Richard Dashut. Il se classe à la septième place des albums les plus vendus au monde avec environ quarante millions d’unités écoulées en 2020.', 1977, 6, 2, 14),
(18, 'Symphony and Metallica 1', '026ee914f4e33131848e04e2bb50f0ac.webp', 'pochette album Symphony and Metallica 1 - Metallica', 'À première vue, tout semble opposer le metal et la musique classique. Ainsi, lorsque Metallica s’est associé à l’Orchestre symphonique de San Francisco sur S&amp;M en 1999, les fans des deux bords n’ont pas caché leur scepticisme. Pourtant, Metallica a depuis longtemps cerné le lien qui unit les deux genres. « La seule forme de dissonance serait d’ordre visuel », explique le guitariste Kirk Hammett. « Par le passé, de nombreux musiciens ont cherché un son et un feeling se rapprochant de celui du heavy metal, sans que ce dernier ne soit encore inventé. La technologie et les sons n’étaient pas encore disponibles, alors ils ont dû faire avec ce qu’ils avaient à disposition, c’est-à-dire les cordes et les cuivres. En un sens, certaines formes de musique classique étaient le heavy metal de leur époque. »', 1999, 2, 3, 22),
(19, 'Symphony and Metallica 2', '924116ab9b9a7aa12ff02069cb017cbc.webp', 'pochette album Symphony and Metallica 2 - Metallica', 'À l’occasion du 20e anniversaire de l’album, les deux formations se sont à nouveau réunies pour deux soirées événement en septembre 2019, inaugurant par la même occasion le Chase Center de San Francisco. Alors que pour le premier enregistrement (au Berkeley Community Theater, de taille plus modeste), le groupe était placé au-devant de l’orchestre, S&amp;M2 voit les deux formations se mêler totalement, en grande partie grâce aux avancées techniques du sound design et aux micros sans fil. « Cette fois-ci, j’ai vraiment eu l’impression qu’on était un seul et même groupe, un très, très grand groupe », raconte Hammett. « C’est le kif ultime pour moi : jouer un power chord à fond, et entendre 70 instruments derrière en faire quelque chose d’encore plus énorme. »\r\nLa set-list et les arrangements des cordes ont été légèrement remis au goût du jour, pour transcender encore un peu plus les hits du groupe (« One », « Enter Sandman ») et permettre de nouvelles interprétations d’extraits de leurs derniers albums (St. Anger de 2003, Death Magnetic de 2008 et Hardwired…To Self-Destruct de 2016). Le concert alterne les moments de puissance et de grâce. Parmi les plus émouvants, on trouve « Anesthesia (Pulling Teeth) » de 1983, un hommage au regretté Cliff Burton, l’un des anciens bassistes du groupe – dont la passion pour la musique classique a indéniablement influencé ses compagnons de scène –, interprété pour l’occasion par Scott Pingel, première contrebasse solo de l’Orchestre symphonique de San Francisco. Et pour souligner un peu plus encore la théorie d’Hammett, les rôles s’inversent lorsqu’au milieu du concert, sous la direction de Michael Tilson Thomas, les légendes du metal s’emparent d’un passage des Fonderies d’acier d’Alexander Mosolov – une pièce majeure du futurisme du début du XXe siècle, qui prend alors une tournure encore plus étourdissante. « J’aime à penser qu’on est devenu un meilleur groupe », admet Hammett, revenant sur l’arrivée du bassiste Rob Trujillo en 2003. « On affronte mieux les obstacles et on est plus à même d’apporter des solutions musicales à des questions musicales. On voit vraiment la différence lorsqu’il s’agit de se confronter à la virtuosité d’un tel orchestre. »', 2020, 2, 3, 12),
(20, 'As You Were', '054c4b9d0b1dd1a1079ecb29b7558f14.webp', 'pochette album As You Were - Liam Gallagher', 'Difficile à croire, mais As You Were est le premier album solo de Liam Gallagher depuis la dissolution d’Oasis, en 2009. Et l’attente en a valu la peine : entouré de collaborateurs émérites, dont le producteur Greg Kurstin, le chanteur renoue avec un rock qui ne manque ni d’attitude, ni de refrains mémorables. Sur le simple « Wall of Glass », la guitare domine, accompagnée de salves d’harmonica, mais c’est sa voix qui perce le mur de son. Les moments rock sont nombreux, de « Greedy Soul » à « I Get By », mais c’est dans les instants plus intimes, comme sur la ballade acoustique « Paper Crown », que l’interprète se révèle le plus touchant et le plus efficace.', 2017, 10, 2, 15),
(21, 'Why me? Why not.', '35354f5d4a4c9c966424ea8edc44917f.webp', 'pochette album Why me? Why not. - Liam Gallagher', 'Why me? Why Not. est le deuxième album studio solo de l’auteur-compositeur-interprète anglais Liam Gallagher, sorti le 20 septembre 2019 chez Warner Records.\r\nAnnoncé le 12 juin 2019, l’album présente un ton rock et dur, semblable à celui de Dig Out Your Soul d’Oasis sorti en 2008. Les chansons Shockwave et The River ont été présentées en avant-première. Shockwave est devenu le single le plus vendu en vinyle en 2019 et a atteint la première place en Écosse, devenant ainsi le premier single de Gallagher à atteindre le sommet des charts', 2019, 10, 2, 6),
(22, 'C’mon You Know', '70e276320940c76d250a6b279be14e78.webp', 'pochette album C’mon You Know - Liam Gallagher', 'Quelques mois avant la sortie de son troisième album solo, Liam Gallagher a prévenu qu’il faudrait s’attendre à un peu d’inattendu. Après deux albums d’une carrière solo sur fond de rock doucement psychédélique encore assez proche d’Oasis ou de Beady Eye, Liam évolue désormais habilement entre le punk contestataire et le dub planant sur I’m Free. Le titre d’ouverture More Power, passant d’une chorale d’enfants à un final grandiose et scintillant, suggère qu’il a passé ces nuits en plein air à capter les signaux du cosmos. D’autres passages pleins d’audace le voient déployer une pop profondément psychédélique (Better Days), une soul élégamment psychédélique (The Joker), et un funk rock limpide (Diamond in the Dark). Si la musique explore de nouvelles directions, la voix reste reconnaissable entre mille et en grande forme. Il y a comme une hargne et une arrogance toutes familières dans I’m Free et dans le groove indé déjanté de Don’t Go Halfway, mais la douceur et le caractère rassurant de Gallagher, parfois occultés, sont aussi régulièrement mis à profit. Il n’aime pas donner un sens absolu aux mots qu’il chante, préférant que les auditeurs prennent ce qu’ils veulent dans ses chansons.', 2022, 10, 2, 4),
(23, 'MTV Unplugged', '6c0ff221643308d715de6636a1484be7.webp', 'pochette album MTV Unplugged - Liam Gallagher', 'MTV Unplugged (Live at Hull City Hall) est un album live du chanteur et compositeur anglais Liam Gallagher. Il est sorti le 12 juin 2020 par Warner Records. Il devait initialement sortir le 24 avril 2020 mais a été reporté à juin en raison de la pandémie de COVID-19. ', 2020, 10, 3, 9),
(24, 'Guardians of the Galaxy Awesome Mix Vol.1', '4f3b3c9b024e5add6b1fcd9658273532.webp', 'pochette album Guardians of the Galaxy Awesome Mix Vol.1 - Various Artists ', 'L’album sort le 29 juillet 2014. Il correspond aux chansons présentes sur le walkman cassette de Star-Lord et compilées par sa mère. La pochette de l’album montre d’ailleurs un vieux lecteur contenant une cassette avec inscrit au stylo « Awesome Mix Vol. 1 ».\r\nHormis Spirit in the Sky, qui figure uniquement dans la bande-annonce, tous les titres sont entendus dans le film.', 2014, 20, 3, 1),
(25, 'Guardians of the Galaxy Awesome Mix Vol.2', 'd2ac636d35881cf47bfffed0e4ede35d.webp', 'pochette album Guardians of the Galaxy Awesome Mix Vol.2 - Various Artists ', 'L’album est sorti le 21 avril 2017. Tout comme pour le premier film, la pochette de l’album montre un vieux lecteur contenant une cassette avec inscrit au stylo « Awesome Mix Vol. 2 ».', 2017, 20, 3, 3),
(26, 'Rocky IV Original Soundtrack', '14a173ec975489bdfcbfd19fbadeb0c7.webp', 'pochette album Rocky IV Original Soundtrack - Various Artists ', 'Il s’agit du seul épisode de la saga pour lequel Bill Conti ne compose pas la musique car ce dernier était déjà sous contrat pour Karaté Kid. La bande originale du film, par Vince DiCola, ne réutilise pratiquement aucun thème musical des 5 autres films (y compris Gonna Fly Now), et est essentiellement composée de chansons. Elle reste néanmoins très appréciée par les fans, certains la considérant comme la meilleure de la série, et a servi de musique pour la bande-annonce de Rocky 5.', 1985, 20, 5, 9),
(27, 'Jayce et les Conquérants de la Lumière', 'e8f360b2e7534b59ebcd54e7fe731460.webp', 'pochette album Jayce et les Conquérants de la Lumière - Nick Carr ', 'Le générique français de la série, interprété par Nick Carr et produit par Haim Saban, s’est même retrouvé classé pendant 10 semaines au Top 50 en 1986, avec un pic à la 29e place la semaine du 14 avril.\r\nLa voix off au début la chanson du générique est celle du réalisateur Jean Chalopin.', 1985, 18, 5, 4),
(28, 'Astro Le Petit Robot', 'b29b57a2e9b15e0b5bf36082e1af4c52.webp', 'pochette album Astro Le Petit Robot - Franck Olivier ', 'Le générique français de la série apparue en France dans les années 80, interprété par Franck Olivier.', 1985, 19, 5, 0),
(32, 'L.A Woman', '55a5984db5ca2a6e65b8d79aaddbf6f7.webp', 'pochette album L.A Woman - The Doors', 'L.A. Woman est le sixième album studio des Doors et le dernier sorti du vivant de Jim Morrison. L’album, beaucoup plus orienté blues rock que les autres productions du groupe, est enregistré entre novembre 1970 et janvier 1971, et ne sort qu’en avril 1971, peu avant la mort de Morrison. C’est le seul album studio des Doors avec Morrison qui ne sera pas suivi d’une tournée ; celui-ci étant parti pour Paris le 21 mars, avant la sortie de l’album. Il y meurt le 3 juillet 1971.', 1971, 3, 1, 0),
(33, 'Led Zeppelin', 'f1807d7b4eeecbb43eac221ce076d70e.webp', 'pochette album Led Zeppelin - Led Zeppelin', 'Mené par la voix magnétique de Robert Plant, le groupe londonien déploie un talent unique pour fusionner blues percutant et rock explosif aux solos survoltés. Inspiré par le bluesman Willie Dixon, Led Zeppelin interprète avec inventivité son répertoire, générant au passage fulgurances électrisantes et ballades bercées par des orgues ecclésiastiques. Un premier enregistrement brûlant qui marque le début de la légende.', 1969, 12, 1, 0),
(34, 'Be Here Now', 'dc8fc5e4f0258dff4466e05e30b132b9.webp', 'pochette album Be Here Now - Oasis', 'Be Here Now est le troisième album studio du groupe de rock anglais Oasis. Sorti le 21 août 1997 chez Creation Records, cet album était très attendu, à la fois par les critiques et les fans, du fait du succès des deux premiers albums du groupe. Be Here Now est devenu l’album à s’être vendu le plus rapidement au Royaume-Uni à l’époque, avec 424 000 exemplaires vendus dès le jour de sa sortie, et plus d’un million en deux semaines. Malgré un accueil critique extrêmement positif à sa sortie, l’album est aujourd’hui considéré par la presse, le public et la plupart des membres d’Oasis comme trop complaisant.', 1997, 1, 2, 0),
(35, 'Diamonds on the Inside', '7cd8f717358ecbabd0f07c24ac978cc2.webp', 'pochette album Diamonds on the Inside - Ben Harper', 'Bien que, pour la première fois en 10 ans, Ben Harper n’ait pas explicitement crédité le groupe qui l’accompagne habituellement, The Innocent Criminals, tous les membres de celui-ci continuent à le soutenir sur l’album.\r\nPar ailleurs, pour cet album, Harper apporte plusieurs nouveaux membres à son groupe, le premier étant le guitariste Nicky Panicci (alias Nicky P), en 2002, qui est le premier guitariste crédité sur un disque de Ben Harper. Panicci effectue la tournée Diamonds on the Inside avec Harper pendant près d’un an.', 2002, 17, 2, 0),
(36, 'The Masterplan', '547ddfc7114ec779941b2ed37b0e9948.webp', 'pochette album The Masterplan - Oasis', 'The Masterplan est une compilation du groupe anglais Oasis. Sorti le 2 novembre 1998, il compile des faces B du groupe non présent sur les albums studio mais que l’on retrouve sur les singles. Cet album avait comme fonction première de faire découvrir le groupe aux publics américains et japonais, pays où les opus du groupe n’étaient disponibles qu’en importations coûteuses depuis l’Europe. Au Royaume-Uni, il se classa à la deuxième place des ventes et y fut disque de platine.', 1998, 1, 2, 0),
(37, 'Standing on the Shoulders of Giants', 'f43dc2fbc5340fb1cdf853c3c3bc1d60.webp', 'pochette album Standing on the Shoulders of Giants - Oasis', 'Standing on the Shoulder of Giants est le quatrième album du groupe rock Oasis. Il est le 16e le plus rapidement vendu de l’histoire du Royaume-Uni avec environ 310 000 copies achetées dès la première semaine. Il a été aussi certifié double disque de platine. Mais il fut paradoxalement leur pire album studio en termes de vente avec seulement 3 millions de copies vendues à travers le monde. Cet album se définit par des sons plus proches du psychédélique moderne. Illustration avec des boucles de percussions, de samples, l’utilisation d’un sitar électrique et d’un mellotron ainsi que des sons de guitare plus orientés vers le rythmique. Il est ajouté que cet album tranche de ses prédécesseurs par sa noirceur.', 2000, 1, 2, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `vinyl_id` (`vinyl_id`);

--
-- Index pour la table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tracklists`
--
ALTER TABLE `tracklists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vinyl_id` (`vinyl_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `vinyls`
--
ALTER TABLE `vinyls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `tracklists`
--
ALTER TABLE `tracklists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `vinyls`
--
ALTER TABLE `vinyls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `artists`
--
ALTER TABLE `artists`
  ADD CONSTRAINT `artists_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`vinyl_id`) REFERENCES `vinyls` (`id`);

--
-- Contraintes pour la table `tracklists`
--
ALTER TABLE `tracklists`
  ADD CONSTRAINT `tracklists_ibfk_1` FOREIGN KEY (`vinyl_id`) REFERENCES `vinyls` (`id`);

--
-- Contraintes pour la table `vinyls`
--
ALTER TABLE `vinyls`
  ADD CONSTRAINT `vinyls_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `vinyls_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
