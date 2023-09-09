<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Items;
use App\Models\Backend\Gallery;
use App\Models\Backend\Subcategory;
use File;
use Image;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Items::all();
        return view('backend.pages.item.manageitem',compact("items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcats=Subcategory::all();
        return view('backend.pages.item.additem' ,compact("subcats"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->pic){
            $image=$request->file('pic');
            $customName=rand().'.'.$image->getClientOriginalExtension();
            $location=public_path('backend/items/'.$customName);
            Image::make($image)->save($location);

            $item= new Items();
            $item->item_code = $request->item_code;
            $item->name = $request->name;
            $item->des = $request->des;
            $item->salePrice = $request->salePrice;
            $item->disPrice = $request->disPrice;
            $item->pic = $customName;
            $item->save();
            // dd($item);

        }
            return redirect()->route('item.manage');
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
        $items=Items::find($id);
        $gallery=Gallery::where('item_code', $items->item_code)->get();
        return view('backend.pages.item.edititem',compact("items","gallery"));
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

    public function updatesingImage(Request $request, $id)
    {
        $gallery=Gallery::find($id);

        if(File::exists('backend/items/gallery/'.$gallery->gallery)){
            File::delete('backend/items/gallery/'.$gallery->gallery);
        }
        
        $image=$request->file($id);
        $customName=rand().'.'.$image->getClientOriginalExtension();
        $location=public_path('backend/items/gallery/'.$customName);
        Image::make($image)->save($location);

        $gallery->gallery=$customName;
         $gallery->update();
        // dd($image);
         return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items=Items::find($id);

        if(File::exists('backend/items/'.$items->pic)){
            File::delete('backend/items/'.$items->pic);
        }

    
        $items->delete();
        return redirect()->route('item.manage');
    }
 
    
}
