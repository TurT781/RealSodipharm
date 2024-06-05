<?php
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240604194259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Ajoutez d'autres actions nécessaires ici, par exemple :
        // $this->addSql('ALTER TABLE article MODIFY position INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // Ajoutez le code pour supprimer les autres actions que vous avez effectuées dans up(), par exemple :
        // $this->addSql('ALTER TABLE article MODIFY position INT NULL');
    }
}

