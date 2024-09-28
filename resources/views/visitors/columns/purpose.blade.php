@if ($row->purpose == 1)
    {{ __('messages.visitor_filter.visit') }}
@elseif ($row->purpose == 2)
    {{ __('messages.visitor_filter.enquiry') }}
@else
    {{ __('messages.visitor_filter.seminar') }}
@endif
