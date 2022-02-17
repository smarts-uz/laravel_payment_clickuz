<?php

namespace Teamprodev\Laravel_Payment_Clickuz\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    use HasFactory;
    protected $fillable = ['click_trans_id','service_id','click_paydoc_id','merchant_trans_id','merchant_prepare_id','amount','action','error','error_note','sign_time','sign_string'];
}
