<?php

namespace App\Http\PoetrySite\Domain\Models;

use App\Http\PoetrySite\Domain\Enum\PoemGenre;

class Poem {
    public function __construct(
        private ?int $id, //Nullable for entries with missing id
        private string $title,
        private string $author,
        private PoemGenre $genre,
    )
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getGenre(): PoemGenre
    {
        return $this->genre;
    }
}