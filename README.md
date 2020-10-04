# API to generate random number

## Разворачивание проекта

### Подготовка файлов 

 1. copy './.env.example -> .env'; 
 2. copy '.docker/.env.example -> .docker/.env';
 3. cd .docker, run terminal command 'docker-compose up -d --build'
 
 Дать права 777 для папки storage:
```
sudo chmod 777 -R ./storage
```
 
 ### Настройка laravel приложения
 
 1. Получить ID контейнера через 'docker ps'
 2. Перейти в контейнер 'docker exec -it <container_id> bash'
 
 Ввести команды:
```
composer install
php artisan key:generate
php artisan migrate 
```
 
 
 
 ### Проект развернут!
 
 ## Документация к api
 
 ### GET api/random-number/generate
 Генерирует случайное число в диапозоне от 0 до 2147483647
 
 Ответ:
 ```
{
    "item": {
        "id",
        "number",
        "created_at",
        "updated_at"
    },
    "success": (bool),
    "error": (bool)
 }
```

### GET api/random-number/generate/{id}
 Возвращает сгенерированное случайное число по id
 
 Ответ:
  ```
 {
     "item": {
         "id",
         "number",
         "created_at",
         "updated_at"
     },
     "success": (bool),
     "error": (bool)
  }
 ```


 
 
 
