<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ClientDocument
 *
 * @package App
 * @property string $project
 * @property string $title
 * @property text $description
 * @property string $file
*/
class ClientDocument extends Model
{
    protected $fillable = ['title', 'description', 'file', 'project_id'];
    protected $hidden = [];
    public static $searchable = [
    ];
    
    public static function boot()
    {
        parent::boot();

        ClientDocument::observe(new \App\Observers\UserActionsObserver);
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
