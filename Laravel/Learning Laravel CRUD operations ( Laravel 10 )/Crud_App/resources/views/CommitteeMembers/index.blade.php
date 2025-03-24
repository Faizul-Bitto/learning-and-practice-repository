@extends('CommitteeMembers.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Committee Members</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('committee.create') }}"> Add Members To The Committee</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email Address</th>
        <th>Phone Number</th>
        <th>Designation</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($committee_members_list as $list)
    <tr>
        <td>{{ $list->id }}</td>
        <td>{{ $list->name }}</td>
        <td>{{ $list->email }}</td>
        <td>{{ $list->phone }}</td>
        <td>{{ $list->designation }}</td>
        <td>
            <form action="{{ route('committee.destroy',$list->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('committee.show',$list->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('committee.edit',$list->id) }}">Update</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $committee_members_list->links() }}

@endsection