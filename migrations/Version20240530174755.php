<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240530174755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE descente (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, hauteur INT NOT NULL, largeur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etagere (id INT AUTO_INCREMENT NOT NULL, descente_id INT DEFAULT NULL, hauteur INT NOT NULL, largeur INT NOT NULL, INDEX IDX_B83FE5C459D4935E (descente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etagere_article (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, descente_id INT DEFAULT NULL, position INT NOT NULL, INDEX IDX_C9DD9CB7294869C (article_id), INDEX IDX_C9DD9CB59D4935E (descente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etagere ADD CONSTRAINT FK_B83FE5C459D4935E FOREIGN KEY (descente_id) REFERENCES descente (id)');
        $this->addSql('ALTER TABLE etagere_article ADD CONSTRAINT FK_C9DD9CB7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE etagere_article ADD CONSTRAINT FK_C9DD9CB59D4935E FOREIGN KEY (descente_id) REFERENCES descente (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etagere DROP FOREIGN KEY FK_B83FE5C459D4935E');
        $this->addSql('ALTER TABLE etagere_article DROP FOREIGN KEY FK_C9DD9CB7294869C');
        $this->addSql('ALTER TABLE etagere_article DROP FOREIGN KEY FK_C9DD9CB59D4935E');
        $this->addSql('DROP TABLE descente');
        $this->addSql('DROP TABLE etagere');
        $this->addSql('DROP TABLE etagere_article');
    }
}
