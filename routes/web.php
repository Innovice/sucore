<?php
/*--MASTER--*/
Route::get('/masters/create_item_type_master', function () {
    return view('masters.create_item_type_master');
});
Route::get('/masters/create_item_sub_type_master', function () {
    return view('masters.create_item_sub_type_master');
});
Route::get('/masters/create_item_master', function () {
    return view('masters.create_item_master');
});
Route::get('/masters/create_non_medicine_item_type_master', function () {
    return view('masters.create_non_medicine_item_type_master');
});
Route::get('/masters/create_non_medicine_item_sub_type_master', function () {
    return view('masters.create_non_medicine_item_sub_type_master');
});
Route::get('/masters/create_non_medicine_item_master', function () {
    return view('masters.create_non_medicine_item_master');
});
Route::get('/masters/medicine_other_railway_master', function () {
    return view('masters.medicine_other_railway_master');
});

/*--MAIN STORE--*/
Route::get('/main_stores/opening_stock', function () {
    return view('main_stores.opening_stock');
});

Route::get('/main_stores/annual_indent', function () {
    return view('main_stores.annual_indent');
});

Route::get('/main_stores/annual_indent_item_desc', function () {
    return view('main_stores.annual_indent_item_desc');
});

Route::get('/main_stores/inter_intra_railway_indent', function () {
    return view('main_stores.inter_intra_railway_indent');
});

Route::get('/main_stores/partB_annual_indent', function () {
    return view('main_stores.partB_annual_indent');
});

Route::get('/main_stores/rate_contract_purchase_indent', function () {
    return view('main_stores.rate_contract_purchase_indent');
});

Route::get('/main_stores/supplementary_indent', function () {
    return view('main_stores.supplementary_indent');
});

Route::get('/main_stores/inter_railway_indent_medicines_item_description', function () {
    return view('main_stores.inter_railway_indent_medicines_item_description');
});

Route::get('/main_stores/supplementary_indent_item_desc', function () {
    return view('main_stores.supplementary_indent_item_desc');
});

Route::get('/main_stores/rate_contract_purchase_item_desc', function () {
    return view('main_stores.rate_contract_purchase_item_desc');
});

Route::get('/main_stores/purchase_order_receipt', function () {
    return view('main_stores.purchase_order_receipt');
});
Route::get('/main_stores/dispatch_of_items', function () {
    return view('main_stores.dispatch_of_items');
});

Route::get('/main_stores/receipt_of_items_rc_supply', function () {
    return view('main_stores.receipt_of_items_rc_supply');
});

Route::get('/main_stores/supply_of_items_inter_railways', function () {
    return view('main_stores.supply_of_items_inter_railways');
});

Route::get('/main_stores/receipt_of_items_railway', function () {
    return view('main_stores.receipt_of_items_railway');
});

Route::get('/main_stores/stocks_in_and_out_cdsco', function () {
    return view('main_stores.stocks_in_and_out_cdsco');
});

Route::get('/main_stores/auto_indent', function () {
    return view('main_stores.auto_indent');
});




/*--SUB STORE--*/
Route::get('/sub_store/requisition', function () {
    return view('sub_store.requisition');
});
Route::get('/sub_store/requisition_item_desc', function () {
    return view('sub_store.requisition_item_desc');
});
Route::get('/sub_store/opening_stock', function () {
    return view('sub_store.opening_stock');
});
Route::get('/sub_store/receipt_of_items', function () {
    return view('sub_store.receipt_of_items');
});
Route::get('/sub_store/auto_indent_depleted_stock', function () {
    return view('sub_store.auto_indent_depleted_stock');
});
Route::get('/sub_store/indent_for_dispatch_items', function () {
    return view('sub_store.indent_for_dispatch_items');
});
Route::get('/sub_store/indent_for_supply_to_inter_rail', function () {
    return view('sub_store.indent_for_supply_to_inter_rail');
});




/*--DISPENSARY--*/
Route::get('/dispensary/opening_stock', function () {
    return view('dispensary.opening_stock');
});
Route::get('/dispensary/create_weekly_indent', function () {
    return view('dispensary.create_weekly_indent');
});
Route::get('/dispensary/indent_of_item_local_purchase', function () {
    return view('dispensary.indent_of_item_local_purchase');
});
Route::get('/dispensary/create_weekly_indent_item_description', function () {
    return view('dispensary.create_weekly_indent_item_description');
});
Route::get('/dispensary/local_purchase_item_desc', function () {
    return view('dispensary.local_purchase_item_desc');
});
Route::get('/dispensary/receipt_of_items_ft_local_purchase', function () {
    return view('dispensary.receipt_of_items_ft_local_purchase');
});
Route::get('/dispensary/auto_indent_depleted_stock', function () {
    return view('dispensary.auto_indent_depleted_stock');
});
Route::get('/dispensary/stock_out_patient', function () {
    return view('dispensary.stock_out_patient');
});
Route::get('/dispensary/stock_out_patient_item_desc', function () {
    return view('dispensary.stock_out_patient_item_desc');
});
Route::get('/dispensary/receipt_of_items_desc_local_purchase', function () {
    return view('dispensary.receipt_of_items_desc_local_purchase');
});

/*--NON-MEDICAL STORE--*/
Route::get('/non-medical_store/annual_indent', function () {
    return view('non-medical_store.annual_indent');
});
Route::get('/non-medical_store/annual_indent_item_desc', function () {
    return view('non-medical_store.annual_indent_item_desc');
});
Route::get('/non-medical_store/opening_stock', function () {
    return view('non-medical_store.opening_stock');
});
Route::get('/non-medical_store/indent_above_1lakh', function () {
    return view('non-medical_store.indent_above_1lakh');
});
Route::get('/non-medical_store/receipt_po_non_medicine_items', function () {
    return view('non-medical_store.receipt_po_non_medicine_items');
});
Route::get('/non-medical_store/receipt_of_items', function () {
    return view('non-medical_store.receipt_of_items');
});
Route::get('/non-medical_store/dispatch_of_items', function () {
    return view('non-medical_store.dispatch_of_items');
});
