<?php

use app\Task;


Route::get('/', function () {
  $quinta = DB::table('tasks')->where('dia', '=', 'quinta')->get();
  $sexta = DB::table('tasks')->where('dia', '=', 'sexta')->get();
  $sabado = DB::table('tasks')->where('dia', '=', 'sabado')->get();

   return view('tasks', [
     'quinta' => $quinta,
     'sexta'  => $sexta,
     'sabado' => $sabado
   ]);
});

Route::post('/task', function (Request $request) {
  $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

 Route::delete('/task/{id}', function ($id) {
     Task::findOrFail($id)->delete();

     return redirect('/');
 });
