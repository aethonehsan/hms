@if(isset($row->price))
    <p class="mb-0 {{getCurrentLoginUserLanguageName() == 'ar' ? 'text-start': ''}}">{{ getAdminCurrencyFormat($row->currency,$row->price) }} </p>
@else
    {{__('messages.common.n/a')}}
@endif
