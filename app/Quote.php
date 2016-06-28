<?php

namespace App;

use Carbon\Carbon;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Quote
 * @package App\Models
 */
class Quote extends Model
{
    use SoftDeletes;

    public $table = 'quotes';
    

    protected $dates = ['deleted_at', 'deadline'];


    public $fillable = [
        'topic',
        'phase',
        'deadline',
        'description',
        'special_conditions',
        'address',
        'zipcode',
        'city',
        'country'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'topic' => 'string',
        'phase' => 'string',
        'description' => 'string',
        'special_conditions' => 'string',
        'address' => 'string',
        'zipcode' => 'string',
        'city' => 'string',
        'country' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static function rules()
    {
        return [

            'topic' => 'required|max:255|string',
            'phase' => 'required|max:255|string',
            'deadline' => 'required',
            'description' => 'string',
            'special_conditions' => 'string',
            'address' => 'required|string',
            'zipcode' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',

            /*Relations*/

            'account_name_id' => 'required|integer',
            'contact_name_id' => 'required|integer',
            'quote_owner_id' => 'required|integer'


        ];
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function account()
    {
        return $this->belongsTo('App\Account');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }

    //MUTATORS
    /**
     * Mutate deadline to FR with Carbon
     * @param $date
     * @return string
     */
    public function getDeadlineAttribute($date)
    {
        return Carbon::parse($date)->format('d/m/Y');
    }
    /**
     * Mutate deadline from FR to Carbon date
     * @param $date
     */
    public function setDeadlineAttribute($date)
    {
        $this->attributes['deadline'] = Carbon::createFromFormat('d/m/Y', $date);
    }
}
