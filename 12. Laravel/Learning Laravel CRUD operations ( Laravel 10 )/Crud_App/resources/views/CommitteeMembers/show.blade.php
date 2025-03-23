@extends('CommitteeMembers.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Detailed View</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('committee.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $committee->name }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email Address:</strong>
            {{ $committee->email }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Phone Number:</strong>
            {{ $committee->phone }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Designation:</strong>
            {{ $committee->designation }}
        </div>
    </div>
    
</div>

@endsection