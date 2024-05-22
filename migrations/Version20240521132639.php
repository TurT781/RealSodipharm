<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240521132639 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, hauteur INT NOT NULL, largeur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE descente (id INT AUTO_INCREMENT NOT NULL, etagere_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, hauteur INT NOT NULL, largeur INT NOT NULL, INDEX IDX_8313A8A66588D180 (etagere_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etagere (id INT AUTO_INCREMENT NOT NULL, hauteur INT NOT NULL, largeur INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etagere_article (id INT AUTO_INCREMENT NOT NULL, descente_id INT DEFAULT NULL, article_id_id INT DEFAULT NULL, position INT NOT NULL, INDEX IDX_C9DD9CB59D4935E (descente_id), INDEX IDX_C9DD9CB8F3EC46 (article_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE descente ADD CONSTRAINT FK_8313A8A66588D180 FOREIGN KEY (etagere_id) REFERENCES etagere (id)');
        $this->addSql('ALTER TABLE etagere_article ADD CONSTRAINT FK_C9DD9CB59D4935E FOREIGN KEY (descente_id) REFERENCES etagere (id)');
        $this->addSql('ALTER TABLE etagere_article ADD CONSTRAINT FK_C9DD9CB8F3EC46 FOREIGN KEY (article_id_id) REFERENCES article (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE descente DROP FOREIGN KEY FK_8313A8A66588D180');
        $this->addSql('ALTER TABLE etagere_article DROP FOREIGN KEY FK_C9DD9CB59D4935E');
        $this->addSql('ALTER TABLE etagere_article DROP FOREIGN KEY FK_C9DD9CB8F3EC46');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE descente');
        $this->addSql('DROP TABLE etagere');
        $this->addSql('DROP TABLE etagere_article');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
