<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientNote
 *
 * @package App
 * @property string $project
 * @property text $text
*/
class ClientNote extends Model
{
    protected $fillable = ['text', 'project_id'];
    protected $hidden = [];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        ClientNote::observe(new \App\Observers\UserActionsObserver);
    }

    /**
     * Set to null if empty
     * @param $input
     */
    public function setProjectIdAttribute($input)
    {
        $this->attributes['project_id'] = $input ? $input : null;
    }
    
    public function project()
    {
        return $this->belongsTo(ClientProject::class, 'project_id');
    }
    
}
