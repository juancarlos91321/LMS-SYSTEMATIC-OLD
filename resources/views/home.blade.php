@extends('layouts.app')

@section('content')

<h3 class="mb-4">🎥 Live Streams</h3>

<div class="row g-3 mb-5">
    <div class="col-6 col-md-4 col-lg-3">
        <div class="card text-center p-3">
            <img src="https://i.pravatar.cc/80" class="rounded-circle mx-auto mb-2">
            <strong>John</strong>
            <small class="text-danger">● Live</small>
        </div>
    </div>
</div>

<h3 class="mb-4">📚 Cursos</h3>

<div class="row g-4">

    <div class="col-md-6 col-lg-4">
        <div class="card course-card">
            <img src="https://picsum.photos/400/200" class="card-img-top">
            <div class="card-body">
                <h6>Curso de Laravel</h6>
                <p class="text-muted small">Desarrollo web</p>
                <strong class="text-success">$10</strong>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4">
        <div class="card course-card">
            <img src="https://picsum.photos/401/200" class="card-img-top">
            <div class="card-body">
                <h6>Curso de JS</h6>
                <p class="text-muted small">Frontend</p>
                <strong class="text-success">$8</strong>
            </div>
        </div>
    </div>

</div>

@endsection