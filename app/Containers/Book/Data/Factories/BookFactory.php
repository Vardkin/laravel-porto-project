<?php

namespace LaravelPorto\Containers\Book\Data\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelPorto\Containers\Book\Models\Book;

class BookFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Book::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    $this->faker->locale('en_US');
    return [
      'title' => $this->faker->catchPhrase(),
      'author_id' => rand(1, 10),
      'description' => $this->faker->sentence(11),
      'num_of_pages' => rand(101, 789),
      'publish_date' => $this->faker->dateTimeThisCentury(),
      'publisher_id' => rand(11, 21),
      'ISBN' => $this->faker->isbn13(),
      'edition' => rand(1, 3),
    ];
  }

}
