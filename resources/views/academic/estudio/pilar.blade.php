@extends('layouts.app')

@section('content')
<div class="container-fluid px-0 py-0 overflow-hidden" style="height: calc(100vh - 65px);">
    <div class="row g-0 h-100">
        <!-- Main Question Area -->
        <div class="col-lg-8 d-flex flex-column bg-white border-end">
            <!-- Session Header -->
            <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-light bg-opacity-50">
                <div class="d-flex align-items-center">
                    <a href="{{ route('academic.estudio.index') }}" class="btn btn-sm btn-white border shadow-sm rounded-3 me-3">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <div>
                        <h5 class="fw-bold mb-0 text-dark">Sesión de Estudio: Pilar #{{ $id }}</h5>
                        <div class="extra-small text-muted fw-bold text-uppercase">Fundamentos Legales</div>
                    </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                    <div class="text-end d-none d-md-block">
                        <div class="extra-small text-muted fw-bold">Progreso de la sesión</div>
                        <div class="fw-bold text-primary">Pregunta 1 de 22</div>
                    </div>
                    <div class="progress" style="width: 100px; height: 8px;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 5%"></div>
                    </div>
                </div>
            </div>

            <!-- Question Content -->
            <div class="flex-grow-1 overflow-auto p-4 p-md-5">
                <div class="mx-auto" style="max-width: 700px;">
                    <div class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill mb-4 fw-bold">
                        <i class="fa-solid fa-circle-question me-2"></i>Pregunta de Opción Múltiple
                    </div>
                    
                    <h3 class="fw-bold text-dark lh-base mb-5">
                        ¿Cuál de las siguientes opciones describe mejor el procedimiento técnico para la validación de...?
                    </h3>

                    <div class="d-grid gap-3 mb-5">
                        @foreach(['A', 'B', 'C', 'D'] as $letter)
                        <button class="btn btn-outline-light text-start p-4 rounded-4 border-2 shadow-sm transition-all option-btn d-flex align-items-center gap-4" data-letter="{{ $letter }}">
                            <div class="option-letter bg-light rounded-circle d-flex align-items-center justify-content-center fw-bold text-dark fs-5" style="width: 45px; height: 45px; min-width: 45px;">
                                {{ $letter }}
                            </div>
                            <div class="option-text fs-6 fw-medium text-dark">
                                Esta es una descripción detallada de la opción {{ $letter }} para que el estudiante elija.
                            </div>
                            <div class="ms-auto feedback-icon d-none">
                                <i class="fa-solid fa-circle-check text-success fs-3"></i>
                            </div>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Footer Controls -->
            <div class="p-4 border-top bg-light bg-opacity-50 mt-auto">
                <div class="mx-auto d-flex justify-content-between align-items-center" style="max-width: 700px;">
                    <button class="btn btn-white border px-4 rounded-3 fw-bold shadow-sm" disabled>
                        <i class="fa-solid fa-chevron-left me-2"></i>Anterior
                    </button>
                    <div class="d-flex gap-2">
                        <button class="btn btn-info text-white px-4 rounded-3 fw-bold shadow-sm">
                            <i class="fa-solid fa-lightbulb me-2"></i>Pista
                        </button>
                        <button class="btn btn-primary px-4 rounded-3 fw-bold shadow-sm">
                            Siguiente <i class="fa-solid fa-chevron-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar: Info & History -->
        <div class="col-lg-4 bg-light d-none d-lg-flex flex-column">
            <div class="p-4 flex-grow-1 overflow-auto">
                <!-- Feedback Section -->
                <div class="card border-0 shadow-sm rounded-4 mb-4" id="feedbackCard">
                    <div class="card-body p-4">
                        <h6 class="fw-bold text-dark mb-3"><i class="fa-solid fa-comment-dots me-2 text-info"></i>Explicación Pedagógica</h6>
                        <div class="text-muted small lh-lg">
                            Selecciona una respuesta para ver la retroalimentación detallada. Aquí se explicará el porqué de la respuesta correcta basándose en la normativa vigente.
                        </div>
                    </div>
                </div>

                <!-- Session Stats -->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body p-4">
                        <h6 class="fw-bold text-dark mb-4 text-uppercase small" style="letter-spacing: 0.05em;">Resumen de la Sesión</h6>
                        <div class="row g-3 text-center">
                            <div class="col-6">
                                <div class="p-3 bg-white rounded-4 border">
                                    <div class="h4 fw-bold text-success mb-0">0</div>
                                    <div class="extra-small text-muted text-uppercase fw-bold">Correctas</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-white rounded-4 border">
                                    <div class="h4 fw-bold text-danger mb-0">0</div>
                                    <div class="extra-small text-muted text-uppercase fw-bold">Incorrectas</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Question Map -->
                <h6 class="fw-bold text-dark mb-3 text-uppercase extra-small px-2">Mapa de preguntas</h6>
                <div class="d-flex flex-wrap gap-2 px-2">
                    @for($i = 1; $i <= 22; $i++)
                    <div class="btn btn-sm btn-white border rounded-3 d-flex align-items-center justify-content-center p-0 {{ $i == 1 ? 'border-primary border-2 fw-bold text-primary shadow-sm' : 'text-muted' }}" style="width: 35px; height: 35px; font-size: 0.75rem;">
                        {{ $i }}
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Bottom Ad/Tip -->
            <div class="p-4 mt-auto">
                <div class="bg-dark text-white p-4 rounded-4 shadow-sm position-relative overflow-hidden">
                    <i class="fa-solid fa-graduation-cap position-absolute end-0 bottom-0 mb-n3 me-n2 opacity-10" style="font-size: 6rem;"></i>
                    <h6 class="fw-bold mb-2 position-relative">¿Listo para el examen?</h6>
                    <p class="extra-small text-white-50 mb-0 position-relative">
                        Recuerda que en el modo estudio puedes repetir las preguntas fallidas hasta dominarlas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.option-btn {
    background-color: #fff;
    border-color: #edf2f7 !important;
}
.option-btn:hover {
    border-color: #c05a1e33 !important;
    background-color: #c05a1e05 !important;
    transform: translateX(10px);
}
.option-btn.selected-correct {
    border-color: #198754 !important;
    background-color: #19875408 !important;
}
.option-btn.selected-correct .option-letter {
    background-color: #198754 !important;
    color: #fff !important;
}
.option-btn.selected-correct .feedback-icon {
    display: block !important;
}
.extra-small { font-size: 0.7rem; }
.transition-all { transition: all 0.3s ease; }
.btn-white { background-color: #fff; color: #444; }
.btn-white:hover { background-color: #f8f9fa; }
</style>
@endsection
