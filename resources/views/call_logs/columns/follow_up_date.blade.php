<div class="d-flex align-items-center">
    @if ($row->follow_up_date === null)
        {{__('messages.common.n/a')}}
    @else
        <div class="badge bg-light-info">
            <div>
                {{ \Carbon\Carbon::parse($row->follow_up_date)->isoFormat('Do MMM, Y')}}
            </div>
        </div>
    @endif
</div>
