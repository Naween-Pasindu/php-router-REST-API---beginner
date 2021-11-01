<?php
/*
GET - request data from api
POST - add data
PUT - update data
DELETE - delete
*/

Route::GET("donation",array("Home@viewDonations"));
Route::GET("role",array("Employee@getRole"));
Route::GET("division",array("Admin@getDivision","InventoryManager@getDvOfficeList"));
Route::GET("GnDivision",array("Admin@getGnDivision","DisasterOfficer@getGNDivision"));
Route::GET("item",array("InventoryManager@getItem","ResponsiblePerson@getItem"));

Route::PUT("resetPassword",array("Employee@updatePassword"));

Route::POST("login",array("Employee@login"));
Route::POST("resetPassword",array("Employee@resetPassword"));
Route::POST("renew",array("Employee@renew"));
Route::POST("rewoke",array("Employee@rewoke"));
Route::POST("user",array("Admin@register","DivisionalSecretariat@register","DisasterOfficer@register"));

// Grama Niladari
Route::GET("residents", array("GramaNiladari@getResident"));
Route::POST("residents", array("GramaNiladari@addResident"));

// Disaster Mgt officer
Route::GET("safehouse",array("DisasterOfficer@viewSafehouse","InventoryManager@getSafeHouse"));
Route::POST("safehouse",array("DisasterOfficer@addSafehouse"));

//Admin
Route::GET("user",array("Admin@searchUser"));
Route::GET("district",array("Admin@getDistrict"));
Route::GET("area",array("Admin@DBtoJson"));

// Inventory Manager
Route::GET("unit",array("InventoryManager@getUnit"));
Route::GET("inventory",array("InventoryManager@getInventory"));
Route::GET("availableItem",array("InventoryManager@availableItem"));
Route::POST("item",array("InventoryManager@addItem"));
Route::POST("inventory",array("InventoryManager@addInventory"));
//Route::PUT("inventory",array("InventoryManager@updateInventory"));