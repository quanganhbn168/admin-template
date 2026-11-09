@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row row-deck row-cards">
    @foreach ([['Users', '1,234', 'ti-users'], ['Orders', '342', 'ti-shopping-cart'], ['Revenue', '$12,480', 'ti-currency-dollar'], ['Visits', '48,210', 'ti-eye']] as [$label, $value, $icon])
        <div class="col-sm-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <span class="bg-primary text-white avatar me-3"><i class="ti {{ $icon }} fs-2"></i></span>
                        <div>
                            <div class="fw-bold">{{ $value }}</div>
                            <div class="text-secondary">{{ $label }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Laravel + Tabler</h3>
                <p class="text-secondary mb-0">Your Tabler setup is working.</p>
            </div>
        </div>
    </div>
</div>
@endsection
