<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtistRequest;
use App\Http\Requests\ArtistRequestUpdate;
use App\Models\Artists;
use App\Models\homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminActionController extends Controller
{
    private $homepage,$artist;
    public function __construct(homepage $homepage, Artists $artist)
    {
        $this->homepage = $homepage;
        $this->artist = $artist;
    }

    //ADMIN HOME PAGE
    public function edited_homepage($id,Request $request)
    {
        $data_send["title"] =$request->title;;
        $data_send["description"] = $request->description;
        $data_send["nation"] = $request->nation;
        
        $data["all_page"] =  $this->homepage->all();

        if(!$homepage_create = $this->homepage->find($id))
        {
            
            $this->homepage->create($data_send);
            return redirect()->back();
        }else
        {
            $homepage_create = $this->homepage->find($id)->first();
            //dd($homepage_create);
            $homepage_create->update($data_send);
            return redirect()->back();
        }
    }

    public function create_artist(ArtistRequest $request)
    {
        $data = $request->all();
        $data['name'] = $request->name;
        $data['image'] = $request->image;
        $data['gender'] = $request->gender;
        $data['description']= $request->description;
        $data['status'] = false;
        if($this->artist->where("name",$data['name'])->first())
        {
            return redirect()->back();
        }else
        {
            if($data['image'])
            {
                $data['image'] = $data['image']->store("artist");
                $this->artist->create($data);
            }else
            {
                $this->artist->create($data);
            }        
            return redirect()->route('admin_artists');
        }
    }

    public function remove_artist($id)
    {
        $data = array();
        $data['status'] = true;
        $artist = $this->artist->find($id);

        if(!$artist)
        {
            return redirect()->back();
        }else
        {
            $artist->update($data);
            return redirect()->route('admin_artists');
        }
    }

    public function artists_edit($id,ArtistRequestUpdate $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['image'] = $request->image;
        $data['gender'] = $request->gender;
        $data['description']= $request->description;
        $data['status'] = false;
        $artist =  DB::table('artist')->where("id",$id)->first();
        if($artist)
        {
            if($data['image'])
            {
                $data['image'] = $data['image']->store("artist");
                DB::table('artist')->where("id",$id)->update($data);
            }else
            {
                $data['image'] = $artist->image;
                
                DB::table('artist')->where("id",$id)->update($data);
            }        
            return redirect()->route('admin_artists');
        }else
        {
            return redirect()->back();
        }
    }

    public function create_label(Request $request)
    {
        $data['label'] = $request->label;
        $data['artist_id'] = $request->artist_id;
        
        $existLabel = DB::table('label')->where("artist_id",$data['artist_id'])
        ->where("label",$data['label'])->first();
        if($existLabel)
        {
            return redirect()->back();
        }else
        {
            $create_label = DB::table('label')->insert($data);
            return redirect()->route("artists_label");
        }
    }

    public function edit_label($id,Request $request)
    {
        $data['label'] = $request->label;
        $data['artist_id'] = $request->artist_id;
        
        $existLabel = DB::table('label')->find($id);
        if(!$existLabel)
        {
            return redirect()->back();
        }else
        {
            $edit_label = DB::table('label')->where("id",$id)->update($data);
            return redirect()->route("artists_label");
        }
    }

    public function remove_label($id,Request $request)
    {
        $existLabel = DB::table('label')->where("id",$id)->first();
        if(!$existLabel)
        {
            return redirect()->back();
        }else
        {
            $create_label = DB::table('label')->where("id",$id)->delete();
            return redirect()->route("artists_label");
        }
    }
}

