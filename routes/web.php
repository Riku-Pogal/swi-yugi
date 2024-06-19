<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\DataCustomerController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenjualanController; 
use App\Http\Controllers\LaporanPenjualanController;
use App\Http\Controllers\LaporanStockController;
use App\Http\Controllers\TransController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'postLogin'])->name('postlogin');
// Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Route::group(['middleware' => ['auth']], function () {

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/packlist', [TransaksiController::class, 'index'])->name('packlist');
// Route::get('/packlist/update', [TransaksiController::class, 'update'])->name('packlistupdate');

Route::get('/card', [CardController::class, 'index'])->name('card');
Route::post('/cardpost', [CardController::class, 'post'])->name('cardpost');
Route::get('/card/{card}/edit', [CardController::class, 'getedit'])->name('cardedit');
Route::post('/card/{card}', [CardController::class, 'update'])->name('cardupdate');
Route::post('/card/delete/{card}', [CardController::class, 'delete'])->name('carddelete');
Route::post('/getcard', [CardController::class, 'getcard'])->name('getcard');

Route::get('/stock', [StockController::class, 'index'])->name('stock');
Route::post('stockpost', [StockController::class, 'post'])->name('stockpost');
Route::get('stocklist', [StockController::class, 'list'])->name('stocklist');
Route::get('/stock/{stock}/edit', [StockController::class, 'getedit'])->name('stockedit');
Route::post('/stock/{stock}', [StockController::class, 'update'])->name('stockupdate');
Route::post('/stock/delete/{stock}', [StockController::class, 'delete'])->name('stockdelete');

Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');
Route::post('penjualanpost', [PenjualanController::class, 'post'])->name('penjualanpost');
Route::get('penjualanlist', [PenjualanController::class, 'list'])->name('penjualanlist');
Route::get('/penjualan/{penjualan}/edit', [PenjualanController::class, 'getedit'])->name('penjualanedit');
Route::post('/penjualan/{penjualan}', [PenjualanController::class, 'update'])->name('penjualanupdate');
Route::post('/penjualan/delete/{penjualan}', [PenjualanController::class, 'delete'])->name('penjualandelete');
Route::get('/penjualan/{penjualan}/Print', [PenjualanController::class, 'printpdfpenjualan'])->name('penjualanprintmatrix');
// Route::get('/penjualan/{penjualan}/print', [PenjualanController::class, 'printpdfpenjualan'])->name('penjualanprintmatrix');

Route::get('/customer', [DataCustomerController::class, 'index'])->name('customer');
Route::post('/customerpost', [DataCustomerController::class, 'post'])->name('customerpost');
Route::get('/customer/{customer}/edit', [DataCustomerController::class, 'getedit'])->name('customeredit');
Route::post('/customer/{customer}', [DataCustomerController::class, 'update'])->name('customerupdate');
Route::post('/customer/delete/{customer}', [DataCustomerController::class, 'delete'])->name('customerdelete');
Route::post('/getcustomer', [DataCustomerController::class, 'getcustomer'])->name('getcustomer');

Route::get('/pemasukan', [PemasukanController::class, 'index'])->name('pemasukan');
Route::post('/pemasukanpost', [PemasukanController::class, 'post'])->name('pemasukanpost');
Route::get('/pemasukanlist', [PemasukanController::class, 'list'])->name('pemasukanlist');
Route::get('/pemasukan/{pemasukan}/edit', [PemasukanController::class, 'getedit'])->name('pemasukangetedit');
Route::post('/pemasukan/{pemasukan}', [PemasukanController::class, 'update'])->name('pemasukanupdt');
Route::post('/pemasukan/delete/{pemasukan}', [PemasukanController::class, 'delete'])->name('pemasukandelete');

Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
// Route::post('/pengeluaranpost', [PengeluaranController::class, 'post'])->name('pengeluaranpost');
Route::post('/pengeluaranpost', [PengeluaranController::class, 'post'])->name('pengeluaranpost');
Route::get('/pengeluaranlist', [PengeluaranController::class, 'list'])->name('pengeluaranlist');
Route::get('/pengeluaran/{pengeluaran}/edit', [PengeluaranController::class, 'getedit'])->name('pengelgetedit');
Route::post('/pengeluaran/{pengeluaran}', [PengeluaranController::class, 'update'])->name('pengeluaranupdt');
Route::post('/pengeluaran/delete/{pengeluaran}', [PengeluaranController::class, 'delete'])->name('pengeluarandelete');

Route::get('/Trans', [TransController::class, 'index'])->name('Trans');
Route::post('/Transpost', [TransController::class, 'post'])->name('Transpost');


Route::get('/laporanpenjualan', [LaporanPenjualanController::class, 'index'])->name('laporanpenjualan');
Route::get('/laporanpenjualanpost', [LaporanPenjualanController::class, 'post'])->name('laporanpenjualanpost');

Route::get('/lapstock', [LaporanStockController::class, 'index'])->name('lapstock');
Route::get('/lapstockpost', [LaporanStockController::class, 'post'])->name('lapstockpost');
// });