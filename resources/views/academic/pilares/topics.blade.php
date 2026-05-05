@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header -->
    <div class="mb-4">
        <a href="{{ route('academic.pilares.index') }}" class="btn btn-sm btn-outline-secondary border-0 ps-0 mb-2">
            <i class="fa-solid fa-arrow-left me-2"></i>Volver a Pilares
        </a>
        <div class="d-flex justify-content-between align-items-end">
            <div>
                <h1 class="h3 mb-1 fw-bold text-dark">Temas del Pilar</h1>
                <p class="text-muted mb-0">Gestiona los temas específicos para el Pilar #{{ $id }}</p>
            </div>
            <button class="btn btn-primary px-4 rounded-3 shadow-sm fw-bold" data-bs-toggle="modal" data-bs-target="#addTopicModal">
                <i class="fa-solid fa-plus me-2"></i>Nuevo Tema
            </button>
        </div>
    </div>

    <div class="row g-4">
        <!-- Topics List -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th class="ps-4 border-0 py-3 small fw-bold text-muted text-uppercase">Nombre del Tema</th>
                                    <th class="border-0 py-3 small fw-bold text-muted text-uppercase text-center">Preguntas</th>
                                    <th class="border-0 py-3 small fw-bold text-muted text-uppercase text-center">Estado</th>
                                    <th class="pe-4 border-0 py-3 small fw-bold text-muted text-uppercase text-end">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 1; $i <= 5; $i++)
                                <tr>
                                    <td class="ps-4 py-3">
                                        <div class="fw-bold text-dark">Tema Académico {{ $i }}</div>
                                        <div class="text-muted extra-small">Subtítulo o descripción breve del tema</div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-light text-dark border fw-normal px-3">{{ rand(10, 50) }}</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3">Activo</span>
                                    </td>
                                    <td class="pe-4 text-end">
                                        <button class="btn btn-sm btn-light border rounded-3 me-1" title="Editar"><i class="fa-solid fa-edit text-muted"></i></button>
                                        <button class="btn btn-sm btn-light border rounded-3 text-danger" title="Eliminar"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pillar Info Sidebar -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 mb-4">
                <div class="card-header bg-white py-3 border-bottom-0 px-4">
                    <h6 class="fw-bold mb-0 text-dark">Información del Pilar</h6>
                </div>
                <div class="card-body px-4 pt-0">
                    <div class="d-flex align-items-center p-3 bg-primary bg-opacity-10 rounded-4 text-primary mb-4">
                        <i class="fa-solid fa-scale-balanced fs-3 me-3"></i>
                        <div>
                            <div class="fw-bold">Fundamentos Legales</div>
                            <div class="extra-small opacity-75">Pilar Maestro Seleccionado</div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2 small">
                            <span class="text-muted">Capacidad de Temas</span>
                            <span class="fw-bold">5 / 15</span>
                        </div>
                        <div class="progress rounded-pill" style="height: 8px;">
                            <div class="progress-bar bg-primary rounded-pill" style="width: 33%"></div>
                        </div>
                    </div>

                    <div class="alert alert-warning border-0 rounded-4 small mb-0">
                        <i class="fa-solid fa-triangle-exclamation me-2"></i>
                        Se recomienda tener al menos <strong>5 temas</strong> por pilar para una distribución equitativa de preguntas.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Topic Modal -->
<div class="modal fade" id="addTopicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow rounded-4">
            <div class="modal-header border-bottom-0 px-4 pt-4">
                <h5 class="modal-title fw-bold">Nuevo Tema Académico</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold small text-uppercase">Nombre del Tema</label>
                        <input type="text" class="form-control rounded-3 border-2" placeholder="Ej: Normativa de Seguridad Vial" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-uppercase">Descripción Breve</label>
                        <textarea class="form-control rounded-3 border-2" rows="3" placeholder="¿De qué trata este tema?"></textarea>
                    </div>
                    <div class="d-grid gap-2 mb-2">
                        <button type="submit" class="btn btn-primary rounded-3 fw-bold py-2">Guardar Tema</button>
                        <button type="button" class="btn btn-light rounded-3 py-2 text-muted" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.extra-small { font-size: 0.75rem; }
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
</style>
@endsection
