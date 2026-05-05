@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Breadcrumb & Title -->
    <div class="mb-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{ route('academic.pilares.index') }}" class="text-decoration-none text-primary">Pilares</a></li>
                <li class="breadcrumb-item active">Crear Nuevo</li>
            </ol>
        </nav>
        <h1 class="h3 mb-1 fw-bold text-dark">Configuración de Pilar Maestro</h1>
        <p class="text-muted">Establece la identidad visual y académica de un área de conocimiento.</p>
    </div>

    <div class="row g-4">
        <!-- Form Column -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-header bg-white py-3 border-bottom-0 px-4">
                    <h5 class="fw-bold mb-0 text-dark">Información General</h5>
                </div>
                <div class="card-body px-4 pt-0">
                    <form action="#" method="POST" id="pilarForm">
                        <div class="row g-4">
                            <!-- Name -->
                            <div class="col-12">
                                <label class="form-label fw-bold text-dark small text-uppercase">Nombre del Pilar</label>
                                <input type="text" id="pilarName" class="form-control form-control-lg rounded-3 border-2" placeholder="Ej: Fundamentos Legales y Normativa" required>
                                <div class="form-text">Usa un nombre descriptivo que identifique claramente el área.</div>
                            </div>

                            <!-- Icon & Color Selection -->
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small text-uppercase">Icono Representativo</label>
                                <div class="row g-2" id="iconPicker">
                                    @foreach(['fa-scale-balanced', 'fa-gears', 'fa-handshake-angle', 'fa-shield-virus', 'fa-building-columns', 'fa-microscope'] as $icon)
                                    <div class="col-4">
                                        <input type="radio" class="btn-check" name="icon" id="icon_{{ $icon }}" value="{{ $icon }}" {{ $loop->first ? 'checked' : '' }}>
                                        <label class="btn btn-outline-light border-2 w-100 py-3 rounded-3 text-muted" for="icon_{{ $icon }}">
                                            <i class="fa-solid {{ $icon }} fs-4"></i>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label fw-bold text-dark small text-uppercase">Color Temático</label>
                                <div class="row g-2" id="colorPicker">
                                    @foreach(['primary' => '#c05a1e', 'success' => '#198754', 'info' => '#0dcaf0', 'warning' => '#ffc107', 'danger' => '#dc3545', 'secondary' => '#6c757d'] as $name => $hex)
                                    <div class="col-4">
                                        <input type="radio" class="btn-check" name="color" id="color_{{ $name }}" value="{{ $name }}" {{ $loop->first ? 'checked' : '' }}>
                                        <label class="btn btn-outline-light border-2 w-100 py-3 rounded-3" for="color_{{ $name }}" style="background-color: {{ $hex }}15;">
                                            <div class="rounded-circle mx-auto" style="width: 20px; height: 20px; background-color: {{ $hex }};"></div>
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Requirements -->
                            <div class="col-12">
                                <label class="form-label fw-bold text-dark small text-uppercase">Configuración Académica</label>
                                <div class="bg-light p-3 rounded-4">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label small">Preguntas por Examen (Recomendado: 22)</label>
                                            <input type="number" class="form-control rounded-3" value="22" min="1">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label small">Preguntas por Sesión Estudio</label>
                                            <input type="number" class="form-control rounded-3" value="22" min="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-12">
                                <label class="form-label fw-bold text-dark small text-uppercase">Descripción Detallada</label>
                                <textarea class="form-control rounded-3 border-2" rows="4" placeholder="Describe los objetivos de aprendizaje de este pilar..."></textarea>
                            </div>

                            <!-- Actions -->
                            <div class="col-12 text-end mt-4 mb-2">
                                <hr class="my-4 opacity-10">
                                <button type="button" class="btn btn-light px-4 me-2 rounded-3 fw-bold">Descartar</button>
                                <button type="submit" class="btn btn-primary px-5 rounded-3 shadow-sm fw-bold py-2">
                                    Crear Pilar Maestro <i class="fa-solid fa-rocket ms-2 small"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Preview Column -->
        <div class="col-lg-5">
            <div class="sticky-top" style="top: 2rem; z-index: 10;">
                <h6 class="fw-bold text-dark mb-3 text-uppercase small" style="letter-spacing: 0.05em;">Vista Previa de Tarjeta</h6>
                
                <!-- Mock Card Preview -->
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4" id="pilarPreview">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-4">
                            <div id="previewIconBg" class="bg-primary bg-opacity-10 p-3 rounded-4 text-primary me-3">
                                <i id="previewIcon" class="fa-solid fa-scale-balanced fs-3"></i>
                            </div>
                            <div>
                                <h5 id="previewName" class="fw-bold text-dark mb-0">Nombre del Pilar</h5>
                                <span class="extra-small text-muted text-uppercase fw-bold">ID #PLR-NEW</span>
                            </div>
                        </div>

                        <div class="row g-2 mb-4 text-center">
                            <div class="col-6">
                                <div class="bg-light rounded-3 p-3">
                                    <div class="h4 fw-bold text-dark mb-0">0</div>
                                    <div class="extra-small text-muted text-uppercase">Temas</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bg-light rounded-3 p-3">
                                    <div class="h4 fw-bold text-dark mb-0">0</div>
                                    <div class="extra-small text-muted text-uppercase">Preguntas</div>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button id="previewBtn" class="btn btn-outline-primary rounded-3 py-2 fw-bold small">
                                Ver Detalle Académico
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tips Card -->
                <div class="card border-0 shadow-sm rounded-4 bg-dark text-white p-2">
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <div class="bg-primary p-2 rounded-3 me-3">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <h6 class="fw-bold mb-0 align-self-center">Consejo Profesional</h6>
                        </div>
                        <p class="small text-white-50 mb-0">
                            Los pilares son la base de los exámenes. Asegúrate de que cada uno tenga al menos <strong>60 preguntas</strong> cargadas para garantizar una aleatoriedad efectiva en los simulacros de 22 preguntas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btn-check:checked + .btn-outline-light {
    border-color: #c05a1e !important;
    background-color: rgba(192, 90, 30, 0.05) !important;
    color: #c05a1e !important;
}
.form-control:focus {
    border-color: #c05a1e;
    box-shadow: 0 0 0 0.25rem rgba(192, 90, 30, 0.1);
}
.extra-small { font-size: 0.7rem; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const pilarNameInput = document.getElementById('pilarName');
    const previewName = document.getElementById('previewName');
    const iconRadios = document.getElementsByName('icon');
    const colorRadios = document.getElementsByName('color');
    const previewIcon = document.getElementById('previewIcon');
    const previewIconBg = document.getElementById('previewIconBg');
    const previewBtn = document.getElementById('previewBtn');

    const colors = {
        primary: '#c05a1e',
        success: '#198754',
        info: '#0dcaf0',
        warning: '#ffc107',
        danger: '#dc3545',
        secondary: '#6c757d'
    };

    pilarNameInput.addEventListener('input', (e) => {
        previewName.textContent = e.target.value || 'Nombre del Pilar';
    });

    iconRadios.forEach(radio => {
        radio.addEventListener('change', (e) => {
            previewIcon.className = `fa-solid ${e.target.value} fs-3`;
        });
    });

    colorRadios.forEach(radio => {
        radio.addEventListener('change', (e) => {
            const color = e.target.value;
            const hex = colors[color];
            
            previewIconBg.className = `bg-${color} bg-opacity-10 p-3 rounded-4 text-${color} me-3`;
            previewBtn.className = `btn btn-outline-${color} rounded-3 py-2 fw-bold small`;
        });
    });
});
</script>
@endsection
