<?php namespace levkina;

use core\LogAbstract;
use core\LogInterface;


Class MyLog extends LogAbstract implements LogInterface {

    public function _log(String $str): void {
        $this->log[]=$str;
    }

    /**
     * @param String $str строка для записи в массив лога
     */
    public static function log(String $str): void {
        self::Instance()->_log($str);
	}
    
    public function _write(): void {
		
$log='';
        if (!is_dir("log")) {
            mkdir("log");
        }

        foreach (LevkinaLog::$i->log as $value) {
            $log .= $value."\n\r";
        }
        echo $log;

        $d = new \DateTime();
        $logFileName = "log/".$d->format('d.m.Y_H.i.s.ms').".log";
        file_put_contents($logFileName, implode("\n", $this->log));
        
    }
    
    public static function write(): void {
        self::Instance()->_write();
    }

}

?>