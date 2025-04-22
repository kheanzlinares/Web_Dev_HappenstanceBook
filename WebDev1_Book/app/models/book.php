<?php
namespace Models;

use JsonSerializable;

class Book implements JsonSerializable
{
    private $id;
    private $book_name;
    private $category_id;
    private $image;
    private $date;
    private $author;
    private $description;
    private $price;

    public function __construct($_id, $book_name, $_category_id, $_image, $date, $_author, $_description, $_price)
    {
        $this->id = $_id;
        $this->book_name = $book_name;
        $this->category_id = $_category_id;
        $this->image = $_image;
        $this->date = $date;
        $this->author = $_author;
        $this->description = $_description;
        $this->price = $_price;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getBookName(): string
    {
        return $this->book_name;
    }
    public function getCategoryId(): int
    {
        return $this->category_id;
    }
    public function getImage(): string
    {
        return $this->image;
    }
    public function getDate(): string
    {
        return $this->date;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getDescription($limitWords = true): string
    {
        $description = $this->description;

        if ($limitWords) {
            // Split the description into words
            $words = explode(" ", $description);
            // Limit the number of words to 50
            $truncatedDescription = implode(" ", array_slice($words, 0, 50));
            // Add ellipsis if the description was truncated
            if (count($words) > 50) {
                $truncatedDescription .= "...";
            }
            return $truncatedDescription;
        } else {
            // Return the full description
            return $description;
        }
    }

    public function setId(): int
    {
        return $this->id;
    }
    public function setBookName(): string
    {
        return $this->book_name;
    }
    public function setCategoryId(): int
    {
        return $this->category_id;
    }
    public function setImage(): string
    {
        return $this->image;
    }
    public function setDate(): string
    {
        return $this->date;
    }
    public function setAuthor(): string
    {
        return $this->author;
    }
    public function setDescription(): string
    {
        return $this->description;
    }
    public function setPrice(): int
    {
        return $this->price;
    }

    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}
