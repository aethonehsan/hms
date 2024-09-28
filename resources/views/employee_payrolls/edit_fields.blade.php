<div class="row gx-10 mb-5">
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('sr_no', __('messages.employee_payroll.sr_no').':', ['class' => 'form-label required']) }}
        {{ Form::text('sr_no', null, ['class' => 'form-control ', 'required','readonly', 'placeholder' => __('messages.employee_payroll.sr_no')]) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        @php $currentLang = app()->getLocale() @endphp
        {{ Form::label('payroll_id',__('messages.employee_payroll.payroll_id').':', ['class' => $currentLang == 'ru' ? 'label-display form-label required' : 'form-label required']) }}
        {{ Form::text('payroll_id', null, ['class' => 'form-control ', 'required','readonly', 'placeholder' => __('messages.employee_payroll.payroll_id')]) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('type',__('messages.employee_payroll.role').':', ['class' => 'form-label required  mb-3']) }}
        {{ Form::select('type', $types, $employeePayroll->type, ['id' => 'editEmployeePayrollType','class' => 'form-select employeePayrollType', 'required','placeholder' => __('messages.sms.select_role'),'data-control' => 'select2']) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('owner_id',__('messages.employee_payroll.employee').':', ['class' => 'form-label required mb-3']) }}
        {{ Form::select('owner_id', [], $employeePayroll->owner->id, ['id' => 'editEmployeePayrollOwnerType','class' => 'form-select EmployeePayrollOwnerType','required','disabled','data-control' => 'select2', 'placeholder' => __('messages.employee_payroll.select_employee') ]) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('month',__('messages.employee_payroll.month').':', ['class' => 'form-label required mb-3']) }}
        {{-- {{ Form::selectMonth('month',$employeePayroll->month, ['id' => 'editEmployeePayrollMonth','class' => 'form-select EmployeePayrollMonth','required','data-control' => 'select2']) }} --}}
        <select class="form-select status-selector " id="editEmployeePayrollMonth" data-control="select2" name="month">
            <option @selected($employeePayroll->month == 1) value="1">{{ __('messages.months.jan') }}</option>
            <option @selected($employeePayroll->month == 2) value="2">{{ __('messages.months.feb') }}</option>
            <option @selected($employeePayroll->month == 3) value="3">{{ __('messages.months.mar') }}</option>
            <option @selected($employeePayroll->month == 4) value="4">{{ __('messages.months.apr') }}</option>
            <option @selected($employeePayroll->month == 5) value="5">{{ __('messages.months.may') }}</option>
            <option @selected($employeePayroll->month == 6) value="6">{{ __('messages.months.jun') }}</option>
            <option @selected($employeePayroll->month == 7) value="7">{{ __('messages.months.jul') }}</option>
            <option @selected($employeePayroll->month == 8) value="8">{{ __('messages.months.aug') }}</option>
            <option @selected($employeePayroll->month == 9) value="9">{{ __('messages.months.sep') }}</option>
            <option @selected($employeePayroll->month == 10) value="10">{{ __('messages.months.oct') }}</option>
            <option @selected($employeePayroll->month == 11) value="11">{{ __('messages.months.nov') }}</option>
            <option @selected($employeePayroll->month == 12) value="12">{{ __('messages.months.dec') }}</option>
        </select>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('year', __('messages.employee_payroll.year').(':'), ['class' => 'form-label required mb-3']) }}
        {{ Form::text('year', null, ['class' => 'form-control ','onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'maxlength' => '4','required', 'placeholder' => __('messages.employee_payroll.year')]) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('status', __('messages.common.status').(':'), ['class' => 'form-label required  mb-3']) }}
        {{ Form::select('status', filterLangChange($status), null, ['id' => 'editEmployeePayrollStatus','class' => 'form-select EmployeePayrollStatus','required', 'data-control' => 'select2']) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('basic_salary', __('messages.employee_payroll.basic_salary').(':'), ['class' => 'form-label required mb-3']) }}
        {{ Form::text('basic_salary', null, ['id' => 'editEmployeePayrollBasicSalary','class' => 'form-control price-input EmployeePayrollBasicSalary','required', 'placeholder' => __('messages.employee_payroll.basic_salary'),'onkeyup' => 'if (parseInt(this.value.replace(/[^\d.]/g, "")) > 1000000) this.value = this.value.slice(0, -1)']) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('allowance', __('messages.employee_payroll.allowance').(':'), ['class' => 'form-label required mb-3']) }}
        {{ Form::text('allowance', null, ['id' => 'editEmployeePayrollAllowance','class' => 'form-control price-input EmployeePayrollAllowance','onkeyup' => 'if (parseInt(this.value.replace(/[^\d.]/g, "")) > 10000) this.value = this.value.slice(0, -1)','required', 'placeholder' => __('messages.employee_payroll.allowance')]) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('deductions', __('messages.employee_payroll.deductions').(':'), ['class' => 'form-label required mb-3']) }}
        {{ Form::text('deductions', null, ['id' => 'editEmployeePayrollDeductions','class' => 'form-control price-input EmployeePayrollDeductions','onkeyup' => 'if (parseInt(this.value.replace(/[^\d.]/g, "")) > 10000) this.value = this.value.slice(0, -1)','required', 'placeholder' => __('messages.employee_payroll.deductions')]) }}
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mb-5">
        {{ Form::label('net_salary', __('messages.employee_payroll.net_salary').(':'),['class' => 'form-label required mb-3']) }}
        {{ Form::text('net_salary', null, ['id' => 'editEmployeePayrollNetSalary','class' => 'form-control price-input employeePayrollNetSalary','onkeyup' => 'if (/\D\./g.test(this.value)) this.value = this.value.replace(/\D\./g,"")','required','readonly', 'placeholder' => __('messages.employee_payroll.net_salary')]) }}
    </div>
</div>
<div class="justify-content-end d-flex">
    {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary me-3 btnSave','id' => 'editEmployeePayrollBtnSave']) }}
    <a href="{{ route('employee-payrolls.index') }}"
       class="btn btn-secondary {{ getLoggedInUser()->language == 'ar' ? 'me-2' : ''}}">{{ __('messages.common.cancel') }}</a>
</div>
