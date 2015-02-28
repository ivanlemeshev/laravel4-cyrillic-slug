# Laravel 4 Cyrillic Slug

[![Latest Stable Version](https://poser.pugx.org/ivanlemeshev/laravel4-cyrillic-slug/v/stable.svg)](https://packagist.org/packages/ivanlemeshev/laravel4-cyrillic-slug) [![Total Downloads](https://poser.pugx.org/ivanlemeshev/laravel4-cyrillic-slug/downloads.svg)](https://packagist.org/packages/ivanlemeshev/laravel4-cyrillic-slug) [![Latest Unstable Version](https://poser.pugx.org/ivanlemeshev/laravel4-cyrillic-slug/v/unstable.svg)](https://packagist.org/packages/ivanlemeshev/laravel4-cyrillic-slug) [![License](https://poser.pugx.org/ivanlemeshev/laravel4-cyrillic-slug/license.svg)](https://packagist.org/packages/ivanlemeshev/laravel4-cyrillic-slug)

## Supported Alphabets

* Russian
* Kazakh
* Ukrainian

## Installation

You should install this package through Composer.

Edit your project's `composer.json` file to require `ivanlemeshev/laravel-cyrillic-slug`.

    "require": {
        "ivanlemeshev/laravel-cyrillic-slug": "1.0.0"
    },

Next, update Composer from the Terminal:
    `composer update`

Once this operation completes, the final step is to add the service provider.
Open `app/config/app.php`, and add a new item to the providers array.

  `'Ivanlemeshev\LaravelCyrillicSlug\SlugServiceProvider',`

And add a new item to the aliases array.

  `'Slug' => 'Ivanlemeshev\LaravelCyrillicSlug\Facades\Slug',`

## Usage

Call of the method: `Slug::make($text)`

Call of the method with specific separator: `Slug::make($text, '_')`.
