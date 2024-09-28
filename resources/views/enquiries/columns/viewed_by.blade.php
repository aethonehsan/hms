<div class="d-flex align-items-center mt-2">
    @if ($row->viewed_by === null )
        {{__('messages.enquiry.not_viewed')}}
    @else
        {{$row->user->full_name}}
    @endif
</div>
