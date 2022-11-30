<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Faq;
use App\Models\Form;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Publisher;
use App\Models\Search;
use App\Models\Service;
use App\Models\ShopCart;
use App\Models\Team;
use App\Models\Video;
use App\Models\Project;
use Carbon\Carbon;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index(){

        $Search = Search::select('key')->whereBetween('created_at', [Carbon::yesterday(),Carbon::today()])->paginate(10);

        return view('backend.index', compact('Search'));
    }

    public function formlar(){
        $All = Form::orderBy('created_at','desc')->get();
        return view('backend.form.index', compact('All'));
    }

    public function formDelete($id){

        $Delete = Form::findOrFail($id);
        $Delete->delete();

        alert()->success('Başarıyla Silindi','Form mesajı başarıyla Silindi');
        return redirect()->route('form');
    }
}
