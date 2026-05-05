@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-dark mb-2">Simulacro de Examen Final</h1>
        <p class="text-muted fs-5 mx-auto" style="max-width: 700px;">
            Mide tus conocimientos bajo condiciones reales. Esta evaluación determinará tu nivel de preparación para la certificación oficial.
        </p>
    </div>

    <div class="row justify-content-center g-4">
        <!-- Rules & Instructions -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 h-100 overflow-hidden">
                <div class="card-header bg-white py-4 border-bottom-0 px-4">
                    <h5 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-list-check me-2 text-primary"></i>Reglas del Examen</h5>
                </div>
                <div class="card-body px-4 pt-0">
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-4 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-clock text-primary me-2"></i>
                                    <span class="fw-bold small">Tiempo Límite</span>
                                </div>
                                <p class="small text-muted mb-0">Tienes 120 minutos para completar las 110 preguntas.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-4 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-award text-success me-2"></i>
                                    <span class="fw-bold small">Puntaje Mínimo</span>
                                </div>
                                <p class="small text-muted mb-0">Se requiere un 60% de aciertos para aprobar el simulacro.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-4 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-shuffle text-info me-2"></i>
                                    <span class="fw-bold small">Aleatoriedad</span>
                                </div>
                                <p class="small text-muted mb-0">Las preguntas y opciones se presentan en orden aleatorio.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded-4 h-100">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fa-solid fa-eye-slash text-warning me-2"></i>
                                    <span class="fw-bold small">Sin Feedback</span>
                                </div>
                                <p class="small text-muted mb-0">No verás las respuestas correctas hasta finalizar la prueba.</p>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning border-0 rounded-4 p-3 mb-4">
                        <div class="d-flex">
                            <i class="fa-solid fa-triangle-exclamation fs-4 me-3"></i>
                            <div class="small">
                                <span class="fw-bold d-block mb-1">¡Atención!</span>
                                Una vez iniciado, no puedes pausar el cronómetro. Asegúrate de tener una conexión estable.
                            </div>
                        </div>
                    </div>

                    <div class="d-grid mb-4">
                        <a href="{{ route('academic.examen.simulacro') }}" class="btn btn-primary btn-lg rounded-3 py-3 fw-bold shadow-sm">
                            Iniciar Simulacro <i class="fa-solid fa-play ms-2 small"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Previous Results / Sidebar -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-header bg-white py-4 border-bottom-0 px-4">
                    <h5 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-history me-2 text-primary"></i>Intentos Recientes</h5>
                </div>
                <div class="card-body px-4 pt-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item px-0 py-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-dark small">Intento #4</span>
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">82%</span>
                            </div>
                            <div class="d-flex justify-content-between small text-muted">
                                <span><i class="fa-solid fa-calendar me-1"></i> May 04, 2026</span>
                                <span><i class="fa-solid fa-clock me-1"></i> 1h 15m</span>
                            </div>
                        </div>
                        <div class="list-group-item px-0 py-3 border-bottom">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-dark small">Intento #3</span>
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3">55%</span>
                            </div>
                            <div class="d-flex justify-content-between small text-muted">
                                <span><i class="fa-solid fa-calendar me-1"></i> Abr 28, 2026</span>
                                <span><i class="fa-solid fa-clock me-1"></i> 1h 45m</span>
                            </div>
                        </div>
                        <div class="list-group-item px-0 py-3 border-0">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-bold text-dark small">Intento #2</span>
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">71%</span>
                            </div>
                            <div class="d-flex justify-content-between small text-muted">
                                <span><i class="fa-solid fa-calendar me-1"></i> Abr 20, 2026</span>
                                <span><i class="fa-solid fa-clock me-1"></i> 1h 55m</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 p-4 bg-light rounded-4 text-center">
                        <div class="text-muted small fw-bold text-uppercase mb-2">Tu Mejor Resultado</div>
                        <div class="h2 fw-bold text-primary mb-0">82%</div>
                        <div class="small text-success fw-bold mt-1">Aprobado <i class="fa-solid fa-medal ms-1"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bg-opacity-10 {
    background-color: rgba(var(--bs-primary-rgb), 0.1) !important;
}
.list-group-item {
    background-color: transparent;
}
.rounded-4 {
    border-radius: 1rem !important;
}
</style>
@endsection
