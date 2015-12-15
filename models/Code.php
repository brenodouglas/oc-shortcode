<?php namespace BrenoDouglas\Shortcode\Models;

use Model;

/**
 * Code Model
 */
class Code extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'brenodouglas_shortcode_codes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}