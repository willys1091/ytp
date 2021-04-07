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
use App\Models\Event;
use App\Models\Flc;
use App\Models\About;
use App\Models\Settings;
use App\Http\Helpers\Helper;
use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;
use App\Http\Requests\DonationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
  public function __construct()
    {
      Session::put('docs',Settings::where('name','docs')->value('value'));
    }
  public function home(Request $request){
    $data['event'] = Event::where('active','1')->get();
    $data['program'] = Program::where('active','1')->get();
    $data['flc'] = Flc::where('active','1')->get();
    $data['about'] = About::where('active','1')->get();
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
