<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Role extends Model
{
    protected $fillable = ['title'];
    protected $hidden = [];
    
    
    public static function boot()
    {
        parent::boot();
static::addGlobalScope('team_admin_access', function ($builder) {
        if(auth()->check() && !app()->runningInConsole() && !auth()->user()->role->contains(1)){
            $builder->where('id', '!=', 1);
        }
});
    }
    
    public function permission()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
    
}
