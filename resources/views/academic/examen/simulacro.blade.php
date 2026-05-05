@extends('layouts.app')

@section('content')
<div class="container-fluid px-0 py-0 overflow-hidden" style="height: calc(100vh - 65px);">
    <div class="row g-0 h-100">
        <!-- Main Exam Area -->
        <div class="col-lg-9 d-flex flex-column bg-white">
            <!-- Exam Header -->
            <div class="p-4 border-bottom d-flex justify-content-between align-items-center bg-dark text-white">
                <div class="d-flex align-items-center">
                    <div class="bg-primary p-2 rounded-3 me-3">
                        <i class="fa-solid fa-graduation-cap fs-4"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-0">Simulacro de Examen Final</h5>
                        <div class="extra-small text-white-50 fw-bold text-uppercase">Evaluación de Certificación</div>
                    </div>
                </div>
                
                <div class="d-flex align-items-center gap-5">
                    <div class="text-center">
                        <div class="extra-small text-white-50 fw-bold text-uppercase">Tiempo Restante</div>
                        <div class="h4 mb-0 fw-bold text-primary" id="timer">01:59:45</div>
                    </div>
                    <button class="btn btn-danger px-4 rounded-3 fw-bold shadow-sm" onclick="confirmFinish()">
                        Finalizar Examen
                    </button>
                </div>
            </div>

            <!-- Exam Progress Bar -->
            <div class="progress rounded-0" style="height: 4px;">
                <div class="progress-bar bg-primary" style="width: 15%"></div>
            </div>

            <!-- Question Content -->
            <div class="flex-grow-1 overflow-auto p-4 p-md-5 bg-light bg-opacity-30">
                <div class="mx-auto" style="max-width: 800px;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="badge bg-secondary px-3 py-2 rounded-pill">
                            <i class="fa-solid fa-layer-group me-2"></i>Pilar 1: Fundamentos Legales
                        </span>
                        <span class="text-muted fw-bold small">Pregunta 15 de 110</span>
                    </div>
                    
                    <div class="card border-0 shadow-sm rounded-4 mb-5">
                        <div class="card-body p-4 p-md-5">
                            <h4 class="fw-bold text-dark lh-base mb-4">
                                De acuerdo con la normativa vigente de seguridad institucional, ¿cuál es el protocolo de acción inmediata ante una brecha de seguridad nivel 3?
                            </h4>

                            <div class="d-grid gap-3">
                                @foreach(['A', 'B', 'C', 'D'] as $letter)
                                <div class="form-check custom-exam-option p-0">
                                    <input class="btn-check" type="radio" name="exam_answer" id="opt_{{ $letter }}" value="{{ $letter }}">
                                    <label class="btn btn-outline-light text-start p-4 rounded-4 border-2 w-100 d-flex align-items-center gap-4 transition-all" for="opt_{{ $letter }}">
                                        <div class="option-letter bg-light rounded-circle d-flex align-items-center justify-content-center fw-bold text-dark fs-5" style="width: 45px; height: 45px; min-width: 45px;">
                                            {{ $letter }}
                                        </div>
                                        <div class="option-text fs-6 fw-medium text-dark">
                                            Esta es la opción de respuesta {{ $letter }} que el estudiante debe evaluar cuidadosamente antes de marcar.
                                        </div>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Exam Footer Controls -->
            <div class="p-4 border-top bg-white">
                <div class="mx-auto d-flex justify-content-between align-items-center" style="max-width: 800px;">
                    <button class="btn btn-light border px-4 rounded-3 fw-bold">
                        <i class="fa-solid fa-chevron-left me-2"></i>Anterior
                    </button>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-secondary px-4 rounded-3 fw-bold">
                            <i class="fa-solid fa-flag me-2"></i>Marcar para revisión
                        </button>
                        <button class="btn btn-primary px-5 rounded-3 fw-bold shadow-sm">
                            Siguiente <i class="fa-solid fa-chevron-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar: Map & Progress -->
        <div class="col-lg-3 bg-light border-start d-flex flex-column">
            <div class="p-4 flex-grow-1 overflow-auto">
                <h6 class="fw-bold text-dark mb-4 text-uppercase small" style="letter-spacing: 0.05em;">Mapa de Evaluación</h6>
                
                <div class="mb-4">
                    <div class="d-flex justify-content-between extra-small mb-2">
                        <span class="text-muted fw-bold">PROGRESO TOTAL</span>
                        <span class="text-primary fw-bold">15%</span>
                    </div>
                    <div class="progress rounded-pill" style="height: 6px;">
                        <div class="progress-bar bg-primary rounded-pill" style="width: 15%"></div>
                    </div>
                </div>

                <!-- Legend -->
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <div class="d-flex align-items-center extra-small text-muted">
                        <div class="bg-primary rounded-circle me-2" style="width: 10px; height: 10px;"></div> Respondida
                    </div>
                    <div class="d-flex align-items-center extra-small text-muted">
                        <div class="bg-white border border-primary rounded-circle me-2" style="width: 10px; height: 10px;"></div> Actual
                    </div>
                    <div class="d-flex align-items-center extra-small text-muted">
                        <div class="bg-warning rounded-circle me-2" style="width: 10px; height: 10px;"></div> Marcada
                    </div>
                </div>

                <!-- Question Grid -->
                <div class="d-flex flex-wrap gap-2 pb-4" id="questionGrid">
                    @for($i = 1; $i <= 110; $i++)
                    <div class="question-dot d-flex align-items-center justify-content-center rounded-3 border transition-all {{ $i < 15 ? 'bg-primary border-primary text-white shadow-sm' : ($i == 15 ? 'bg-white border-primary border-2 text-primary fw-bold shadow-sm' : 'bg-white text-muted') }}" 
                         style="width: 32px; height: 32px; font-size: 0.7rem; cursor: pointer;">
                        {{ $i }}
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Quick Tips Section -->
            <div class="p-4 border-top mt-auto bg-white">
                <div class="p-3 bg-light rounded-4 border-start border-primary border-4">
                    <h6 class="fw-bold text-dark extra-small text-uppercase mb-2">Recordatorio</h6>
                    <p class="extra-small text-muted mb-0">
                        Puedes navegar entre preguntas haciendo clic en los números del mapa. No olvides revisar las preguntas marcadas antes de finalizar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.custom-exam-option .btn-outline-light {
    border-color: #edf2f7 !important;
    background-color: #fff;
    text-align: left;
}
.custom-exam-option .btn-check:checked + .btn-outline-light {
    border-color: #c05a1e !important;
    background-color: rgba(192, 90, 30, 0.05) !important;
}
.custom-exam-option .btn-check:checked + .btn-outline-light .option-letter {
    background-color: #c05a1e !important;
    color: #fff !important;
}
.custom-exam-option .btn-outline-light:hover {
    border-color: #c05a1e33 !important;
    background-color: #c05a1e05 !important;
}
.question-dot:hover {
    transform: scale(1.1);
    border-color: #c05a1e !important;
}
.extra-small { font-size: 0.7rem; }
.transition-all { transition: all 0.2s ease; }
</style>

<script>
function confirmFinish() {
    window.Notify.confirm({
        title: '¿Finalizar Simulacro?',
        text: 'Has respondido 15 de 110 preguntas. ¿Estás seguro de que deseas terminar el examen ahora?',
        confirmButtonText: 'Sí, finalizar',
        cancelButtonText: 'Continuar examen'
    }).then(confirmed => {
        if (confirmed) {
            // Lógica para enviar el examen
        }
    });
}
</script>
@endsection
