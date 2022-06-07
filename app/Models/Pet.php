<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

define('PATH_PETS', '../storage/app/public/Pets.json');


class Pet extends Model
{

    public function readJson($Path){
        $contents = file_get_contents($Path);
        $pets = json_decode($contents, true);
        if (is_null($pets)) return [];
        return $pets;
    }

    public function getPets() {
        return self::readJson(PATH_PETS);
    }

    public function getByName($name){
        $pets=$this->getPets();
        foreach ($pets as $record){
            if ($record['img'] == $name){
                return $record;
            }
        }
        return null;
    }
}
