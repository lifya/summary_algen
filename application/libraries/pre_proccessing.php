<?php 

class Pre_proccessing
{
	// private $stopword_list = ['dan', 'dari', 'ke'];
	public function casefolding($str)
	{
		return strtolower($str);
	}

	public function tokenizing($str)
	{
		return explode(' ', $str);
	}

	public function split_dot($str)
	{
		return explode('.', $str);
	}

	public function split_comma($str)
	{
		return explode(',', $str);
	}

	public function stopwords_removal($data){
        $kamus = [];
        $hasil = [];

        $kamus = $this->read_file_by_line("assets/document/kamus_stopwords_removal");

        foreach($data as $kata){
            $hasil[] = array_diff($kata, $kamus);
        }            

        return $hasil;
    }

	public function stemming($sentence)
	{
		$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        return $stemmer->stem($sentence);
	}
}