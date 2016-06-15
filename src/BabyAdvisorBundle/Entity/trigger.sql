DELIMITER //
CREATE TRIGGER `BabyAdvisor`.`Notation_AFTER_INSERT` AFTER INSERT ON `Notation` FOR EACH ROW
BEGIN
	if EXISTS (SELECT idArticle FROM Note WHERE idArticle = NEW.idArticle) THEN
		begin
			update Note set
				moy_propre = ((moy_propre * nb_com) + NEW.proprete) / (nb_com + 1),
				moy_acce = ((moy_acce * nb_com) + NEW.accessibilite) / (nb_com + 1),
				moy_encad = ((moy_encad * nb_com) + NEW.encadrement) / (nb_com + 1),
				moy_equip = ((moy_equip * nb_com) + NEW.equipement) / (nb_com + 1),
				moy_ambiance = ((moy_ambiance * nb_com) + NEW.ambiance) / (nb_com + 1)
            where idArticle = New.idArticle;
            update Note set
				nb_com = nb_com + 1
            where idArticle = New.idArticle;
            update Note set
				moy_gen = (moy_propre + moy_acce + moy_encad + moy_equip + moy_ambiance) / 5
            where idArticle = New.idArticle;
        end;
	else
		begin
			insert into Note (moy_gen, moy_propre, moy_acce, moy_encad, moy_equip, moy_ambiance, nb_com, idArticle)
			Values ((New.propre + New.accessibilite + New.encadrement + New.equipement + New.ambiance) / 5,
					New.propre,
                    New.accessibilite,
                    New.encadrement,
                    New.equipement,
                    New.ambiance,
                    1,
                    NEW.idArticle);
        end;
    end if;
END;//
DELIMITER ;