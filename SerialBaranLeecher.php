<?php

if($_GET['Link'])
{
   $Link_SPL = preg_split("/\//" , $_GET['Link']);
   $Movie_INFO_1 =  $Link_SPL[4];
   $Movie_INFO_2 =  $Link_SPL[5]; 
   $Movie_INFO_3 =  $Link_SPL[6];
   $MovieServer = $Link_SPL[3];
   $MovieLink = $Link_SPL[7];

   SerialBaranLeecher($MovieServer , $MovieLink ,  $Movie_INFO_1 ,  $Movie_INFO_2 ,  $Movie_INFO_3);
}


function SerialBaranLeecher($MovieServer , $MovieLink , $Movie_INFO_1 ,  $Movie_INFO_2 ,  $Movie_INFO_3)
{
    $DownloadLink = "http://" . $MovieServer . ".serbndl.xyz/" . $Movie_INFO_1 . "/" . $Movie_INFO_2 . "/" . $Movie_INFO_3 . "/" . $MovieLink;

    if(strpos($DownloadLink , "404") || strpos($DownloadLink , "403")) 
    {
      echo("Link Not Found!");
    }
    else
    { 
      echo(json_encode(array('DownloadLink' => $DownloadLink , 'Developer' => "AGC007")));
    }
}


?>