Какие принципы SOLID нарушены в проектировании сервиса отправки уведомлений
- Я не эксперт в принципах solid, но мне кажется принцип разделения нарушен, т.е. можно обойтись без универсального класса.

Какие паттерны проектирования можно использовать, чтобы сделать сервис более гибким и
способным к легкому расширению способов рассылки
- Подойдет паттерн строитель, задать шаблон и от шаблона создать типы уведомлений.

Какие еще проблемы есть в этом коде
- Мне кажется не обязательно создавать классы в контроллере NotificationService, а можно сделать методы других классов статичными и обращаться к классу, а не к объекту.