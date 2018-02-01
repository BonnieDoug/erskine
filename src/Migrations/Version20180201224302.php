<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180201224302 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX name ON room');
        $this->addSql('DROP INDEX number ON room');
        $this->addSql('ALTER TABLE room ADD price_from VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE room RENAME INDEX uniq_729f519b235fb9bb TO UNIQ_729F519B3BE11523');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE room DROP price_from');
        $this->addSql('CREATE UNIQUE INDEX name ON room (name)');
        $this->addSql('CREATE UNIQUE INDEX number ON room (number)');
        $this->addSql('ALTER TABLE room RENAME INDEX uniq_729f519b3be11523 TO UNIQ_729F519B235FB9BB');
    }
}
