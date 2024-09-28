<div class="d-flex justify-content-end">
@if(!empty($row->service_tax))
        <p class="cur-margin">  {{ getCurrencyFormat($row->service_tax) }}</p>
@else
{{__('messages.common.n/a')}}
@endif
</div>
