<?php

namespace LaravelPorto\Containers\Book\Proxies;

use LaravelPorto\Containers\Book\Models\Book;
use LaravelPorto\Ship\Abstracts\Proxies\BaseEloquentProxy;

class BookEloquentProxy extends BaseEloquentProxy
{
    protected const MODEL = Book::class;
}
