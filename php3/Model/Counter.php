<?php
class Counter{
     static $counter=0;
      static function getCounter() {
        if (file_exists("counter.txt")) {
            echo "existt";
            $file = file_get_contents("counter.txt");
            return intval($file);
        }
        return 0;
    }
    static function incrementCounter(){
        $fp=fopen("counter.txt", "w");
        $cntr=self::getCounter();
        fwrite($fp,$cntr + 1);
        fclose($fp);
    }
   
}