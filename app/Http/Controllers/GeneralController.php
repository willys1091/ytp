<?php

namespace App\Http\Controllers;

use Log;
use Session;
use DonationLib;
use UploadImageLib;
use Carbon\Carbon;
use App\Models\CharityCategory;
use App\Http\Helpers\Helper;
use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;
use App\Http\Requests\DonationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
  public function home(Request $request){
    // $instagramPositive = new Instagram(env('TOKEN_IG_POSITIVE'));
    // $feedsPositive = $instagramPositive->media();

    // $a = feed();
    // dd($request);

    // return view('home', compact('feeds', 'feedsPositive'));
    // return view('home', compact('a'));
    return view('home');
  }

  public function donationView(){
    $categories = CharityCategory::all();
    
    return view('donation', compact('categories'));
  }

  public function gallery(){
    // $instagram = new Instagram(env('TOKEN_IG'));
    // $feeds = $instagram->media();
    return view('gallery');
  }

  public function bulletin(){
    return view('bulletin');
  }

  public function termsConditionsView(){
    return view('terms');
  }

  public function paymentError(){
    return view('payment.payment-error');
  }
  public function paymentSuccess(){
    return view('payment.payment-success');
  }

}
