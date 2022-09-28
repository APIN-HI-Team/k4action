<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static select(string $string, $raw)
 */
class TreatmentCurrent extends Model
{
    use HasFactory;

    public $table = "linelist_full_apin";
}
