kubectl create deployment psql-dbserver --image docker.io/bitnami/postgresql:latest
sleep 300 # pause for 5 min to allow the pods to get in READY state before proceed

kubectl set env POSTGRESQL_PASSWORD=cangetin deployment psql-dbserver
#kubectl apply -f psql-svc.yaml
