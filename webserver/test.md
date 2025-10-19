# To test the deployment on k8s, lets launch a test pod
kubectl run --name test-pod --image nicolaka/netshoot --command sleep 9999

# Lets grab service ip. First you would have already created service resources for the deployment.
kubectl get svc 

# Lets scale up the deployment
kubectl scale deployment apachewww --replica 3

# Now log into the test-pod and curl the web servers
kubectl exec -it test-pod -- sh
curl <service-ip>:8080

# Repeat the curl command and see the hostname rotate among pods
