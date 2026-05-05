@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1 fw-bold text-dark">Gestión de Pilares</h1>
            <p class="text-muted mb-0">Define las 5 áreas maestras de conocimiento.</p>
        </div>
        <a href="{{ route('academic.pilares.create') }}" class="btn btn-primary shadow-sm px-4 rounded-3 fw-bold">
            <i class="fa-solid fa-plus-circle me-2"></i>Nuevo Pilar
        </a>
    </div>

    <div class="row g-4">
        @php
            $mockPilares = [
                ['id' => 1, 'nombre' => 'Fundamentos Legales', 'temas' => 12, 'preguntas' => 240, 'color' => 'primary', 'icon' => 'fa-scale-balanced'],
                ['id' => 2, 'nombre' => 'Procedimientos Técnicos', 'temas' => 8, 'preguntas' => 160, 'color' => 'success', 'icon' => 'fa-gears'],
                ['id' => 3, 'nombre' => 'Ética Profesional', 'temas' => 5, 'preguntas' => 100, 'color' => 'info', 'icon' => 'fa-handshake-angle'],
                ['id' => 4, 'nombre' => 'Gestión de Riesgos', 'temas' => 10, 'preguntas' => 200, 'color' => 'warning', 'icon' => 'fa-shield-virus'],
                ['id' => 5, 'nombre' => 'Normativa Institucional', 'temas' => 6, 'preguntas' => 120, 'color' => 'secondary', 'icon' => 'fa-building-columns'],
            ];
        @endphp

        @foreach($mockPilares as $pilar)
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 pilar-card bg-white border-top border-{{ $pilar['color'] }} border-4">
                <div class="card-body p-4 text-center">
                    <div class="mb-3">
                        <div class="bg-{{ $pilar['color'] }} bg-opacity-10 p-4 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fa-solid {{ $pilar['icon'] }} fs-1 text-{{ $pilar['color'] }}"></i>
                        </div>
                    </div>
                    
                    <h5 class="fw-bold text-dark mb-1">{{ $pilar['nombre'] }}</h5>
                    <div class="extra-small text-muted text-uppercase fw-bold mb-4">ID #PLR-00{{ $pilar['id'] }}</div>

                    <div class="row g-2 mb-4">
                        <div class="col-6">
                            <div class="bg-light rounded-3 p-3">
                                <div class="h4 fw-bold text-dark mb-0">{{ $pilar['temas'] }}</div>
                                <div class="extra-small text-muted text-uppercase fw-bold"><i class="fa-solid fa-list-check me-1"></i>Temas</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light rounded-3 p-3">
                                <div class="h4 fw-bold text-dark mb-0">{{ $pilar['preguntas'] }}</div>
                                <div class="extra-small text-muted text-uppercase fw-bold"><i class="fa-solid fa-circle-question me-1"></i>Preguntas</div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="{{ route('academic.pilares.topics', $pilar['id']) }}" class="btn btn-outline-{{ $pilar['color'] }} flex-grow-1 rounded-3 py-2 fw-bold small">
                            <i class="fa-solid fa-gears me-2"></i>Gestionar
                        </a>
                        <button class="btn btn-light border rounded-3 px-3" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3">
                            <li><a class="dropdown-item py-2" href="#"><i class="fa-solid fa-edit me-2 text-primary small"></i>Editar</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item py-2 text-danger" href="#"><i class="fa-solid fa-trash me-2 small"></i>Eliminar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.pilar-card { transition: all 0.3s ease; border: 1px solid #edf2f7 !important; }
.pilar-card:hover { transform: translateY(-5px); box-shadow: 0 0.5rem 2rem rgba(0,0,0,0.1) !important; border-color: #c05a1e33 !important; }
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
.extra-small { font-size: 0.7rem; }
</style>
@endsection
