<div class="d-flex justify-content-end  {{getCurrentLoginUserLanguageName() == 'ar' ? 'ms-5' : 'me-5'}}">
    @if(!empty($row->buying_price))
        {{ getCurrencyFormat($row->buying_price) }}
    @else
        {{ __('messages.common.n/a') }}
    @endif
</div>
