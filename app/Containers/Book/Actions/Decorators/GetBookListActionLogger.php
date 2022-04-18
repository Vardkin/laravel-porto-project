<?php

namespace LaravelPorto\Containers\Book\Actions\Decorators;

use LaravelPorto\Containers\Book\Collections\BookCollection;
use LaravelPorto\Ship\Http\Requests\API\Interfaces\PaginateRequestInterface;

class GetBookListActionLogger extends GetBookListActionDecorator
{
    public function execute(PaginateRequestInterface $paginateRequest): BookCollection
    {
        $bookCollection = parent::execute($paginateRequest);
        \Log::info('returned '.count($bookCollection).' books');

        return $bookCollection;
    }
}
