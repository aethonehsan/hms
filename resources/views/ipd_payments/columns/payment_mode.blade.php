<div class="d-flex justify-content-center">
    <span class="badge bg-light-success">
        @if($row->payment_mode== 1)
         {{ __('messages.transaction_filter.cash') }}
        @elseif($row->payment_mode== 2)
         {{ __('messages.transaction_filter.cheque') }}
        @elseif($row->payment_mode== 3)
         {{ __('messages.transaction_filter.stripe') }}
        @elseif($row->payment_mode== 4)
         {{ __('messages.transaction_filter.paypal') }}
        @elseif($row->payment_mode== 5)
         {{ __('messages.transaction_filter.razorpay') }}
        @elseif($row->payment_mode== 7)
         {{ __('messages.transaction_filter.paystack') }}
        @elseif($row->payment_mode== 8)
        PhonePe
        @elseif($row->payment_mode== 9)
        FlutterWave
        @endif

    </span>
</div>
