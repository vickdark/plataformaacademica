@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="mb-4">
        <h1 class="h3 mb-1 fw-bold text-dark">Mis Certificados</h1>
        <p class="text-muted">Descarga tus diplomas y reconocimientos obtenidos por aprobar simulacros.</p>
    </div>

    <div class="row g-4">
        @for($i = 1; $i <= 3; $i++)
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white overflow-hidden">
                <div class="p-4 bg-dark text-white text-center position-relative">
                    <i class="fa-solid fa-medal fs-1 text-warning position-absolute start-50 top-50 translate-middle opacity-10" style="font-size: 8rem !important;"></i>
                    <div class="position-relative z-index-1">
                        <i class="fa-solid fa-award fs-1 text-warning mb-3"></i>
                        <h5 class="fw-bold mb-0">Certificado de Aprobación</h5>
                        <div class="extra-small text-white-50 fw-bold text-uppercase">Simulacro Global #00{{ $i }}</div>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between mb-4">
                        <div>
                            <div class="extra-small text-muted text-uppercase fw-bold">Fecha de Logro</div>
                            <div class="fw-bold text-dark">May 0{{ $i }}, 2026</div>
                        </div>
                        <div class="text-end">
                            <div class="extra-small text-muted text-uppercase fw-bold">Puntaje</div>
                            <div class="fw-bold text-success">{{ 75 + ($i * 5) }}%</div>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary rounded-3 py-2 fw-bold shadow-sm">
                            <i class="fa-solid fa-file-pdf me-2"></i>Descargar PDF
                        </a>
                        <button class="btn btn-light border rounded-3 py-2 fw-bold text-muted small">
                            <i class="fa-solid fa-share-nodes me-2"></i>Compartir
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endfor

        <!-- Empty State (Placeholder) -->
        <div class="col-xl-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-light border-dashed d-flex align-items-center justify-content-center p-5">
                <div class="text-center">
                    <div class="bg-white p-3 rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow-sm" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-lock fs-3 text-muted"></i>
                    </div>
                    <h6 class="fw-bold text-muted mb-1">Próximo Logro</h6>
                    <p class="extra-small text-muted mb-0 px-4">Supera el simulacro con más del 60% para desbloquear tu diploma.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.extra-small { font-size: 0.7rem; }
.border-dashed { border: 2px dashed #dee2e6 !important; background-color: transparent !important; }
.z-index-1 { position: relative; z-index: 1; }
</style>
@endsection
