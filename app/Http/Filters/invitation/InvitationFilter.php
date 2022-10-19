<?php

namespace App\Http\Filters\invitation;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Invitation;
use App\Http\Resources\invitation\InvitationResource;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\Filters\Filter;

class InvitationFilter
{
    public static function execute($request)
    {

        $invitation = QueryBuilder::for(Invitation::class)
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

        return InvitationResource::collection($invitation);
    }
}