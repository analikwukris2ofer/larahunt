<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
}
//uses the datamodel and users created from ListingFactory.php and DatabaseSeeder.php. It extends Model
// which has so many inbuilt methods which are readily available to be called in web.php