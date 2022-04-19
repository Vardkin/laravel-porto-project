<?php

namespace LaravelPorto\Containers\Book\Actions;

use Carbon\Carbon;
use LaravelPorto\Containers\Book\Collections\BookCollection;
use LaravelPorto\Containers\Book\DTO\BookDTO;
use LaravelPorto\Containers\Book\Proxies\BookEloquentProxy;
use LaravelPorto\Containers\Book\Actions\Interfaces\GetBookListActionInterface;
use LaravelPorto\Ship\Http\Requests\API\Interfaces\PaginateRequestInterface;

class GetBookListAction implements GetBookListActionInterface
{
    private BookEloquentProxy $bookEloquentProxy;

    public function __construct(BookEloquentProxy $bookEloquentProxy)
    {
        $this->bookEloquentProxy = $bookEloquentProxy;
    }

    public function execute(PaginateRequestInterface $paginateRequest): BookCollection
    {
        $bookCollection = [];
        $bookList = $this->bookEloquentProxy->findAll(
            [],
            $paginateRequest->getLimit(),
            $paginateRequest->getOffset()
        );

        foreach ($bookList as $book) {
            $book['publish_date'] = Carbon::parse($book['publish_date']);
            $book['created_at'] = Carbon::parse($book['created_at']);
            $book['updated_at'] = Carbon::parse($book['updated_at']);
            $bookCollection[] = new BookDTO($book);
        }

        return new BookCollection($bookCollection);
    }
}
