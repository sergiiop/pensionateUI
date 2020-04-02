<div class="table-responsive-sm">
    <table class="table table-striped" id="propertiesServices-table">
        <thead>
            <tr>
                <th>Property Id</th>
        <th>Service Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propertiesServices as $propertiesService)
            <tr>
                <td>{{ $propertiesService->property_id }}</td>
            <td>{{ $propertiesService->service_id }}</td>
                <td>
                    {!! Form::open(['route' => ['propertiesServices.destroy', $propertiesService->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('propertiesServices.show', [$propertiesService->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('propertiesServices.edit', [$propertiesService->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>