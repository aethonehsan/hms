@if($row->plan_frequency == 1)
    <span class="badge bg-light-success">{{__('messages.subscription.month')}}</span>
@elseif($row->plan_frequency == 2)
    <span class="badge bg-light-danger">{{ __('messages.subscription.year') }}</span>
@endif
