<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member;

class membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = member::all();
        return view('home',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new member;
        $member->fname = $request->fname;
        $member->lname = $request->lname;
        $member->area = $request->area;
        $member->ds = $request->ds;
        $member->dob = $request->dob;
        $member->save();
        session()->flash('message','Save Successfully');
        return redirect('member');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = member::find($id);
        return view('edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = member::find($id);
        $member->fname = $request->fname;
        $member->lname = $request->lname;
        $member->area = $request->area;
        $member->ds = $request->ds;
        $member->dob = $request->dob;
        $member->save();
        session()->flash('message','Update Successfully');
        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $item = member::find($id);
       $item->delete();
       session()->flash('message','Delete Successfully');
       return redirect('/member');
    }
}
