@if ($row->frequency == 1)
    {{ __('messages.month') }}
@else
    {{ __('messages.year') }}
@endif
