<?php

namespace App\Http\Controllers;
use App\Models\homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    private $homepage;
    public function __construct(homepage $homepage)
    {
        $this->homepage = $homepage;
    }
    public function home()
    {
        $data = array();
        $data["page_destination"] = "home";
        $data["all_page"] =  $this->homepage->all();
        return view("client.pages.home",$data);
    }
    public function artists()
    {
        $data = array();
        $data["page_destination"] = "artists";
        $data["artists"] = DB::table("artist")->get();
        return view("client.pages.artists",$data);
    }
    public function single_artists($id)
    {
        $data = array();
        $data["page_destination"] = "single artists";
        $data["artist"] = DB::table("artist")->where("id",$id)->first();
        $data["labels"] = DB::table("label")->where("artist_id",$id)->get();
        return view("client.pages.single_artist",$data);
    }
    public function contact()
    {
        $data = array();
        $data["page_destination"] = "contact";
        return view("client.pages.contacto",$data);
    }
}
