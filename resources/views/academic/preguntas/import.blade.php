@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header -->
    <div class="mb-4 text-center">
        <div class="bg-primary bg-opacity-10 d-inline-flex p-3 rounded-circle mb-3">
            <i class="fa-solid fa-file-excel fs-1 text-primary"></i>
        </div>
        <h1 class="h3 mb-1 fw-bold text-dark">Importación Masiva de Preguntas</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Ahorra tiempo cargando cientos de preguntas simultáneamente. Utiliza nuestra plantilla estandarizada para garantizar la integridad de los datos.
        </p>
    </div>

    <div class="row justify-content-center g-4">
        <!-- Main Import Card -->
        <div class="col-lg-6">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4 p-md-5">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="upload-area border-2 border-dashed rounded-4 p-5 text-center mb-4 transition-all" id="dropZone">
                            <i class="fa-solid fa-cloud-arrow-up fs-1 text-muted mb-3"></i>
                            <h5 class="fw-bold text-dark mb-2">Suelte su archivo aquí</h5>
                            <p class="text-muted small mb-4">o haga clic para seleccionar desde su equipo</p>
                            <input type="file" name="file" id="fileInput" class="d-none" accept=".xlsx, .xls">
                            <button type="button" class="btn btn-primary px-4 rounded-pill fw-bold" onclick="document.getElementById('fileInput').click()">
                                <i class="fa-solid fa-folder-open me-2"></i>Seleccionar Archivo
                            </button>
                        </div>

                        <div id="fileInfo" class="d-none mb-4">
                            <div class="d-flex align-items-center p-3 bg-light rounded-3 border">
                                <i class="fa-solid fa-file-circle-check fs-3 text-success me-3"></i>
                                <div class="flex-grow-1">
                                    <div class="fw-bold text-dark small" id="fileName">archivo.xlsx</div>
                                    <div class="text-muted extra-small" id="fileSize">0 KB</div>
                                </div>
                                <button type="button" class="btn btn-link text-danger p-0" onclick="resetUpload()">
                                    <i class="fa-solid fa-circle-xmark fs-5"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg rounded-4 fw-bold shadow-sm py-3" id="btnImport" disabled>
                                <i class="fa-solid fa-rocket me-2"></i>Iniciar Procesamiento
                            </button>
                            <a href="{{ route('academic.preguntas.index') }}" class="btn btn-link text-muted text-decoration-none small">
                                <i class="fa-solid fa-arrow-left me-2"></i>Cancelar y Volver
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Instructions & Template Card -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-white py-3 border-bottom-0 px-4">
                    <h6 class="fw-bold mb-0 text-dark"><i class="fa-solid fa-circle-info me-2 text-info"></i>Guía de Preparación</h6>
                </div>
                <div class="card-body px-4 pt-0">
                    <div class="list-group list-group-flush small">
                        <div class="list-group-item px-0 py-3 d-flex border-bottom">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                                <span class="fw-bold text-primary">1</span>
                            </div>
                            <div>
                                <span class="fw-bold d-block text-dark">Descarga la plantilla</span>
                                <span class="text-muted">Asegúrate de no modificar los encabezados de las columnas.</span>
                            </div>
                        </div>
                        <div class="list-group-item px-0 py-3 d-flex border-bottom">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                                <span class="fw-bold text-primary">2</span>
                            </div>
                            <div>
                                <span class="fw-bold d-block text-dark">Completa los datos</span>
                                <span class="text-muted">Incluye enunciado, opciones A-D, respuesta correcta y pilar.</span>
                            </div>
                        </div>
                        <div class="list-group-item px-0 py-3 d-flex border-0">
                            <div class="bg-light rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                                <span class="fw-bold text-primary">3</span>
                            </div>
                            <div>
                                <span class="fw-bold d-block text-dark">Sube y Valida</span>
                                <span class="text-muted">El sistema validará que los pilares y temas existan antes de guardar.</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-primary w-100 rounded-4 py-3 fw-bold border-2 shadow-sm">
                            <i class="fa-solid fa-download me-2"></i>Descargar Plantilla Oficial (.xlsx)
                        </a>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 bg-warning bg-opacity-10 border-start border-warning border-4">
                <div class="card-body p-4">
                    <h6 class="fw-bold text-warning mb-2"><i class="fa-solid fa-triangle-exclamation me-2"></i>Dato importante</h6>
                    <p class="small text-muted mb-0">
                        La importación soporta hasta <strong>1,000 preguntas</strong> por archivo. Si tienes más, divídelas en varios documentos para evitar tiempos de espera excesivos.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.upload-area {
    border-color: #dee2e6 !important;
    background-color: #fcfcfc;
    cursor: pointer;
}
.upload-area:hover {
    border-color: #c05a1e !important;
    background-color: rgba(192, 90, 30, 0.02);
}
.border-dashed { border-style: dashed !important; }
.extra-small { font-size: 0.75rem; }
.transition-all { transition: all 0.3s ease; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('fileInput');
    const dropZone = document.getElementById('dropZone');
    const fileInfo = document.getElementById('fileInfo');
    const fileName = document.getElementById('fileName');
    const fileSize = document.getElementById('fileSize');
    const btnImport = document.getElementById('btnImport');

    fileInput.addEventListener('change', handleFiles);
    
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.style.borderColor = '#c05a1e';
        dropZone.style.backgroundColor = 'rgba(192, 90, 30, 0.05)';
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.style.borderColor = '#dee2e6';
        dropZone.style.backgroundColor = '#fcfcfc';
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        fileInput.files = e.dataTransfer.files;
        handleFiles();
    });

    function handleFiles() {
        if (fileInput.files.length > 0) {
            const file = fileInput.files[0];
            fileName.textContent = file.name;
            fileSize.textContent = (file.size / 1024).toFixed(2) + ' KB';
            
            dropZone.classList.add('d-none');
            fileInfo.classList.remove('d-none');
            btnImport.disabled = false;
        }
    }

    window.resetUpload = function() {
        fileInput.value = '';
        dropZone.classList.remove('d-none');
        fileInfo.classList.add('d-none');
        btnImport.disabled = true;
        dropZone.style.borderColor = '#dee2e6';
        dropZone.style.backgroundColor = '#fcfcfc';
    }
});
</script>
@endsection
