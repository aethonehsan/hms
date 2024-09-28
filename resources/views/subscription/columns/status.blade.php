@if($row->status == 1)
    <span class="badge bg-light-success">{{ __('messages.common.active') }}</span>
@elseif($row->status == 0)
    <span class="badge bg-light-danger">{{ __('messages.common.deactive') }}</span>
@endif
