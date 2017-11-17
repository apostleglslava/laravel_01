<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 17.11.17
 * Time: 4:45
 */

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountController extends Controller
{
     /**
     * Validate and find a sum for nimber
     *
     * @param  Request  $request
     * @return Responce
     */

    public function count(Request $request)
    {
        $this->validate($request, [
            'numeral' => 'required|integer|min:0'
        ]);

        $numeral = $request->input('numeral');
        $numeral = ($numeral*($numeral+1))/2;

        return view('count', ['numeral' => $numeral]);
    }

    public function first(Request $request)
    {
        return view('count');
    }
}

