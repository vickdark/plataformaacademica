<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Usuarios\UsuarioController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Roles\PermissionController;
use App\Http\Controllers\Profile\PasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\ConfiguracionController;
use App\Http\Controllers\Academic\PilarController;
use App\Http\Controllers\Academic\PreguntaController;
use App\Http\Controllers\Academic\EstudioController;
use App\Http\Controllers\Academic\ExamenController;
use App\Http\Controllers\Academic\PagoController;
use App\Http\Controllers\Academic\ReporteController;
use App\Http\Controllers\Academic\EstadisticaController;
use App\Http\Controllers\Academic\BibliotecaController;
use App\Http\Controllers\Academic\ConfiguracionAvanzadaController;
use App\Http\Controllers\Academic\CertificadoController;
use App\Http\Controllers\Academic\ConsultaController;

Route::redirect('/', '/login');

Route::get('/welcome', WelcomeController::class)->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.admin');
    
    Route::resources([
        'usuarios' => UsuarioController::class,
        'roles' => RoleController::class,
    ]);

    // Configuración del Sistema
    Route::get('/configuracion', [ConfiguracionController::class, 'index'])->name('configuracion.index');
    Route::post('/configuracion', [ConfiguracionController::class, 'update'])->name('configuracion.update');
    
    // Gestión de Roles y Seguridad (Rutas adicionales)
    Route::get('roles/{role}/permisos', [RoleController::class, 'permissions'])->name('roles.edit_permissions');
    Route::put('roles/{role}/permisos', [RoleController::class, 'updateRolePermissions'])->name('roles.update_permissions');
    
    // Gestión de Permisos (Sincronización)
    Route::post('permissions/sync', [PermissionController::class, 'sync'])->name('permissions.sync');
    // Perfil y Seguridad
    Route::put('/password', [PasswordController::class, 'update'])->name('password.update.ajax');

    // Módulos Académicos
    Route::prefix('academic')->name('academic.')->group(function () {
        Route::get('pilares', [PilarController::class, 'index'])->name('pilares.index');
        Route::get('pilares/create', [PilarController::class, 'create'])->name('pilares.create');
        Route::get('pilares/{id}/topics', [PilarController::class, 'topics'])->name('pilares.topics');
        Route::get('preguntas', [PreguntaController::class, 'index'])->name('preguntas.index');
        Route::get('preguntas/create', [PreguntaController::class, 'create'])->name('preguntas.create');
        Route::get('preguntas/import', [PreguntaController::class, 'import'])->name('preguntas.import');
        Route::get('estudio', [EstudioController::class, 'index'])->name('estudio.index');
        Route::get('estudio/pilar/{id}', [EstudioController::class, 'pilar'])->name('estudio.pilar');
        Route::get('examen', [ExamenController::class, 'index'])->name('examen.index');
        Route::get('examen/simulacro', [ExamenController::class, 'simulacro'])->name('examen.simulacro');
        Route::get('estadisticas', [EstadisticaController::class, 'index'])->name('estadisticas.index');
        Route::get('estadisticas/admin', [EstadisticaController::class, 'admin'])->name('estadisticas.admin');
        Route::get('biblioteca', [BibliotecaController::class, 'index'])->name('biblioteca.index');
        Route::get('configuracion-avanzada', [ConfiguracionAvanzadaController::class, 'index'])->name('configuracion.index');
        Route::get('certificados', [CertificadoController::class, 'index'])->name('certificados.index');
        Route::get('consultas', [ConsultaController::class, 'index'])->name('consultas.index');
    });
});

require __DIR__.'/auth.php';
