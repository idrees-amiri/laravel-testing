<?php
use App\Models\User;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Models\Product;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('student', StudentController::class)->middleware('age');

Route::get('/products/{id}', function($id){ 
    $p = Product::find($id); 
    return response()->json(['data'=>$p, 'status'=> 'success', 'code'=> 200]);

});
// Route::any('users/{user}', function($user) {
//     $result = User::findOrFail($user);
    
//     Cache::add('user_by_id', $result, 150);
    

// });
