<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


 
 
function getBanglaDate($date) {
    $engArray = array(
        1, 2, 3, 4, 5, 6, 7, 8, 9, 0,
        'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
        'am', 'pm', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'
    );
    $bangArray = array(
        '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০',
        'জানুয়ারি', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর',
        'সকাল', 'দুপুর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
    );

    $converted = str_replace($engArray, $bangArray, $date);
    return $converted;
}
 
function str_replace_nth($search, $replace, $subject, $nth) {
    $found = preg_match_all('/' . preg_quote($search) . '/', $subject, $matches, PREG_OFFSET_CAPTURE);
    if (false !== $found && $found > $nth) {
        return substr_replace($subject, $replace, $matches[0][$nth][1], strlen($search));
    }
    return $subject;
}

//echo str_replace_nth('?', 'username', $subject, 1);



 function split2($string,$needle,$nth){
	 if(substr($string, 0, 5)!="news/")
	  	{ return $string;}
		 
$max = strlen($string);
$n = 0;
for($i=0;$i<$max;$i++){
    if($string[$i]==$needle){
        $n++;
        if($n>=$nth){
            break;
        }
    }
}
$arr[] = substr($string,0,$i);
$arr[] = substr($string,$i+1,$max);

return $arr[0]."/page/".$arr[1];
}

 
function utf8_slug($text) {
    $text = trim(preg_replace('/[^\p{L}\p{M}\p{N}-]/u', '-', $text));
    return $text;
}


 function topread($row, $topread){
                                                  foreach($topread as $records){
                                                      if($records["NewsID"]==$row)
                                                          return $records;
                                                      
                        }
                                                  
                                                  
               }



?>