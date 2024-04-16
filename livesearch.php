<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("assets/xml/links.html");

$x=$xmlDoc->getElementsByTagName('link');;
//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file
$hint='';
if (strlen($q)>0) {
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $c=$x->item($i)->getElementsByTagName('content');
    $z=$x->item($i)->getElementsByTagName('url');
    $ystr =stristr($y->item(0)->childNodes->item(0)->nodeValue,$q) ;
    $cstr =stristr($c->item(0)->childNodes->item(0)->nodeValue,$q) ; 
    if ($y->item(0)->nodeType==1 OR $c->item(0)->nodeType==1) {
      //find a link matching the search text
      if ($ystr OR $cstr) {

          if ($hint=="") {
            $hint="<a href='" .
            $z->item(0)->childNodes->item(0)->nodeValue .
            "'>" .
            $y->item(0)->childNodes->item(0)->nodeValue .
             "</a><label hidden>" . $c->item(0)->childNodes->item(0)->nodeValue . "</label>";
          } else {
            $hint=$hint . "<br /><a href='" .
            $z->item(0)->childNodes->item(0)->nodeValue .
            "'>" .
            $y->item(0)->childNodes->item(0)->nodeValue . "</a><label disable hidden>". $c->item(0)->childNodes->item(0)->nodeValue ."</label>";
            }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=='' OR $hint==' ') {
  $response="<p class='nohoverlivesearch'>There are no results. Check your spelling or try different keywords...</p>";
} else {

    $response = $hint;
//output the response
}

echo $response; 
?>