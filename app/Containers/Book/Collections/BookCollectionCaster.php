<?php

use LaravelPorto\Containers\Book\Collections\BookCollection;
use LaravelPorto\Containers\Book\Models\Book;
use Spatie\DataTransferObject\Caster;

class BookCollectionCaster implements Caster
{
  public function cast(mixed $value): BookCollection
  {
    return new BookCollection(array_map(
      fn (array $data) => new Book(...$data),
      $value
    ));
  }
}
