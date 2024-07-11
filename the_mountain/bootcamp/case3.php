<?php
class Content {
    protected string $title;
    protected string $text;

    public function __construct(string $title, string $text) {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getText(): string {
        return $this->text;
    }

    public function displayHtml(): string {
        // Modify title based on content type
        $modifiedTitle = $this->title;
        if ($this instanceof Article) {
            if ($this->isBreakingNews()) {
                $modifiedTitle = "BREAKING: " . $this->title;
            }
        } elseif ($this instanceof Ad) {
            $modifiedTitle = strtoupper($this->title);
        } elseif ($this instanceof Vacancy) {
            $modifiedTitle .= " - apply now!";
        }

        // Create HTML representation
        return "<div><h2>$modifiedTitle</h2><p>{$this->text}</p></div>";
    }
}

class Article extends Content {
    private bool $breakingNews;

    public function __construct(string $title, string $text, bool $breakingNews = false) {
        parent::__construct($title, $text);
        $this->breakingNews = $breakingNews;
    }

    public function isBreakingNews(): bool {
        return $this->breakingNews;
    }
}

class Ad extends Content {
    // No additional properties or methods needed for ads
}

class Vacancy extends Content {
    // No additional properties or methods needed for vacancies
}

// Create instances
$articles = [
    new Article("Important News", "Lorem ipsum dolor sit amet."),
    new Article("Exclusive Interview", "Consectetur adipiscing elit.", true),
];

$ads = [
    new Ad("Buy Now!", "Limited time offer!"),
];

$vacancies = [
    new Vacancy("Web Developer", "Join our team."),
];

// Display content
foreach ($articles as $article) {
    echo $article->displayHtml();
}

foreach ($ads as $ad) {
    echo $ad->displayHtml();
}

foreach ($vacancies as $vacancy) {
    echo $vacancy->displayHtml();
}

