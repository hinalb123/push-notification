@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('/push')}}" method="get">
                        @csrf
                        Message<input type="text" id="message" name="message" class="form-group form-control">
                        <button class="btn btn-outline-primary btn-block">Make a Push Notification!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
