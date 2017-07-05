<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
  static $password;
  $randMobile = '+6592';
  for ($i = 0; $i < 6; $i++) {
    $randMobile .= mt_rand(1, 9);
  }
  return [
    'name'           => $faker->name,
    'email'          => $faker->unique()->safeEmail,
    'password'       => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
    'mobile'         => $randMobile
    ];
});

$factory->define(App\Blog\Post::class, function (Faker\Generator $faker) {
  $content = $faker->unique()->text(1000);
  $excerpt = str_limit($content, 100);
  return [
    'title'            => $faker->sentence(3, true),
    'author_id'        => 1,
    'seo_title'        => null,
    'excerpt'          => $excerpt,
    'body'             => "<p>{$content}</p>",
    'image'            => 'posts/nlje9NZQ7bTMYOUG4lF1.jpg',
    'slug'             => function (array $post) {
      return $post['title'];
    },
    'meta_description' => 'This is the meta description',
    'meta_keywords'    => 'keyword1, keyword2, keyword3',
    'status'           => 'PUBLISHED',
    'featured'         => 0,
  ];
});



