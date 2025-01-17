<div class="ms-0 ms-md-2" wire:ignore>
    <div class="dropdown d-flex align-items-center me-4 me-md-5">
        <button
                class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0"
                type="button" data-bs-auto-close="outside"
                data-bs-toggle="dropdown" aria-expanded="false"
                id="hospitalUserFilterButton">
            <i class='fas fa-filter'></i>
        </button>
        <div class="dropdown-menu py-0" aria-labelledby="hospitalUserFilterButton">
            <div class="text-start border-bottom py-4 px-7">
                <h3 class="text-gray-900 mb-0">{{ __('messages.common.filter_options') }}</h3>
            </div>
            <div class="p-5">
                <div class="mb-5">
                    <label for="exampleInputSelect2" class="form-label">{{ __('messages.common.status').':' }}</label>
                    {{-- {{ Form::select('status', $filterHeads[0],null, ['id' => 'statusArr', 'data-control' =>'select2', 'class' => 'form-select status-selector select2-hidden-accessible data-allow-clear="true"']) }} --}}
                    <select class="form-select status-selector" id="statusArr" data-control="select2" name="status">
                        <option value="0">{{ __('messages.filter.all') }}</option>
                        <option value="1">{{ __('messages.filter.active') }}</option>
                        <option value="2">{{ __('messages.filter.deactive') }}</option>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="exampleInputSelect2"
                           class="form-label">{{ __('messages.employee_payroll.role').':' }}</label> <br>
                    {{-- {{ Form::select('department_id', dump($filterHeads[1]),null, ['id' => 'roleArr', 'data-control' =>'select2', 'class' => 'form-select status-selector select2-hidden-accessible data-allow-clear="true"']) }} --}}
                    <select class="form-select status-selector" id="roleArr" data-control="select2" name="department_id">
                        <option value="0">{{ __('messages.filter.all') }}</option>
                        <option value="1">{{ __('messages.role.admin') }}</option>
                        <option value="2">{{ __('messages.role.doctor') }}</option>
                        <option value="3">{{ __('messages.role.patient') }}</option>
                        <option value="4">{{ __('messages.role.nurse') }}</option>
                        <option value="5">{{ __('messages.role.receptionist') }}</option>
                        <option value="6">{{ __('messages.role.pharmacist') }}</option>
                        <option value="7">{{ __('messages.role.accountant') }}</option>
                        <option value="8">{{ __('messages.role.case_manager') }}</option>
                        <option value="9">{{ __('messages.role.lab_technician') }}</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-secondary" id="hospitalUserResetFilter">
                        {{ __('messages.common.reset') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
