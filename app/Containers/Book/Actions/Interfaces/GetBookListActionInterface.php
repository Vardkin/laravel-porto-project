<?php

namespace LaravelPorto\Containers\Book\Actions\Interfaces;

use LaravelPorto\Containers\Book\Collections\BookCollection;
use LaravelPorto\Ship\Http\Requests\API\Interfaces\PaginateRequestInterface;

interface GetBookListActionInterface
{
    public function execute(PaginateRequestInterface $paginateRequest): BookCollection;
}
