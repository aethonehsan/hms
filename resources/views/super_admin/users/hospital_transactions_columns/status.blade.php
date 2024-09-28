@if ($row->status == 1)
    <span class="badge bg-light-success">{{ __('messages.paid') }}</span>
@else
    {{ __('messages.common.n/a') }}
@endif
