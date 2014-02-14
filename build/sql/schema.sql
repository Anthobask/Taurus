
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- categorie
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `categorie`;

CREATE TABLE `categorie`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `libelle` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- paniers
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `paniers`;

CREATE TABLE `paniers`
(
    `idUSer` INTEGER NOT NULL,
    `idProduit` INTEGER NOT NULL,
    `quantite` INTEGER NOT NULL,
    PRIMARY KEY (`idUSer`,`idProduit`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- produits
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `produits`;

CREATE TABLE `produits`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(255),
    `prix` FLOAT,
    `description` TEXT,
    `documenation` TEXT,
    `img` VARCHAR(255) NOT NULL,
    `idCateg` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(255),
    `prenom` VARCHAR(255),
    `login` VARCHAR(255),
    `email` VARCHAR(255),
    `password` VARCHAR(255),
    `access` INTEGER DEFAULT 0 NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
