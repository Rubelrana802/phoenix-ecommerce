<?php

header("Cache-Control: no-cache, must-revalidate");
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

/*
|--------------------------------------------------------------------------
| Admin controller Routes
|--------------------------------------------------------------------------
|
| This section contains all admin Routes
| 
|
*/

Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('cache:clear');
});

Route::get('/key-genrate', function() {
	$exitCode = Artisan::call('key:generate');
});



Route::prefix('admin')->group(function() {

	//Category resource route
	Route::resource('/category', 'CategoryController');

	//Tax resource route
	Route::resource('/tax', 'TaxController');

	//unit resource route
	Route::resource('/unit', 'UnitController');

	//product route
		Route::get('/product/add', 'ProductController@index')->name('product.add');
		Route::post('/product/save', 'ProductController@save')->name('product.save');
		Route::get('/product/manage', 'ProductController@manage')->name('product.manage');
		Route::get('/product/edit/{id}', 'ProductController@edit');
		Route::post('/product/edit', 'ProductController@update')->name('product.update');
		Route::get('/product/delete/{id}', 'ProductController@delete');

	//supplier route
		Route::get('/supplier/add', 'SupplierController@index')->name('supplier.add');
		Route::post('/supplier/save', 'SupplierController@save')->name('supplier.save');
		Route::get('/supplier/manage', 'SupplierController@manage')->name('supplier.manage');
		Route::get('/supplier/edit/{id}', 'SupplierController@edit');
		Route::post('/supplier/edit', 'SupplierController@update')->name('supplier.update');
		Route::get('/supplier/delete/{id}', 'SupplierController@delete');

		Route::get('/supplier/payment', 'SupplierController@supplierpayment')->name('supplier.payment');

	//purchase route
		Route::get('/purchase/add', 'PurchaseController@index')->name('purchase.add');
		Route::post('/purchase/save', 'PurchaseController@savePurchase')->name('purchase.save');
		Route::get('/purchase/manage', 'PurchaseController@manage')->name('purchase.manage');
		Route::get('/purchase/edit/{id}', 'PurchaseController@edit');
		Route::post('/purchase/edit', 'PurchaseController@update')->name('purchase.update');
		Route::get('/purchase/delete/{id}', 'PurchaseController@delete');

	//invoice route
		Route::get('/invoice/add', 'InvoiceController@index')->name('invoice.add');
		Route::post('/invoice/save', 'InvoiceController@saveinvoice')->name('invoice.save');
	//pos invoice
		Route::get('/invoice/add/pos', 'InvoiceController@pos')->name('invoice.pos');
		Route::post('/invoice/save/pos', 'InvoiceController@savepos')->name('invoice.save.pos');

		Route::get('/invoice/manage', 'InvoiceController@manage')->name('invoice.manage');
		Route::post('/invoice/manage', 'InvoiceController@managesearcher')->name('invoice.manage.seacher');
		Route::get('/invoice/inserted_data/{id}', 'InvoiceController@invoicewise')->name('invoice.wise');

		Route::get('/invoice/edit/{id}', 'InvoiceController@edit');
		Route::post('/invoice/edit', 'InvoiceController@update')->name('invoice.update');
		Route::get('/invoice/delete/{id}', 'InvoiceController@delete');

	//customer route
		Route::get('/customer/add', 'CustomerController@index')->name('customer.add');
		Route::post('/customer/save', 'CustomerController@save')->name('customer.save');
		Route::get('/customer/manage', 'CustomerController@manage')->name('customer.manage');
		Route::get('/customer/edit/{id}', 'CustomerController@edit');
		Route::post('/customer/edit', 'CustomerController@update')->name('customer.update');
		Route::get('/customer/delete/{id}', 'CustomerController@delete');

	//customer payment
		Route::get('/customer/payment', 'CustomerController@customerpayment')->name('customer.payment');
		Route::post('/customer/payment', 'CustomerController@paymentsubmit')->name('customer.payment.submit');

	//customer ledger
		Route::get('/customer/ledger', 'CustomerController@customerledger')->name('customer.ledger');
		Route::get('/customer/ledger/search/{id}', 'CustomerController@ledgerdate')->name('customer.ledger.date');
		Route::post('/customer/ledger/search', 'CustomerController@ledgersearch')->name('customer.ledger.search');

	//customer paid/credit
		Route::get('/customer/paid','CustomerController@paidcustomer')->name('paid.customer');
		Route::get('/customer/credit','CustomerController@creditcustomer')->name('credit.customer');

	//Store route
		Route::get('/store/add', 'StoreController@index');
		Route::post('/store/save', 'StoreController@save')->name('store.save');
		Route::get('/store/manage', 'StoreController@manage');
		Route::get('/store/edit/{id}', 'StoreController@edit');
		Route::post('/store/edit', 'StoreController@update')->name('store.update');
		Route::get('/store/delete/{id}', 'StoreController@delete');

	//bank route
		Route::get('bank/add', 'BankController@index')->name('bank.add');
		Route::post('bank/save', 'BankController@save')->name('bank.save');
		Route::get('bank/manage', 'BankController@manage')->name('bank.manage');
		Route::get('bank/edit/{id}', 'BankController@edit');
		Route::post('bank/edit', 'BankController@update')->name('bank.update');
		Route::get('bank/delete/{id}', 'BankController@delete');
		Route::get('bank/transaction', 'BankController@transaction')->name('bank.transaction.add');
		Route::post('bank/transaction/save', 'BankController@transactionsave')->name('bank.transaction');
		Route::get('bank/ledger/{id}', 'BankController@bankledger');

	//person loan route
		Route::get('/person/add', 'PersonController@index')->name('person.add');
		Route::post('/person/save', 'PersonController@save')->name('person.save');
		Route::get('/person/manage', 'PersonController@manage')->name('person.manage');
		Route::get('/person/edit/{id}', 'PersonController@edit')->name('person.edit');
		Route::post('/person/edit', 'PersonController@update')->name('person.update');

	//loan
		Route::get('/person/loan', 'PersonController@loan')->name('person.loan');
		Route::post('/person/loan/save', 'PersonController@loansave')->name('person.loansave');
		
	//payment
		Route::get('/person/payment', 'PersonController@payment')->name('person.payment');
		Route::post('/person/payment/save', 'PersonController@paymentsave')->name('person.paymentsave');

	//report person wise
		Route::get('/person/personwise/{id}', 'PersonController@personwise')->name('person.personwise'); 
		Route::get('/person/personwise/search', 'PersonController@personwisedate')->name('person.personwise.date');
		Route::post('/person/personwise/search', 'PersonController@personwisesearch')->name('person.personwise.search');


	//office loan route
		Route::get('/office/add', 'OfficeController@index')->name('office.add');
		Route::post('/office/save', 'OfficeController@save')->name('office.save');
		Route::get('/office/manage', 'OfficeController@manage')->name('office.manage');
		Route::get('/office/edit/{id}', 'OfficeController@edit')->name('office.edit');
		Route::post('/office/edit', 'OfficeController@update')->name('office.update');

	//loan
		Route::get('/office/loan', 'OfficeController@loan')->name('office.loan');
		Route::post('/office/loan/save', 'OfficeController@loansave')->name('office.loansave');
	//payment
		Route::get('/office/payment', 'OfficeController@payment')->name('office.payment');
		Route::post('/office/payment/save', 'OfficeController@paymentsave')->name('office.paymentsave');

	//report person wise
		Route::get('/office/personwise/{id}', 'OfficeController@personwise')->name('office.personwise'); 
		Route::get('/office/personwise/search', 'OfficeController@personwisedate')->name('office.personwise.date');
		Route::post('/office/personwise/search', 'OfficeController@personwisesearch')->name('office.personwise.search');

	//company route
		Route::get('/company/manage', 'CompanyController@manage')->name('company.manage');
		Route::get('/company/edit/{id}', 'CompanyController@edit')->name('company.edit');
		Route::post('/company/edit', 'CompanyController@update')->name('company.update');
	//web Setting
		Route::get('/company/websetting/edit/{setting_id}', 'CompanyController@websetting')->name('web.setting');
		Route::post('/company/websetting/edit', 'CompanyController@updatewebsetting')->name('web.update');



	//sale-purchase-return route
		Route::get('/return/add', 'ReturnController@index')->name('return.product');

	//supplier Purchase return
		Route::match(['get', 'post'],'/return/purchase/product/{invoice?}','ReturnController@returnPurchaseProduct')->name('return.purchase.product');
		Route::post('/return/submit-return/purchase/product','ReturnController@submitrReturnPurchaseProduct')->name('submit.return.purchase.product');
		Route::get('/return/supplier/list', 'ReturnController@supplierreturn')->name('supplier.return');
		Route::get('/return/supplier/list/{id}', 'ReturnController@supplierwise')->name('supplier.returnNo');
		
	//customer sales return
		Route::match(['get','post'],'/return/sell/product/{invoice?}','ReturnController@returnSellProduct')->name('return.sell.product');
		Route::post('/return/submit/sell/product','ReturnController@submitReturnSellProduct')->name('submit.return.sell.product');
		Route::get('/return/customer/list', 'ReturnController@customerreturn')->name('customer.return');
		Route::get('/return/customer/list/{id}', 'ReturnController@customerwise')->name('customer.returnNo');


	//New user for admin
		Route::get('/user/add', 'UserController@index')->name('add.user');;
		Route::post('/user/save', 'UserController@save')->name('user.save');
		Route::get('/user/manage', 'UserController@manage')->name('manage.user');
		Route::get('/user/edit/{id}', 'UserController@edit');
		Route::post('/user/edit', 'UserController@updateuser')->name('user.update');
		Route::get('/user/delete/{id}', 'UserController@delete');





		/*
		|--------------------------------------------------------------------------
		| Report Controller Routes
		|--------------------------------------------------------------------------
		|
		| This section contains all Routes of Report content
		| 
		*/
		//Purchase report
		Route::get('/report/purchase', 'ReportController@purchasereport')->name('purchasereport');
		Route::post('/report/purchase', 'ReportController@purchasereportdate')->name('purchasereport.date');

		// Invoice wise purchase report
		Route::get('/report/purchase/invoice/{id}', 'ReportController@purchaseinvoice')->name('purchase.invoice');

		// Product Wise purchase & Sale report
		Route::get('/report/product/wise/{id}', 'ReportController@productwisesp')->name('productwise.sp');

		//supplier-wise-purchase report
		Route::get('/report/supplier/wise/{id}', 'ReportController@supplierpurchase')->name('supplier.purchase');

		//product-wise-purchase report
		Route::get('/report/product/stock', 'ReportController@productstock')->name('product.stock');

		//stock-report
		Route::get('/report/stock/report', 'ReportController@purchasereturnreport')->name('purchase.stock.report');

		//supplier-stock
		Route::get('/report/supplier/stock', 'ReportController@supplierstock')->name('supplier.stock');
		Route::post('/report/supplier/stock', 'ReportController@supplierstocksearch')->name('supplier.stock.search');

		// Sale report
		Route::get('/report/sales/date-wise', 'ReportController@salesreport')->name('sales.report');
		Route::post('/report/sales/date-wise', 'ReportController@salesdatewise')->name('sales.date.wise');

		//today sale purchase report
		Route::get('/report/sale/purchase', 'ReportController@salepurchase')->name('sale.purchase');

		//product wise sale report
		Route::get('/report/products/wise/sale', 'ReportController@productswisesale')->name('products.wise.sale');

});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/profile', 'UserController@profile')->name('user.profile');
Route::post('/user/update', 'UserController@update')->name('profile.update');
Route::get('/user/password', 'UserController@userpassword')->name('user.password');
Route::post('/user/password', 'UserController@userpasswordupdate')->name('user.password.update');








/*
|--------------------------------------------------------------------------
| front-end Controller Routes
|--------------------------------------------------------------------------
|
| This section contains all Routes of front-end content
| 
|
*/


Route::group(['namespace' => 'Web'], function (){

	Route::get('/', 'DefaultController@index')->name('home.page');
	Route::get('/single-product', 'DefaultController@singleproduct')->name('single.product');




	Route::get('/login', 'LoginController@index')->name('login.customer');
});