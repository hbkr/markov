<!DOCTYPE html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>失格人間</title>
<meta name="description" content="MeCabによる形態素解析→マルコフ連鎖テスト">
<meta property="og:title" content="失格人間" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://vps1.liverty.biz/hbkr/cutup/" />
<meta property="og:image" content="http://vps1.liverty.biz/hbkr/cutup/ogp.png" />
<meta property="og:site_name" content="失格人間" />
<meta property="og:locale" content="ja_JP" />
<meta property="og:description" content="MeCabによる形態素解析→マルコフ連鎖テスト" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="MeCabによる形態素解析→マルコフ連鎖テスト" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.2/normalize.min.css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
<style type="text/css">
body { margin:10px;}
</style>
</head>

<body>
<h1>失格人間</h1>
<?php
require_once('markov.php');
require('mecabp.php');

$string='
恥の多い生涯を送って来ました。
自分には、人間の生活というものが、見当つかないのです。自分は東北の田舎に生れましたので、汽車をはじめて見たのは、よほど大きくなってからでした。自分は停車場のブリッジを、上って、降りて、そうしてそれが線路をまたぎ越えるために造られたものだという事には全然気づかず、ただそれは停車場の構内を外国の遊戯場みたいに、複雑に楽しく、ハイカラにするためにのみ、設備せられてあるものだとばかり思っていました。
しかも、かなり永い間そう思っていたのです。ブリッジの上ったり降りたりは、自分にはむしろ、ずいぶん垢抜《あかぬ》けのした遊戯で、それは鉄道のサーヴィスの中でも、最も気のきいたサーヴィスの一つだと思っていたのですが、のちにそれはただ旅客が線路をまたぎ越えるための頗る実利的な階段に過ぎないのを発見して、にわかに興が覚めました。
また、自分は子供の頃、絵本で地下鉄道というものを見て、これもやはり、実利的な必要から案出せられたものではなく、地上の車に乗るよりは、地下の車に乗ったほうが風がわりで面白い遊びだから、とばかり思っていました。
自分は子供の頃から病弱で、よく寝込みましたが、寝ながら、敷布、枕のカヴァ、掛蒲団のカヴァを、つくづく、つまらない装飾だと思い、それが案外に実用品だった事を、二十歳ちかくになってわかって、人間のつましさに暗然とし、悲しい思いをしました。
また、自分は、空腹という事を知りませんでした。いや、それは、自分が衣食住に困らない家に育ったという意味ではなく、そんな馬鹿な意味ではなく、自分には「空腹」という感覚はどんなものだか、さっぱりわからなかったのです。へんな言いかたですが、おなかが空いていても、自分でそれに気がつかないのです。
小学校、中学校、自分が学校から帰って来ると、周囲の人たちが、それ、おなかが空いたろう、自分たちにも覚えがある、学校から帰って来た時の空腹は全くひどいからな、甘納豆はどう？カステラも、パンもあるよ、などと言って騒ぎますので、自分は持ち前のおべっか精神を発揮して、おなかが空いた、と呟いて、甘納豆を十粒ばかり口にほうり込むのですが、空腹感とは、どんなものだか、ちっともわかっていやしなかったのです。
人間、失格。
もはや、自分は、完全に、人間で無くなりました。
ここへ来たのは初夏の頃で、鉄の格子の窓から病院の庭の小さい池に紅《あか》い睡蓮の花が咲いているのが見えましたが、それから三つき経ち、庭にコスモスが咲きはじめ、思いがけなく故郷の長兄が、ヒラメを連れて自分を引き取りにやって来て、父が先月末に胃潰瘍《いかいよう》でなくなったこと、自分たちはもうお前の過去は問わぬ、
生活の心配もかけないつもり、何もしなくていい、その代り、いろいろ未練もあるだろうがすぐに東京から離れて、田舎で療養生活をはじめてくれ、お前が東京でしでかした事の後仕末は、だいたい渋田がやってくれた筈だから、それは気にしないでいい、とれいの生真面目な緊張したような口調で言うのでした。
故郷の山河が眼前に見えるような気がして来て、自分は幽かにうなずきました。
まさに癈人。
父が死んだ事を知ってから、自分はいよいよ腑抜《ふぬ》けたようになりました。父が、もういない、自分の胸中から一刻も離れなかったあの懐しくおそろしい存在が、もういない、自分の苦悩の壺がからっぽになったような気がしました。自分の苦悩の壺がやけに重かったのも、あの父のせいだったのではなかろうかとさえ思われました。
まるで、張合いが抜けました。苦悩する能力をさえ失いました。
それから三年と少し経ち、自分はその間にそのテツという老女中に数度へんな犯され方をして、時たま夫婦喧嘩《げんか》みたいな事をはじめ、胸の病気のほうは一進一退、痩せたりふとったり、血痰《けったん》が出たり、きのう、テツにカルモチンを買っておいで、と言って、
村の薬屋にお使いにやったら、いつもの箱と違う形の箱のカルモチンを買って来て、べつに自分も気にとめず、寝る前に十錠のんでも一向に眠くならないので、おかしいなと思っているうちに、おなかの具合がへんになり急いで便所へ行ったら猛烈な下痢で、しかも、それから引続き三度も便所にかよったのでした。不審に堪えず、薬の箱をよく見ると、それはヘノモチンという下剤でした。
自分は仰向けに寝て、おなかに湯たんぽを載せながら、テツにこごとを言ってやろうと思いました。
いまは自分には、幸福も不幸もありません。
ただ、一さいは過ぎて行きます。
自分がいままで阿鼻叫喚で生きて来た所謂「人間」の世界に於いて、たった一つ、真理らしく思われたのは、それだけでした。
ただ、一さいは過ぎて行きます。
自分はことし、二十七になります。白髪がめっきりふえたので、たいていの人から、四十以上に見られます。
'.PHP_EOL;

$summarizer = new Markov;
$words = array();

$fn = "./".hash("sha1", $string);
if (file_exists($fn)) {
    $words = unserialize(file_get_contents($fn));
} else {
    $mecab = new Mecabp;
    $ary = $mecab->parse($string);
    for ($i = 0; $i < count($ary); $i++) {
        $str = $ary[$i]["word"];
        if ($ary[$i]["kind"] == "名詞") {
            $str = "<span style='font-weight:bold; font-size:20px;'>".$str."</span>";
        }
        array_push($words, $str);
    }
    array_push($words, "EOS");
    file_put_contents($fn, serialize($words));
}

$time_start = microtime(true);

echo $summarizer->summarize($words, 3);

$timelimit = microtime(true) - $time_start;


?>
<div style="margin-top:20px">※ <a href=".">リロード</a>する度に文章は変わります</div>
<hr />
MeCabによる形態素解析→マルコフ連鎖テスト
<a href="https://github.com/hbkr/markov">github</a> / <a href="http://twitter.com/hbkr">twitter</a>
</body>
</html>

