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

                    You are logged in!<br>You will be redirected to the home page automatically in 5 seconds.
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        setTimeout(function () {
            $('.torna-home')[0].click();
        },2000);
    </script> --}}
</div>
@endsection
@section('script')
    <script src="{{ asset('js/redirectfunction.js') }}" defer></script>
@endsection
