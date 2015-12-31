# furikaeri
１年の振り返りジェネレーター

## Install

### MeCab

    wget http://mecab.googlecode.com/files/mecab-0.996.tar.gz
    tar xvzf mecab-0.996.tar.gz
    cd mecab-0.996/
    ./configure
    make
    make check
    sudo make install
    sudo ldconfig

### IPA Dictionary

    wget http://mecab.googlecode.com/files/mecab-ipadic-2.7.0-20070801.tar.gz
    tar xvzf mecab-ipadic-2.7.0-20070801.tar.gz
    cd mecab-ipadic-2.7.0-20070801/
    ./configure --with-charset=utf8
    make
    sudo make install

### Test

    echo 'すもももももももものうち' | mecab
    すもも 名詞,一般,*,*,*,*,すもも,スモモ,スモモ
    も   助詞,係助詞,*,*,*,*,も,モ,モ
    もも  名詞,一般,*,*,*,*,もも,モモ,モモ
    も   助詞,係助詞,*,*,*,*,も,モ,モ
    もも  名詞,一般,*,*,*,*,もも,モモ,モモ
    の   助詞,連体化,*,*,*,*,の,ノ,ノ
    うち  名詞,非自立,副詞可能,*,*,*,うち,ウチ,ウチ
    EOS

