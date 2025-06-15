kubectl create deployment nginxwww --image quay.io/jason_wong76/webserver:nginx-1.0
kubectl apply -f nginxwww-svc.yaml
