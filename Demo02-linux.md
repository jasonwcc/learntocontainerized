
## Pre-requisite
- Sign up with quay.io
- Some decent internet bandwidth
- Some decent local disk space (>= 1GiB)

## Build Our First Container Image
1. Create directory
``` bash
mkdir webserver
cd webserver
```

2. Customize our own web page
``` bash
vi index.html
Welcome to my Webserver 1.0<br>
This image is created by Jason<br>
Copyrighted (C)<br>
```

3. Write Containerfile - with instructions to build our own webserver
``` bash
vi Containerfile
FROM docker.io/library/httpd
COPY index.html ./var/www/html/
CMD ["httpd", "-DFOREGROUND"]
```

4. Run podman build and tag it to external registry quay.io
``` bash 
podman build -t quay.io/jason_wong76/webserver:latest 
```

5. Verify it is built and store in local disk
``` bash 
podman images
podman inspect webserver:latest
```

6. Test run the image
``` bash
podman run --name www1 -p 8888:80 -d webserver:latest
podman logs -l
curl http://localhost:8888
```

7. Stop the container and remove the container storage
``` bash
podman stop -l
podman rm -fl
podman ps -a
```

8. Upload it to quay.io
``` bash 
quayio_user=jason_wong76
read -s quayio_pw
podman push --creds $quayio_user:$quayio_pw quay.io/jason_wong76/webserver:latest 
```
- If cmd fails with error "authentication " , just retry the cmd. Sometimes internet connections lag, the authentication didn't go thru.

- Verify the image is upoloaded succesfully to quay.io registry
``` bash
skopeo inspect docker://quay.io/jason_wong76/webserver:latest
```
- Or open browser and point to https://quay.io/jason_wong76

9. Configure the repository in quay.io to be public accessible
- Log into quay.io
- Click on webserver repository
- Click gear icon ![image](image/gear_icon) to get into Settings
- 
# Start the webserver container image on Azure Container Instances

# Start the webserver container image on Azure Container Instances
