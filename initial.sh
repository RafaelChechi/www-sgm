


#rm -rf src/vendor/ src/composer.lock

docker rm -f www-sgm

docker build . --file "Dockerfile" --no-cache --tag www-sgm

docker run -d -p 80:80 --name www-sgm www-sgm

docker ps
docker exec -it --user root www-sgm bash