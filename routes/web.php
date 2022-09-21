<?php

use App\Http\Controllers\BankController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BranchProductController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CashoutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CodverifController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\LiabilityController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\NcinvoiceController;
use App\Http\Controllers\NcpurchaseController;
use App\Http\Controllers\NdinvoiceController;
use App\Http\Controllers\NdpurchaseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\PayeventController;
use App\Http\Controllers\PayinvoiceController;
use App\Http\Controllers\PaymentFormController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PayorderController;
use App\Http\Controllers\ProductBranchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegimeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RetentionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SaleboxController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Company;
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

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('user', UserController::class);
Route::resource('document', DocumentController::class);
Route::resource('role', RoleController::class);
Route::resource('indicator', IndicatorController::class);
Route::resource('department', DepartmentController::class);
Route::resource('municipality', MunicipalityController::class);
Route::resource('liability', LiabilityController::class);
Route::resource('organization', OrganizationController::class);
Route::resource('tax', TaxController::class);
Route::resource('regime', RegimeController::class);
Route::resource('bank', BankController::class);
Route::resource('card', CardController::class);
Route::resource('company', CompanyController::class);
Route::resource('branch', BranchController::class);
Route::resource('paymentForm', PaymentFormController::class);
Route::resource('paymentMethod', PaymentMethodController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('branchProduct', BranchProductController::class);
Route::resource('transfer', TransferController::class);
Route::resource('productBranch', ProductBranchController::class);
Route::resource('retention', RetentionController::class);
Route::resource('supplier', SupplierController::class);
Route::resource('purchase', PurchaseController::class);
Route::resource('ncpurchase', NcpurchaseController::class);
Route::resource('ndpurchase', NdpurchaseController::class);
Route::resource('customer', CustomerController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('ncinvoice', NcinvoiceController::class);
Route::resource('ndinvoice', NdinvoiceController::class);
Route::resource('order', OrderController::class);
Route::resource('payOrder', PayorderController::class);
Route::resource('payInvoice', PayinvoiceController::class);
Route::resource('orderProduct', OrderProductController::class);
Route::resource('saleBox', SaleboxController::class);
Route::resource('codverif', CodverifController::class);
Route::resource('cashOut', CashoutController::class);
Route::resource('kardex', KardexController::class);
Route::resource('payEvent', PayeventController::class);
Route::resource('report', ReportController::class);


Route::get('company/create/{id}', [CompanyController::class, 'getMunicipalities']);
Route::post('company/logout', [CompanyController::class, 'logout'])->name('logoutCompany');

Route::get('branch/create/{id}', [BranchController::class, 'getMunicipalities']);
Route::get('showPurchase/{id}', [BranchController::class, 'showPurchase'])->name('showPurchase');
Route::get('showInvoice/{id}', [BranchController::class, 'showInvoice'])->name('showInvoice');
Route::get('showOrder/{id}', [BranchController::class, 'showOrder'])->name('showOrder');
Route::get('showProduct/{id}', [BranchController::class, 'showProduct'])->name('showProduct');
Route::get('showProductBranch/{id}', [BranchController::class, 'showProductBranch'])->name('showProductBranch');
Route::get('showSaleBox/{id}', [BranchController::class, 'showSaleBox'])->name('showSaleBox');
Route::post('branch/logout', [BranchController::class, 'logout'])->name('logoutBranch');

Route::get('showndPurchase/{id}', [PurchaseController::class, 'showndPurchase'])->name('showndPurchase');
Route::get('showncPurchase/{id}', [PurchaseController::class, 'showncPurchase'])->name('showncPurchase');
Route::get('purchase/create/{id}', [PurchaseController::class, 'getMunicipalities']);

Route::get('prosuc/crate/{id}', [ProductBranchController::class, 'getProducts']);

Route::get('supplier/create/{id]', [SupplierController::class, 'getMunicipios']);

Route::get('customer/create/{id}', [CustomerController::class, 'getProducts']);
Route::get('customer/create/{id}', [CustomerController::class, 'getMunicipalities']);

Route::get('status/{id}', [UserController::class, 'status'])->name('status');
Route::get('inactive', [UserController::class, 'inactive'])->name('inactive');

Route::get('supplier/create/{id}', [SupplierController::class, 'getMunicipalities']);

Route::post('user/logout', [UserController::class, 'logout'])->name('logoutUser');
Route::get('user/showcode/{id}', [UserController::class, 'showcode'])->name('showcode');
Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('delete');

Route::get('invoice/showNcinvoice/{id}', [InvoiceController::class, 'showNcinvoice'])->name('showNcinvoice');
Route::get('invoice/showNdinvoice/{id}', [InvoiceController::class, 'showNdinvoice'])->name('showNdinvoice');
//Route::get('invoice/showfact/{id}', [InvoiceController::class, 'showfact'])->name('showfactura');
Route::get('invoice/showPdfinvoice/{id}', [InvoiceController::class, 'showPdfinvoice'])->name('showPdfinvoice');
Route::get('invoice/showPayinvoice/{id}', [InvoiceController::class, 'showPayinvoice'])->name('showPayinvoice');
Route::get('invoice/create/{id}', [InvoiceController::class, 'getMunicipalities']);
Route::get('invoice/post/{id}', [InvoiceController::class, 'post'])->name('post');

Route::get('order/showfact/{id}', [orderController::class, 'showfact'])->name('showfact');
Route::get('order/showPayOrder/{id}', [orderController::class, 'showPayOrder'])->name('showPayOrder');
Route::get('order/showPdfOrder/{id}', [orderController::class, 'showPdfOrder'])->name('showPdfOrder');
Route::get('order/eliminar/{id}', [orderController::class, 'eliminar'])->name('eliminar');
Route::get('order/create/{id}', [OrderController::class, 'getMunicipalities']);

Route::get('salebox/showOut/{id}', [saleboxController::class, 'showOut'])->name('showOut');
Route::get('salebox/showPos/{id}', [saleboxController::class, 'showPos'])->name('showPos');

Route::get('portfolio', [ReportController::class, 'portfolio'])->name('portfolio');
Route::get('pastDuePortfolio', [ReportController::class, 'pastDuePortfolio'])->name('pastDuePortfolio');
Route::get('portfolioThirty', [ReportController::class, 'portfolioThirty'])->name('portfolioThirty');
Route::get('portfolioSixty', [ReportController::class, 'portfolioSixty'])->name('portfolioSixty');
