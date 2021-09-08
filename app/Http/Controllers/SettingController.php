<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SettingController extends Controller
{
    public function index(Request $request)
    {
        $item = User::findOrfail(Auth::user()->id);

        return view('pages.setting.index',[
            'item' => $item
        ]);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $item = User::findOrfail(Auth::user()->id);

        return view('pages.setting.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        
        $item = User::findOrfail($id);
        
        $item->update($data);

        return redirect()->route('setting.index');
    }
}
