    
@if($row->status == 1)
{{ __('messages.investigation_report.solved') }}
@else
{{ __('messages.investigation_report.not_solved') }}
@endif