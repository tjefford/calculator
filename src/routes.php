<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Tjefford\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Tjefford\Calculator\CalculatorController@subtract');
