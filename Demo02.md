

## DEMO 2 : Build Our First Container Image
- First : Write our own Dockerfile - containing instruction in building our own webserve
``` bash
vi Dockerfile
FROM docker.io/library/httpd
COPY index.html ./var/www/html/
CMD ["httpd", "-DFOREGROUND"]
```

- Run podman build and tag it to external registry quay.io
``` bash 
podman build -t quay.io/jason.wong76/webserver:latest 
```

- Verify it is built and store in local disk
``` bash 
podman images
```

- Upload it to quay.io
``` bash 
quayio_user=jason.wong76
read -s quayio_pw
podman push quay.io/jason.wong76/webserver:latest -u $quayio_user -p $quayio_pw
```

- Verify it from quay.io site
``` bash
skopeo inspect docker://quay.io/jason.wong76/webserver:latest
```
# Start the webserver container image on Azure Container Instances

# Start the webserver container image on Azure Container Instances

