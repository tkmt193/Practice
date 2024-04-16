<?php
/* SNSごとにプロフィールの表示を変える */
interface MySNSaccount{
    public function getUserName();
    public function getId();
    public function getSNSLink();
}

class MyInstagram implements MySNSaccount{
    public function getUserName(){
        return '𝐑𝐎𝐋𝐀';
    }
    public function getId(){
        return 'rolaofficial';
    }
    public function getSNSLink(){
        return "https://www.instagram.com/{$this->getId()}";
    }

}

class MyTwitter implements MySNSaccount{
    public function getUserName(){
        return 'ROLA';
    }
    public function getId(){
        return 'RolaWorLD';
    }
    public function getSNSLink(){
        return "https://twitter.com/{$this->getId()}";
    }

}

class MySNS {
    private $mysns;

    public function __construct(MySNSaccount $mysns){
        $this->mysns = $mysns;
    }

    public function execute(){
        $params = [];
        $params['name'] = $this->mysns->getUserName();
        $params['id'] = $this->mysns->getId();
        $params['link'] = $this->mysns->getSNSLink();
        return $params;
    }
}

?>