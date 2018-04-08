<?php 
`echo 'im 1' >> /var/www/html/FIFO`; 
`curl -s 'http://192.168.1.103:3030/Say/Hi-Guys-Someone-at-the-door'`;
`sleep 2`;
$myurl = `curl -s --upload-file \`ls -t /var/www/html/media/front* | head -n1\` https:
//transfer.sh/frontdoor.jpg`;
echo "myurl: ".$myurl;
$API="o.EHaASzC8jit69AfnMcAZ4SdoVdbgJeNgcc21";
`curl -su $API: https://api.pushbullet.com/v2/pushes -d type=note -d title="Somebody a
t the door" -d body="\`echo $myurl\`" `;
?>
