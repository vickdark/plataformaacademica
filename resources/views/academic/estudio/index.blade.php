@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-dark mb-2">Centro de Preparación Académica</h1>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
            Selecciona un área de conocimiento para iniciar tu sesión de estudio.
        </p>
    </div>

    <!-- Stats Summary for Student -->
    <div class="row g-4 mb-5 justify-content-center">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 bg-white border-top border-primary border-4">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-4 me-4">
                        <i class="fa-solid fa-fire-flame-curved text-primary fs-1"></i>
                    </div>
                    <div>
                        <div class="text-muted small fw-bold text-uppercase">Racha de Estudio</div>
                        <div class="h3 fw-bold mb-0">5 Días</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-4 bg-white border-top border-success border-4">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="bg-success bg-opacity-10 p-3 rounded-4 me-4">
                        <i class="fa-solid fa-circle-check text-success fs-1"></i>
                    </div>
                    <div>
                        <div class="text-muted small fw-bold text-uppercase">Dominadas</div>
                        <div class="h3 fw-bold mb-0">342 / 500</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pillars Grid -->
    <div class="row g-4">
        @php
            $pillars = [
                ['id' => 1, 'name' => 'Fundamentos Legales', 'icon' => 'fa-scale-balanced', 'color' => 'primary', 'questions' => 120, 'progress' => 75],
                ['id' => 2, 'name' => 'Procedimientos Técnicos', 'icon' => 'fa-gears', 'color' => 'success', 'questions' => 150, 'progress' => 40],
                ['id' => 3, 'name' => 'Ética y Responsabilidad', 'icon' => 'fa-handshake-angle', 'color' => 'info', 'questions' => 80, 'progress' => 90],
                ['id' => 4, 'name' => 'Gestión de Riesgos', 'icon' => 'fa-shield-virus', 'color' => 'warning', 'questions' => 110, 'progress' => 25],
                ['id' => 5, 'name' => 'Normativa Institucional', 'icon' => 'fa-building-columns', 'color' => 'secondary', 'questions' => 90, 'progress' => 60],
            ];
        @endphp

        @foreach($pillars as $pilar)
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm h-100 rounded-4 overflow-hidden pillar-card bg-white">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <div class="bg-{{ $pilar['color'] }} bg-opacity-10 p-4 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 100px; height: 100px;">
                            <i class="fa-solid {{ $pilar['icon'] }} fs-1 text-{{ $pilar['color'] }}"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-1">{{ $pilar['name'] }}</h4>
                        <span class="badge bg-light text-dark border rounded-pill px-3 py-1 small">
                            <i class="fa-solid fa-database me-1 opacity-50"></i> {{ $pilar['questions'] }} Preguntas
                        </span>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2 small">
                            <span class="text-muted">Progreso de Dominio</span>
                            <span class="fw-bold text-{{ $pilar['color'] }}">{{ $pilar['progress'] }}%</span>
                        </div>
                        <div class="progress rounded-pill" style="height: 10px;">
                            <div class="progress-bar bg-{{ $pilar['color'] }} rounded-pill" style="width: {{ $pilar['progress'] }}%"></div>
                        </div>
                    </div>

                    <div class="d-grid">
                        <a href="{{ route('academic.estudio.pilar', $pilar['id']) }}" class="btn btn-{{ $pilar['color'] }} rounded-3 py-2 fw-bold shadow-sm">
                            Iniciar Práctica <i class="fa-solid fa-play ms-2 small"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
.pillar-card { transition: all 0.3s cubic-bezier(.25,.8,.25,1); border: 1px solid #edf2f7 !important; }
.pillar-card:hover { transform: translateY(-10px); box-shadow: 0 1rem 3rem rgba(0,0,0,0.1) !important; border-color: #c05a1e33 !important; }
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
</style>
@endsection
