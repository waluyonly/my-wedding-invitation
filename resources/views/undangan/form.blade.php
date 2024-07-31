@extends('layouts.app')

@section('title', 'Import Undangan')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                @if ($self->role == 'Admin')
                                    <div class="col-md-5 col-sm-12 me-3">
                                        <select class="form-control" name="user" required>
                                            <option value="">-- Select --</option>
                                            @foreach ($users as $r)
                                            <option value="{{ $r->id }}">{{ $r->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @else
                                    <input type="hidden" name="user" value="{{ @$self->id }}">
                                @endif
                                <div class="@if($self->role == 'Admin') col-md-5 @else col-md-10 @endif col-sm-12 me-3">
                                    <input type="file" class="form-control" name="file" accept=".csv">
                                </div>
                                <div class="col-md-2 col-sm-12 me-3">
                                    <button class="btn btn-primary">Import</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection