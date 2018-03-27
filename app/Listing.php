<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Listing
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $title
 * @property string $address
 * @property string $about
 * @property bool $amenity_wifi
 * @property bool $amenity_pets_allowed
 * @property bool $amenity_tv
 * @property bool $amenity_kitchen
 * @property bool $amenity_breakfast
 * @property bool $amenity_laptop
 * @property string|null $price_per_night
 * @property string|null $price_extra_people
 * @property string|null $price_weekly_discount
 * @property string|null $price_monthly_discount
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAmenityBreakfast($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAmenityKitchen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAmenityLaptop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAmenityPetsAllowed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAmenityTv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereAmenityWifi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing wherePriceExtraPeople($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing wherePriceMonthlyDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing wherePricePerNight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing wherePriceWeeklyDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Listing whereTitle($value)
 */
class Listing extends Model
{
    protected $casts = [
            'amenity_wifi'         => 'boolean',
            'amenity_pets_allowed' => 'boolean',
            'amenity_tv'           => 'boolean',
            'amenity_kitchen'      => 'boolean',
            'amenity_breakfast'    => 'boolean',
            'amenity_laptop'       => 'boolean'
        ];
}
