<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function getReviews(){
        $contents = file_get_contents("../storage/app/public/Reviews.json");
        $reviews = json_decode($contents, true);
        if (is_null($reviews)) return [];
        return $reviews;
    }

}
