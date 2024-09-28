<div class="mt-3">
    @if ($row->status == 1)
        <span class="badge bg-light-success fs-7">{{__('messages.employee_payroll.paid')}}</span>
    @else
        <span class="badge bg-light-danger fs-7">{{__('messages.employee_payroll.unpaid')}}</span>
    @endif
</div>
