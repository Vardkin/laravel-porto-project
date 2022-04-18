<?php

namespace LaravelPorto\Containers\Book\UI\API\Resources;

use LaravelPorto\Containers\Book\Collections\BookCollection;
use LaravelPorto\Containers\Book\UI\API\Resources\Interfaces\BookListResourceInterface;
use LaravelPorto\Ship\Abstracts\Resources\ApiResource;

class BookListResource extends ApiResource implements BookListResourceInterface
{
    public function fromCollection(BookCollection $bookCollection): array
    {
        $mappedCollection = [];

        foreach ($bookCollection as $bookDTO) {
            $mappedCollection[] = [
                'id' => $bookDTO->id,
                'title' => $bookDTO->title,
            ];
        }

        return $this->wrapResponse($mappedCollection);
    }
}
