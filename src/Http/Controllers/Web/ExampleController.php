<?php

namespace NexaMerchant\Shopify\Http\Controllers\Web;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function demo(Request $request) {
        $data = [];
        $data['code'] = 200;
        $data['message'] = "Demo";
        return view('Shopify::demo', compact("data"));
    }
}
