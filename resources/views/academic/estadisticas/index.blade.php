@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="mb-4">
        <h1 class="h3 mb-1 fw-bold text-dark">Mi Progreso Académico</h1>
        <p class="text-muted">Visualiza tu desempeño y evolución en estudios y exámenes.</p>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white border-start border-primary border-4">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-4 me-3">
                        <i class="fa-solid fa-book-open fs-2 text-primary"></i>
                    </div>
                    <div>
                        <div class="text-muted extra-small fw-bold text-uppercase">Simulaciones</div>
                        <div class="h3 fw-bold mb-0 text-dark">45</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white border-start border-info border-4">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="bg-info bg-opacity-10 p-3 rounded-4 me-3">
                        <i class="fa-solid fa-file-signature fs-2 text-info"></i>
                    </div>
                    <div>
                        <div class="text-muted extra-small fw-bold text-uppercase">Exámenes</div>
                        <div class="h3 fw-bold mb-0 text-dark">8</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white border-start border-success border-4">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="bg-success bg-opacity-10 p-3 rounded-4 me-3">
                        <i class="fa-solid fa-chart-simple fs-2 text-success"></i>
                    </div>
                    <div>
                        <div class="text-muted extra-small fw-bold text-uppercase">Promedio</div>
                        <div class="h3 fw-bold mb-0 text-dark">78%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white border-start border-warning border-4">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="bg-warning bg-opacity-10 p-3 rounded-4 me-3">
                        <i class="fa-solid fa-award fs-2 text-warning"></i>
                    </div>
                    <div>
                        <div class="text-muted extra-small fw-bold text-uppercase">Mejor Pilar</div>
                        <div class="h3 fw-bold mb-0 text-dark">Pilar 3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Chart Section -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between border-bottom-0">
                    <h6 class="m-0 fw-bold text-dark"><i class="fa-solid fa-chart-area me-2 text-primary"></i>Rendimiento por Pilar</h6>
                    <button class="btn btn-sm btn-light rounded-pill px-3">Ver Detalles</button>
                </div>
                <div class="card-body">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center border border-dashed" style="height: 300px;">
                        <div class="text-center">
                            <i class="fa-solid fa-chart-pie fs-1 text-muted opacity-25 mb-3"></i>
                            <p class="text-muted small">Gráfico de Radar / Barras (Chart.js)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Exams Section -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                <div class="card-header bg-white py-3 border-bottom-0">
                    <h6 class="m-0 fw-bold text-dark"><i class="fa-solid fa-history me-2 text-primary"></i>Últimos Exámenes</h6>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @php
                            $recentExams = [
                                ['id' => 8, 'fecha' => '2026-05-04', 'score' => 85, 'status' => 'success'],
                                ['id' => 7, 'fecha' => '2026-05-02', 'score' => 55, 'status' => 'danger'],
                                ['id' => 6, 'fecha' => '2026-04-28', 'score' => 92, 'status' => 'success'],
                                ['id' => 5, 'fecha' => '2026-04-25', 'score' => 70, 'status' => 'success'],
                            ];
                        @endphp
                        @foreach($recentExams as $exam)
                        <div class="list-group-item px-4 py-3 d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <div class="bg-{{ $exam['status'] }} bg-opacity-10 p-2 rounded-3 me-3">
                                    <i class="fa-solid fa-file-lines text-{{ $exam['status'] }}"></i>
                                </div>
                                <div>
                                    <div class="fw-bold small text-dark">Simulacro #{{ $exam['id'] }}</div>
                                    <div class="text-muted extra-small"><i class="fa-solid fa-calendar-day me-1"></i>{{ $exam['fecha'] }}</div>
                                </div>
                            </div>
                            <span class="badge bg-{{ $exam['status'] }} rounded-pill px-3 py-2 fw-bold">{{ $exam['score'] }}%</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer bg-white border-0 text-center py-3">
                    <a href="#" class="text-primary small fw-bold text-decoration-none">Ver historial completo <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.extra-small { font-size: 0.75rem; }
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
.border-dashed { border-style: dashed !important; }
.list-group-item:hover { background-color: #f8f9fa; }
</style>
@endsection
