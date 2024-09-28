<div class="d-flex align-items-center mt-2">
    @if ($row->user->dob === null)
        {{ __('messages.common.n/a')}}
    @else
        {{ \Carbon\Carbon::parse($row->user->dob )->isoFormat('Do MMM, YYYY')}}
    @endif
</div>
