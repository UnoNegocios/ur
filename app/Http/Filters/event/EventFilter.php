<?php

namespace App\Http\Filters\event;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Event;
use App\Http\Resources\event\EventResource;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\Filters\Filter;


class EventFilter
{
    public static function execute($request)
    {

        $event = QueryBuilder::for(Event::class)
        ->allowedFilters([
            'receiver_name',
            AllowedFilter::exact('id'),
            AllowedFilter::exact('is_confirmed'),
            AllowedFilter::exact('event_id'),

        ])
        ->allowedSorts(
            'receiver_name',
            'reciever_phone',
            'receiver_email',
            'guests_number',
            'qr_code_image',
            'is_confirmed',
        )
        ->orderBy('created_at', 'DESC')
        ->paginate($request->itemsPerPage)
        ->appends(request()->query());

        return EventResource::collection($event);
    }
}