<?php
/*
* @Author : Savaş Can Altun
* Web : http://savascanaltun.com.tr
* Mail : savascanaltun@gmail.com
* GİT : http://github.com/saltun
* Date : 07.10.2014
* Update : 07.10.2014
*/

class sTextToSound 
{
	
	public $dir="mp3";
	public $mp3Name="s.mp3";
	public $lang='en'; // default İngilizce ( en )
	public $cache=false;
	public $output="None";
	

	public function __construct(){

		// ses dosyalarının kaydedileceği dizin yok ise oluşturuldu.
		 if (!is_dir($this->dir)) { 
            mkdir($this->dir, 777) or die('Dizin bulunamadığı için oluşturuldu : ' . $this->dir); 
        } 

        $this->url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
         
	}

	public function sound($text){

		$newText=urlencode($text);

		$this->mp3Name=md5($text).".mp3";

		if ($this->cache==true) {
			
			if (!file_exists("/mp3/".md5($text).".mp3")) {
				$this->download("http://translate.google.com/translate_tts?ie=UTF-8&q={$newText}&tl=".$this->lang);
			}
		}


		$this->output="/mp3/".md5($text).".mp3";
	}

	

	/*
	* Dosya indirme fonksiyonumuz 
	* curl var ise curl ile indirir eğer yok ise file_get_contents fonksiyonu ile indirir
	*/
	public function download($url){  
      
	
        if (!function_exists('curl_init')){ 
            $output = file_get_contents($url);  
        }else{ 
            $ch = curl_init();  
            curl_setopt($ch, CURLOPT_URL, $url);  
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);  
            curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");  
            curl_setopt($ch, CURLOPT_HEADER, 0);  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);  
            $output = curl_exec($ch);  
            curl_close($ch);  
        } 
      
        file_put_contents($this->dir."/".$this->mp3Name, $output); 

    } 


}

?>