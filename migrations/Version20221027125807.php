<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221027125807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE "User_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE language_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE project_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE screen_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE tool_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "User" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2DA17977E7927C74 ON "User" (email)');
        $this->addSql('CREATE TABLE language (id INT NOT NULL, name VARCHAR(40) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE project (id INT NOT NULL, screen_id INT DEFAULT NULL, name VARCHAR(40) NOT NULL, description TEXT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, github VARCHAR(255) DEFAULT NULL, link VARCHAR(255) DEFAULT NULL, start_the TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2FB3D0EE41A67722 ON project (screen_id)');
        $this->addSql('CREATE TABLE project_language (project_id INT NOT NULL, language_id INT NOT NULL, PRIMARY KEY(project_id, language_id))');
        $this->addSql('CREATE INDEX IDX_E995FA6E166D1F9C ON project_language (project_id)');
        $this->addSql('CREATE INDEX IDX_E995FA6E82F1BAF4 ON project_language (language_id)');
        $this->addSql('CREATE TABLE project_tool (project_id INT NOT NULL, tool_id INT NOT NULL, PRIMARY KEY(project_id, tool_id))');
        $this->addSql('CREATE INDEX IDX_1962F6C9166D1F9C ON project_tool (project_id)');
        $this->addSql('CREATE INDEX IDX_1962F6C98F7B22CC ON project_tool (tool_id)');
        $this->addSql('CREATE TABLE screen (id INT NOT NULL, name VARCHAR(40) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE tool (id INT NOT NULL, name VARCHAR(40) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE41A67722 FOREIGN KEY (screen_id) REFERENCES screen (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE project_language ADD CONSTRAINT FK_E995FA6E166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE project_language ADD CONSTRAINT FK_E995FA6E82F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE project_tool ADD CONSTRAINT FK_1962F6C9166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE project_tool ADD CONSTRAINT FK_1962F6C98F7B22CC FOREIGN KEY (tool_id) REFERENCES tool (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE "User_id_seq" CASCADE');
        $this->addSql('DROP SEQUENCE language_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE project_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE screen_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE tool_id_seq CASCADE');
        $this->addSql('ALTER TABLE project DROP CONSTRAINT FK_2FB3D0EE41A67722');
        $this->addSql('ALTER TABLE project_language DROP CONSTRAINT FK_E995FA6E166D1F9C');
        $this->addSql('ALTER TABLE project_language DROP CONSTRAINT FK_E995FA6E82F1BAF4');
        $this->addSql('ALTER TABLE project_tool DROP CONSTRAINT FK_1962F6C9166D1F9C');
        $this->addSql('ALTER TABLE project_tool DROP CONSTRAINT FK_1962F6C98F7B22CC');
        $this->addSql('DROP TABLE "User"');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_language');
        $this->addSql('DROP TABLE project_tool');
        $this->addSql('DROP TABLE screen');
        $this->addSql('DROP TABLE tool');
    }
}
