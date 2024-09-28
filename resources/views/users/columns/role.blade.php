<div class="d-flex align-items-center mt-2">
    @if($row->department->id == 8)
    {{__('messages.role.case_manager')}}
    @elseif($row->department->id == 9)
    {{__('messages.role.lab_technician')}}
    @else
    {{__('messages.role.'.strtolower($row->department->name))}}
    @endif
</div>
