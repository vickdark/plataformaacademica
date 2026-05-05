@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-1 fw-bold text-dark">Banco de Preguntas</h1>
            <p class="text-muted mb-0">Gestiona el repositorio central de reactivos para estudio y examen.</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ route('academic.preguntas.import') }}" class="btn btn-white shadow-sm border rounded-3 px-3">
                <i class="fa-solid fa-file-import me-2 text-primary"></i>Importar
            </a>
            <a href="{{ route('academic.preguntas.create') }}" class="btn btn-primary shadow-sm rounded-3 px-4">
                <i class="fa-solid fa-plus-circle me-2"></i>Nueva Pregunta
            </a>
        </div>
    </div>

    <!-- Stats & Filters -->
    <div class="row g-4 mb-4">
        <div class="col-md-9">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4">
                    <form class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label small fw-bold text-muted text-uppercase">Filtrar por Pilar</label>
                            <select class="form-select border-2 rounded-3">
                                <option value="">Todos los Pilares</option>
                                <option value="1">Fundamentos Legales</option>
                                <option value="2">Procedimientos Técnicos</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label small fw-bold text-muted text-uppercase">Estado</label>
                            <select class="form-select border-2 rounded-3">
                                <option value="">Cualquier Estado</option>
                                <option value="active">Activa</option>
                                <option value="review">En Revisión</option>
                            </select>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <div class="input-group">
                                <input type="text" class="form-control border-2 rounded-start-3 ps-3" placeholder="Buscar por texto...">
                                <button class="btn btn-secondary rounded-end-3 px-3" type="button">
                                    <i class="fa-solid fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-4 bg-white border-start border-primary border-4 h-100">
                <div class="card-body d-flex align-items-center p-4">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-4 me-3">
                        <i class="fa-solid fa-database fs-2 text-primary"></i>
                    </div>
                    <div>
                        <div class="text-muted extra-small fw-bold text-uppercase">Total Reactivos</div>
                        <div class="h2 fw-bold text-primary mb-0">824</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Card -->
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 border-0 py-3 small fw-bold text-muted text-uppercase">Contenido de la Pregunta</th>
                            <th class="border-0 py-3 small fw-bold text-muted text-uppercase">Clasificación</th>
                            <th class="border-0 py-3 small fw-bold text-muted text-uppercase text-center">Modos</th>
                            <th class="border-0 py-3 small fw-bold text-muted text-uppercase text-center">Estado</th>
                            <th class="pe-4 border-0 py-3 small fw-bold text-muted text-uppercase text-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 1; $i <= 6; $i++)
                        <tr>
                            <td class="ps-4 py-3" style="max-width: 400px;">
                                <div class="fw-bold text-dark text-truncate">¿Cuál es el procedimiento estándar para la evacuación en casos de...?</div>
                                <div class="text-muted extra-small"><i class="fa-solid fa-user-edit me-1"></i> Administrador • <i class="fa-solid fa-clock me-1"></i> Hace 2 días</div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <span class="small fw-bold text-dark">Pilar 1</span>
                                    <span class="extra-small text-muted">Tema: Seguridad Básica</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 rounded-pill px-3 extra-small fw-bold">Estudio</span>
                                <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25 rounded-pill px-3 extra-small fw-bold">Examen</span>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 fw-bold"><i class="fa-solid fa-circle-check me-1"></i>Activa</span>
                            </td>
                            <td class="pe-4 text-end">
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-light border rounded-3 me-1" title="Ver"><i class="fa-solid fa-eye text-muted"></i></button>
                                    <button class="btn btn-sm btn-light border rounded-3 me-1" title="Editar"><i class="fa-solid fa-edit text-muted"></i></button>
                                    <button class="btn btn-sm btn-light border rounded-3 text-danger" title="Eliminar"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white py-3 border-top">
            <div class="d-flex align-items-center justify-content-between">
                <div class="small text-muted">Mostrando 6 de 824 preguntas</div>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item"><a class="page-link" href="#">138</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
.extra-small { font-size: 0.75rem; }
.btn-white { background-color: #fff; color: #444; }
.btn-white:hover { background-color: #f8f9fa; }
.pagination .page-item.active .page-link { background-color: #c05a1e; border-color: #c05a1e; color: #fff; }
.pagination .page-link { color: #c05a1e; border-radius: 8px !important; margin: 0 2px; }
.bg-opacity-10 { background-color: rgba(var(--bs-primary-rgb), 0.1) !important; }
</style>
@endsection
