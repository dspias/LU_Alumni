<?php

namespace App\Models\Events;

use Illuminate\Database\Eloquent\Model;
use App\Models\Events\Traits\EventsRelations;
use App\Models\Events\Traits\EventsScopes;

class Events extends Model
{

    /**
     *  use EventsRelations and EventsScopes
     */
    
    use EventsRelations, EventsScopes;
    
    
}
