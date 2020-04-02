<div class="table-responsive-sm">
    <table class="table table-striped" id="properties-table">
        <thead>
            <tr>
                <th>Badrooms Number</th>
        <th>Rooms Number</th>
        <th>Space Available</th>
        <th>Type Id</th>
        <th>Neighborhood Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($properties as $properties)
            <tr>
                <td>{{ $properties->badrooms_number }}</td>
            <td>{{ $properties->rooms_number }}</td>
            <td>{{ $properties->space_available }}</td>
            <td>{{ $properties->type_id }}</td>
            <td>{{ $properties->neighborhood_id }}</td>
                <td>
                    {!! Form::open(['route' => ['properties.destroy', $properties->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('properties.show', [$properties->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('properties.edit', [$properties->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>