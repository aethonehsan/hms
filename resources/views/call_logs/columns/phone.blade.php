<div class="d-flex align-items-center">
    @if($row->phone)
        {{$row->phone}}
    @else
        {{__('messages.common.n/a')}}
    @endif
</div>
