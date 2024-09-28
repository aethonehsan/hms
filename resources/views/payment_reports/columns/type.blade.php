<div class="mt-2 d-flex justify-content-center">
    @if ($row->accounts->type == 1)
        <span class="badge bg-light-danger">{{__('messages.accountant.debit')}}</span>
    @else
        <span class="badge bg-light-success">{{__('messages.accountant.credit')}}</span>
    @endif
</div>
