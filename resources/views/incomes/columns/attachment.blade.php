<div class="d-flex align-items-center">
    @if($row->document_url !== '')
        <a data-turbo="false" href="{{ url('income-download').'/'.$row->id }}" class="text-decoration-none">Download</a>
    @else
        <samp>{{ __('messages.common.n/a') }}</samp>
    @endif
</div>
