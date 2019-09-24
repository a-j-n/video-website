<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;

class Playlist extends BackEndController
{

    public function __construct(Playlist $model)
    {
        parent::__construct($model);
    }

    public function store(Request $request){
        $this->model->create($request->all());

        return redirect()->route('playlist.index');
    }


    public function update(Request $request, $id)
    {
        //
    }



}
