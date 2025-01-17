<div class="ms-auto" wire:ignore>
    <div class="dropdown d-flex align-items-center me-md-5 {{ getLoggedInUser()->language == 'ar' ? 'ms-4' : 'me-4' }}">
        <button class="btn btn btn-icon btn-primary text-white dropdown-toggle hide-arrow ps-2 pe-0" type="button"
            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false" id="visitorsFilterBtn">
            <i class='fas fa-filter'></i>
        </button>
        <div class="dropdown-menu py-0" aria-labelledby="visitorsFilterBtn">
            <div class="text-start border-bottom py-4 px-7">
                <h3 class="text-gray-900 mb-0">{{ __('messages.common.filter_options') }}</h3>
            </div>
            <div class="p-5">
                <div class="mb-5">
                    <label for="visitorsHead" class="form-label">{{ __('messages.common.status') . ':' }}</label>
                    {{--                    {{ Form::select('purpose', $filterHeads[0],null, ['id' => 'visitorsHead', 'data-control' =>'select2', 'class' => 'form-select status-selector select2-hidden-accessible data-allow-clear="true"']) }} --}}
                    <select class="form-select status-selector" id="visitorsHead" data-control="select2" name="purpose">
                        <option value="0">{{ __('messages.filter.all') }}</option>
                        <option value="1">{{ __('messages.visitor_filter.visit') }}</option>
                        <option value="2">{{ __('messages.visitor_filter.enquiry') }}</option>
                        <option value="3">{{ __('messages.visitor_filter.seminar') }}</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="reset" id="visitorResetFilter"
                        class="btn btn-secondary">{{ __('messages.common.reset') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
