<?php

/**
 * Bu ödevde günlük kalori hesaplaması yapacağız.
 * Yukarıdaki değişkenleri ve aşağıdaki formülü kullanarak
 * kişinin günlük kaç kalori alması gerektiğini hesaplayıp
 * bunu ekrana yazan PHP kodunu oluşturmamız gerekiyor.
 * 
 * Erkekler için; 10 x kilo + 6.25 x boy - 5 x yaş + 5
 * Kadınlar için; 10 x kilo + 6.25 x boy - 5 x yaş - 161
 * 
 * Örneğin;
 * $sex = "female";
 * $weight = 55;
 * $height = 170;
 * $age = 25;
 * 
 * Ekrana 1326.5 yazması gerekiyor.
 */

$sex = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

if($sex == "male")
  echo 10*$weight+6.25*$height-5*$age+5;
if($sex == "female")
  echo 10*$weight+6.25*$height-5*$age-161;


