@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header Section -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1 fw-bold text-dark">Panel de Control Administrativo</h1>
            <p class="text-muted mb-0">Análisis detallado del rendimiento académico y operativo global.</p>
        </div>
        <div class="d-flex gap-2">
            <div class="dropdown">
                <button class="btn btn-white shadow-sm border px-3 dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-calendar-days me-2 text-primary"></i>Últimos 30 días
                </button>
                <ul class="dropdown-menu border-0 shadow-sm rounded-3">
                    <li><a class="dropdown-item py-2 small" href="#">Hoy</a></li>
                    <li><a class="dropdown-item py-2 small" href="#">Esta semana</a></li>
                    <li><a class="dropdown-item py-2 small" href="#">Este mes</a></li>
                </ul>
            </div>
            <button class="btn btn-primary shadow-sm px-4">
                <i class="fa-solid fa-file-pdf me-2"></i>Reporte Global
            </button>
        </div>
    </div>

    <!-- Quick Stats Cards - Enfoque en Iconografía -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 rounded-4 bg-white border-top border-primary border-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-4">
                            <i class="fa-solid fa-users-gear fs-2 text-primary"></i>
                        </div>
                        <div class="text-end">
                            <div class="text-muted small fw-bold text-uppercase">Usuarios Activos</div>
                            <div class="h3 fw-bold mb-0 text-dark">1,240</div>
                        </div>
                    </div>
                    <div class="mt-2 small border-top pt-2 d-flex align-items-center">
                        <span class="text-success fw-bold me-2"><i class="fa-solid fa-arrow-trend-up me-1"></i>12%</span>
                        <span class="text-muted">crecimiento mensual</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 rounded-4 bg-white border-top border-success border-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="bg-success bg-opacity-10 p-3 rounded-4">
                            <i class="fa-solid fa-circle-check fs-2 text-success"></i>
                        </div>
                        <div class="text-end">
                            <div class="text-muted small fw-bold text-uppercase">Tasa de Aprobación</div>
                            <div class="h3 fw-bold mb-0 text-dark">72.8%</div>
                        </div>
                    </div>
                    <div class="mt-2 small border-top pt-2 d-flex align-items-center">
                        <span class="text-success fw-bold me-2"><i class="fa-solid fa-check-double me-1"></i>85%</span>
                        <span class="text-muted">meta institucional</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 rounded-4 bg-white border-top border-info border-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="bg-info bg-opacity-10 p-3 rounded-4">
                            <i class="fa-solid fa-file-invoice fs-2 text-info"></i>
                        </div>
                        <div class="text-end">
                            <div class="text-muted small fw-bold text-uppercase">Exámenes Hoy</div>
                            <div class="h3 fw-bold mb-0 text-dark">342</div>
                        </div>
                    </div>
                    <div class="mt-2 small border-top pt-2 d-flex align-items-center">
                        <span class="text-info fw-bold me-2"><i class="fa-solid fa-clock me-1"></i>15</span>
                        <span class="text-muted">en curso ahora mismo</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm h-100 rounded-4 bg-white border-top border-warning border-4">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="bg-warning bg-opacity-10 p-3 rounded-4">
                            <i class="fa-solid fa-triangle-exclamation fs-2 text-warning"></i>
                        </div>
                        <div class="text-end">
                            <div class="text-muted small fw-bold text-uppercase">Área Crítica</div>
                            <div class="h3 fw-bold mb-0 text-dark">Pilar 1</div>
                        </div>
                    </div>
                    <div class="mt-2 small border-top pt-2 text-muted">
                        <i class="fa-solid fa-circle-info me-1"></i>Requiere revisión de banco
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Chart Section -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between border-bottom-0">
                    <h6 class="m-0 fw-bold text-dark"><i class="fa-solid fa-chart-line me-2 text-primary"></i>Actividad de Usuarios y Exámenes</h6>
                </div>
                <div class="card-body">
                    <div class="bg-light rounded-4 d-flex align-items-center justify-content-center border border-dashed" style="height: 350px;">
                        <div class="text-center">
                            <i class="fa-solid fa-chart-area fs-1 text-muted opacity-25 mb-3"></i>
                            <p class="text-muted small">Gráfico Lineal Interactivo (Chart.js)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question Performance Section -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                <div class="card-header bg-white py-3 border-bottom-0">
                    <h6 class="m-0 fw-bold text-dark"><i class="fa-solid fa-ranking-star me-2 text-primary"></i>Reactivos con más Errores</h6>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @for($i = 1; $i <= 5; $i++)
                        <div class="list-group-item px-4 py-3 d-flex justify-content-between align-items-center border-0">
                            <div class="d-flex align-items-center">
                                <div class="bg-danger bg-opacity-10 p-2 rounded-3 me-3 text-center" style="width: 45px;">
                                    <span class="text-danger fw-bold small">#{{ $i }}</span>
                                </div>
                                <div>
                                    <div class="fw-bold small text-dark">ID PRG-00{{ rand(100, 999) }}</div>
                                    <div class="text-muted extra-small">Pilar {{ rand(1, 5) }} • 82% Fallo</div>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-light border rounded-pill"><i class="fa-solid fa-eye me-1"></i>Ver</button>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="card-footer bg-white border-0 text-center py-3">
                    <a href="#" class="text-primary small fw-bold text-decoration-none">Analizar banco completo <i class="fa-solid fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
.card { transition: transform 0.2s ease; }
.card:hover { transform: translateY(-5px); }
.border-dashed { border-style: dashed !important; }
.extra-small { font-size: 0.75rem; }
.btn-white { background-color: #fff; color: #444; }
.list-group-item:hover { background-color: #f8f9fa; }
</style>
@endsection
