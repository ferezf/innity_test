<?php 
use Illuminate\Http\Request;

class ThesaurusController extends Controller
{
    public function showForm()
    {
        return view('thesaurus.form');
    }

    public function getSynonyms(Request $request)
    {
        $jsonPath = storage_path('app/thesaurus.json');
        $thesaurusData = json_decode(file_get_contents($jsonPath), true);

        $thesaurus = new Thesaurus($thesaurusData);

        $word = $request->input('word');
        $synonymsResult = $thesaurus->getSynonyms($word);

        return view('thesaurus.form', ['synonymsResult' => $synonymsResult]);
    }
}
