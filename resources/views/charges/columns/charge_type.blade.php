@if($row->charge_type == 1)
    <span class="badge bg-light-primary">{{__('messages.charge_filter.investigation')}}</span>
@elseif($row->charge_type == 2)
    <span class="badge bg-light-info">{{__('messages.charge_filter.operation_theater')}}</span>
@elseif($row->charge_type == 3)
    <span class="badge bg-light-success">{{__('messages.charge_filter.others')}}</span>
@elseif($row->charge_type == 4)
    <span class="badge bg-light-danger">{{__('messages.charge_filter.procedure')}}</span>
@else
    <span class="badge bg-light-warning">{{__('messages.charge_filter.supplier')}}</span>
@endif
