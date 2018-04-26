<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests\ProfileRequest;
use App\Profile;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{

   public function __construct(){
    $this->middleware('auth',['except'=>['index','show']]);
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $prof=Profile::latest()->get();
        return view('pages.index',compact('prof'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        $input = Request::all();
        Profile::create($input);
        return redirect('pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ids=Profile::findOrFail($id);
        return view('pages.show',compact('ids'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tino=Profile::findOrFail($id);
        return view('pages.edit')->withTino($tino);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, $id)
    {
        $tino1=Profile::findOrFail($id);
        $tino1->update($request->all());
        return redirect('pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::destroy($id);
        return redirect('pages');
    }
}
