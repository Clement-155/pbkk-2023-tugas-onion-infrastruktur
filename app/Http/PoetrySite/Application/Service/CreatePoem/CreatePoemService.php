<?php

namespace App\Http\PoetrySite\Application\Service\CreatePoem;

use App\Http\PoetrySite\Domain\Models\Poem;
use App\Http\PoetrySite\Domain\Service\Repository\PoemRepositoryInterface;

class CreatePoemService
{
    public function __construct(
        private PoemRepositoryInterface $poem_repository // CLEMENT : Init for every service instance
    )
    {
    }

    // CLEMENT : After request is created (instance), create model and put into database using persist()?
    public function execute(CreatePoemRequest $request){
        $topik = new Poem(
            null,
            $request->getTitle(),
            $request->getAuthor(),
            $request->getGenre(),
        );

        $this->poem_repository->persist($topik);
    }
}
