<?php

namespace LaravelPorto\Containers\Book\UI\API\Resources\Interfaces;

use LaravelPorto\Containers\Book\Collections\BookCollection;

interface BookListResourceInterface
{
    public function fromCollection(BookCollection $bookCollection): array;
}
