@if ($row->status == 1)
    <span class="badge bg-light-success">{{__('messages.paid')}}</span>
@elseif ($row->status == 0)
    <span class="badge bg-light-danger">{{__('messages.unpaid')}}</span>
@endif
