#This script duplicate index.php to index-curl.php and change carriage return '<br>' to '\n'
#Reason bcos curl command only use '\n' for line break
cp docs/index.php dosc/index-curl.php
sed  's/\<br\>/\\n/g' docs/index-curl.php
