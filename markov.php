<?php
class Markov {

  function summarize($text) {
    if (is_array($text)) $words = $text;
    elseif (is_string($text)) $words = $this->sloppy_analysis($text);
    else return false;
    $table = array();

    for ( $i = 0; $i < count($words) - 2; $i++ ) {
      $table[] = array(
        'head'    => $words[$i],
        'middle'  => $words[$i + 1],
        'end'     => $words[$i + 2]
      );
    }

    $t1 = $table[0]['head'];
    $t2 = $table[0]['middle'];
    $summary = $t1 . $t2;

    while (true) {
      $a = array();
      foreach ($table as $h) {
        if ($h['head'] == $t1 && $h['middle'] == $t2) $a[] = $h;
      }

      if (count($a) == 0) break;
      $num = array_rand($a);
      $summary .= $a[$num]['end'];
      if ($a[$num]['end'] == "EOS") break ;
      $t1 = $a[$num]['middle'];
      $t2 = $a[$num]['end'];
    }
    return preg_replace('/EOS$/', '', $summary);
  }

  function sloppy_analysis($text) {
    $re = '/[一-龠]+|[ぁ-ん]+|[ァ-ヴー]+|[a-zA-Z0-9]+|[ａ-ｚＡ-Ｚ０-９]+|[、。！!？?]+/u';
    preg_match_all($re, $text, $m);
    return $m[0];
  }
}