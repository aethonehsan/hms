@if ($row->charge_type_id === 1)
{{ __('messages.charge_filter.procedure') }}
@elseif ($row->charge_type_id  === 2)
{{ __('messages.charge_filter.investigation') }}
@elseif ($row->charge_type_id  === 3)
{{ __('messages.charge_filter.supplier') }}
@elseif ($row->charge_type_id === 4)
{{ __('messages.charge_filter.operation_theater') }}
@else
{{ __('messages.charge_filter.others') }}
@endif
