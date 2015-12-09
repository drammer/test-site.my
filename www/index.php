
<head>
    <meta charset="utf-8" />
</head>
<?php

include_once('vendor/autoload.php');
// $client_id = '4a8f6899925d487895f976b6d5b7ffda';
// $token = '5f0927c2118640e0afc360094d9e7cd3';
// $headers = array('Autorisation: OAuth da71dab3ab86436884732736f6989723');

// $headers = array("Authorization: Basic a5d084f5b7c34c0f84b402a1c84fe04b");
// // $curl = curl_init('https://cloud-api.yandex.net/v1/disk/resources?path=app:/');
// // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
// // curl_setopt($curl,CURLOPT_HEADER, true);
// // curl_exec($curl);
// // $info = curl_getinfo($curl);
// // var_dump($info);

	
// 	//логин и пароль от Яндекса
// 	$login = "sockraina.it"; //можно и без @yandex.ru
// 	$password = "3452078Sockraina";
	
// 	// $headers = array("Authorization: Basic " . base64_encode($login . ":" . $password)); //формируем заголовки для успешной авторизации
// 	$dothis = $do ? 'publish' : 'unpublish';

// // ДЛЯ СКАЧИВАНИЯ ФАЙЛОВ

// 		//логин и пароль от Яндекса
// 	// $login = "sockraina.it"; //можно и без @yandex.ru
// 	// $password = "3452078Sockraina";
	
// 	// // $headers = array("Authorization: Basic " . base64_encode($login . ":" . $password)); //формируем заголовки для успешной авторизации
// 	// $dothis = $do ? 'publish' : 'unpublish';
// 	// $file = '/passport-photo.jpg'; //имя каталога и файла в нем. Если файл в корне то /test.zip
// 	// $do = 1; //действие над файлом: 1 для publish и 0 для unpublish	

	 
// 	// $file = str_replace(' ', '%20', $file);
// 	// $curl = curl_init('https://webdav.yandex.ru'.$file.'?'.$dothis);
// 	//     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
// 	//     curl_setopt($curl,CURLOPT_HEADER, true);
// 	//     curl_setopt($curl, CURLOPT_POST, true);
// 	//     curl_setopt($curl, CURLOPT_POSTFIELDS, $file.'?'.$do);
// 	//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 	//     curl_exec($curl);
	    
// 	//  $info = curl_getinfo($curl);
	
// 	// if ($do && $info['http_code'] == 302) {
// 	//     echo $info['redirect_url'];
// 	// } elseif ($info['http_code'] == 200) {
// 	//     echo 'Файл '.$file.' изъят из паблика';
// 	// }else echo 'Неудача!';

// // КОНЕЦ ДЛЯ СКАЧИВАНИЯ

// /********************************************************/ 

// 	// ДЛЯ ЗАКАЧИВАНИЯ ФАЙЛОВ



// $file = 'pass.txt';
// 	$curl = curl_init('https://cloud-api.yandex.net:443/v1/disk/resources?path=test2');
// 	    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
// 	    curl_setopt($curl,CURLOPT_HEADER, true);
	   
// 	    curl_setopt($curl, CURLOPT_POSTFIELDS, $file);
// 	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// 	    curl_exec($curl);
	    
// 	 $info = curl_getinfo($curl);
	
// 	// if ($do && $info['http_code'] == 302) {
// 	//     echo $info['redirect_url'];
// 	// } elseif ($info['http_code'] == 200) {
// 	//     echo 'Файл '.$file.' изъят из паблика';
// 	// }else echo 'Неудача!';
// 	 var_dump($info);
	
	$access_token = 'ffd91d937ef5473ba249648c7d77868f';

	$disk = new Mackey\Yandex\Disk();
	$disk->token($access_token);
    $files = $disk->resource();
    foreach ($files as $file) {
        //$file = $file->getContents();
        //var_dump($file);
    



        //$file->upload('file.txt');

$file->upload(__DIR__.'/file.txt', function($upload_size, $uploaded) {
    static $prev_size = null;

    if ($upload_size === 0)
    {
        return;
    }

    if ($prev_size !== $uploaded)
    {
        $progress_size = 40;
        $fraction_downloaded = $uploaded / $upload_size;
        $dots = round($fraction_downloaded * $progress_size);
        printf('%3.0f%% [', $fraction_downloaded * 100);
        $i = 0;
        for ( ; $i < $dots - 1; $i++)
        {
            echo '=';
        }

        echo '>';

        for ( ; $i < $progress_size - 1; $i++)
        {
            echo ' ';
        }

        echo ']' . "\r\n";

        $prev_size = $uploaded;
    }
});


      
    }


?>

<!-- http://bagazh-znanij.com/#access_token=ffd91d937ef5473ba249648c7d77868f&token_type=bearer&expires_in=31536000 -->




















