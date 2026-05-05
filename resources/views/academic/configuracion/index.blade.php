@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="mb-4">
        <h1 class="h3 mb-1 fw-bold text-dark">Configuración Académica Avanzada</h1>
        <p class="text-muted">Ajusta las reglas de negocio, umbrales de aprobación y parámetros de evaluación.</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 bg-white mb-4">
                <div class="card-header bg-white py-3 border-bottom-0 px-4">
                    <h6 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-sliders me-2 text-primary"></i>Parámetros Globales</h6>
                </div>
                <div class="card-body px-4 pt-0">
                    <form action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Puntaje Mínimo de Aprobación (%)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-2"><i class="fa-solid fa-percent text-muted"></i></span>
                                    <input type="number" class="form-control border-2 ps-3" value="60" min="1" max="100">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Tiempo Límite de Examen (Minutos)</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-2"><i class="fa-solid fa-clock text-muted"></i></span>
                                    <input type="number" class="form-control border-2 ps-3" value="120">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Preguntas por Pilar (Examen)</label>
                                <input type="number" class="form-control border-2 ps-3" value="22">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Preguntas por Sesión (Estudio)</label>
                                <input type="number" class="form-control border-2 ps-3" value="22">
                            </div>
                            <div class="col-12">
                                <hr class="my-3 opacity-10">
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="allow_retakes" checked>
                                    <label class="form-check-label fw-bold small" for="allow_retakes">Permitir reintentos ilimitados en simulacros</label>
                                </div>
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="show_feedback_study" checked>
                                    <label class="form-check-label fw-bold small" for="show_feedback_study">Mostrar retroalimentación inmediata en Modo Estudio</label>
                                </div>
                            </div>
                            <div class="col-12 text-end pb-2">
                                <button type="submit" class="btn btn-primary px-4 rounded-3 fw-bold">
                                    <i class="fa-solid fa-save me-2"></i>Guardar Cambios
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 bg-primary bg-opacity-10 border-start border-primary border-4 h-100">
                <div class="card-body p-4 text-center">
                    <div class="bg-white p-3 rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-circle-info fs-1 text-primary"></i>
                    </div>
                    <h5 class="fw-bold text-primary mb-3">Reglas del Sistema</h5>
                    <p class="small text-muted mb-4">
                        Estos ajustes afectan directamente la lógica de generación de exámenes y el comportamiento de la plataforma para todos los usuarios.
                    </p>
                    <div class="p-3 bg-white rounded-4 text-start shadow-sm border border-primary border-opacity-10">
                        <h6 class="fw-bold extra-small text-uppercase mb-2">Resumen Actual</h6>
                        <ul class="list-unstyled mb-0 extra-small text-muted">
                            <li class="mb-1"><i class="fa-solid fa-check me-2 text-success"></i> 110 Preguntas por Examen</li>
                            <li class="mb-1"><i class="fa-solid fa-check me-2 text-success"></i> 60% Aprobación requerida</li>
                            <li><i class="fa-solid fa-check me-2 text-success"></i> 120 Minutos de duración</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
.extra-small { font-size: 0.7rem; }
</style>
@endsection
