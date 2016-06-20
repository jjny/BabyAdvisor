DELIMITER //
CREATE TRIGGER `BabyAdvisor`.`Notation_AFTER_INSERT` AFTER INSERT ON `Notation` FOR EACH ROW
BEGIN
	if EXISTS (SELECT article_id FROM Note WHERE article_id = NEW.article_id) THEN
		begin
			update Note set
				moy_propre = ((moy_propre * nb_com) + NEW.proprete) / (nb_com + 1),
				moy_acce = ((moy_acce * nb_com) + NEW.accessibilite) / (nb_com + 1),
				moy_encad = ((moy_encad * nb_com) + NEW.encadrement) / (nb_com + 1),
				moy_equip = ((moy_equip * nb_com) + NEW.equipement) / (nb_com + 1),
				moy_ambiance = ((moy_ambiance * nb_com) + NEW.ambiance) / (nb_com + 1)
            where article_id = New.article_id;
            update Note set
				nb_com = nb_com + 1
            where article_id = New.article_id;
            update Note set
				moy_gen = (moy_propre + moy_acce + moy_encad + moy_equip + moy_ambiance) / 5
            where article_id = New.article_id;
        end;
	else
		begin
			insert into Note (moy_gen, moy_propre, moy_acce, moy_encad, moy_equip, moy_ambiance, nb_com, article_id)
			Values ((New.proprete + New.accessibilite + New.encadrement + New.equipement + New.ambiance) / 5,
					New.proprete,
                    New.accessibilite,
                    New.encadrement,
                    New.equipement,
                    New.ambiance,
                    1,
                    NEW.article_id);
        end;
    end if;
END;//
DELIMITER ;

INSERT INTO `centre_interet`(`libelle`) VALUES ("Sportive"), ("Artistique"), ("Plein air"), ("Pédagogique"), ("Spectacle"), ("Exposition");

INSERT INTO `article` (`id`, `user_id`, `titre`, `adresse`, `cp`, `ville`, `description`, `date_ma_j`, `signale`, `date_crea`) VALUES (NULL, NULL, 'Musée en Herbe', '23, rue de L’Arbre-Sec', '75001', 'Paris', 'Nos médiatrices vous emmèneront sur les traces du Chat de Geluck ! Laissez-vous emporter par le matou philosophe et de son tour du monde de l’art ! Le Chat rend hommage à Basquiat, Boudin, César, Fontana, Klein, Koons, Picasso, Soulages, Vasarely, Warhol… et bien d’autres. Les visiteurs peuvent admirer trente chefs-d’œuvre de l’Antiquité à nos jours prêtés par plusieurs musées, galeries et collectionneurs, et s’amuser devant autant d’hommages amicaux et admiratifs du matou pince-sans-rire et de son maître talentueux.

Un parcours étonnant et plein d’humour à ne manquer sous aucun prétexte !

Après avoir résolu les énigmes du livret-jeu, chaque enfant repartira avec un petit cadeau !

De 2 ans 1/2 à 4 ans 1/2

Visite de 30 minutes pour les tout-petits accompagnés de leur(s) parent(s) : baby visite de 2 ans et demi à 4 ans et demi à 10h30 et 13h30 tous les mercredi, samedi et dimanche, pendant les jours fériés et tous les jours pendant les vacances scolaires.', '2016-06-18', NULL, '2016-06-18'), (NULL, NULL, 'Théâtre Guignol', 'Angle des avenues Gabriel et Matignon', '75008', 'Paris', 'Le Théâtre des marionnettes des Champs-Élysées existe depuis 1818. Guignol et sa bande s’y sont installés, et depuis, ils ne cessent de ravir les familles qui déferlent sur la plus belle avenue du monde. Au programme : Des marionnettes à gaines, et un spectacle participatif qui ne prendra jamais la moindre ride.', '2016-06-18', NULL, '2016-06-18'), (NULL, NULL, 'Musée National du Sport', '93 avenue de France', '75013', 'Paris', 'Le Musée National du Sport conserve l’une des plus importantes collections au monde consacrées aux pratiques sportives et à leur histoire.

Crée en 1963, ce musée ouvre en 1988 un espace d’exposition au Parc des Princes, avant que l’organisation du Mondial de football en 1998 ne l’amène à fermer au public pendant dix ans. 
Depuis le 4 juin 2008, le Musée a rouvert dans le 13e à Paris. Le site de 700m² présente 350 oeuvres et près de 100 000 objets dédiés au Sport.

image: http://www.evous.fr/local/cache-vignettes/L135xH200/sport_02-7cb9e.jpg?1362746461

Exposition permanente : Le sport s’expose au Musée National du Sport 
Vous pouvez voir une partie des collections du musée : des objets d’art sur le thème du sport, des objets de champions, des équipements sportifs divers. Bonne visite dans la mémoire du sport !

La première salle est une introduction générale au sport. On y découvre le caractère universel de la pratique sportive, les significations diverses du sport, les liens entre sport et art, ainsi que la place du sport dans la société.
Dans la seconde salle, le visiteur parcourt l’histoire du sport. Y sont présentés les jeux traditionnels anciens et les disciplines qui font l’exception française (escrime, équitation, cyclisme). On traverse l’histoire pour comprendre comment est né le sport moderne : avec l’apparition de compétitions nationales et internationales, l’avènement du sport spectacle et des loisirs de masse.

L’objectif est de donner une vision globale du sport, de faire réfléchir à son implication, à sa place, et d’attirer l’attention du visiteur sur des objets de légende. La visée de cette exposition est également de s’inscrire dans la dimension universelle et partageable de la pratique sportive en démontrant comment le sport peut rassembler.', '2016-06-18', NULL, '2016-06-18');
INSERT INTO `article_categorie` (`article_id`, `centre_interet_id`) VALUES ('1', '3'), ('1', '5'), ('2', '5'), ('3', '1'), ('3', '3'), ('3', '6');
INSERT INTO `note` (`id`, `article_id`, `moy_gen`, `moy_propre`, `moy_acce`, `moy_encad`, `moy_equip`, `moy_ambiance`, `nb_com`) VALUES (NULL, '1', '2', '2', '2', '2', '2', '2', '1'), (NULL, '2', '5', '5', '5', '5', '5', '5', '1'), (NULL, '3', '3', '3', '3', '3', '3', '3', '1');