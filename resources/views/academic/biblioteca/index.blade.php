@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1 fw-bold text-dark">Biblioteca de Recursos</h1>
            <p class="text-muted mb-0">Material de apoyo, guías y recursos multimedia por cada pilar.</p>
        </div>
        <button class="btn btn-primary shadow-sm px-4 rounded-3 fw-bold">
            <i class="fa-solid fa-cloud-arrow-up me-2"></i>Subir Recurso
        </button>
    </div>

    <div class="row g-4">
        @php
            $pillars = [
                ['name' => 'Fundamentos Legales', 'icon' => 'fa-scale-balanced', 'color' => 'primary', 'files' => 15],
                ['name' => 'Procedimientos Técnicos', 'icon' => 'fa-gears', 'color' => 'success', 'files' => 8],
                ['name' => 'Ética Profesional', 'icon' => 'fa-handshake-angle', 'color' => 'info', 'files' => 12],
                ['name' => 'Gestión de Riesgos', 'icon' => 'fa-shield-virus', 'color' => 'warning', 'files' => 5],
                ['name' => 'Normativa Institucional', 'icon' => 'fa-building-columns', 'color' => 'secondary', 'files' => 20],
            ];
        @endphp

        @foreach($pillars as $pilar)
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white border-top border-{{ $pilar['color'] }} border-4">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="bg-{{ $pilar['color'] }} bg-opacity-10 p-3 rounded-4 me-3 text-{{ $pilar['color'] }}">
                            <i class="fa-solid {{ $pilar['icon'] }} fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">{{ $pilar['name'] }}</h5>
                            <span class="extra-small text-muted fw-bold">{{ $pilar['files'] }} Recursos disponibles</span>
                        </div>
                    </div>

                    <div class="list-group list-group-flush mb-4">
                        <div class="list-group-item px-0 py-2 border-0 d-flex align-items-center">
                            <i class="fa-solid fa-file-pdf text-danger me-2"></i>
                            <span class="small text-dark text-truncate">Guía de estudio v1.2.pdf</span>
                            <button class="btn btn-link btn-sm ms-auto text-muted p-0"><i class="fa-solid fa-download"></i></button>
                        </div>
                        <div class="list-group-item px-0 py-2 border-0 d-flex align-items-center">
                            <i class="fa-solid fa-video text-primary me-2"></i>
                            <span class="small text-dark text-truncate">Video explicativo - Procedimientos</span>
                            <button class="btn btn-link btn-sm ms-auto text-muted p-0"><i class="fa-solid fa-play"></i></button>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-outline-{{ $pilar['color'] }} rounded-3 py-2 fw-bold small">
                            <i class="fa-solid fa-folder-open me-2"></i>Explorar Todo
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
.extra-small { font-size: 0.7rem; }
</style>
@endsection
