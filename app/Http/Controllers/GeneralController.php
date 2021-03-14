<?php

namespace App\Http\Controllers;

use Log;
use Session;
use DonationLib;
use UploadImageLib;
use Carbon\Carbon;
use App\Models\CharityCategory;
use App\Models\Bulletin;
use App\Models\Program;
use App\Http\Helpers\Helper;
use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;
use App\Http\Requests\DonationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
  public function home(Request $request){
    $data['program'] = program::where('active','1')->get();
    return view('home',$data);
  }

  public function donationView(){
    $categories = CharityCategory::all();
    
    return view('donation', compact('categories'));
  }

  public function gallery(){
    return view('gallery');
  }

  public function bulletin(){
    $data['bulletin'] = Bulletin::where('active','1')->get();
    return view('bulletin', $data);
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
