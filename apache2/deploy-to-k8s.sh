kubectl create deployment apachewww --image quay.io/jason_wong76/webserver:apache-2.4.63
kubectl apply -f apachewww-svc.yaml
