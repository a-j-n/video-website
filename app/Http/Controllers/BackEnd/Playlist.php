<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Skills\Store;
use Illuminate\Http\Request;
use App\Models\Playlist as PlayListModel;
class Playlist extends BackEndController
{

    public function __construct(PlayListModel $model)
    {
        parent::__construct($model);
    }


    public function store(Request $request){
        $this->model->create($request->all());

        return redirect()->route('playlists.index');
    }


    public function update($id , Request $request){
        $row = $this->model->FindOrFail($id);
        $row->update($request->all());

        return redirect()->route('playlists.index' , ['id' => $row->id]);
    }



}
