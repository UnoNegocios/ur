<?php

namespace App\Http\Filters\invitation;

use Spatie\QueryBuilder\QueryBuilder;
use App\Models\Invitation;
use App\Http\Resources\invitation\InvitationResource;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\Filters\Filter;
use App\Http\Resources\invitation\InvitationCollection;

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

        return InvitationResource::collection($invitation)
                ->additional([
                    'total_accepted_invitations' => $invitation->where('is_confirmed', 1)->count(),
                    'total_rejected_invitations' => $invitation->where('is_confirmed', 0)->count(),
                ]);
    }
}