<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  App\Models\Backend\Subcategory;
use  App\Models\Backend\Items;
use App\Models\Frontend\Feedback;
use App\Models\User;
use Notification;
use App\Notifications\MyFirstNotification;

class Allshow extends Controller
{
   public function frontcatshow(){
    $allcat= Subcategory::all();
    $items= Items::orderBy('created_at', 'DESC')->get();
    return view('frontend.home', compact('allcat','items'));
   }

   public function aboutshow(){
      return view('frontend.about');
   }

   public function contactshow(){
      return view('frontend.contact');
   }

   public function showProductDetails($id)
   {
       $product = Items::find($id);
  
       return view('frontend.product', compact('product'));
   }

   public function feedbackstore(Request $rqst)
   {
       $feed = new Feedback();
     
       $feed->userName= $rqst->name;
       $feed->userEmail= $rqst->email;
       $feed->orderId= $rqst->orderId;
       $feed->userFeedback= $rqst->message;
       $feed->save();
       return redirect()->route('contactshow');
   }

   public function sendnotification(){
      $ui = Auth::user();

      $details=[
         'greeting'=>'Hello User',
         'body'=>'You have ordered some product from our website',
         'lastline'=>'Thank You for shopping',

      ];

      Notification::send($ui, new MyFirstNotification($details));
      return view('frontend.viewcart');
   }
}
