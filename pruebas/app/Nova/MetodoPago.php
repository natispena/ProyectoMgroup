<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;

class MetodoPago extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\MetodoPago::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            ID::make(__('ID'), 'id')->sortable(),
            
            Text::make('Moneda')
                ->sortable()
                ->rules('required', 'min:2', 'max:150'),
            Text::make('Titular')
                ->sortable()
                ->rules('required', 'min:2', 'max:150'),
            Text::make('Documento')
                ->sortable()
                ->rules('required', 'min:2', 'max:150'),
            Number::make('Numero')
                ->sortable()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),
            Text::make('Tipo')
                ->sortable()
                ->rules('required', 'min:2', 'max:150'),
            Number::make('Cuenta')
                ->sortable()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),
            Number::make('Impuesto')
                ->sortable()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),
            Number::make('Costo')
                ->sortable()
                ->creationRules('required', 'numeric')
                ->updateRules('nullable', 'numeric'),
            BelongsToMany::make('Clientes'),
            HasMany::make('Pagos')
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
