<?php

namespace App\Models\Module;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MembersModel extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'data_members';
    protected $fillable = [
        'name',
    ];
}
