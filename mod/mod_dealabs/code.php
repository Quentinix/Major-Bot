<div class=titre>
	<a href="https://www.dealabs.com/custom.html" target=_blank>Dealabs</a>
</div>

<?php

$xml_file = simplexml_load_file("https://www.dealabs.com/rss/custom/0tZB8CvjoHO3qclCSEv2dT1rcuyCAZUX.xml");
$i = 0;
$i_max = 2;
while ($i <= $i_max){
	print"
			<div class=item>
				<div class=title>
					<a href='"; print($xml_file->channel->item[$i]->link); echo "' target=_blank>";
						print($xml_file->channel->item[$i]->title);
					print "</a>
				</div>
				<div class=description>";
						print($xml_file->channel->item[$i]->description);
				print "</div>
			</div>
			<br>
		";
	$i++;
}

echo count($xml_file->channel->item)-3; 
echo" autres deals perso !";

?>