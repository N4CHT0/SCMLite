@extends('pengiriman.app')

@section('content')
    <<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card my-2">
                    <div class="card-header text-center">{{ __('Shipments Dashboard') }}</div>

                    <div class="card-body mt-4">
                        <div class="row justify-content-center d-flex align-items-center">
                            <div class="col-10 col-md-8 text-center">
                                <p>{{ __('You are logged in as Shipments!') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
