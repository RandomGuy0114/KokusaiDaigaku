@extends('dashboard.admin_layout')
@include('cal_css')
@section('title', 'Section')
@section('content')
<div class="container-fluid justify-content-center p-5  ms-3 me-4 rounded-top-left-1 rounded-top-right-1" id="contentM">
        <div class="row">
            <div class="col  d-flex flex-column rounded-top">
                @livewire('section-controller')
            </div>
        </div>
    </div>
@endsection
