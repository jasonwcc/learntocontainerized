kubectl create deployment www1 --image quay.io/jason_wong76/webserver:nginx-1.0
kubectl apply -f httpdwww-svc.yaml
