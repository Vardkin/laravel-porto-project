<?php

namespace LaravelPorto\Containers\Book\UI\API\Controllers;

use LaravelPorto\Containers\Book\Subactions\Interfaces\GetBookListActionInterface;
use LaravelPorto\Containers\Book\UI\API\Resources\BookListResource;
use LaravelPorto\Ship\Abstracts\Controllers\Controller;
use LaravelPorto\Ship\Http\Requests\API\PaginateRequest;

class BookController extends Controller
{
    public function list(
        PaginateRequest $request,
        BookListResource $bookListResource,
        GetBookListActionInterface $getBookListAction
    ) {
        $bookCollection = $getBookListAction->execute($request);

        return response()->json($bookListResource->fromCollection($bookCollection));
    }
}
