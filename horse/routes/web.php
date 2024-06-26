<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardPasienController;
use App\Http\Controllers\DicomController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ListPemeriksaanKaryawanController;
use App\Http\Controllers\ModalitasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendaftaranPemeriksaanController;
use App\Http\Controllers\MasterJenisPemeriksaanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'pasien'])->group(function () {
    Route::prefix('/pasien')->group(function () {
        Route::get('/dashboard', [DashboardPasienController::class, 'showDashboard'])->name('pasien.dashboard-pasien');

        Route::get('/pemeriksaan', function () {
            return view('pasien.list-pemeriksaan-pasien');
        });

        Route::get('/lengkapi-data-diri', [DashboardPasienController::class, 'lengkapiDataDiri'])->name('pasien.lengkapi-data-diri');
        Route::post('/lengkapi-data-diri-submit', [PasienController::class, 'store'])->name('pasien.lengkapi-data-diri-submit');


        Route::get('/daftar-pemeriksaan', function () {
            return view('pasien.form-pendaftaran-pemeriksaan');
        });

        Route::get('/pemeriksaan', [PemeriksaanSayaController::class,'showPemeriksaanSaya'])->name('pemeriksaan_saya');
    });
});

Route::middleware(['auth', 'dokter'])->group(function () {
    Route::prefix('/dokter')->group(function () {
        Route::get('/dashboard', [DokterController::class, 'buildDashboard']);

        Route::get('/list-pasien', function () {
            return view('dokter.list-pemeriksaan-dokter');
        });

        Route::get('/form-detail', function () {
            return view('dokter.form_detail');
        });
    });
});

Route::middleware(['auth', 'karyawan'])->group(function () {
    Route::prefix('/karyawan')->group(function () {
        Route::get('/dashboard', [KaryawanController::class, 'buildDashboard']);

        Route::get('/list-dokter', [DokterController::class, 'dokterFromUser'])->name('show_list_dokter');
        Route::post('/update-dokter', [DokterController::class, 'update'])->name('update_dokter');
        Route::post('/store-dokter', [DokterController::class, 'store'])->name('store_dokter');
        Route::post('/delete-dokter', [DokterController::class, 'destroy'])->name('destroy_dokter');

        // Route::get('/list-pasien', function () {
        //     return view('karyawan.list-pasien');
        // });
        Route::get('/list-pasien', [PasienController::class,'pasienFromUser'])->name('show_list_pasien');
        Route::post('/store-pasien', [KaryawanController::class,'store_pasien'])->name('store_pasien');
        Route::post('/delete-pasien', [KaryawanController::class,'destroy_pasien'])->name('destroy_pasien');
        Route::post('/edit-pasien', [PasienController::class, 'update_pasien'])->name('edit_pasien');

        Route::get('/list-modalitas', function () {
            return view('karyawan.list-modalitas');
        });

        Route::get('/list-pemeriksaan', function () {
            return view('karyawan.list-pemeriksaan-karyawan');
        });
        Route::get('/list-DICOM', function () {
            return view('karyawan.list-DICOM');
        });
        Route::get('/list-jenis-pemeriksaan', function () {
            return view('karyawan.list-jenis-pemeriksaan');
        });
        Route::get('/verifikasi', function () {
            return view('karyawan.verifikasi');
        });

        Route::get('/list-pemeriksaan', [ListPemeriksaanKaryawanController::class,'index']);
        Route::get('/list-pemeriksaan/{id}', [ListPemeriksaanKaryawanController::class,'show']);
    });
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard-admin');
        });

        Route::get('/list-karyawan',
        [KaryawanController::class, 'showListKaryawan']
    );
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);

require __DIR__ . '/auth.php';



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
?>

