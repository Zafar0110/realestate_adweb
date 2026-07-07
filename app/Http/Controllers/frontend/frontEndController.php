<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function home()
    {
        $seo = [
            'title' => 'home',
            'description' => 'home',
            'keywords' => 'home'
        ];
        return view('frontend.home', compact('seo'));
    }
    
    public function about()
    {
        $seo = [
            'title' => 'about',
            'description' => 'about',
            'keywords' => 'about'
        ];
        return view('frontend.about', compact('seo'));
    }
    public function properties()
    {
        $seo = [
            'title' => 'properties',
            'description' => 'properties',
            'keywords' => 'properties'
        ];
        return view('frontend.properties', compact('seo'));
    }
    public function agents()
    {
        $seo = [
            'title' => 'agents',
            'description' => 'agents',
            'keywords' => 'agents'
        ];
        return view('frontend.agents', compact('seo'));
    }
    public function blog()
    {
        $seo = [
            'title' => 'blog',
            'description' => 'blog',
            'keywords' => 'blog'
        ];
        return view('frontend.blog', compact('seo'));
    }
    public function contact()
    {
        $seo = [
            'title' => 'contact',
            'description' => 'contact',
            'keywords' => 'contact'
        ];
        return view('frontend.contact', compact('seo'));
    }
    public function property_detailed()
    {
        $seo = [
            'title' => 'property_detailed',
            'description' => 'property_detailed',
            'keywords' => 'property_detailed'
        ];
        return view('frontend.property_detailed', compact('seo'));
    }
    public function agent_detailed()
    {
        $seo = [
            'title' => 'agent_detailed',
            'description' => 'agent_detailed',
            'keywords' => 'agent_detailed'
        ];
        return view('frontend.agent_detailed', compact('seo'));
    }


    public function raw_district()
    {
        $seo = [
            'title' => 'agent_detailed',
            'description' => 'agent_detailed',
            'keywords' => 'agent_detailed'
        ];
        return view('property.raw_district', compact('seo'));
    }




    
    
    
}
