<?php


namespace Rasp\Commands;

class {$class} extends Base\AbstractCommand
{

    /**
     * コマンドの実行
     *
     * @author app2641
     **/
    public function execute (Array $params)
    {
        try {
            /* write command action */
        
        } catch (\Exception $e) {
            $this->errorLog($e->getMessage());
        }
    }



    /**
     * コマンドリストに表示するヘルプメッセージを表示する
     *
     * @author app2641
     **/
    public static function help ()
    {
        /* write help message */
        $msg = '';

        return $msg;
    }
}
