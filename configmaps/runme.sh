kubectl apply -f dep.yaml
kubectl apply -f index-configmap.yaml

# Test access index.html
kubectl exec -in moon web-moon-6b568ddfd9-pgdlx -- curl -m 1 localhost
kubectl get -n moon pods,deployment,cm,svc
