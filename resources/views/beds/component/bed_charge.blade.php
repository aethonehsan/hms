<p class="{{getLoggedInUser()->language == 'ar' ? 'text-start' : 'text-end'}} my-auto">
    @if(!Empty($row->charge))
        {{getCurrencyFormat($row->charge)}}
    @else
    {{ __('messages.common.n/a') }}
    @endif
</p>
