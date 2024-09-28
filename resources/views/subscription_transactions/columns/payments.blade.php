@if ($row->payment_type)
    <span data-id="{{ $row->payment_type }}"
        class="badge bg-light-primary text-decoration-none">{{ 'Stripe' }}</span>
@elseif ($row->payment_type == 2)
    <a data-id="{{ $row->payment_type }}" class="badge bg-light-success text-decoration-none">{{ 'Paypal' }}</a>
@elseif ($row->payment_type == 3)
    <a data-id="{{ $row->payment_type }}" class="badge bg-light-info text-decoration-none">{{ 'Razorpay' }}</a>
@elseif ($row->payment_type == 4)
    <a data-id="{{ $row->payment_type }}" class="badge bg-light-primary text-decoration-none">{{ 'Cash' }}</a>
@elseif ($row->payment_type == 5)
    <a data-id="{{ $row->payment_type }}" class="badge bg-light-warning text-decoration-none">{{ 'Paytm' }}</a>
@elseif ($row->payment_type == 6)
    <a data-id="{{ $row->payment_type }}" class="badge bg-light-primary text-decoration-none">{{ 'Paystack' }}</a>
@elseif ($row->payment_type == 7)
    <a data-id="{{ $row->payment_type }}" class="badge bg-light-success text-decoration-none">{{ 'Phonepe' }}</a>
@elseif ($row->payment_type == 8)
    <a data-id="{{ $row->payment_type }}" class="badge bg-light-info text-decoration-none">{{ 'Flutterwave' }}</a>
@else
    {{ __('messages.common.n/a') }}
@endif
