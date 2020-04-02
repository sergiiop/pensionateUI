<div class="table-responsive-sm">
    <table class="table table-striped" id="posts-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Post Date</th>
        <th>Description</th>
        <th>Status</th>
        <th>User Id</th>
        <th>Property Id</th>
        <th>Typeproperty Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $posts)
            <tr>
                <td>{{ $posts->title }}</td>
            <td>{{ $posts->post_date }}</td>
            <td>{{ $posts->description }}</td>
            <td>{{ $posts->status }}</td>
            <td>{{ $posts->user_id }}</td>
            <td>{{ $posts->property_id }}</td>
            <td>{{ $posts->typeproperty_id }}</td>
                <td>
                    {!! Form::open(['route' => ['posts.destroy', $posts->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('posts.show', [$posts->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('posts.edit', [$posts->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>