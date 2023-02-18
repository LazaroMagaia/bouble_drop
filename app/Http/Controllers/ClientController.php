<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home()
    {
        $data = array();
        $data["page_destination"] = "home";
        return view("client.pages.home",$data);
    }
    public function artists()
    {
        $data = array();
        $data["page_destination"] = "artists";
        return view("client.pages.artists",$data);
    }
    public function single_artists($id)
    {
        $data = array();
        $data["page_destination"] = "single artists";
        return view("client.pages.single_artist",$data);
    }
    public function contact()
    {
        $data = array();
        $data["page_destination"] = "contact";
        return view("client.pages.contacto",$data);
    }
}
