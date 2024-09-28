<div class="d-flex align-items-center">
    @if($row->payment_status == App\Models\MedicineBill::UNPAID)
    <span class="badge bg-light-danger">{{ __('messages.unpaid') }}</span>
    @else
    <span class="badge bg-light-success">{{  __('messages.paid') }}</span>
    @endif
</div>
