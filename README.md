# EVO DOCKER

### Установка Evolution CMS CE

В папке `./src` разверните проект с помощью `composer create-project evocms/evolution`
Или просто распакуйте архив вашей установки.

---

### Запуск Docker

В папке проекта где находится `docker.compose.yml` выполните следующую команду:
`docker-compose up -d`
После выполнения команды ваш сайт будет доступен по адресу `http://localhost:80`
**PhpMyAdmin** будет доступен по адресу `http://localhost:8080`

---

### Остановка Docker

Для того что бы остановить работу контейнеров выполните следующую команду:
`docker-compose down`
