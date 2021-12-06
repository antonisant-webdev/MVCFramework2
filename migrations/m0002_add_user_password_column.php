<?php

class m0002_add_user_password_column
{
    public function up() {
        $db = \tonyanant\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }

    public function down() {
        $db = \tonyanant\phpmvc\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users DROP COLUMN password");
    }

}