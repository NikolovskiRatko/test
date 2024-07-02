##  Run Development Environment

###  Prerequisites

1. Install Docker Compose and Git locally

###  Build Development Environment

1. In the root folder run:
```shell
docker-compose build
docker-compose up -d
```

###  Run PHP Application

1. Run the application using the PHP Docker container:
    ```shell
    docker exec -it php /bin/bash
    ```
2. Then the php container run the following command:
    ```shell
    php Main.php
   ```