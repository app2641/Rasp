<?php


namespace Rasp\Commands\Base;

abstract class AbstractCommand 
{
    abstract function execute (Array $params);
    abstract static function help ();


    /**
     * コンソールに第一引数のメッセージを表示する
     * タイトルを付けたい場合には第二引数も指定する
     *
     * @author app2641
     **/
    public function log ($msg, $title = null)
    {
        if (is_null($title)) {
            $txt = '  ' .  pack('c',0x1B) . "[1m" . $msg . pack('c',0x1B) . "[0m" . "\n";

        } else {
            $txt = '  ' .  pack('c',0x1B) . "[1;32m" . $title . ':' . pack('c',0x1B) . "[0m" . '  ';
            $txt .= pack('c',0x1B) . "[1m" . $msg . pack('c',0x1B) . "[0m" . "\n";
        }

        echo $txt;
    }



    /**
     * コンソールにエラーメッセージを表示する
     *
     * @author app2641
     **/
    public function errorLog ($msg)
    {
        $txt = '  ' .  pack('c',0x1B) . "[1;31m" . $msg . pack('c',0x1B) . "[0m" . "\n";
        echo $txt;
    }
}
