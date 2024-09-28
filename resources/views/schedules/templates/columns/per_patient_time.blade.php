<div class="d-flex align-items-center mt-2">
    @php
        $time = \Carbon\Carbon::createFromFormat('H:i:s',$row->per_patient_time)->format('H:i')
    @endphp
    @if($time > '00:59:00')
        {{$time . '  ' . __('messages.hours') }}
    @else
        {{\Carbon\Carbon::createFromFormat('H:i:s',$row->per_patient_time)->format('i'). '  ' . __('messages.minutes') }}
    @endif
</div>
