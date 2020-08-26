<?php


function score_positive($sent)
{
	$d1=array();  //depression words to be found
	$d2=array();
	$d3=array();
	$id=array();  //increment words found
	$in=array();  //decrement words
	$iv=array();//inverted words found
	$dep1=array();     //depression words
	$dep2=array();
	$dep3=array();
	$inv=array();  //inverted words
	$inc=array();  //increment words
	$dec=array();  //decrement words
	$temp1=array();
	$temp2=array();
	$temp3=array();
	$filecontents = file_get_contents('pos_words.txt');
    $dep1 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //depression words
    //print_r($dep1);
	$filecontents = file_get_contents('pos_words2.txt');
    $dep2 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep2);
	$filecontents = file_get_contents('pos_words3.txt');
    $dep3 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep3);
	$filecontents = file_get_contents('inverted_words.txt');
    $inv = preg_split('/[@]+/',$filecontents, -1, PREG_SPLIT_NO_EMPTY);    //inverted words
	//($inv);
	/*foreach($inv as $t)
	{
		//echo $t."<br>".strlen($t);
	}*/
   // print_r($inv);
	$filecontents = file_get_contents('increment_words.txt');
    $inc = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //increment words
    //$inc1=fopen('increment_words.txt','r');
    //$inc=fread($inc1,filesize('increment_words.txt'));
    //print_r($inc);
   // fclose($inc1);
	$filecontents = file_get_contents('decrement_words.txt');
    $dec = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);   //decrement words
    //print_r($dec);


 foreach($dep1 as $t)
    {
	  $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d1,$x);
      }
    }
    sort($d1);
    //var_dump($d1);
	//echo($sent);
    foreach($dep2 as $t)
    {
	    $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d2,$x);
      }
    }
    sort($d2);
    //($d2);

   foreach ($dep3 as $t)
   {
	   $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d3,$x);
      }
   }
   sort($d3);

	//echo $sent;
	 foreach ($inv as $t)                             //increment words in sentence
   {
	  $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($iv,$z);
      }
   }
   sort($iv);
  // var_dump($iv);

   //($iv);

	  foreach ($dec as $t)                       //decrement words in sentence
    { //($t);
	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($id,$z);
      }
    }
   sort($id);
	//($id);


	   foreach ($inc as $t)                             //increment words in sentence
   {
	 	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($in,$z);
      }
   }
   sort($in);
  //($in);

//($d1);
//($d2);
//($d3);
$scr_dep1=0;
foreach($d1 as $x)
{  $scr_dep=0;
 foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.25;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+.5;
		}

	}
	if($scr_dep==0)
		$scr_dep=1;

	$scr_dep1+=$scr_dep;
}

foreach($d2 as $x)
{  $scr_dep=0;


    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+3;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.5;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1;
		}

	}
	if($scr_dep==0)
		$scr_dep=2;

	$scr_dep1+=$scr_dep;
}
foreach($d3 as $x)
{  $scr_dep=0;

    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+4.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.75;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	if($scr_dep==0)
		$scr_dep=3;

	$scr_dep1+=$scr_dep;

}

return $scr_dep1;
}



	
function score_aggression($sent)
{
	$d1=array();  //depression words to be found
	$d2=array();
	$d3=array();
	$id=array();  //increment words found
	$in=array();  //decrement words
	$iv=array();//inverted words found
	$dep1=array();     //depression words
	$dep2=array();
	$dep3=array();
	$inv=array();  //inverted words
	$inc=array();  //increment words
	$dec=array();  //decrement words
	$temp1=array();
	$temp2=array();
	$temp3=array();
	$filecontents = file_get_contents('agg.txt');
    $dep1 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //depression words
    //print_r($dep1);
	$filecontents = file_get_contents('agg2.txt');
    $dep2 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep2);
	$filecontents = file_get_contents('agg3.txt');
    $dep3 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep3);
	$filecontents = file_get_contents('inverted_words.txt');
    $inv = preg_split('/[@]+/',$filecontents, -1, PREG_SPLIT_NO_EMPTY);    //inverted words
	//($inv);
	/*foreach($inv as $t)
	{
		//echo $t."<br>".strlen($t);
	}*/
   // print_r($inv);
	$filecontents = file_get_contents('increment_words.txt');
    $inc = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //increment words
    //$inc1=fopen('increment_words.txt','r');
    //$inc=fread($inc1,filesize('increment_words.txt'));
    //print_r($inc);
   // fclose($inc1);
	$filecontents = file_get_contents('decrement_words.txt');
    $dec = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);   //decrement words
    //print_r($dec);


 foreach($dep1 as $t)
    {
	  $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d1,$x);
      }
    }
    sort($d1);
    //var_dump($d1);
	//echo($sent);
    foreach($dep2 as $t)
    {
	    $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d2,$x);
      }
    }
    sort($d2);
    //($d2);

   foreach ($dep3 as $t)
   {
	   $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d3,$x);
      }
   }
   sort($d3);

	//echo $sent;
	 foreach ($inv as $t)                             //increment words in sentence
   {
	  $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($iv,$z);
      }
   }
   sort($iv);
  // var_dump($iv);

   //($iv);

	  foreach ($dec as $t)                       //decrement words in sentence
    { //($t);
	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($id,$z);
      }
    }
   sort($id);
	//($id);


	   foreach ($inc as $t)                             //increment words in sentence
   {
	 	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($in,$z);
      }
   }
   sort($in);
  //($in);

//($d1);
//($d2);
//($d3);
$scr_dep1=0;
foreach($d1 as $x)
{  $scr_dep=0;
 foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.25;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+.5;
		}

	}
	if($scr_dep==0)
		$scr_dep=1;

	$scr_dep1+=$scr_dep;
}

foreach($d2 as $x)
{  $scr_dep=0;


    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+3;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.5;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1;
		}

	}
	if($scr_dep==0)
		$scr_dep=2;

	$scr_dep1+=$scr_dep;
}
foreach($d3 as $x)
{  $scr_dep=0;

    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+4.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.75;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	if($scr_dep==0)
		$scr_dep=3;

	$scr_dep1+=$scr_dep;

}

return $scr_dep1;
}




	
function score_negative($sent)
{
	$d1=array();  //depression words to be found
	$d2=array();
	$d3=array();
	$id=array();  //increment words found
	$in=array();  //decrement words
	$iv=array();//inverted words found
	$dep1=array();     //depression words
	$dep2=array();
	$dep3=array();
	$inv=array();  //inverted words
	$inc=array();  //increment words
	$dec=array();  //decrement words
	$temp1=array();
	$temp2=array();
	$temp3=array();
	$filecontents = file_get_contents('neg_words.txt');
    $dep1 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //depression words
    //print_r($dep1);
	$filecontents = file_get_contents('neg_words2.txt');
    $dep2 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep2);
	$filecontents = file_get_contents('neg_words3.txt');
    $dep3 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep3);
	$filecontents = file_get_contents('inverted_words.txt');
    $inv = preg_split('/[@]+/',$filecontents, -1, PREG_SPLIT_NO_EMPTY);    //inverted words
	//($inv);
	/*foreach($inv as $t)
	{
		//echo $t."<br>".strlen($t);
	}*/
   // print_r($inv);
	$filecontents = file_get_contents('increment_words.txt');
    $inc = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //increment words
    //$inc1=fopen('increment_words.txt','r');
    //$inc=fread($inc1,filesize('increment_words.txt'));
    //print_r($inc);
   // fclose($inc1);
	$filecontents = file_get_contents('decrement_words.txt');
    $dec = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);   //decrement words
    //print_r($dec);


 foreach($dep1 as $t)
    {
	  $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d1,$x);
      }
    }
    sort($d1);

	//echo($sent);
    foreach($dep2 as $t)
    {
	    $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d2,$x);
      }
    }
    sort($d2);
    

   foreach ($dep3 as $t)
   {
	   $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d3,$x);
      }
   }
   sort($d3);
	//echo $sent;
	 foreach ($inv as $t)                             //increment words in sentence
   {
	  $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($iv,$z);
      }
   }
   sort($iv);
 

	  foreach ($dec as $t)                       //decrement words in sentence
    { //($t);
	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($id,$z);
      }
    }
   sort($id);
	//($id);


	   foreach ($inc as $t)                             //increment words in sentence
   {
	 	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($in,$z);
      }
   }
   sort($in);
  //($in);

//($d1);
//($d2);
//($d3);
$scr_dep1=0;
foreach($d1 as $x)
{  $scr_dep=0;
 foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.25;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+.5;
		}

	}
	if($scr_dep==0)
		$scr_dep=1;

	$scr_dep1+=$scr_dep;
}

foreach($d2 as $x)
{  $scr_dep=0;


    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+3;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.5;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1;
		}

	}
	if($scr_dep==0)
		$scr_dep=2;

	$scr_dep1+=$scr_dep;
}
foreach($d3 as $x)
{  $scr_dep=0;

    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+4.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.75;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	if($scr_dep==0)
		$scr_dep=3;

	$scr_dep1+=$scr_dep;

}

return $scr_dep1;
}




function score_depression($sent)
{
	$d1=array();  //depression words to be found
	$d2=array();
	$d3=array();
	$id=array();  //increment words found
	$in=array();  //decrement words
	$iv=array();//inverted words found
	$dep1=array();     //depression words
	$dep2=array();
	$dep3=array();
	$inv=array();  //inverted words
	$inc=array();  //increment words
	$dec=array();  //decrement words
	$temp1=array();
	$temp2=array();
	$temp3=array();
	$filecontents = file_get_contents('dep_words1.txt');
    $dep1 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //depression words
    //print_r($dep1);
	$filecontents = file_get_contents('dep_words2.txt');
    $dep2 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep2);
	$filecontents = file_get_contents('dep_words3.txt');
    $dep3 = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);
    //print_r($dep3);
	$filecontents = file_get_contents('inverted_words.txt');
    $inv = preg_split('/[@]+/',$filecontents, -1, PREG_SPLIT_NO_EMPTY);    //inverted words
	//($inv);
	/*foreach($inv as $t)
	{
		//echo $t."<br>".strlen($t);
	}*/
   // print_r($inv);
	$filecontents = file_get_contents('increment_words.txt');
    $inc = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);    //increment words
    //$inc1=fopen('increment_words.txt','r');
    //$inc=fread($inc1,filesize('increment_words.txt'));
    //print_r($inc);
   // fclose($inc1);
	$filecontents = file_get_contents('decrement_words.txt');
    $dec = preg_split('/[@]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);   //decrement words
    //print_r($dec);


 foreach($dep1 as $t)
    {
	    $z=1; //echo $t."<br>";
	    while(stripos($sent,$t,$z)==true)
      { //echo("boom");
          $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
	    //  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d1,$x);
      }
    }
    sort($d1);
    //($d1);
	//echo($sent);
    foreach($dep2 as $t)
    {
	  $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      {// echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d2,$x);
      }
    }
    sort($d2);
   // var_dump($d2);

   foreach ($dep3 as $t)
   {
	   $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($d3,$x);
      }
   }
   sort($d3);

	//echo $sent;
//echo $sent;
	 foreach ($inv as $t)                             //increment words in sentence
   {
	  $z=0; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($iv,$z);
      }
   }
   sort($iv);
  // var_dump($iv);

   //var_dump($iv);
	  foreach ($dec as $t)                       //decrement words in sentence
    { //($t);
	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($id,$z);
      }
    }
   sort($id);
	//($id);


	   foreach ($inc as $t)                             //increment words in sentence
   {
	 	 $z=1; //echo $t."<br>";
	  while(stripos($sent,$t,$z)==true)
      { //echo("boom");
  $x=stripos($sent,$t,$z);
		  $y=$x - 1;
		  $z=$x+strlen($t)+1;
		//  echo $x."value x and z".$z;
		  if($x==0 or $sent[$y]==" ")
             array_push($in,$z);
      }
   }
   sort($in);
  //($in);

//($d1);
//($d2);
//($d3);
$scr_dep1=0;
foreach($d1 as $x)
{  $scr_dep=0;
 foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.25;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+.5;
		}

	}
	if($scr_dep==0)
		$scr_dep=1;

	$scr_dep1+=$scr_dep;
}

foreach($d2 as $x)
{  $scr_dep=0;


    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+3;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.5;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1;
		}

	}
	if($scr_dep==0)
		$scr_dep=2;

	$scr_dep1+=$scr_dep;
}
foreach($d3 as $x)
{  $scr_dep=0;

    foreach($in as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+4.5;
		}

	}

	foreach($iv as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep-.75;
		}

	}
  foreach($id as $p)
	{
		if($p==$x)
		{
			$scr_dep=$scr_dep+1.5;
		}

	}

	if($scr_dep==0)
		$scr_dep=3;

	$scr_dep1+=$scr_dep;

}

return $scr_dep1;
}

 $tex=$_POST['thirteen'];
 $tex='"'.$tex.'"';
 
 $tex=" ".$tex." ";
// $tex=shell_exec("python spll.py $tex 2>&1");
// echo(substr_count($tex," ")."<br>");
  $output = preg_split( "/[.,:;!]+/", $tex );
  $output1=preg_split( "/[.,:;!\s]+/", $tex );
  //$output=" ".$output;
  $count=-2;
  foreach($output1 as $p)
  {  //echo("boom");
	  $count++;  
  }
  
  if($count==0)
	  $count++;
 //echo($count."<br>"); 
$scrd=0;  
foreach($output as $x)    //loop goes one more time,handle it
{
  $scrd=$scrd+score_depression($x);
}
 $scrd=(float)$scrd/$count;
 
 if($scrd==0.00)
	 $scrd=50;
 elseif($scrd<0.0)
    $scrd=-($scrd*53.33)+50;
elseif($scrd>0.0)
     $scrd=-($scrd*16.33)+50;
	 	 
// echo((int)$scrd)."<br>";
 
$scra=0;  
foreach($output as $x)    //loop goes one more time,handle it
{
  $scra=$scra+score_aggression($x);
}
  $scra=(float)$scra/$count;
 
if($scra==0.00)
	 $scra=50;
elseif($scra<0.0)
    $scra=-($scra*53.33)+50;
elseif($scra>0.0)
     $scra=-($scra*16.33)+50; 



$scrm=0;
 foreach($output as $x)    //loop goes one more time,handle it
{
  $scrm=$scrm+score_positive($x);
}	 
///echo$scrm."yo"; 
foreach($output as $x)    //loop goes one more time,handle it
{
  $scrm=$scrm-score_negative($x);
}
//echo($scrm." humlka");
$scrm=$scrm/$count;
//echo "score".$scrm."<br>";

if((float)($scrm)>1)
	$scrm=1;

if($scrm==0.00)
	 $scrm=50;
elseif($scrm<0.0)
    $scrm=($scrm*16.33)+50;
elseif($scrm>0.0)
     $scrm=($scrm*40)+50;

 //echo((int)$scra)."<br>";
 //$scrm=50;
 //echo((int)$scrm);  
?>
