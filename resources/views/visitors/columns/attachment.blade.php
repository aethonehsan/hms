@if ($row->document_url != '')
    <a data-turbo="false" href="{{url('visitors-download'.'/' .$row->id)}}" class="text-decoration-none">Download</a>
@else
    {{__('messages.common.n/a')}}
@endif
