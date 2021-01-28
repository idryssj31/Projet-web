<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127134517 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cartebancaire (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date DATE NOT NULL, numero SMALLINT NOT NULL, code SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compteur (id INT AUTO_INCREMENT NOT NULL, admin SMALLINT DEFAULT NULL, membre SMALLINT DEFAULT NULL, film SMALLINT NOT NULL, connexion SMALLINT NOT NULL, inscription SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favoris (id INT AUTO_INCREMENT NOT NULL, film1 VARCHAR(255) NOT NULL, film2 VARCHAR(255) NOT NULL, film3 VARCHAR(255) NOT NULL, film4 VARCHAR(255) NOT NULL, film5 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE palier (id INT AUTO_INCREMENT NOT NULL, rookie LONGTEXT DEFAULT NULL, fan LONGTEXT DEFAULT NULL, cinephile LONGTEXT DEFAULT NULL, vip LONGTEXT DEFAULT NULL, admin LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recette (id INT AUTO_INCREMENT NOT NULL, unesemaine SMALLINT DEFAULT NULL, unmois SMALLINT DEFAULT NULL, sixmois SMALLINT DEFAULT NULL, unans SMALLINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, mail LONGTEXT NOT NULL, sexe VARCHAR(255) NOT NULL, codepostal SMALLINT NOT NULL, password LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cartebancaire');
        $this->addSql('DROP TABLE compteur');
        $this->addSql('DROP TABLE favoris');
        $this->addSql('DROP TABLE palier');
        $this->addSql('DROP TABLE recette');
        $this->addSql('DROP TABLE utilisateur');
    }
}
