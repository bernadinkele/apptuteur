<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251211105754 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE visite (id INT AUTO_INCREMENT NOT NULL, date DATETIME NOT NULL, commentaire VARCHAR(255) NOT NULL, tuteur_id INT NOT NULL, INDEX IDX_B09C8CBB86EC68D8 (tuteur_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE visite ADD CONSTRAINT FK_B09C8CBB86EC68D8 FOREIGN KEY (tuteur_id) REFERENCES tuteur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE visite DROP FOREIGN KEY FK_B09C8CBB86EC68D8');
        $this->addSql('DROP TABLE visite');
    }
}
