##Getting started

1. Install docker
2. Replace `~/Dev/potluck2` with your web root directory of choice. These commands give write access for that directory to pid 33 (docker)
`sudo chmod -R 770 ~/Dev/potluck2/public;sudo chgrp -R 33 ~/Dev/potluck2`
`sudo docker run -v ~/Dev/potluck2/public:/srv/http  --name lamp -p 80:80 -p 443:443 -d greyltc/lamp`
3. Run Bash in MySQL container - `docker exec -it lamp bash`
4. `mysql -u root`
5. `CREATE USER 'zazzy'@'localhost' IDENTIFIED BY 'garbageboy';`
6. `quit`
7. `mysql -u root potluckdb < file.sql`
8. `quit`
9. Profit.


`sudo docker stop/start/restart lamp`


###Notes:

Windows: install Babun, then https://github.com/tiangolo/babun-docker

install that, run `docker ps`, then run anything else.

Windows doesn't do ~/ locations for mounting volumes in docker in babun. Root relative only (/c/Users/...).


