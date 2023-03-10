# Учебный проект на Laravel
## 

### Конфигурация:

- Laravel Framework 9.0
- PHP 8.1
- PostgreSQL 12
- Orchid Software (Админ-панель)

### Описание проекта


Проект представляет собой образовательную платформу, в которой реализуется несколько ролей пользователей. Основной функционал платформы заключается в том, что пользователь с ролью владелец курса сможет с помощью системой загружать отдельные фрагменты неких уроков и заданий в определенной предметной области в виде фрагментов медиадокументов, и потом собирать их в урок с помощью пошагового конструктора.

### Особенности проекта
- На платформе реализована авторизация/регистрация по схеме Oauth 2.0 через Laravel Passport
- Представлено 3 роли:
    - Ученик
    - Учитель
    - Администратор
- Связь с front-end частью реализована через REST API. Документация API-точек доступна по [ссылке](https://documenter.getpostman.com/view/17572705/VUqptda7#d25e05d6-7a1e-464d-8a70-1c54b90e37e4)
- Для администрирования была подключена и настроена admin-панель [Orchid](https://orchid.software/)

### Материалы для ознакомления по проекту
- [Документация по API-точкам](https://documenter.getpostman.com/view/17572705/VUqptda7)
- [Макет front-end части](https://www.figma.com/file/Z07ZlaMQpKG9bC5JUh4Bn0/Youngeek?node-id=909:1233)
- [Схема базы данных](https://drive.google.com/file/d/1JmkinSEE3QM5wf17LikMPA7cKMPM-SQ3/view?usp=sharing)
