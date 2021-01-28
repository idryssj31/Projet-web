<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210127180210 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recette CHANGE unesemaine unesemaine SMALLINT DEFAULT NULL, CHANGE unmois unmois SMALLINT DEFAULT NULL, CHANGE sixmois sixmois SMALLINT DEFAULT NULL, CHANGE unans unans SMALLINT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE recette CHANGE unesemaine unesemaine SMALLINT NOT NULL, CHANGE unmois unmois SMALLINT NOT NULL, CHANGE sixmois sixmois SMALLINT NOT NULL, CHANGE unans unans SMALLINT NOT NULL');
    }
}
