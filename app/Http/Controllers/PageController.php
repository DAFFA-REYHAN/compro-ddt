<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        SEOTools::setTitle('Jasa Pengelolaan Limbah B3 di Batam | PT Dwi Damar Tirta');
        SEOTools::setDescription('PT Dwi Damar Tirta menyediakan jasa pengangkutan dan pengelolaan limbah B3 & non-B3, scrap, serta tank cleaning untuk industri di Batam dan Kepulauan Riau.');
        SEOTools::setCanonical(url('/'));
        SEOTools::opengraph()->setUrl(url('/'));
        SEOTools::opengraph()->addProperty('type', 'website');
        return view('home.home');
    }
}
