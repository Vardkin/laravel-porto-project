<?php

namespace LaravelPorto\Containers\Book\Collections;

use LaravelPorto\Containers\Book\DTO\BookDTO;
use LaravelPorto\Ship\Abstracts\Collections\Collection;

#[CastWith(BookCollectionCaster::class)]
class BookCollection extends Collection
{
  public function offsetGet($key): BookDTO
  {
    return parent::offsetGet($key);
  }
}
