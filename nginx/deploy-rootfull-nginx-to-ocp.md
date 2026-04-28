oc apply -f deploy-rootfull-nginx-to-ocp.yaml

# All pods should be in Running state
oc get pods,deployment,ep,svc -n demo-nginx

# Expose the svc
oc expose -n demo-nginx svc/nginxwww

# Get route / hostname
oc get -n demo-nginx route

curl nginxwww-demo-nginx.apps-crc.testing
