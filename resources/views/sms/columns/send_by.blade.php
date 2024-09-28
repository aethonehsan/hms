@if($row->sendBy)
    {{ $row->sendBy->first_name.' '.$row->sendBy->last_name }}
@else
    {{ __('messages.common.n/a') }}
@endif
