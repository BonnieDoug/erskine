<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180201224743 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE room CHANGE price_from price_from NUMERIC(6, 2) NOT NULL');
        $this->addSql('ALTER TABLE room RENAME INDEX uniq_729f519b235fb9bb TO UNIQ_729F519B3BE11523');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE room CHANGE price_from price_from NUMERIC(2, 0) NOT NULL');
        $this->addSql('ALTER TABLE room RENAME INDEX uniq_729f519b3be11523 TO UNIQ_729F519B235FB9BB');
    }
}
