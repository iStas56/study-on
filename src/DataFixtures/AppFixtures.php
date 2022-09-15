<?php

namespace App\DataFixtures;

use App\Entity\Course;
use App\Entity\Lesson;
use App\Repository\CourseRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    protected $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function load(ObjectManager $manager): void
    {

        $pythonCourse = new Course();
        $pythonCourse->setCode('python')
            ->setTitle('Курс «Python-разработчик»')
            ->setDescription('Программа курса по Python-разработке');

        $manager->persist($pythonCourse);

        $lessonOne = new Lesson();
        $lessonOne->setCourse($pythonCourse)
            ->setTitle('Основы Python: бесплатный вводный курс')
            ->setContent('Во вводном курсе вы почувствуете себя в роли бэкенд-разработчика на Python. Это поможет вам понять, хотите ли вы развиваться в этом направлении. Вы узнаете, что такое бэкенд и какие задачи он решает, исследуете серверную часть приложения и поймёте, как она взаимодействует с пользователями и другими серверами. И самое главное — самостоятельно напишете код на языке Python, который будет делать то, что вы задумали')
            ->setOrderNumber(100);

        $manager->persist($lessonOne);

        $lessonTwo = new Lesson();
        $lessonTwo->setCourse($pythonCourse)
            ->setTitle('Бэкенд на Django')
            ->setContent('На курсе вы будете работать с веб-фреймворком Django, программным «конструктором» для создания веб-проектов. Вы научитесь:
– обрабатывать HTTP-запросы,
– подключать к приложению базу данных,
– создавать веб-страницы,
– писать автоматические тесты для своих программ.
В каждом уроке есть практические задания, часть из которых вы будете выполнять не в тренажёре, а на своём компьютере. Для этого вы развернёте среду разработки. Кроме того, вы подключите к одному из проектов систему контроля версий Git и поработаете в командной строке. Главный результат прохождения курса — два полноценных проекта для вашего портфоли')
            ->setOrderNumber(90);

        $manager->persist($lessonTwo);

        $lessonThree = new Lesson();
        $lessonThree->setCourse($pythonCourse)
            ->setTitle('Алгоритмы и структуры данных')
            ->setContent('Любую задачу можно решить медленно и неэффективно, а можно — быстро и экономно. Неэффективное программное решение может впустую занять все вычислительные ресурсы сервера и замедлить его работу. Изучение алгоритмов поможет избежать подобных ошибок и ускорить работу программ. Вы научитесь проектировать решения для разгрузки системы — это позволит вашим проектам работать эффективнее.')
            ->setOrderNumber(80);

        $manager->persist($lessonThree);




        $englishCourse = new Course();
        $englishCourse->setCode('english')
            ->setTitle('Английский язык')
            ->setDescription('Курсы английского языка онлайн под ваши цели Источник - Школа английского языка Skyeng: https://skyeng.ru/programs/');

        $manager->persist($englishCourse);

        $englishLessOne = new Lesson();
        $englishLessOne->setCourse($englishCourse)
            ->setTitle('Грамматика')
            ->setContent('Present Simple (настоящее простое время) употребляется для описания действий, которые происходят регулярно. Используйте Present Simple, чтобы рассказать о фактах из своей жизни, о тех действиях, которые повторяются.
Обстоятельства времени, которые подскажут как часто действие повторяется.
every day-  каждый день
always- всегда  
often- часто  
usually- обычно  
sometimes – иногда
never - никогда')
            ->setOrderNumber(100);

        $manager->persist($englishLessOne);

        $englishLessTwo = new Lesson();
        $englishLessTwo->setCourse($englishCourse)
            ->setTitle('Лексика')
            ->setContent('Прочитайте интересные факты о прошлом.
Britain was part of the Roman Empire for almost 400 years! – Британия была частью Римской империи на протяжении почти 400 лет.
The first Olympic Games were for men only. – Первые Олимпийские игры были только для мужчин.
Walt Disney was scared of mice. – Уолт Дисней боялся мышей.
Coca cola was originally green. – Изначально Кока-Кола была зеленой.
Как видно из примеров, в прошедшем времени глагол to be имеет две формы (рис. 2):')
            ->setOrderNumber(90);

        $manager->persist($englishLessTwo);

        $englishLessThree = new Lesson();
        $englishLessThree->setCourse($englishCourse)
            ->setTitle('Произношение')
            ->setContent('- Fourteen bones make up the human face. Человеческое лицо состоит из 14 костей.
- There are nine muscles in your ear. В вашем ухе 9 мускулов.
- Our teeth start growing 6 months before you are born. Наши зубы начинают расти за 6 месяцев до нашего рождения.
- Your nose can remember 50,000 different scents. Ваш нос может запомнить 50 000 различных запахов.
- Babies are always born with blue eyes.  Дети всегда рождаются с голубыми глазами.
Вы видите слова, которые обозначают части человеческого тела: face, ear, teeth, nose, eyes.')
            ->setOrderNumber(80);

        $manager->persist($englishLessThree);


        $php = new Course();

        $php->setCode('php')
            ->setTitle('PHP-разработчик')
            ->setDescription('PHP входит в десятку самых популярных языков программирования в рейтинге TIOBE. На нём написано большинство CMS, в том числе и WordPress, на котором работает 65% всех сайтов в мире. PHP под капотом у Wikipedia, ВКонтакте, Фейсбук* и YouTube. Разработчики развивают язык уже более 25 лет и внедряют новые возможности с каждой версией.');

        $manager->persist($php);

        $lessonPHPOne = new Lesson();
        $lessonPHPOne->setCourse($php)
            ->setTitle('Введение в программирование на PHP')
            ->setContent('Вы узнаете, для чего нужен язык PHP, что такое веб-приложение, в чём разница между frontend и backend, научитесь устанавливать IDE и окружение для запуска PHP-файлов и запускать их как в браузере, так и в командной строке')
            ->setOrderNumber(90);

        $manager->persist($lessonPHPOne);

        $lessonPHPThree = new Lesson();
        $lessonPHPThree->setCourse($php)
            ->setTitle('Переменные, числа и boolean')
            ->setContent('Познакомитесь с переменными и типами данных, целыми числами и числами с плавающей точкой. Научитесь сравнивать числа и пользоваться операторами арифметических операций.')
            ->setOrderNumber(80);

        $manager->persist($lessonPHPThree);


        $manager->flush();
    }
}
