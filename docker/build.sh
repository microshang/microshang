docker stop $(docker ps -a -q) && docker rm $(docker ps -a -q)
cd $(pwd)/../
docker-compose up --build -d