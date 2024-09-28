@if($row->qualification)
    <span>{{ $row->qualification }}</span>
@else
    <span>{{ __('messages.common.n/a') }}</span>
@endif
