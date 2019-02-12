<?php

$quotesBegin = ['Remember to ', 'Always ', 'Never ', 'It\'s easy to '];
$quotesEnd = ['look a gift-horse in the mouth ', 'eat your greens', 'let them see you sweat', 'forget where you came from'];

$randomQuote1 = array_rand($quotesBegin, 1);
$randomQuote2 = array_rand($quotesEnd, 1);

$finalQuote = '<p>'.$quotesBegin[$randomQuote1].$quotesEnd[$randomQuote2].'</p>'

?>

