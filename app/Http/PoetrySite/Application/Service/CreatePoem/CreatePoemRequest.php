<?php

namespace App\Http\PoetrySite\Application\Service\CreatePoem;

use App\Http\PoetrySite\Domain\Enum\PoemGenre;

class CreatePoemRequest
{
    public function __construct(
        private string $title,
        private string $author,
        private PoemGenre $genre,
    )
    {
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
