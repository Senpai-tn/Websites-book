<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200402175325 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE website ADD id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE website ADD CONSTRAINT FK_476F5DE779F37AE5 FOREIGN KEY (id_user_id) REFERENCES fos_user (id)');
        $this->addSql('CREATE INDEX IDX_476F5DE779F37AE5 ON website (id_user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE website DROP FOREIGN KEY FK_476F5DE779F37AE5');
        $this->addSql('DROP INDEX IDX_476F5DE779F37AE5 ON website');
        $this->addSql('ALTER TABLE website DROP id_user_id');
    }
}
