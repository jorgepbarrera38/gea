<?php

use Illuminate\Http\Request;
use App\Message;
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
    return view('blog.index');
});

Route::post('messages', function(Request $request){

    $request->validate([
        'name' => 'required|string|max:50',
        'email' => 'required|string|max:50',
        'subject' => 'required|string|max:50',
        'message' => 'required|string|max:250',
    ]);

    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->subject = $request->input('subject');
    $message->body = $request->input('message');
    $message->save();

   return redirect()->back()->with('info', 'Recibimos tu mensaje, pronto te responderemos');
})->name('messages.store');
