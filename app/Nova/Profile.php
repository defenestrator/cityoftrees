<?php

namespace Cot\Nova;

use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Cot\Image;

class Profile extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \Cot\Profile::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'screen_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'screen_name', 'email', 'first_name', 'last_name', 'facebook'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Uuid')->sortable()->creationRules('unique:profiles,uuid')->exceptOnForms()->hideWhenCreating()->hideFromIndex(),
            BelongsTo::make('User'),
            Avatar::make('Avatar')->maxWidth(400),
            Text::make('Screen Name')
                ->sortable()
                ->rules('max:245'),

            Text::make('First Name')
                ->sortable()
                ->rules('max:254'),

            Text::make('Last Name')
                ->sortable()
                ->rules('max:254'),

            Text::make('Facebook')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

            Text::make('Instagram')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

            Number::make('Phone')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

            Text::make('Rollitup')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

            Text::make('THC Farmer', 'thcfarmer')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

            Text::make('420 Mag', 'four20mag')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

            Text::make('Strainly')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

            Text::make('Leafly')
                ->sortable()
                ->rules('max:254')
                ->hideFromIndex(),

        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
