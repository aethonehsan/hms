<span class="badge bg-light-{{$row->status == 1 ? 'success': 'danger'}}">{{$row->status == 1 ? __('messages.filter.active') : __('messages.filter.deactive')}}</span>
