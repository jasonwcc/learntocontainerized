20260805  Attempt to perform dnf update onto the ubi10/php-83 base image. Succeeded by switching to root then back to user id 1001. Able to deploy to k8s as well as podman But failed when deploy to ocp with following error msg - "user directive is ignored when FPM is not running as root". Finally decided to let RH to update the base. 

20260805  Started using redhat.com/ubi10/php-83
