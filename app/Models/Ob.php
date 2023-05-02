<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ob extends Model
{
    use HasFactory, HasAdvancedFilter, SoftDeletes;

    public $table = 'obs';

    protected $dates = [
        'payment_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'payment_date',
        'company',
        'remitter',
        'obs_name',
        'vessel',
        'purpose',
        'inv_num',
        'memo_num',
        'inv_amount',
        'comp_ref',
        'bank_ref',
        'amount_rec',
        'b_charge',
        'l_amount',
        'accumulated',
        'remarks',
    ];

    public $orderable = [
        'id',
        'payment_date',
        'company',
        'remitter',
        'obs_name',
        'vessel',
        'purpose',
        'inv_num',
        'memo_num',
        'inv_amount',
        'comp_ref',
        'bank_ref',
        'amount_rec',
        'b_charge',
        'l_amount',
        'accumulated',
        'remarks',
    ];

    public $filterable = [
        'id',
        'payment_date',
        'company',
        'remitter',
        'obs_name',
        'vessel',
        'purpose',
        'inv_num',
        'memo_num',
        'inv_amount',
        'comp_ref',
        'bank_ref',
        'amount_rec',
        'b_charge',
        'l_amount',
        'accumulated',
        'remarks',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getPaymentDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('project.date_format')) : null;
    }

    public function setPaymentDateAttribute($value)
    {
        $this->attributes['payment_date'] = $value ? Carbon::createFromFormat(config('project.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCreatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getUpdatedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }

    public function getDeletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('project.datetime_format')) : null;
    }
}
