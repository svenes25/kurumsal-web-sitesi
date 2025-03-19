<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function HomeBanner() {
        $homebanner= Banner::find(1);
        return view("admin.anasayfa.banner_duzenle", compact('homebanner'));
    }
}
