<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thesaurus;

class ThesaurusController extends Controller
{
    public function showSynonymsForm()
{
    return view('thesaurus.form');
}

public function getSynonyms(Request $request)
{
    $thesaurus = new Thesaurus([
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ]);

    $word = $request->input('word');
    $synonymsResult = $thesaurus->getSynonyms($word);

    return view('thesaurus.result', ['synonymsResult' => $synonymsResult]);
}

}
