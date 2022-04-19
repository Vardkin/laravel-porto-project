<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('books', function (Blueprint $table) {
      $table->id();

      $table->string('title');
      $table->string('original_title')->nullable();
      $table->unsignedBigInteger('author_id');
      $table->text('description');
      $table->string('image_guid')->nullable();
      $table->unsignedBigInteger('cover_type_id')->nullable();
      $table->integer('num_of_pages');
      $table->dateTime('publish_date');
      $table->unsignedBigInteger('publisher_id');
      $table->string('ISBN');
      $table->string('edition');

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('books');
  }
}
