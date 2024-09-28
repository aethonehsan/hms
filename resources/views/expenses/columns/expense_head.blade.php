
@if($row->expense_head == 1)
    {{ __('messages.expense_filter.building_rent') }}
@elseif($row->expense_head == 2)
    {{ __('messages.expense_filter.equipments') }}
@elseif($row->expense_head == 3)
    {{ __('messages.expense_filter.electricity_bill') }}
@elseif($row->expense_head == 4)
    {{ __('messages.expense_filter.telephone_bill') }}
@elseif($row->expense_head == 5)
    {{ __('messages.expense_filter.power_generator_fuel_charge') }}
@elseif($row->expense_head == 6)
    {{ __('messages.expense_filter.tea_expense') }}
@endif
