<?php namespace Ivanlemeshev\Laravel4CyrillicSlug\Facades;

use Illuminate\Support\Facades\Facade;

class Slug extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel4-cyrillic-slug';
    }
}
