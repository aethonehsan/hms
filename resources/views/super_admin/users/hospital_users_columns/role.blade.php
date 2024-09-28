@foreach($row->roles as $role)
@if($role->name == 'Admin')
    <span class="badge bg-light-info">{{__('messages.role.admin')}}</span>
@elseif($role->name == 'Doctor')
    <span class="badge bg-light-info">{{__('messages.role.doctor')}}</span>
@elseif($role->name == 'Nurse')
    <span class="badge bg-light-info">{{__('messages.role.nurse')}}</span>
@elseif($role->name == 'Receptionist')
    <span class="badge bg-light-info">{{__('messages.role.receptionist')}}</span>
@elseif($role->name == 'Case Manager')
    <span class="badge bg-light-info">{{__('messages.role.case_manager')}}</span>
@elseif($role->name == 'Pharmacist')
    <span class="badge bg-light-info">{{__('messages.role.pharmacist')}}</span>
@elseif($role->name == 'Accountant')
    <span class="badge bg-light-info">{{__('messages.role.accountant')}}</span>
@elseif($role->name == 'Patient')
    <span class="badge bg-light-info">{{__('messages.role.patient')}}</span>
@elseif($role->name == 'Lab Technician')
    <span class="badge bg-light-info">{{__('messages.role.lab_technician')}}</span>
@endif


@endforeach
{{--<span class="badge bg-light-info">{{$row->roles[0]->name}}</span>--}}
