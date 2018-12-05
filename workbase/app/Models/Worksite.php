<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worksite extends Model
{
    protected $table = 'worksites';

    protected $fillable = [
        'worksite_name',
        'address_line_1',
        'address_line_2',
        'address_line_3',
        'city',
        'state',
        'zip_code',
        'supervisory_district',
        'contact_person',
        'phone',
        'email',
        'worksite_sector',
        'city_or_county_department',
        'industry',
        'naics_code',
        'naics_description',
        'record_status',
        'department',
        'ada_complied'
    ];
}
