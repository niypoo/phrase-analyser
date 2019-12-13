<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/analyse', function(Request $request){
    
    //get the phrase from request
    $phrase = strtolower($request->phrase);
    $phrase_s = strtolower($request->phrase);
    //explode strings to chracters
    $chracters = str_split($phrase);
    //define a analyse to save and set the data into it
    $analyse=[];

    //make a loop on chracters
    foreach ($chracters as $chracter) {
        //if chracter not empty or space
        if(trim($chracter))
        {
            //get count of duplicate
            $repeat     = substr_count($phrase,$chracter);
            //set duplicate number
            if(!isset($analyse[$chracter]['repeat'])) $analyse[$chracter]['repeat'] = $repeat;

            //check if these chracter is duplicate 
            if($repeat>1){
                //get postion of first chracter
                $fp = stripos($phrase,$chracter);
                //get postion of last chracter
                $lp = strripos($phrase,$chracter);
                //chekc if distance less then 10 chracter between the dublicate 
                if($lp-$fp<10){
                    //remove chracter
                    $phrase[$lp]=' ';
                }
            }

            //expload phrase when this cracter to get before and after chracters
            $postion = explode($chracter, $phrase_s);
            $before  = '';
            $after   = '';

            //if there is chracters before
            if(isset($postion[0])){
                foreach (str_split($postion[0]) as  $value) {
                    if(trim($value)) $before .= $value.',';
                }
            }
            
            //if there is chracters after
            if(isset($postion[1])){
                foreach (str_split($postion[1]) as  $value) {
                if(trim($value)) $after .= $value.',';
                }
            }

            //check if analyse infro not setted
            if(!isset($analyse[$chracter]['before']))
            $analyse[$chracter]['before'] =$before!='' ? $before : 'none';
            if(!isset($analyse[$chracter]['after']))
            $analyse[$chracter]['after'] =$after!='' ? $after : 'none';

        }
    }

    //return and pass data to html
    return view('analyse',[
        'analyse'=>$analyse,
        'title'=>$request->phrase
    ]);

})->name('analyse');