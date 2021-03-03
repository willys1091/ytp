<?php

namespace App\Models;

use App\Models\Charity;
use Illuminate\Database\Eloquent\Model;

class MidtransResponse extends Model
{
    protected $fillable = [
        'charity_id',
        'transaction_time',
        'transaction_status',
        'transaction_id',
        'status_message',
        'status_code',
        'signature_key',
        'payment_type',
        'order_id',
        'masked_card',
        'gross_amount',
        'fraud_status',
        'currency',
        'channel_response_message',
        'channel_response_code',
        'card_type',
        'bank',
        'approval_code',
        'raw_data',
    ];

    // Relationship
    public function charity()
    {
        return $this->belongsTo(Charity::class, 'charity_id');
    }
}
