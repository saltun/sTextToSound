# GÜNCELLEME SONRASI AKTİFLİĞİNİ YİTİRMİŞTİR 


sTextToSound - Sınıfı
====================

sTextToSound sınıfı sayesinde yazıları ses dosyalarına çevire bilirsiniz böylece kolaylıkla ses dosyalarını elde etmiş olursunuz.


Sınıfı dahil edip calıştıralım
---------------------
Sınıfı dahil edip sClass adında bir değişkene atadık bundan sonra sınıf içindeki metodları sClass olarak kullanacağız.
``` php
	require_once('sTextToSound.php');
	$sClass = new sTextToSound;
```

Ses Dosyası oluşturma 
---------------------

sound methodu ile bir yazıyı sese çevirmek oldukça basittir sadece yazıyı parametre ile gönderiniz.
``` php

	$sClass->sound("Hello World, My name is Savaş !");
```

Mp3 adresleri edinme
---------------------
yazıların mp3 karşılığını sunucunuzdan almak için yapmanız gereken tek şey output demek !
NOT ! : bu kullanımı sound fonksiyonundan sonra kullanınız yoksa çıktı "None" olacaktır !

``` php
	echo $sClass->output;
```

Sınıf'ın ayarları
====================

Dil Seçimi 
---------------------
Konuşan sesin dilini seçmek isterseniz yapmanız gereken tek şey dili belirtmek !
``` php
	$sClass->lang="tr"; // seslerde kullanılacak dil'i seçiniz // default ( ingilizce ) en // tr diyerek Türkçe yaptık.
```


MP3 dosyalarının dizinin belirtiniz.
---------------------
``` php
	$sClass->dir="mp3"; // mp3 dosyaların oluşturulacağı dizin adı ( dizin yok ise otomatik oluşturulur ) 
```

Cache ( Ön bellekleme ) 
---------------------
Cache yani ön bellekleme kullanmak için sadece true demeniz yeterli !  ( standart false dir ) 
``` php
	$sClass->cache=true;
```

Author : [Savas Can ALTUN](http://savascanaltun.com.tr/)
Mail : savascanaltun@gmail.com
Demo : [Demo Page](http://savascanaltun.com.tr/app/php/sTextToSound/)
Web : http://savascanaltun.com.tr


