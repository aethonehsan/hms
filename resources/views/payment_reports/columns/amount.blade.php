<div class="mt-2 ">
    @if (!empty($row->amount))
        <p class="cur-margin me-5 {{ getLoggedInUser()->language == 'ar' ? 'text-start ps-5' : 'text-end' }}">
            {{ getCurrencyFormat($row->amount) }}</p>
    @else
        {{ __('messages.common.n/a') }}
    @endif
</div>
