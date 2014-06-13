Laravel 4 Cyrillic Slug
========

Installation
-------
You should install this package through Composer.

Edit your project's `composer.json` file to require `ivanlemeshev/laravel4-cyrillic-slug`.

    "require": {
        "ivanlemeshev/laravel4-cyrillic-slug": "dev-master"
    },

Next, update Composer from the Terminal:
    `composer update`

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

  `'Ivanlemeshev\Laravel4CyrillicSlug\SlugServiceProvider',`

And add a new item to the aliases array.

  `'Slug' => 'Ivanlemeshev\Laravel4CyrillicSlug\Facades\Slug',`

Usage
-------
Call of the method: `Slug::make($text)`

Call of the method with specific separator: `Slug::make($text, '_')`.

License
-------

The MIT License (MIT)

Copyright (c) 2013-2014 Ivan Lemeshev

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
