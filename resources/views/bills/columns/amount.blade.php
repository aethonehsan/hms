<div class="d-flex align-items-center justify-content-end mt-2">
    @if(!empty($row->amount))
        <p class="cur-margin  {{getCurrentLoginUserLanguageName() == 'ar' ? 'text-start ms-5' : 'text-end me-5'}}">{{ getCurrencyFormat($row->amount) }}
            @else
                {{ __('messages.common.n/a') }}
    @endif
</div>
