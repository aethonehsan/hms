<div class="dropdown">
    <a href="#" class="btn btn-primary dropdown-toggle {{getLoggedInUser()->language=='ar' ? 'me-3' : ''}}" id="dropdownMenuButton"
       data-bs-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">{{ __('messages.common.actions') }}
    </a>
    <ul class="dropdown-menu action-dropdown" aria-labelledby="dropdownMenuButton">
        <li>
            <a href="{{ route('ambulances.create') }}" class="dropdown-item  px-5">
                {{ __('messages.ambulance.new_ambulance') }}
            </a>
        </li>
        <li>
            <a href="{{ route('ambulance.excel') }}" class="dropdown-item  px-5" data-turbo="false">
                {{ __('messages.common.export_to_excel') }}
            </a>
        </li>
    </ul>
</div>
