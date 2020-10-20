<?php

namespace App\Nova;
use Laravel\Nova\Fields\Text;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class Clubs extends Resource
{

    public static $model = \App\Models\Clubs::class;
    public static $title = 'title';


    public static $search = [
        'id',
    ];


    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'title'),
            Image::make('Изображение', 'img'),
            Text::make('Адрес', 'adress'),
            Text::make('Информация', 'info')
        ];
    }
}
