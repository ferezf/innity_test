<?php

namespace App;

class Thesaurus
{
    private $thesaurus;

    public function __construct(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word): string
    {
        $synonyms = isset($this->thesaurus[$word]) ? $this->thesaurus[$word] : [];

        $result = [
            'word' => $word,
            'synonyms' => $synonyms
        ];

        return json_encode($result);
    }
}
