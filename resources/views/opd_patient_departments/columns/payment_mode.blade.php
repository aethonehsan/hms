<div class="d-flex align-items-center justify-content-center mt-2">
    @if ($row->payment_mode == 1)
        <span class="badge bg-light-primary">{{ __('messages.transaction_filter.cash')}}</span>
    @elseif ($row->payment_mode == 2)
        <span class="badge bg-light-success">{{ __('messages.transaction_filter.cheque')}}</span>
    @endif
</div>
