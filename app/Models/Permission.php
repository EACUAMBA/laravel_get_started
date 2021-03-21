<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permission';
    protected $primaryKey = 'id';
    public $incrementing = "true";

    protected $attributes = [
        'name' => 'Convidado',
        'can_create' => '0',
        'can_delete' => '0',
        'can_edit' => '0',
        'can_see' => '1',

    ];

    protected $fillable = [
        'name',
        'can_create',
        'can_delete',
        'can_edit',
        'can_see'
    ];

    public function person(){
        $this->hasMany(Person::class, 'permission_id', 'id');
    }

}
