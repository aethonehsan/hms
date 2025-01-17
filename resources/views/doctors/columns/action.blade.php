<div class="d-flex align-items-center">
    <a href="{{ url('doctors').'/'.$row->id.'/edit'  }}" title="<?php echo __('messages.common.edit') ?>"
        class="btn px-2 text-primary fs-3 ps-0 doctor-edit-btn">
         <i class="fa-solid fa-pen-to-square"></i>
     </a>
     <a href="javascript:void(0)" title="<?php echo __('messages.common.delete') ?>" data-id="{{$row->id}}"
        class="doctor-delete-btn btn px-2 text-danger fs-3 ps-0 {{ getLoggedInUser()->language == 'ar' ? 'me-1' : '' }}">
         <i class="fa-solid fa-trash"></i>
     </a>
</div>
