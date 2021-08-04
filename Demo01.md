## DEMO 1 : Search and download a web server container image from docker.io
- Search and download httpd
``` bash
docker search httpd

docker pull docker.io/library/httpd
```

- Verify its downlaoded
``` bash
docker images

docker inspect httpd:latest
```

- Start first container from the httpd image
``` bash
docker run --name www1 -p 8080:80 -d httpd
```

- Verify the container is running
``` bash
docker ps

```

- Let'ssurf to our very own web server
``` bash
curl http://localhost:8080
```

- Or simply open up a browser and point to http://localhost:8080

- Start second container from the same httpd image but this time we want to change the web page content
``` bash
docker run --name www2 -p 8081:80 -d httpd
```

- Verify there are 2 web servers running
``` bash
docker ps 
```

- Check the www2's logs for any message
``` bash
docker logs www2
```

- Connect to www2 with a interactive terminal shell 
``` bash
docker exec -it www2 /bin/bash
```

- You should see the prompt
![image](images/www2_shell.png)






















