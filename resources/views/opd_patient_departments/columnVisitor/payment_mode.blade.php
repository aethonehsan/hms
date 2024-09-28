
@if($row->payment_mode == 1)
{{__('messages.transaction_filter.cash')}}
@elseif($row->payment_mode == 2)
{{__('messages.transaction_filter.cheque')}}
@endif
