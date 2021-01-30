<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Category::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Section::class, static function (Faker\Generator $faker) {
    return [
        'section_name' => $faker->sentence,
        'cat_id' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SectionContent::class, static function (Faker\Generator $faker) {
    return [
        'h1' => $faker->text(),
        'sub_text' => $faker->text(),
        'sec_id' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SocialChannel::class, static function (Faker\Generator $faker) {
    return [
        'channel_name' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SocialLink::class, static function (Faker\Generator $faker) {
    return [
        'links' => $faker->text(),
        'channel_id' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Process::class, static function (Faker\Generator $faker) {
    return [
        'h1' => $faker->text(),
        'sub_text' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\ProcessContent::class, static function (Faker\Generator $faker) {
    return [
        'step_name' => $faker->sentence,
        'h1' => $faker->text(),
        'sub_text' => $faker->text(),
        'process_id' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SurveyUser::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'phone' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Qstype::class, static function (Faker\Generator $faker) {
    return [
        'qs_type' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SurveyQ::class, static function (Faker\Generator $faker) {
    return [
        'cat' => $faker->randomNumber(5),
        'qs' => $faker->text(),
        'sub_text' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Survey::class, static function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(5),
        'qs_id' => $faker->randomNumber(5),
        'choice' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\General::class, static function (Faker\Generator $faker) {
    return [
        'sector_name' => $faker->sentence,
        'h1' => $faker->text(),
        'sub_text' => $faker->text(),
        'href' => $faker->sentence,
        'image' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\QsOpt::class, static function (Faker\Generator $faker) {
    return [
        'qs_id' => $faker->randomNumber(5),
        'qs_type' => $faker->randomNumber(5),
        'title' => $faker->text(),
        'sub_text' => $faker->text(),
        'minimum' => $faker->randomNumber(5),
        'maximum' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SurveyQ::class, static function (Faker\Generator $faker) {
    return [
        'cat' => $faker->randomNumber(5),
        'qs' => $faker->text(),
        'sub_text' => $faker->text(),
        'qs_type' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\QsOpt::class, static function (Faker\Generator $faker) {
    return [
        'qs_id' => $faker->randomNumber(5),
        'title' => $faker->text(),
        'sub_text' => $faker->text(),
        'minimum' => $faker->randomNumber(5),
        'maximum' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Venue::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'type' => $faker->sentence,
        'sub_type' => $faker->sentence,
        'address' => $faker->text(),
        'size' => $faker->randomNumber(5),
        'accomodation' => $faker->randomNumber(5),
        'price' => $faker->randomNumber(5),
        'availiblity' => $faker->sentence,
        'info' => $faker->text(),
        'about' => $faker->text(),
        'image' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Contact::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'subject' => $faker->sentence,
        'message' => $faker->text(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Contactvenue::class, static function (Faker\Generator $faker) {
    return [
        'category' => $faker->sentence,
        'venue_name' => $faker->sentence,
        'name' => $faker->firstName,
        'email' => $faker->email,
        'phone' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Type::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\SubType::class, static function (Faker\Generator $faker) {
    return [
        'type_id' => $faker->randomNumber(5),
        'name' => $faker->firstName,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Venue::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'type' => $faker->randomNumber(5),
        'sub_type' => $faker->randomNumber(5),
        'address' => $faker->text(),
        'size' => $faker->randomNumber(5),
        'accomodation' => $faker->randomNumber(5),
        'price' => $faker->randomNumber(5),
        'availiblity' => $faker->sentence,
        'info' => $faker->text(),
        'about' => $faker->text(),
        'image' => $faker->sentence,
        'admin_id' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Contactvenue::class, static function (Faker\Generator $faker) {
    return [
        'category' => $faker->sentence,
        'venue_name' => $faker->sentence,
        'name' => $faker->firstName,
        'email' => $faker->email,
        'phone' => $faker->sentence,
        'admin_id' => $faker->randomNumber(5),
        
        
    ];
});
