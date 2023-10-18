<?php

namespace App\Http\PoetrySite\Domain\Service\Repository;

use App\Http\PoetrySite\Domain\Models\Poem;

interface PoemRepositoryInterface
{
    public function persist(Poem $poem);
    public function getById(int $poem_id): ?Poem;

}
