<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "connect_db.php"; // Move this line outside the class

class ArticleController
{
    public function index()
    {
        // Load all required data
        $articles = $this->getArticles();

        // Load the view
        require 'View/articles/index.php';
    }

    // Note: this function can also be used in a repository - the choice is yours
    private function getArticles()
    {
        global $conn; // Access the global connection

        // TODO: fetch all articles as $rawArticles (as a simple array)
        $rawArticles = [];

        $stmt = $conn->query("SELECT * FROM articles");
        $rawArticles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $articles = [];
        foreach ($rawArticles as $rawArticle) {
            // Assuming you have an Article class with appropriate properties
            $articles[] = new Article($rawArticle['title'], $rawArticle['description'], $rawArticle['publish_date']);
        }

        return $articles;
    }

    public function show()
    {
        // TODO: this can be used for a detail page
    }
}

// Rest of your code (if any)
