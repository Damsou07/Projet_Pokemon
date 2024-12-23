<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241123002228 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE type (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name_type VARCHAR(30) NOT NULL, mult_damage_to_acier DOUBLE PRECISION NOT NULL, mult_damage_to_combat DOUBLE PRECISION NOT NULL, mult_damage_to_dragon DOUBLE PRECISION NOT NULL, mult_damage_to_eau DOUBLE PRECISION NOT NULL, mult_damage_to_feu DOUBLE PRECISION NOT NULL, mult_damage_to_electrik DOUBLE PRECISION NOT NULL, mult_damage_to_fee DOUBLE PRECISION NOT NULL, mult_damage_to_glace DOUBLE PRECISION NOT NULL, mult_damage_to_insecte DOUBLE PRECISION NOT NULL, mult_damage_to_normal DOUBLE PRECISION NOT NULL, mult_damage_to_plante DOUBLE PRECISION NOT NULL, mult_damage_to_poison DOUBLE PRECISION NOT NULL, mult_damage_to_psy DOUBLE PRECISION NOT NULL, mult_damage_to_roche DOUBLE PRECISION NOT NULL, mult_damage_to_sol DOUBLE PRECISION NOT NULL, mult_damage_to_spectre DOUBLE PRECISION NOT NULL, mult_damage_to_tenebres DOUBLE PRECISION NOT NULL, mult_damage_to_vol DOUBLE PRECISION NOT NULL, res_acier DOUBLE PRECISION NOT NULL, res_combat DOUBLE PRECISION NOT NULL, res_dragon DOUBLE PRECISION NOT NULL, res_eau DOUBLE PRECISION NOT NULL, res_feu DOUBLE PRECISION NOT NULL, res_electrik DOUBLE PRECISION NOT NULL, res_fee DOUBLE PRECISION NOT NULL, res_glace DOUBLE PRECISION NOT NULL, res_insecte DOUBLE PRECISION NOT NULL, res_normal DOUBLE PRECISION NOT NULL, res_plante DOUBLE PRECISION NOT NULL, res_poison DOUBLE PRECISION NOT NULL, res_psy DOUBLE PRECISION NOT NULL, res_roche DOUBLE PRECISION NOT NULL, res_sol DOUBLE PRECISION NOT NULL, res_spectre DOUBLE PRECISION NOT NULL, res_tenebres DOUBLE PRECISION NOT NULL, res_vol DOUBLE PRECISION NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE type');
    }
}
