<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// ADMIN
Route::resource('/home', 'HomeController');



// USER
Route::resource('/', 'MainController');


////////////////////////////////////////////////////////////////////////////////////////////////////////
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
Route::resource('/Showvegetable', 'ShowvegetableController');
Route::resource('/Showseafood', 'ShowseafoodController');
Route::resource('/Showothers', 'ShowothersController');
Route::resource('/Showmeat', 'ShowmeatController');
Route::resource('/Showfrut', 'ShowfrutController');
Route::resource('/ShowDairy', 'ShowDairyController');