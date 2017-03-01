##Getting started

1. Install docker
2. Replace `~/Dev/potluck2` with your directory of choice. These commands give write access for that directory to pid 33 (docker)
sudo chmod -R 770 ~/Dev/potluck2/public;sudo chgrp -R 33 ~/Dev/potluck2
sudo docker run -v ~/Dev/potluck2/public:/srv/http  --name lamp -p 80:80 -p 443:443 -d greyltc/lamp
3. Profit

to stop:
sudo docker stop lamp;sudo docker rm lamp