@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit and validate user's transaction history.</div>

                <div class="card-body">
                    @if($data)
                    <form method="POST" action="{{ route('update_history') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">ID </label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" name="id" value="{{ $data->id }}" readonly autocomplete="type" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">USER_ID </label>

                            <div class="col-md-6">
                                <input id="user_id" type="text" class="form-control" name="user_id" value="{{ $data->user_id }}" readonly autocomplete="type" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Type </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="type" value="{{ $data->type }}" readonly autocomplete="type" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="method" class="col-md-4 col-form-label text-md-right">Method </label>

                            <div class="col-md-6">
                                <input id="method" type="text" class="form-control" name="method" value="{{ $data->method }}" readonly autocomplete="method">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">Amount </label>

                            <div class="col-md-6">
                                <input id = "amount" value="{{$data->amount}}" type="text" class="form-control" name="amount" readonly autocomplete="amount">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currency" class="col-md-4 col-form-label text-md-right">Currency </label>

                            <div class="col-md-6">
                                <input id="currency" type="text" value="{{$data->currency}}" class="form-control" name="currency" readonly autocomplete="currency">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pay_status" class="col-md-4 col-form-label text-md-right">Pay Status </label>

                            <div class="col-md-6">
                                <input id="pay_status" type="text" value="{{$data->pay_status}}" class="form-control" name="pay_status" required autocomplete="pay_status">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Validate
                                </button>
                                <a class="btn btn-primary" href="{{route('admindash')}}">
                                    Validated
                                </a>
                            </div>
                        </div>
                    </form>
                    @else
                    Data not exit!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
