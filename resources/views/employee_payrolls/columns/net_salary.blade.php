@if(!empty($row->net_salary))
    <p class="cur-margin mt-3 {{getCurrentLoginUserLanguageName() == 'ar' ? 'text-start' : ''}}">{{ getCurrencyFormat($row->net_salary) }}</p>
@else
 {{__('messages.common.n/a')}}
@endif
