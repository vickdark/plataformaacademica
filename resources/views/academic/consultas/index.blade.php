@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    <div class="mb-4">
        <h1 class="h3 mb-1 fw-bold text-dark">Buzón de Consultas</h1>
        <p class="text-muted">Resolución de dudas académicas entre estudiantes e instructores.</p>
    </div>

    <div class="row g-4 h-100">
        <!-- Conversations List -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                <div class="card-header bg-white py-3 border-bottom-0 px-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="fw-bold mb-0 text-dark">Mis Mensajes</h6>
                        <button class="btn btn-sm btn-light rounded-pill"><i class="fa-solid fa-plus text-primary"></i></button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @php
                            $chats = [
                                ['name' => 'Instructor: Carlos Ruiz', 'topic' => 'Duda sobre Pilar 1', 'time' => '10m', 'unread' => true, 'status' => 'online'],
                                ['name' => 'Instructor: Elena Gómez', 'topic' => 'Feedback Examen #4', 'time' => '2h', 'unread' => false, 'status' => 'offline'],
                                ['name' => 'Soporte Académico', 'topic' => 'Validación de Documentos', 'time' => '1d', 'unread' => false, 'status' => 'online'],
                            ];
                        @endphp
                        @foreach($chats as $chat)
                        <a href="#" class="list-group-item list-group-item-action p-4 border-0 {{ $chat['unread'] ? 'bg-primary bg-opacity-10' : '' }}">
                            <div class="d-flex align-items-center">
                                <div class="position-relative me-3">
                                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                                        <i class="fa-solid fa-user-graduate text-muted"></i>
                                    </div>
                                    <span class="position-absolute bottom-0 end-0 p-1 bg-{{ $chat['status'] == 'online' ? 'success' : 'secondary' }} border border-white rounded-circle"></span>
                                </div>
                                <div class="flex-grow-1 overflow-hidden">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="fw-bold mb-1 small text-dark">{{ $chat['name'] }}</h6>
                                        <span class="extra-small text-muted">{{ $chat['time'] }}</span>
                                    </div>
                                    <div class="extra-small text-truncate {{ $chat['unread'] ? 'fw-bold text-primary' : 'text-muted' }}">
                                        {{ $chat['topic'] }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Content -->
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 h-100 bg-white d-flex flex-column" style="min-height: 500px;">
                <div class="card-header bg-white py-3 border-bottom d-flex align-items-center px-4">
                    <div class="bg-primary bg-opacity-10 p-2 rounded-3 me-3 text-primary">
                        <i class="fa-solid fa-comment-dots"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Carlos Ruiz (Instructor)</h6>
                        <div class="extra-small text-success fw-bold">En línea</div>
                    </div>
                    <div class="ms-auto">
                        <button class="btn btn-sm btn-light border rounded-pill px-3"><i class="fa-solid fa-circle-info me-1"></i>Ver Pregunta Vinculada</button>
                    </div>
                </div>
                <div class="card-body p-4 flex-grow-1 overflow-auto bg-light bg-opacity-30">
                    <div class="d-flex flex-column gap-4">
                        <!-- Message Received -->
                        <div class="d-flex gap-3 align-items-start" style="max-width: 80%;">
                            <div class="bg-white p-3 rounded-4 shadow-sm border small text-dark">
                                Hola, tengo una duda sobre la pregunta #PRG-1024 del pilar de Fundamentos. No comprendo por qué la opción C no es válida.
                                <div class="extra-small text-muted mt-2">09:15 AM</div>
                            </div>
                        </div>
                        <!-- Message Sent -->
                        <div class="d-flex gap-3 align-items-start ms-auto" style="max-width: 80%;">
                            <div class="bg-primary p-3 rounded-4 shadow-sm text-white small">
                                ¡Hola! La opción C es incorrecta porque hace referencia a la normativa anterior de 2022. La respuesta correcta (A) se basa en la actualización de este año.
                                <div class="extra-small text-white-50 mt-2 text-end">09:45 AM</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white p-4 border-top">
                    <form class="d-flex gap-3">
                        <input type="text" class="form-control rounded-pill border-2 ps-4" placeholder="Escribe tu mensaje aquí...">
                        <button type="submit" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 45px; height: 45px;">
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.extra-small { font-size: 0.7rem; }
.bg-opacity-30 { background-color: rgba(248, 249, 250, 0.5) !important; }
</style>
@endsection
