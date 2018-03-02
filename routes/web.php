<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Faker\Factory;

class User{}
class Tweet{}
class Profile{}

Route::get('/', function () {
    $faker = Factory::create();

    $user1= new User();
    $user1->name = $faker->name;
    $user1->handle = $faker->userName;
    $user1->image = $faker->imageUrl($width = 74, $height = 74);

    $user2= new User();
    $user2->name = $faker->name;
    $user2->handle = $faker->userName;
    $user2->image = $faker->imageUrl($width = 74, $height = 74);

    $tweet1 = new Tweet();
    $tweet1->user = $user1;
    $tweet1->handle = $user1;
    $tweet1->image = $user1;
    $tweet1->time = $faker->time($format = 'H:i:s', $max = 'now');
    $tweet1->content = $faker->text(280);
    $tweet1->commentCount = [];
    $tweet1->retweetCount = [];
    $tweet1->likeCount = [];

    $tweet2 = new Tweet();
    $tweet2->user = $user2;
    $tweet2->handle = $user2;
    $tweet2->image = $user2;
    $tweet2->time = $faker->time($format = 'H:i:s', $max = 'now');
    $tweet2->content = $faker->text(280);
    $tweet2->commentCount = [];
    $tweet2->retweetCount = [];
    $tweet2->likeCount = [];

    $profile1 = new Profile();
    $profile1->user = $user1;
    $profile1->handle = $user1;
    $profile1->location = $faker->cityPrefix . $faker->citySuffix . ", " . $faker->stateAbbr;
    $profile1->sentence = $faker->text($maxNbChars = 50) ;
    $profile1->dateJoined = $faker->date($format = 'Y-m-d', $max = 'now');
    $profile1->image = $faker->imageUrl();


    $data = [
        'users' => [$user1, $user2],
        'tweets'=> [$tweet1, $tweet2],
        'profiles'=> [$profile1],
    ];

    return view('welcome', $data);
});
