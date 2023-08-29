<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];


    protected function signedPrice(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->price ? "$" . $this->price : null,
        );
    }


    protected function price(): Attribute
    {
        return Attribute::make(
            set: fn (string $price) => str_replace('$', '', $price)
        );
    }


    protected function artistsArray(): Attribute
    {
        return Attribute::make(
            get: fn () => explode(',', $this->artists),
        );
    }


    protected function writersArray(): Attribute
    {
        return Attribute::make(
            get: fn () => explode(', ', $this->writers),
        );
    }
}
