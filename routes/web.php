<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
	return view('home', [
		'url' => '/',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/about', function () {
	return view('about', [
		'url' => '/about',
		'title' => 'About SteamDiesel - Website & App Development in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/portfolio', function () {
	return view('portfolio', [
		'url' => '/portfolio',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/stack', function () {
	return view('stack', [
		'url' => '/stack',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services', function () {
	return view('services', [
		'url' => '/services',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/contact', function () {
	return view('contact', [
		'url' => '/contact',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/stack/laravel', function () {
	return view('laravel', [
		'url' => '/stack/laravel',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/stack/vuejs', function () {
	return view('vuejs', [
		'url' => '/stack/vuejs',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/stack/tailwind', function () {
	return view('tailwind', [
		'url' => '/stack/tailwind',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/websites', function () {
	return view('websites', [
		'url' => '/services/websites',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/apps', function () {
	return view('apps', [
		'url' => '/services/apps',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/design', function () {
	return view('design', [
		'url' => '/services/design',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/marketing', function () {
	return view('marketing', [
		'url' => '/services/marketing',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/marketing/ppc', function () {
	return view('ppc', [
		'url' => '/services/marketing/ppc',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/marketing/seo', function () {
	return view('seo', [
		'url' => '/services/marketing/seo',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/marketing/social_media', function () {
	return view('social_media', [
		'url' => '/services/marketing/social_media',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});
Route::get('/services/hosting', function () {
	return view('hosting', [
		'url' => '/services/hosting',
		'title' => 'Website & App Developer in Brisbane',
		'description' => 'Create your next website or application with a Brisbane based Full Stack Web Developer using Laravel, Vue Js and Tailwind.']);
});

