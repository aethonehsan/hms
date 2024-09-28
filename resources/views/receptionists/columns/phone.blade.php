<div class="d-flex align-items-center mt-2">
    {{ empty($row->user->phone) ?  __('messages.common.n/a') : $row->user->region_code.$row->user->phone  }}
</div>
