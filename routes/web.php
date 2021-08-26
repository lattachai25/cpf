<?php

Route::get('lang/{locale}', function($locale){
        session()->put('locale', $locale);
        return redirect()->back();
});



Auth::routes();

// ADMIN
Route::resource('/home', 'HomeController');
Route::resource('/Brand', 'BrandController');
Route::resource('/Category', 'CategoryController');
Route::resource('/Subcategory', 'SubCategoryController');
// image uploading
Route::get('ckeditor', 'CkeditorController@index');
Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');



////////////////////////////////////////////////////////////////////////////////////////////////////////

// USER
Route::resource('/main', 'MainController');
Route::resource('/', 'IntroController');


// MENU Meat
Route::resource('/Meat', 'MeatController');
Route::resource('/Poultry', 'PoultryController');
Route::resource('/Beef', 'BeefController');
Route::resource('/Lamb', 'LambController');
Route::resource('/Venison', 'VenisonController');
Route::resource('/Turkey', 'TurkeyController');

// MENU Seafood
Route::resource('/Seafood', 'SeafoodController');
Route::resource('/Fish', 'FishController');
Route::resource('/Shells', 'ShellsController');
Route::resource('/Cephalopod', 'CephalopodController');
Route::resource('/Shrimp', 'ShrimpController');

// MENU Fruit
Route::resource('/Fruit', 'FruitController');
Route::resource('/Apple', 'AppleController');
Route::resource('/Cherries', 'CherriesController');
Route::resource('/Stonefruit', 'StonefruitController');
Route::resource('/Navelcitrus', 'NavelcitrusController');
Route::resource('/Strawberry', 'StrawberryController');

// MENU Vegetable
Route::resource('/Vegetable', 'VegetableController');
Route::resource('/Carrot', 'CarrotController');
Route::resource('/Beetroot', 'BeetrootController');
Route::resource('/Whiteonion', 'WhiteonionController');
Route::resource('/Sweetpotatoes', 'SweetpotatoesController');

// MENU Dairy
Route::resource('/Dairy', 'DairyController');
Route::resource('/Yogurt', 'YogurtController');
Route::resource('/Cheese', 'CheeseController');
Route::resource('/Butter', 'ButterController');

// MENU Others
Route::resource('/Others', 'OthersController');
Route::resource('/Processedfood', 'ProcessedfoodController');
Route::resource('/Beverage', 'BeverageController');
Route::resource('/Confectionary', 'ConfectionaryController');

// MENU Contact
Route::resource('/Contact', 'ContactController');
Route::resource('/About', 'AboutController');


// SHOW 
Route::resource('/Show_vegetable', 'ShowvegetableController');
Route::resource('/Show_seafood', 'ShowseafoodController');
Route::resource('/Show_others', 'ShowothersController');
Route::resource('/Show_meat', 'ShowmeatController');
Route::resource('/Show_frut', 'ShowfrutController');
Route::resource('/Show_Dairy', 'ShowDairyController');

Route::resource('/Show_turkey', 'ShowturkeyController');
Route::resource('/Show_venison', 'ShowvenisonController');
Route::resource('/Show_apple', 'ShowappleController');
Route::resource('/Show_beetroot', 'ShowbeetrootController');
Route::resource('/Show_beverage', 'ShowbeverageController');
Route::resource('/Show_butter', 'ShowbutterController');
Route::resource('/Show_carrot', 'ShowcarrotController');
Route::resource('/Show_cephalopod', 'ShowcephalopodController');
Route::resource('/Show_cheese', 'ShowcheeseController');
Route::resource('/Show_cherries', 'ShowcherriesController');
Route::resource('/Show_confectionary', 'ShowconfectionaryController');
Route::resource('/Show_fish', 'ShowfishController');
Route::resource('/Show_fruit', 'ShowfruitController');

Route::resource('/Show_lamb', 'ShowlambController');
Route::resource('/Show_navelcitrus', 'ShownavelcitrusController');
Route::resource('/Show_poultry', 'ShowpoultryController');
Route::resource('/Show_processedfood', 'ShowprocessedfoodController');
Route::resource('/Show_shells', 'ShowshellsController');
Route::resource('/Show_shrimp', 'ShowshrimpController');
Route::resource('/Show_stonefruit', 'ShowstonefruitController');
Route::resource('/Show_strawberry', 'ShowstrawberryController');
Route::resource('/Show_sweetpotatoes', 'ShowsweetpotatoesController');
Route::resource('/Show_vegetable', 'ShowvegetableController');
Route::resource('/Show_venison', 'ShowvenisonController');
Route::resource('/Show_whiteonion', 'ShowwhiteonionController');
Route::resource('/Show_yogurt', 'ShowyogurtController');
Route::resource('/Show_beef', 'ShowbeefController');



