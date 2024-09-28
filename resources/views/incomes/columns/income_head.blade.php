<div class="d-flex align-items-center">
     @if(App\Models\Income::FILTER_INCOME_HEAD[$row->income_head] === 'Canteen Rent')
     {{ __('messages.income_filter.canteen_rate') }}
     @elseif(App\Models\Income::FILTER_INCOME_HEAD[$row->income_head] === 'Hospital Charges')
     {{ __('messages.income_filter.hospital_charges') }}
     @elseif(App\Models\Income::FILTER_INCOME_HEAD[$row->income_head] === 'Special Campaign')
     {{ __('messages.income_filter.special_campaign') }}
     @else
     {{ __('messages.income_filter.vehicle_stand_charge') }}    
     @endif
</div>
