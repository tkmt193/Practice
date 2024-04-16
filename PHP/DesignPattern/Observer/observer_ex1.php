<?php
//サブジェクトにタイトル内容をセットすると通知が飛ぶ
interface Subject {
    public function addObserver($obj);
    public function removeObserver($obj);
    public function notiofyObservers();
}
interface Observer {
    public function update($obj);   // Subjectからの通知受信
}

class GetterSetterSubject implements Subject{
    private $title = ""; /// タイトル
    private $memo = "";  /// 内容
    private $arrObservers = NULL;
    public function __construct() {
        $this->arrObservers = array();
    }

    public function __set($itm,$val) {
        if ( $itm == "title" ) $this->title = $val;
        if ( $itm == "memo" ) $this->memo = $val;
    }

    public function __get($itm) {
        if ( $itm == "title" ) return $this->title;
        if ( $itm == "memo" ) return $this->memo;
    }
    
    //Observerインスタンス追加
    public function addObserver($obj) {
    $this->arrObservers[get_class($obj)] = $obj;
    }

    //Observerインスタンス削除
    public function removeObserver($obj) {
    unset($this->arrObservers[get_class($obj)]);
    }

    public function notiofyObservers() {
    foreach($this->arrObservers as $obj) {
        $obj->update($this);
    }
    }
}

class LogObserver implements Observer {
    public function __construct() {
    }

    public function update($obj) {
        $buf  = "title:".$obj->title;
        $buf .= "\n".$obj->memo;
        echo $buf;
        //$fp = fopen("/var/www/Log/app.log","a");
        //fwrite($fp,$buf);
        //fclose($fp);
    }
}

class SndMailObserver implements Observer {
    public function __construct() {
    }

    public function update($obj) {
        printf("tst@cde.jp",$obj->title,$obj->memo,"From: adm@cde.jp\n");
    }
    }

    $obj = new GetterSetterSubject();

    $objLog = new LogObserver();
    $obj->addObserver($objLog);

    $objMail = new SndMailObserver();
    $obj->addObserver($objMail);

    $obj->title = "サンプルタイトル";
    $obj->memo  = "サンプルサンプル\nサンプル";
    $obj->notiofyObservers();

    $obj->removeObserver($objLog);
    echo "\n";
    echo "ログ通知を削除しました";
    echo "\n";
    $obj->notiofyObservers();

?>