<?php

namespace App\Imports;

use App\Models\Invitation;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class InvitationsImport implements ToCollection
{
    public $event_id;

    public function  __construct($event_id)
    {
        $this->event_id = $event_id;
    }
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Invitation::create([
            'receiver_name' => $row[0],
            'guests_number' => $row[1],
            'event_id' => $this->event_id,
            ]);
        }
    }
}
