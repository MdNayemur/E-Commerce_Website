<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\Models\Backend\Items;
use App\Models\Frontend\order;
use App\Models\User;

use Cart;


class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $rqs)
    {
        $ui = Auth::user()->id;
        
        $addord = new order();
        $addord->userId= $ui;
        $addord->payStatus= $rqs->payStatus;
        $addord->totalPayable= $rqs->total;
        $addord->save();
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pid= $request->pid;
        $item=Items::find($pid);
        Cart::add(array(
            'id' => $pid, // inique row ID
            'name' => $item->name,
            'price' => $item->disPrice,
            'quantity' => $request->qnt,
            'attributes' => array(
                'img' => $item->pic,
            )
        ));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewcart()
    {
        return view('frontend.viewcart');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    public function userdata()
    {   $user = User::all();
        return view('backend.pages.user.userdata', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function itemDelete($id)
    {
        Cart::remove($id);
        return back();
    }
    public function searchdata($id){
        $items=Items::where('name', 'like', '%'.$id.'%')->get();
        return response()->json([
            "data"=>$items
        ]);
    }
}

