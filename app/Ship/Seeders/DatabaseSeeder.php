<?php

namespace LaravelPorto\Ship\Seeders;

use Illuminate\Database\Seeder;
use LaravelPorto\Containers\Book\Data\Factories\BookFactory;
use LaravelPorto\Containers\Book\Models\Book;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    (new BookFactory(10))->create();
  }
}
