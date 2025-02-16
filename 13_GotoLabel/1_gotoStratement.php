<? php

$i=1;
while($i < 5)
{ 
echo $i;
  if ($i == 3) {
    goto abc;
  }
  $i++;
}

abc: 
echo "this is abc";
echo "this is abc";
echo "this is abc";

?>
