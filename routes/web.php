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
Route::resource('payment_form', PaymentFormController::class);
Route::resource('payment_method', PaymentMethodController::class);
Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('branch_product', BranchProductController::class);
Route::resource('transfer', TransferController::class);
Route::resource('product_branch', ProductBranchController::class);
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
Route::resource('pay_order', PayorderController::class);
Route::resource('pay_invoice', PayinvoiceController::class);
Route::resource('order_product', OrderProductController::class);
Route::resource('sale_box', SaleboxController::class);
Route::resource('cod_verif', CodverifController::class);
Route::resource('cash_out', CashoutController::class);
Route::resource('kardex', KardexController::class);
Route::resource('pay_event', PayeventController::class);
Route::resource('report', ReportController::class);


Route::get('company/create/{id}', [CompanyController::class, 'getMunicipalities']);
Route::post('company/logout', [CompanyController::class, 'logout'])->name('logout_company');

Route::get('branch/create/{id}', [BranchController::class, 'getMunicipalities']);
Route::get('show_purchase/{id}', [BranchController::class, 'show_purchase'])->name('show_purchase');
Route::get('show_invoice/{id}', [BranchController::class, 'show_invoice'])->name('show_invoice');
Route::get('show_order/{id}', [BranchController::class, 'show_order'])->name('show_order');
Route::get('show_product/{id}', [BranchController::class, 'show_product'])->name('show_product');
Route::get('show_product_branch/{id}', [BranchController::class, 'show_product_branch'])->name('show_product_branch');
Route::get('show_sale_box/{id}', [BranchController::class, 'show_sale_box'])->name('show_sale_box');
Route::post('branch/logout', [BranchController::class, 'logout'])->name('logout_branch');

Route::get('show_ndpurchase/{id}', [PurchaseController::class, 'show_ndpurchase'])->name('show_ndpurchase');
Route::get('show_ncpurchase/{id}', [PurchaseController::class, 'show_ncpurchase'])->name('show_ncpurchase');
Route::get('purchase/create/{id}', [PurchaseController::class, 'getMunicipalities']);

Route::get('prosuc/crate/{id}', [ProductBranchController::class, 'getProducts']);

Route::get('supplier/create/{id]', [SupplierController::class, 'getMunicipios']);

Route::get('customer/create/{id}', [CustomerController::class, 'getProducts']);
Route::get('customer/create/{id}', [CustomerController::class, 'getMunicipalities']);

Route::get('status/{id}', [UserController::class, 'status'])->name('status');
Route::get('inactive', [UserController::class, 'inactive'])->name('inactive');

Route::get('supplier/create/{id}', [SupplierController::class, 'getMunicipalities']);

Route::post('user/logout', [UserController::class, 'logout'])->name('logout_user');
Route::get('user/show_code/{id}', [UserController::class, 'show_code'])->name('show_code');
Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('delete');

Route::get('invoice/show_ncinvoice/{id}', [InvoiceController::class, 'show_ncinvoice'])->name('show_ncinvoice');
Route::get('invoice/show_ndinvoice/{id}', [InvoiceController::class, 'show_ndinvoice'])->name('show_ndinvoice');
Route::get('invoice/show_pdf_invoice/{id}', [InvoiceController::class, 'show_pdf_invoice'])->name('show_pdf_invoice');
Route::get('invoice/show_pay_invoice/{id}', [InvoiceController::class, 'show_pay_invoice'])->name('show_pay_invoice');
Route::get('invoice/create/{id}', [InvoiceController::class, 'getMunicipalities']);
Route::get('invoice/post/{id}', [InvoiceController::class, 'post'])->name('post');

Route::get('order/show_invoicy/{id}', [orderController::class, 'show_invoicy'])->name('show_invoicy');
Route::get('order/show_pay_order/{id}', [orderController::class, 'show_pay_order'])->name('show_pay_order');
Route::get('order/show_pdf_order/{id}', [orderController::class, 'show_pdf_order'])->name('show_pdf_order');
Route::get('order/eliminar/{id}', [orderController::class, 'eliminar'])->name('eliminar');
Route::get('order/create/{id}', [OrderController::class, 'getMunicipalities']);

Route::get('sale_box/show_out/{id}', [saleboxController::class, 'show_out'])->name('show_out');
Route::get('sale_box/show_pos/{id}', [saleboxController::class, 'show_pos'])->name('show_pos');

Route::get('portfolio', [ReportController::class, 'portfolio'])->name('portfolio');
Route::get('past_due_portfolio', [ReportController::class, 'past_due_portfolio'])->name('past_due_portfolio');
Route::get('portfolio_thirty', [ReportController::class, 'portfolio_thirty'])->name('portfolio_thirty');
Route::get('portfolio_sixty', [ReportController::class, 'portfolio_sixty'])->name('portfolio_sixty');
