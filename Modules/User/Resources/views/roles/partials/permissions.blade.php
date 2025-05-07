@foreach($data->getPermissionNames() as $permission)
    <span class="badge badge-info">{{ $permission }}</span>
@endforeach
<a class="text-info" href="{{ route('roles.edit', $data->id) }}">.......</a>
