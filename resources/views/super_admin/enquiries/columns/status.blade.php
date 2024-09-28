@if($row->status)
    <div class="badge bg-light-success">{{__('messages.enquiry.read')}}</div>
@else
    <div class="badge bg-light-danger">{{__('messages.enquiry.unread')}}</div>
@endif
