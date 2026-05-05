@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Breadcrumb & Title -->
    <div class="mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{ route('academic.preguntas.index') }}" class="text-decoration-none text-primary">Banco de Preguntas</a></li>
                <li class="breadcrumb-item active">Nueva Pregunta</li>
            </ol>
        </nav>
        <h1 class="h3 mb-1 fw-bold text-dark">Editor de Preguntas</h1>
        <p class="text-muted">Diseña contenido pedagógico de alta calidad con retroalimentación inmediata.</p>
    </div>

    <form action="#" method="POST">
        <div class="row g-4">
            <!-- Left Column: Content & Options -->
            <div class="col-lg-8">
                <!-- Question Content Card -->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-header bg-white py-3 border-bottom-0 px-4">
                        <h5 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-pen-to-square me-2 text-primary"></i>Enunciado y Contexto</h5>
                    </div>
                    <div class="card-body px-4 pt-0">
                        <div class="row g-4">
                            <div class="col-12">
                                <label class="form-label fw-bold small text-uppercase">Pregunta</label>
                                <textarea class="form-control rounded-3 border-2" rows="3" placeholder="Escribe aquí la pregunta central..." required></textarea>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Pilar Académico</label>
                                <select class="form-select rounded-3 border-2" required>
                                    <option value="">Seleccionar Pilar</option>
                                    <option value="1">Fundamentos Legales</option>
                                    <option value="2">Procedimientos Técnicos</option>
                                    <option value="3">Ética Profesional</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Tema Específico</label>
                                <select class="form-select rounded-3 border-2" required disabled>
                                    <option value="">Primero elige un pilar</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-bold small text-uppercase">Retroalimentación / Explicación</label>
                                <textarea class="form-control rounded-3 border-2 bg-light bg-opacity-50" rows="3" placeholder="Explica por qué la respuesta correcta es la elegida..."></textarea>
                                <div class="form-text small">Este texto aparecerá en el Modo Estudio tras responder.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Options Card -->
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-white py-3 border-bottom-0 px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-list-ul me-2 text-primary"></i>Opciones de Respuesta</h5>
                            <span class="badge bg-light text-muted border fw-normal">Marca la opción correcta</span>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-0 pb-4">
                        <div class="d-flex flex-column gap-3">
                            @foreach(['A', 'B', 'C', 'D'] as $letter)
                            <div class="option-container p-3 rounded-4 border-2 d-flex align-items-center gap-3 transition-all" id="container_{{ $letter }}">
                                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center fw-bold text-dark" style="width: 40px; height: 40px; min-width: 40px;">
                                    {{ $letter }}
                                </div>
                                <input type="text" class="form-control border-0 bg-transparent shadow-none fs-6 px-0" placeholder="Escribe la respuesta {{ $letter }}...">
                                <div class="ms-auto">
                                    <input type="radio" class="btn-check" name="correct_answer" id="correct_{{ $letter }}" value="{{ $letter }}" {{ $letter == 'A' ? 'checked' : '' }}>
                                    <label class="btn btn-outline-success border-2 rounded-pill px-3 py-1 small fw-bold" for="correct_{{ $letter }}">
                                        <i class="fa-solid fa-check me-1"></i> Correcta
                                    </label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Settings & Actions -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 2rem;">
                    <!-- Visibility Card -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden">
                        <div class="card-header bg-white py-3 border-bottom-0 px-4">
                            <h6 class="fw-bold mb-0 text-dark text-uppercase small">Configuración</h6>
                        </div>
                        <div class="card-body px-4 pt-0">
                            <div class="mb-4">
                                <label class="form-label fw-bold small">Estado del Contenido</label>
                                <div class="d-flex flex-column gap-2">
                                    <div class="form-check custom-radio-card p-3 rounded-3 border cursor-pointer mb-2">
                                        <input class="form-check-input ms-0 me-2" type="radio" name="status" id="st_active" checked>
                                        <label class="form-check-label fw-bold small" for="st_active">Activa y Visible</label>
                                    </div>
                                    <div class="form-check custom-radio-card p-3 rounded-3 border cursor-pointer">
                                        <input class="form-check-input ms-0 me-2" type="radio" name="status" id="st_review">
                                        <label class="form-check-label fw-bold small" for="st_review">En Revisión</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold small">Habilitar en Modos</label>
                                <div class="bg-light rounded-4 p-3">
                                    <div class="form-check form-switch mb-3">
                                        <input class="form-check-input" type="checkbox" id="mode_s" checked>
                                        <label class="form-check-label small fw-bold" for="mode_s">Modo Estudio</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="mode_e" checked>
                                        <label class="form-check-label small fw-bold" for="mode_e">Modo Examen</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg rounded-4 fw-bold shadow-sm py-3">
                            <i class="fa-solid fa-cloud-arrow-up me-2"></i>Publicar Pregunta
                        </button>
                        <a href="{{ route('academic.preguntas.index') }}" class="btn btn-light rounded-4 py-2 fw-bold text-muted small">Cancelar</a>
                    </div>

                    <!-- Info Alert -->
                    <div class="mt-4">
                        <div class="d-flex align-items-start p-3 bg-info bg-opacity-10 rounded-4 text-info border border-info border-opacity-25">
                            <i class="fa-solid fa-circle-info me-3 mt-1"></i>
                            <p class="extra-small mb-0 fw-medium">
                                Las preguntas en modo examen se seleccionarán aleatoriamente por pilar para garantizar evaluaciones únicas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<style>
.option-container {
    border: 1px solid #edf2f7;
    background-color: #fff;
}
.option-container:hover {
    border-color: #c05a1e33;
    background-color: #c05a1e05;
}
.btn-check:checked + .btn-outline-success {
    background-color: #198754;
    border-color: #198754;
    color: #fff;
}
.option-container:has(.btn-check:checked) {
    border-color: #19875466 !important;
    background-color: #19875408 !important;
}
.form-control:focus {
    border-color: #c05a1e;
    box-shadow: none;
}
.custom-radio-card:has(.form-check-input:checked) {
    border-color: #c05a1e !important;
    background-color: #c05a1e05 !important;
}
.extra-small { font-size: 0.75rem; }
.transition-all { transition: all 0.2s ease; }
.cursor-pointer { cursor: pointer; }
</style>
@endsection
