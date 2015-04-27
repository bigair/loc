<?php

class Factory {

    private $configs;

    public function __construct($config_file){
        $handle = fopen($config_file, "r");
        $content = fread($handle, filesize($config_file));
        fclose($handle);

        $this->configs = json_decode($content, true);
    }


    function getBean($class_id){
        while(true){
            $conf = each($this->configs);

            if(false == $conf) return null;

            if(strcmp($class_id, $conf["value"]["id"]) === 0){

                include_once($conf["value"]["class_file"]);

                $obj = new $conf["value"]["class_name"]();

                $arr_propi = $conf["value"]["properties"];
                while($prop = each($arr_prop)){
                    $set_method = "set". ucwords($prop["value"]["name"]);

                    $obj->$set_method($prop["value"]["value"]);
                }

                return $obj;
            }
        }
    }
}
