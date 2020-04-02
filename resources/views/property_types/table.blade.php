<div class="table-responsive-sm">
    <table class="table table-striped" id="propertyTypes-table">
        <thead>
            <tr>
                <th>Type Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($propertyTypes as $propertyType)
            <tr>
                <td>{{ $propertyType->type_name }}</td>
                <td>
                    {!! Form::open(['route' => ['propertyTypes.destroy', $propertyType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('propertyTypes.show', [$propertyType->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('propertyTypes.edit', [$propertyType->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>