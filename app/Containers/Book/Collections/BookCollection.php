<?php

namespace LaravelPorto\Containers\Book\Collections;

use LaravelPorto\Containers\Book\DTO\BookDTO;
use LaravelPorto\Ship\Abstracts\Collections\Collection;

class BookCollection extends Collection
{
    public function __construct(BookDTO ...$books)
    {
        parent::__construct($books);
    }

    public function current(): BookDTO
    {
        return parent::current();
    }
}
