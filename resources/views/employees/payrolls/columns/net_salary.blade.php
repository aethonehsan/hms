@if (!empty($row->net_salary))
    <p class="cur-margin {{ getLoggedInUser()->language == 'ar' ? 'text-start' : 'text-end' }}">
        {{ getCurrencyFormat($row->net_salary) }} </p>
@else
    <p class="{{ getLoggedInUser()->language == 'ar' ? 'text-start' : 'text-end' }}">{{ __('messages.common.n/a') }}</p>
@endif
