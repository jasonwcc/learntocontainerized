# Create network 
podman network create app-tier --driver bridge

# Launch an instance using postgreSQL container image
podman run --name psql-server --network app-tier -e POSTGRESQL_PASSWORD=cangetin -d docker.io/bitnami/postgresql:latest

# Launch another instance as client
podman run -it --rm --network app-tier docker.io/bitnami/postgresql:latest psql -h psql-server -U postgres

# when prompted for password: <enter cangetin>

# Subsequently you can create DB > Table, then insert rows
