<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Music;

use Illuminate\View\View;


class FeatureController extends Controller
{
    public function index(){
        $musics = Music::get();
        $this->data_formatting($musics);
        // return $musics;
        return view('feature', ['all' => $musics]);
    }
    
    private function data_formatting($musics){
        foreach ($musics as &$row) {
            $row["danceability"] = preg_replace("/\.?0+$/", "", number_format($row["danceability"], 2));
            $row["acousticness"] = preg_replace("/\.?0+$/", "", number_format($row["acousticness"], 2));
            $row["energy"] = preg_replace("/\.?0+$/", "", number_format($row["energy"], 2));
            $row["instrumentalness"] = preg_replace("/\.?0+$/", "", number_format($row["instrumentalness"], 2));
            $row["liveness"] = preg_replace("/\.?0+$/", "", number_format($row["liveness"], 2));
            $row["loudness"] = preg_replace("/\.?0+$/", "", number_format($row["loudness"], 2));
            $row["speechiness"] = preg_replace("/\.?0+$/", "", number_format($row["speechiness"], 2));
            $row["tempo"] = preg_replace("/\.?0+$/", "", number_format($row["tempo"]));
            $row["time_signature"] = $row["time_signature"];
            $row["valence"] = preg_replace("/\.?0+$/", "", number_format($row["valence"], 2));
        }
        return $musics;   
    }
}
