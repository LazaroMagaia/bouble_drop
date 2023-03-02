<?php

namespace App\Http\Controllers;

use App\Models\Artists;
use App\Models\homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $homepage,$artist;
    public function __construct(homepage $homepage, Artists $artist)
    {
            $this->homepage = $homepage;
            $this->artist = $artist;
    }
    public function index()
    {
        return view("admin.pages.home");
    }

    public function homepage()
    {
        $data = array();
        $data["all_page"] =  $this->homepage->all();
        return view("admin.pages.site.home",$data);
    }

    public function artists()
    {
        $data = array();
        $data["artists"] = $this->artist->where("status",false)->get(); 
        // DB::table("artist")->where("status",false)->get();
        return view("admin.pages.site.artists",$data);
    }
    public function artists_create()
    {
        /*$data["all_page"] =  $this->homepage->all();*/
        return view("admin.pages.site.create_artists");
    }

    public function artists_edit($id)
    {
        $data= array();
        $findArtist =  DB::table('artist')->where("id",$id)->first();
        $data["artists"] = $findArtist;
        //dd($findArtist);
        return view("admin.pages.site.edit_artists",$data);
    }

    public function artists_label()
    {
        $data= array();
        $data["labelartists"] = DB::table('label')
            ->join('artist', 'artist.id', '=', 'label.artist_id')
            ->select('artist.name', 'label.*')
            ->get();
        //dd($data["labelartists"]);
        return view("admin.pages.site.label",$data);
    }

    public function create_label()
    {
        $data= array();
        $findArtist =  DB::table('artist')->get();
        $data["artists"] = $findArtist;
        //dd($findArtist);
        return view("admin.pages.site.create_label",$data);
    }
    public function edit_label($id)
    {
        $data= array();
        $data["label"] =  DB::table('label')->where("id",$id)->first();
        $data["artists"] =  DB::table('artist')->get();
        //dd($findArtist);
        return view("admin.pages.site.edit_label",$data);
    }
    
    
}
