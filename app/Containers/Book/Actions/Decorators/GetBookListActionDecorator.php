<?php

namespace LaravelPorto\Containers\Book\Actions\Decorators;

use LaravelPorto\Containers\Book\Collections\BookCollection;
use LaravelPorto\Containers\Book\Actions\Interfaces\GetBookListActionInterface;
use LaravelPorto\Ship\Http\Requests\API\Interfaces\PaginateRequestInterface;

class GetBookListActionDecorator implements GetBookListActionInterface
{
    protected GetBookListActionInterface $getBookListActionInterface;

    public function __construct(GetBookListActionInterface $getBookListActionInterface)
    {
        $this->getBookListActionInterface = $getBookListActionInterface;
    }

    public function execute(PaginateRequestInterface $paginateRequest): BookCollection
    {
        return $this->getBookListActionInterface->execute($paginateRequest);
    }
}
