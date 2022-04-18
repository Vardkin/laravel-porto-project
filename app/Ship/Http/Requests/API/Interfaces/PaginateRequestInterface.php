<?php

namespace LaravelPorto\Ship\Http\Requests\API\Interfaces;

interface PaginateRequestInterface
{
    public function getLimit(): ?int;

    public function getOffset(): ?int;
}
