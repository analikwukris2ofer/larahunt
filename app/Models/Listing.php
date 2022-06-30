<?php

namespace App\Models;

class Listing {
  public static function all() {
    return [
      [
        'id' => 1,
        'title' => 'Listing One',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aut. Voluptas, dolorum ea pariatur officiis iste iure quod minima reiciendis aliquam provident, quibusdam sit ipsa ut maiores. At, modi? Nihil!'
    ],
    [
        'id' => 2,
        'title' => 'Listing Two',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, aut. Voluptas, dolorum ea pariatur officiis iste iure quod minima reiciendis aliquam provident, quibusdam sit ipsa ut maiores. At, modi? Nihil!'
    ]
    ];
  }

  public static function find($id) {
    $listings = self::all();

    foreach($listings as $listing) {
      if($listing['id'] == $id) {
        return $listing;
      }
    }
  }
}