@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="table-post" class="table table-bordered table-striped">
                        <thead>
                            <th>No</th>
                            <th>Title</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <td>1</td>
                            <td>lskjhdg</td>
                            <td>CRUD</td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
