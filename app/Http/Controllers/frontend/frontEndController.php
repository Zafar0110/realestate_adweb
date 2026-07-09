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
            'title' => 'Raw District 2',
            'description' => 'Raw District 2',
            'keywords' => 'Raw District 2'
        ];
        return view('property.raw_district', compact('seo'));
    }
    public function linar()
    {
        $seo = [
            'title' => 'linar',
            'description' => 'linar',
            'keywords' => 'linar'
        ];
        return view('property.linar', compact('seo'));
    }
    public function hudayriyat()
    {
        $seo = [
            'title' => 'Hudayriyat Golf Estates',
            'description' => 'Hudayriyat Golf Estates',
            'keywords' => 'Hudayriyat Golf Estates'
        ];
        return view('property.hudayriyat', compact('seo'));
    }
    public function roudah()
    {
        $seo = [
            'title' => 'roudah',
            'description' => 'roudah',
            'keywords' => 'roudah'
        ];
        return view('property.roudah', compact('seo'));
    }
    public function everly_place()
    {
        $seo = [
            'title' => 'Everly Place',
            'description' => 'Everly Place',
            'keywords' => 'Everly Place'
        ];
        return view('property.everly_place', compact('seo'));
    }

    public function residences()
    {
        $seo = [
            'title' => '113 Residences',
            'description' => '113 Residences',
            'keywords' => '113 Residences'
        ];
        return view('property.residences', compact('seo'));
    }
    public function aquaCrest_residences()
    {
        $seo = [
            'title' => 'AquaCrest Residences',
            'description' => 'AquaCrest Residences',
            'keywords' => 'AquaCrest Residences'
        ];
        return view('property.aquaCrest_residences', compact('seo'));
    }
    public function DWTN_residences()
    {
        $seo = [
            'title' => 'DWTN Residences',
            'description' => 'DWTN Residences',
            'keywords' => 'DWTN Residences'
        ];
        return view('property.DWTN_residences', compact('seo'));
    }
    public function binghatti_aquarise()
    {
        $seo = [
            'title' => 'Binghatti Aquarise',
            'description' => 'Binghatti Aquarise',
            'keywords' => 'Binghatti Aquarise'
        ];
        return view('property.binghatti_aquarise', compact('seo'));
    }

    public function address_grand()
    {
        $seo = [
            'title' => 'Address Grand',
            'description' => 'Address Grand',
            'keywords' => 'Address Grand'
        ];
        return view('property.address_grand', compact('seo'));
    }

    public function one_residence()
    {
        $seo = [
            'title' => 'One Residence',
            'description' => 'One Residence',
            'keywords' => 'One Residence'
        ];
        return view('property.one_residence', compact('seo'));
    }


    public function fairmont_residences()
    {
        $seo = [
            'title' => 'Fairmont Residences Solara Tower',
            'description' => 'Fairmont Residences Solara Tower',
            'keywords' => 'Fairmont Residences Solara Tower'
        ];
        return view('property.fairmont_residences', compact('seo'));
    }
    public function PASSO()
    {
        $seo = [
            'title' => 'Bella by PASSO',
            'description' => 'Bella by PASSO',
            'keywords' => 'Bella by PASSO'
        ];
        return view('property.PASSO', compact('seo'));
    }

    public function olaia_residences()
    {
        $seo = [
            'title' => 'Olaia Residences',
            'description' => 'Olaia Residences',
            'keywords' => 'Olaia Residences'
        ];
        return view('property.olaia_residences', compact('seo'));
    }

    public function ela_residences()
    {
        $seo = [
            'title' => 'Olaia Residences',
            'description' => 'Olaia Residences',
            'keywords' => 'Olaia Residences'
        ];
        return view('property.ela_residences', compact('seo'));
    }

    public function mansio_at()
    {
        $seo = [
            'title' => 'Olaia Residences',
            'description' => 'Olaia Residences',
            'keywords' => 'Olaia Residences'
        ];
        return view('property.mansio_at', compact('seo'));
    }


    public function beach_residences()
    {
        $seo = [
            'title' => 'Olaia Residences',
            'description' => 'Olaia Residences',
            'keywords' => 'Olaia Residences'
        ];
        return view('property.beach_residences', compact('seo'));
    }
    public function como_residences()
    {
        $seo = [
            'title' => 'Como Residences by Nakheel',
            'description' => 'Como Residences by Nakheel',
            'keywords' => 'Como Residences by Nakheel'
        ];
        return view('property.como_residences', compact('seo'));
    }
    public function rove_home()
    {
        $seo = [
            'title' => 'Rove Home Dubai Marina',
            'description' => 'Rove Home Dubai Marina',
            'keywords' => 'Rove Home Dubai Marina'
        ];
        return view('property.rove_home', compact('seo'));
    }
    public function pelagos()
    {
        $seo = [
            'title' => 'pelagos',
            'description' => 'pelagos',
            'keywords' => 'pelagos'
        ];
        return view('property.pelagos', compact('seo'));
    }
    public function marina_cove()
    {
        $seo = [
            'title' => 'Marina Cove',
            'description' => 'Marina Cove',
            'keywords' => 'Marina Cove'
        ];
        return view('property.marina_cove', compact('seo'));
    }
    public function vanguard()
    {
        $seo = [
            'title' => 'Franck Muller Vanguard',
            'description' => 'Franck Muller Vanguard',
            'keywords' => 'Franck Muller Vanguard'
        ];
        return view('property.vanguard', compact('seo'));
    }
    public function kempinski()
    {
        $seo = [
            'title' => 'Kempinski Marina Residences',
            'description' => 'Kempinski Marina Residences',
            'keywords' => 'Kempinski Marina Residences'
        ];
        return view('property.kempinski', compact('seo'));
    }
    public function habtoor()
    {
        $seo = [
            'title' => 'Habtoor Grand Residences',
            'description' => 'Habtoor Grand Residences',
            'keywords' => 'Habtoor Grand Residences'
        ];
        return view('property.habtoor', compact('seo'));
    }
    public function canal()
    {
        $seo = [
            'title' => 'The Canal',
            'description' => 'The Canal',
            'keywords' => 'The Canal'
        ];
        return view('property.canal', compact('seo'));
    }

    public function tenet()
    {
        $seo = [
            'title' => 'Haus Of Tenet',
            'description' => 'Haus Of Tenet',
            'keywords' => 'Haus Of Tenet'
        ];
        return view('property.tenet', compact('seo'));
    }
    
    public function avarra()
    {
        $seo = [
            'title' => 'avarra',
            'description' => 'avarra',
            'keywords' => 'avarra'
        ];
        return view('property.avarra', compact('seo'));
    } 
    public function eywa()
    {
        $seo = [
            'title' => 'Eywa 2',
            'description' => 'Eywa 2',
            'keywords' => 'Eywa 2'
        ];
        return view('property.eywa', compact('seo'));
    }
    public function lumena()
    {
        $seo = [
            'title' => 'Eywa 2',
            'description' => 'Eywa 2',
            'keywords' => 'Eywa 2'
        ];
        return view('property.lumena', compact('seo'));
    }
    public function eden()
    {
        $seo = [
            'title' => 'Eden House Marasi',
            'description' => 'Eden House Marasi',
            'keywords' => 'Eden House Marasi'
        ];
        return view('property.eden', compact('seo'));
    }
    
     
     
    
    
}
