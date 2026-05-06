# Deals with security first
oc adm add-scc-to-user anyuid -z default -n demo01
oc adm add-scc-to-user anyuid -z deployer -n demo01

# Deploy latest version
kubectl create deployment apachewww --image quay.io/jason_wong76/webserver:latest
kubectl apply -f apachewww-svc.yaml
#
# Deploy specific version
kubectl create deployment apachewww --image quay.io/jason_wong76/webserver:apache-2.4.63
kubectl apply -f apachewww-svc.yaml
