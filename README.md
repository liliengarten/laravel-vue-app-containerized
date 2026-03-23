<h1>Инструкции по запуску</h1>

**Перед запуском убедитесь в том, что у вас установлены:**
- **[Docker](https://docs.docker.com/engine/install/)**
- **[Docker Compose](https://docs.docker.com/compose/install/)**
- **[Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)**

Для первого запуска скопируйте в терминал следующее:
```shell
git clone https://github.com/liliengarten/laravel-vue-app-containerized
cd laravel-vue-app-containerized/deploy/dev | laravel-vue-app-containerized/deploy/prod (в зависимости от нужной сборки) 
docker compose up -d --build
```
Для всех последующих запусков достаточно скопировать в терминал следующее:
```shell
cd laravel-vue-app-containerized/deploy/dev | laravel-vue-app-containerized/deploy/prod (в зависимости от нужной сборки) 
docker compose up
```
