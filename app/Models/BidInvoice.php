<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidInvoice extends Model
{
    use HasFactory;
    protected $table = 'bid_invoices';
    protected $fillable = [
      'bidder_id',
      'owner_id',
      'project_id',
      'bid_id',
      'total',
      'site_commission',
      'fixed_price',
      'commission',
      'bid_status'
    ];
}
