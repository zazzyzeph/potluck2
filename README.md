sudo chmod -R 770 ~/Dev/potluck2; sudo chgrp -R 33 ~/Dev/potluck2

sudo docker run -v ~/Dev/potluck2:/srv/http  --name lamp -p 80:80 -p 443:443 -d greyltc/lamp