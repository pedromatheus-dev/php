<?php 

    function slug(string $text): string
    {
        $text = mb_strtolower($text, 'UTF-8');
        $text = transliterator_transliterate('Any-Latin; Latin-ASCII; Lower()', $text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        $text = trim($text, '-');
        $text = preg_replace('/-+/', '-', $text);

        return $text;
    }

    echo slug("Elon Musk considers move to Mars") . "<br>";
    echo slug("Fintech startups raised $34B in 2019") . "<br>";
    echo slug("Shopify joins Facebook's cryptocurrency Libra Association") . "<br>";
    echo slug("What is a slug and how to optimize it?") . "<br>";
    echo slug("Bitcoin soars past $33,000, its highest ever") . "<br>";
?>