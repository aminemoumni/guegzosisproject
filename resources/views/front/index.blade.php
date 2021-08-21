<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScriptn, Portfolio, Developer, FullStack, NodeJs, Express, Sass, Laravel, Symfony">
    <meta name="author" content="Amine Moumni">
    <meta name="Description" CONTENT="A Portfolio of the full stack developer Amine Moumni">
    <script src="{{asset('js/jquery.js')}}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicons/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('images/favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
    <link rel="shortcut icon" href="{{asset('images/favicons/favicon.ico')}}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{asset('images/favicons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    
    <title>Guegzosis</title>
</head>
<body class="">
    <div id="app">
    <header class="">
        <nav class="nav">
            <div class="row nav__container">
                <h4 class="nav__logo"><a style="color: inherit;text-decoration: none;" href="#app">Guegzosis</a></h4>

                <div class="nav__items ">
                    <ul class="nav__menu">
                        <li class="nav__menu-items"><a href="#about" class="nav__menu-item">{{__('About')}}</a></li>
                        <li class="nav__menu-items"><a href="#skills" class="nav__menu-item">{{__('Skills')}}</a></li>
                        <li class="nav__menu-items"><a href="#experience" class="nav__menu-item">{{__('Experiences')}}</a></li>
                        <li class="nav__menu-items"><a href="#contact" class="nav__menu-item">{{__('Contact')}}</a></li>
                        
                    </ul>
                    <a href="https://www.instagram.com/guegzosis/" target="_blank" class="nav__btn">Direct me</a>
                </div>

                <div class="hamburger js--nav-icon">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="language">
                @if(Config::get('app.locale') == 'en')
                    <a href="{{ route(Route::currentRouteName(), 'fr')}}">
                        <i class="flag-icon flag-icon-fr"></i>
                    </a> 
                @else
                    <a href="{{ route(Route::currentRouteName(), 'en')}}">
                        <i class="flag-icon flag-icon-us"></i>
                    </a>
                @endif

            </div>
        </nav>
        <div class="social">
            <ul class="socialmedia">
                <li><a class="socialmedia__git" href="https://github.com/aminemoumni" target="_blank"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                <li><a class="socialmedia__face" href="https://www.facebook.com/child.eroe" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li><a class="socialmedia__insta"href="https://www.instagram.com/guegzosis" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a class="socialmedia__whatsapp"href="https://api.whatsapp.com/send?phone=+212707129806" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
        <div class="intro">
            <h1 class="intro__heading">
                {{__('Hello, I\'m')}} <span class="intro__heading-name">Amine Moumni</span> . <br>
                {{__('I\'m a Full Stack Web Developer')}}.
            </h1>
        </div>

        <!-- <div>
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </div> -->
    </header>

    <section class="about" id="about">
        <div class="about__container row">
            <h2 class="about__title text-secondary">
                {{__('Get To Know Me Better')}}
            </h2>
            <div class="about__photo">
                <figure class="about__photo--pic">
                    <img src="./images/me.jpg" alt="" class="about__photo--pic--picture">
                    <figcaption>Amine Moumni</figcaption>
                </figure>
                <h4 class="about__photo--text">
                    {{__('Im a')}} <span class="typedone"></span> {{__('web developer')}}
                </h4>
            </div>
            <p class="about__paraghraph">
                <span>
                    {{__('I graduated from Multimedia Development at Ofppt Rabat in June 2019. I have a specialized technician diploma.')}}
                </span>
                <span>
                    {{__('I am now working as a web developer in a company in Rabat, we are fifteen developers with multiservice in the IT system department, I’m the Chief of University Solution Service, I have a small team, two other developers we are building applications for the University, and repairing and adding new features on existing projects. My main framework is Symfony (3.4, 4 and 5), there are other projects that run in Php Native.')}}
                </span>
                <span>
                    {{__('During my free time I buy new courses on udemy to learn new technologies, or I build my own projects with other frameworks like Laravel Full Stack, or APIs with Node Js')}}
                </span>
                <span>{{__('You can download my resume here below. for more details')}} <i class="fa fa-heart" aria-hidden="true"></i>.</span> 
                
            </p>
            <div class="btn__container">
                <a href="
                @if(Config::get('app.locale') == 'en')
                ./pdf/aminemoumni_en.pdf
                @else
                ./pdf/aminemoumni_fr.pdf
                @endif
                " class="btn btn-white" download><i class="fas fa-arrow-circle-down"></i> {{__('Download')}}</a>
            </div>
        </div>
    </section>
   

<!-- <div class="cc" id="skills"> -->
    <section class="competences__section row cc" id="skills">
        <h2 class="text-secondary">{{__('Skills')}}</h2>
        <div class="competences">
            <div class="competences__frontend">
                <h3 class="competences__frontend--title">
                    <span>
                        Frontend 
                    </span> 
                </h3>
                <div class="competences__frontend--containe">
                    <div class="item">
                        <div class="item-percent">
                            <h3>HTML5, CSS3 (Flex, Grid, Animations)</h3>
                            <p id="percent">80%</p>
                        </div>
                        <div class="item-bare w-80">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>UI/UX</h3>
                            <p id="percent">60%</p>
                        </div>
                        <div class="item-bare w-60">
                        </div>
                    </div>
                    <!-- <div class="item">
                        <div class="item-percent">
                            <h3>SASS</h3>
                            <p id="percent">80%</p>
                        </div>
                        <div class="item-bare w-80">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>Bootstrap 4</h3>
                            <p id="percent">75%</p>
                        </div>
                        <div class="item-bare w-75">
                        </div>
                    </div> -->
                    <div class="item">
                        <div class="item-percent">
                            <h3>JavaScript ES6, jQuery</h3>
                            <p id="percent">75%</p>
                        </div>
                        <div class="item-bare w-75">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>SASS, Bootstrap 4</h3>
                            <p id="percent">80%</p>
                        </div>
                        <div class="item-bare w-80">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>Vue Js (Vue CLI, VueX, Vue-Router, Vuetify, Axios)</h3>
                            <p id="percent">70%</p>
                        </div>
                        <div class="item-bare w-70">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>NodeJs as a node package manager</h3>
                            <p id="percent">75%</p>
                        </div>
                        <div class="item-bare w-75">
                        </div>
                    </div>
                </div>
            </div>
            <div class="competences__frontend">
                <h3 class="competences__frontend--title">
                    <span>
                        Backend 
                    </span> 
                </h3>
                <div class="competences__frontend--containe">
                    <div class="item">
                        <div class="item-percent">
                            <h3>PHP</h3>
                            <p id="percent">85%</p>
                        </div>
                        <div class="item-bare w-85">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>SQL (MySQL, SQL Server)</h3>
                            <p id="percent">70%</p>
                        </div>
                        <div class="item-bare w-70">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>NoSQL (MongoDB)</h3>
                            <p id="percent">70%</p>
                        </div>
                        <div class="item-bare w-70">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>Laravel, SPA(Laravel, Vuejs, Inertia, Jetstream)</h3>
                            <p id="percent">70%</p>
                        </div>
                        <div class="item-bare w-80">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>Symfony</h3>
                            <p id="percent">90%</p>
                        </div>
                        <div class="item-bare w-90">
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="item-percent">
                            <h3>Node Js, Express Js, REST APIs, GraphQL </h3>
                            <p id="percent">60%</p>
                        </div>
                        <div class="item-bare w-60">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section class="experience" id="experience">
        <div class="experience__container row">
            <h2 class="experience__title text-secondary">
                {{__('Experiences')}}
            </h2>
            <div class="experience__items">
                <div class="experience__item">
                    <div class="experience__item-head">
                        <p class="experience__item-profile"><i class="fas fa-user"></i> {{__('Internship')}} (IHM-TECHNOLOGIES)</p>
                        <p class="experience__item-date"> <i class="fas fa-calendar-alt"></i>{{__('From')}} Feb {{__('To')}} Mar 2019 </p>
                    </div>
                    <div class="experience__item-body">
                            <p>{{__('It was my first experience in building web applications. In this internship I created an application that manages all the program licenses. I used for the backend php native, for the frontend html bootstrap and js.')}}</p>
                            <h4>{{__('For the main features')}}:</h4>
                            <span><i class="fas fa-chevron-up"></i> {{__('Manage the licenses companies')}}.</span>
                            <span> <i class="fas fa-chevron-up"></i> {{__('Manage support contacts')}}.</span>
                            <span><i class="fas fa-chevron-up"></i> {{__('Manage users')}}.</span> 
                            <span><i class="fas fa-chevron-up"></i> {{__('Send emails when the licenses close to expiry date')}}.</span>
                    </div>
                </div>
                <div class="experience__item">
                    <div class="experience__item-head">
                        <p class="experience__item-profile"><i class="fas fa-user"></i> {{__('Internship')}} (Fondation Cheikh Zaid) </p>
                        <p class="experience__item-date"> <i class="fas fa-calendar-alt"></i>{{__('From')}} Sep {{__('To')}} Nov 2020 </p>
                    </div>
                    <div class="experience__item-body">
                        <p>
                            {{__('I had the main application the university use for manage students, inscriptions, notes, payments, diplomes, planifications of the courses  teachers and more,  it work with php native')}}.
                        </p>
                        <h4>{{__('My work as a developer')}}:</h4>
                        <span><i class="fas fa-chevron-up"></i> {{__('Add new features')}}.</span>
                        <span> <i class="fas fa-chevron-up"></i> {{__('Fix bugs')}}.</span>
                        <span><i class="fas fa-chevron-up"></i> {{__('Read the code source and understand how it works')}}.</span> 
                        <span><i class="fas fa-chevron-up"></i> {{__('And more...')}}.</span> 
                        
                    </div>
                </div>
                <div class="experience__item">
                    <div class="experience__item-head">
                        <p class="experience__item-profile"><i class="fas fa-user"></i> {{__('Developer')}} (Fondation Cheikh Zaid) </p>
                        <p class="experience__item-date"> <i class="fas fa-calendar-alt"></i>{{__('From')}} Nov 2020 {{__('To')}} Jun 2021 </p>
                    </div>
                    <div class="experience__item-body">
                        <p>
                            {{__('At the beginning of November I received my contract to start working seriously, they gave me two other web applications')}}.<br>
                            {{__('the first an application (Symfony 3.4) that allows students to connect is to fill in the internship reports that do it at the hospital and at the end of each month the admin can download all the reports.')}}<br>
                            {{__('The second application (Symfony 4.0) was a website for students to review all the courses they missed, view grades, and submit reclamations.')}}
                        </p>
                        <h4>{{__('My work as a developer')}}:</h4>
                        <span><i class="fas fa-chevron-up"></i> <p>{{__('Add new features')}}.</p></span>
                        <span><i class="fas fa-chevron-up"></i> <p>{{__('Change the ux of the interfaces')}}.</p></span>
                        <span><i class="fas fa-chevron-up"></i> <p>{{__('Add possibility the download reports')}}.</p></span>
                        <span> <i class="fas fa-chevron-up"></i> <p>{{__('Fix bugs')}}.</p></span>
                        <span><i class="fas fa-chevron-up"></i> <p>{{__('Read the code source and understand how it works')}}.</p></span> 
                        <span><i class="fas fa-chevron-up"></i> <p>{{__('And more...')}}.</p></span> 
                    </div>
                </div>
                <div class="experience__item">
                    <div class="experience__item-head">
                        <p class="experience__item-profile"><i class="fas fa-user"></i> {{__('Chief Service')}} (Fondation Cheikh Zaid) </p>
                        <p class="experience__item-date"> <i class="fas fa-calendar-alt"></i>{{__('From')}} Jun 2021 </p>
                    </div>
                    <div class="experience__item-body">
                        <p>
                            {{__('At the beginning of June I became chief service of the university solution with one more application (Symfony 4.0) which was only 50% built and I continue construction. This is my fourth web application in total, the application allows students of all training to access and prepare for the exam through a multiple choice system with correction at the end and they can also take exams online or take tests. the application had three main interfaces first one for the team that manages all the questions, one for the teachers they can get pdf extractions and add the correction for these questions, and the main part the students who have interfaces for history, exams, preparation, and mock exams')}}.
                        </p>
                        <div>
                            <h4>{{__('My work as a developer')}}:</h4>
                            <span><i class="fas fa-chevron-up"></i> {{__('Add new features')}}.</span>
                            <span> <i class="fas fa-chevron-up"></i> {{__('Fix bugs')}}.</span>
                            <span><i class="fas fa-chevron-up"></i> {{__('Read the code source and understand how it works')}}.</span> 
                            <span><i class="fas fa-chevron-up"></i> {{__('Mentor and train symfony to my new team')}}.</span>
                            <span><i class="fas fa-chevron-up"></i> {{__('Upgrade the second application from Symfony 3.4 to Symfony 5.3')}}.</span>
                            <span><i class="fas fa-chevron-up"></i> {{__('Upgrade the fourth application from Symfony 4.0 to Symfony 5.3')}}.</span>
                            <span><i class="fas fa-chevron-up"></i> {{__('And more...')}}.</span> 
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<!-- </div> -->

<section class="contact" id="contact">
    <div class="row">
        <h2 class="text-secondary">{{__('get in touch with us')}}</h2>
        <div class="contact__container">
            <div class="contact__form">
                <h4 class="text-fourth">{{__('Send Happiness')}}</h4>
                <form class="form">
                    <div class="form__div">
                        <input type="text" v-model.lazy="name" @change="validateName" placeholder=" " id="name" name="name" class="form__input" :class="{'errorinput': errors.name}">
                        <label for="name" class="form__label" id="namelabel">{{__('Full Name')}}</label>
                        <p style="
                            font-size:1.4rem;
                            padding-left:1rem;
                            color:red
                        " v-if="errors.name"
                        >@{{errors.name[0]}}</p>
                    </div>
                    <div class="form__div">
                        <input type="text" v-model.lazy="object" @change="validateObject" placeholder=" " id="object" name="object" class="form__input" :class="{'errorinput': errors.object}"> <!--successinput // errorinput-->
                        <label for="object" class="form__label" id="objectlabel">{{__('Object')}}</label> <!--successlabel // errorlabel-->
                        <p style="
                            font-size:1.4rem;
                            padding-left:1rem;
                            color:red
                        " v-if="errors.object"
                        >@{{errors.object[0]}}</p>
                    </div>
                    <div class="form__div">
                        <input type="email" v-model.lazy="email" @change="validateEmail" placeholder=" " id="email" name="email" class="form__input" :class="{'errorinput': errors.email}">
                        <label for="email" class="form__label" id="emaillabel">Email</label>
                        <p style="
                            font-size:1.4rem;
                            padding-left:1rem;
                            color:red
                        " v-if="errors.email"
                        >@{{errors.email[0]}}</p>
                    </div>

                    <div class="form__div">
                        <textarea v-model.lazy="message" @change="validateMessage" class="form__input textarea" :class="{'errorinput': errors.message}" id="message" name="message" placeholder=" " cols="30" rows="5"></textarea>
                        <label for="message" class="form__label" id="messagelabel">Message</label>
                        <p style="
                            font-size:1.4rem;
                            padding-left:1rem;
                            color:red
                        " v-if="errors.message"
                        >@{{errors.message[0]}}</p>
                    </div>
                    <button style="min-width: 50%;" class="btn btn-white"  @click.prevent="submitForm">
                        <span v-if="btntitle=='icon'">
                            <i style="

                            " class="fas fa-spinner"></i>
                        </span> 
                        <span v-else-if="btntitle=='Thank you!'">
                            {{__('Thank you')}} !
                        </span> 
                        <span v-else>
                            {{__('Send')}}
                        </span>
                    </button>
                </form>
            </div>
            <div class="contact__img">
                <div class="contact__img-image">
                    <img src="./images/contact1.jpg" alt="" class="contact__img-image-img">
                </div>
            </div>
        </div>
    </div>
</section>


    <footer class="footer">
        <div class="row">
            <h4 class="nav__logo" style="text-align: center;">Guegzosis</h4>
            <div class="footer__container">
                <div class="footer__container--social">
                    <p>{{__('My Social Media')}}</p>

                    <ul class="footer__container--socialmedia">
                        <li><a class="footer__container--socialmedia__git" href="https://github.com/aminemoumni" target="_blank"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                        <li><a class="footer__container--socialmedia__face" href="https://www.facebook.com/child.eroe/" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a class="footer__container--socialmedia__insta"href="https://www.instagram.com/guegzosis/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="footer__container--socialmedia__whatsapp" href="https://api.whatsapp.com/send?phone=+212707129806" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="footer__container--adress">
                    <p>{{__('My Address')}}</p>
                    <span>
                        <i class="fas fa-map-marker-alt"></i> 365 LOT EL KOURA, RABAT 10140
                    </span>
                </div>
            </div>
            <p class="footer__copyright">
                Copyright &copy; 2020. {{__('Made with')}} <i class="fa fa-heart" aria-hidden="true"></i> {{__('by')}} Moumni Amine.
            </p>
        </div>
    </footer>








    @if($valide)
    <div class="overlay-back"></div>
    <div class="model">
        <div class="model__container">
            <i class="fas fa-times"></i>
            <div class="model__container--logo">
                <img src="./images/logoGR.png" alt="" class="model__container--logo-img">
            </div>
            <div class="model__container--form">
                <h3 id="modelh3"></h3>
                
                <form action="#">
                    <input type="text" placeholder="Enter your name"><br>
                    <input type="email" placeholder="Enter your email"><br>
                    <button class="btn btn-white">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    @endif
    
    <div id="modelHacker" class="model" v-if="hacker">
        <div class="model__container">
            <i id="times" class="fas fa-times" @click="hacker = ''"></i>
            <div class="model__container--logo">
                <img src="./images/logoGR.png" alt="" class="model__container--logo-img">
            </div>
            <div class="model__container--form">
                <h2>@{{hacker}}</h2>
            </div>
        </div>
    </div>

    <div class="loading-overlay">
        <div class="loading-overlay__title">
                <svg id="logo" class="loading-overlay__logo" width="875" height="135" viewBox="0 0 875 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-outside-1" maskUnits="userSpaceOnUse" x="0.29599" y="-7.62939e-06" width="875" height="135" fill="black">
                    <rect fill="white" x="0.29599" y="-7.62939e-06" width="875" height="135"/>
                    <path d="M35.392 129.416C31.84 129.416 28.72 129.128 26.032 128.552C23.344 127.976 20.992 126.584 18.976 124.376C17.056 122.168 16.096 118.76 16.096 114.152C16.096 107.72 18.016 99.08 21.856 88.232C25.792 77.384 30.928 66.488 37.264 55.544C32.464 55.832 28.672 56.552 25.888 57.704C23.104 58.856 21.28 60.632 20.416 63.032C20.8 63.032 21.184 63.512 21.568 64.472C22.048 65.432 22.288 66.44 22.288 67.496C22.288 69.224 21.52 70.616 19.984 71.672C18.448 72.632 16.528 73.112 14.224 73.112C11.536 73.112 9.37599 72.392 7.74399 70.952C6.11199 69.512 5.29599 67.448 5.29599 64.76C5.29599 61.496 6.54399 58.52 9.03999 55.832C11.632 53.144 15.184 51.032 19.696 49.496C24.208 47.864 29.2 47.048 34.672 47.048C36.688 47.048 39.184 47.192 42.16 47.48C50.032 35 58.336 24.824 67.072 16.952C75.904 8.98399 84.304 4.99999 92.272 4.99999C96.88 4.99999 100.672 5.67199 103.648 7.01599L81.04 113H60.304L71.392 60.728C67.84 59.096 64.576 57.896 61.6 57.128C58.624 56.36 55.456 55.832 52.096 55.544C46.624 67.352 42.112 79.448 38.56 91.832C35.104 104.12 33.376 113.96 33.376 121.352C33.376 125 34.048 127.688 35.392 129.416ZM81.04 15.224C76.912 17.432 72.592 21.56 68.08 27.608C63.664 33.56 59.344 40.808 55.12 49.352C62.032 50.696 67.888 52.376 72.688 54.392L81.04 15.224Z"/>
                    <path d="M187.739 113.864C181.883 113.864 177.563 112.328 174.779 109.256C172.091 106.088 170.747 102.2 170.747 97.592C170.747 95.576 170.987 93.32 171.467 90.824C171.947 88.232 172.427 85.736 172.907 83.336C173.483 80.936 173.867 79.4 174.059 78.728C174.827 75.368 175.547 72.056 176.219 68.792C176.891 65.528 177.227 62.888 177.227 60.872C177.227 55.976 175.499 53.528 172.043 53.528C169.547 53.528 167.339 54.776 165.419 57.272C163.499 59.672 161.963 62.84 160.811 66.776L151.019 113H130.283L140.795 63.32C141.083 62.168 141.227 60.968 141.227 59.72C141.227 55.496 139.787 53.384 136.907 53.384C134.219 53.384 131.867 54.632 129.851 57.128C127.931 59.528 126.395 62.744 125.243 66.776L115.451 113H94.7155L109.979 41H130.715L129.131 48.488C134.027 43.016 139.883 40.28 146.699 40.28C155.147 40.28 160.091 44.408 161.531 52.664C166.811 44.504 173.483 40.424 181.547 40.424C186.443 40.424 190.331 41.768 193.211 44.456C196.091 47.144 197.531 51.224 197.531 56.696C197.531 59.48 197.195 62.6 196.523 66.056C195.851 69.416 194.891 73.544 193.643 78.44C192.875 81.416 192.155 84.344 191.483 87.224C190.907 90.008 190.619 92.216 190.619 93.848C190.619 95.768 191.051 97.256 191.915 98.312C192.779 99.368 194.267 99.896 196.379 99.896C199.259 99.896 201.563 98.888 203.291 96.872C205.019 94.76 206.747 91.544 208.475 87.224H214.523C210.971 97.784 206.843 104.888 202.139 108.536C197.531 112.088 192.731 113.864 187.739 113.864Z"/>
                    <path d="M232.517 33.224C229.349 33.224 226.661 32.12 224.453 29.912C222.245 27.704 221.141 25.016 221.141 21.848C221.141 18.68 222.245 15.992 224.453 13.784C226.661 11.48 229.349 10.328 232.517 10.328C235.685 10.328 238.373 11.48 240.581 13.784C242.885 15.992 244.037 18.68 244.037 21.848C244.037 25.016 242.885 27.704 240.581 29.912C238.373 32.12 235.685 33.224 232.517 33.224ZM222.725 113.864C218.117 113.864 214.373 112.424 211.493 109.544C208.709 106.664 207.317 102.344 207.317 96.584C207.317 94.184 207.701 91.064 208.469 87.224L218.261 41H238.997L228.629 89.96C228.245 91.4 228.053 92.936 228.053 94.568C228.053 96.488 228.485 97.88 229.349 98.744C230.309 99.512 231.845 99.896 233.957 99.896C236.741 99.896 239.333 98.744 241.733 96.44C244.133 94.04 245.861 90.968 246.917 87.224H252.965C249.413 97.592 244.853 104.648 239.285 108.392C233.717 112.04 228.197 113.864 222.725 113.864Z"/>
                    <path d="M298.843 113.864C292.987 113.864 288.667 112.328 285.883 109.256C283.195 106.088 281.851 102.2 281.851 97.592C281.851 95.576 282.091 93.32 282.571 90.824C283.051 88.232 283.531 85.736 284.011 83.336C284.587 80.936 284.971 79.4 285.163 78.728C285.931 75.368 286.651 72.056 287.323 68.792C287.995 65.528 288.331 62.888 288.331 60.872C288.331 55.976 286.603 53.528 283.147 53.528C280.651 53.528 278.443 54.776 276.523 57.272C274.603 59.672 273.067 62.84 271.915 66.776L262.123 113H241.387L256.651 41H277.387L275.803 48.488C280.603 43.112 286.219 40.424 292.651 40.424C297.547 40.424 301.435 41.768 304.315 44.456C307.195 47.144 308.635 51.224 308.635 56.696C308.635 59.48 308.299 62.6 307.627 66.056C306.955 69.416 305.995 73.544 304.747 78.44C303.979 81.416 303.259 84.344 302.587 87.224C302.011 90.008 301.723 92.216 301.723 93.848C301.723 95.768 302.155 97.256 303.019 98.312C303.883 99.368 305.371 99.896 307.483 99.896C310.363 99.896 312.667 98.888 314.395 96.872C316.123 94.76 317.851 91.544 319.579 87.224H325.627C322.075 97.784 317.947 104.888 313.243 108.536C308.635 112.088 303.835 113.864 298.843 113.864Z"/>
                    <path d="M339.866 113.864C332.858 113.864 327.387 112.04 323.451 108.392C319.515 104.648 317.547 98.84 317.547 90.968C317.547 84.344 318.843 77.048 321.435 69.08C324.027 61.112 328.251 54.248 334.107 48.488C339.963 42.632 347.403 39.704 356.427 39.704C366.987 39.704 372.267 44.312 372.267 53.528C372.267 58.904 370.731 63.848 367.659 68.36C364.587 72.872 360.506 76.52 355.418 79.304C350.33 81.992 344.907 83.528 339.147 83.912C338.955 86.024 338.858 87.464 338.858 88.232C338.858 96.2 341.834 100.184 347.786 100.184C350.474 100.184 353.355 99.464 356.427 98.024C359.499 96.584 362.283 94.76 364.779 92.552C362.187 106.76 353.882 113.864 339.866 113.864ZM340.155 77C343.803 76.904 347.211 75.704 350.379 73.4C353.643 71.096 356.235 68.168 358.155 64.616C360.171 60.968 361.178 57.176 361.178 53.24C361.178 49.304 359.978 47.336 357.578 47.336C354.218 47.336 350.859 50.408 347.499 56.552C344.235 62.6 341.787 69.416 340.155 77Z"/>
                    <path d="M449.74 14.072C442.444 16.472 436.78 20.456 432.748 26.024C428.812 31.496 426.844 38.312 426.844 46.472C426.844 50.12 427.18 52.616 427.852 53.96C428.524 55.304 428.86 56.12 428.86 56.408C418.588 56.408 413.452 52.04 413.452 43.304C413.452 37.352 415.708 31.4 420.22 25.448C424.828 19.4 430.684 14.504 437.788 10.76C444.988 6.91999 452.14 4.99999 459.244 4.99999C462.796 4.99999 466.444 5.67199 470.188 7.01599L466.876 82.904L498.556 7.01599H519.292L504.172 113H483.436L492.652 48.344L465.58 113H445.852L448.732 48.056L424.684 113H413.164L449.74 14.072Z"/>
                    <path d="M537.883 113.576C530.779 113.576 525.163 111.752 521.035 108.104C516.907 104.456 514.843 98.696 514.843 90.824C514.843 84.296 516.187 77.048 518.875 69.08C521.563 61.112 525.883 54.248 531.835 48.488C537.787 42.632 545.275 39.704 554.299 39.704C566.587 39.704 572.731 47.384 572.731 62.744V62.888C573.019 62.984 573.547 63.032 574.315 63.032C577.483 63.032 581.131 62.216 585.259 60.584C589.387 58.856 593.131 56.792 596.491 54.392L597.787 58.28C595.003 61.256 591.355 63.8 586.843 65.912C582.427 67.928 577.579 69.368 572.299 70.232C571.531 78.968 569.563 86.6 566.395 93.128C563.227 99.656 559.147 104.696 554.155 108.248C549.163 111.8 543.739 113.576 537.883 113.576ZM543.643 100.616C545.947 100.616 548.251 99.32 550.555 96.728C552.859 94.04 554.875 90.44 556.603 85.928C558.331 81.32 559.579 76.232 560.347 70.664C557.755 70.088 556.459 68.072 556.459 64.616C556.459 60.68 557.947 58.088 560.923 56.84C560.731 53.672 560.251 51.512 559.483 50.36C558.715 49.112 557.371 48.488 555.451 48.488C552.283 48.488 549.211 50.792 546.235 55.4C543.259 60.008 540.859 65.528 539.035 71.96C537.211 78.392 536.299 84.056 536.299 88.952C536.299 93.56 536.827 96.68 537.883 98.312C538.939 99.848 540.859 100.616 543.643 100.616Z"/>
                    <path d="M594.397 113.864C589.789 113.864 586.045 112.424 583.165 109.544C580.381 106.664 578.989 102.344 578.989 96.584C578.989 94.184 579.373 91.064 580.141 87.224L589.933 41H610.669L600.301 89.96C600.013 91.4 599.869 92.744 599.869 93.992C599.869 97.928 601.309 99.896 604.189 99.896C606.877 99.896 609.181 98.792 611.101 96.584C613.021 94.28 614.557 91.16 615.709 87.224L625.501 41H646.237L635.869 89.96C635.485 91.4 635.293 92.936 635.293 94.568C635.293 96.488 635.725 97.88 636.589 98.744C637.549 99.512 639.085 99.896 641.197 99.896C643.885 99.896 646.189 98.744 648.109 96.44C650.125 94.136 651.709 91.064 652.861 87.224H658.909C655.357 97.592 650.941 104.648 645.661 108.392C640.477 112.04 635.245 113.864 629.965 113.864C625.837 113.864 622.525 112.712 620.029 110.408C617.629 108.104 616.189 104.696 615.709 100.184C612.445 105.464 608.989 109.064 605.341 110.984C601.789 112.904 598.141 113.864 594.397 113.864Z"/>
                    <path d="M740.396 113.864C734.54 113.864 730.22 112.328 727.436 109.256C724.748 106.088 723.404 102.2 723.404 97.592C723.404 95.576 723.644 93.32 724.124 90.824C724.604 88.232 725.084 85.736 725.564 83.336C726.14 80.936 726.524 79.4 726.716 78.728C727.484 75.368 728.204 72.056 728.876 68.792C729.548 65.528 729.884 62.888 729.884 60.872C729.884 55.976 728.156 53.528 724.7 53.528C722.204 53.528 719.996 54.776 718.076 57.272C716.156 59.672 714.62 62.84 713.468 66.776L703.676 113H682.94L693.452 63.32C693.74 62.168 693.884 60.968 693.884 59.72C693.884 55.496 692.444 53.384 689.564 53.384C686.876 53.384 684.524 54.632 682.508 57.128C680.588 59.528 679.052 62.744 677.9 66.776L668.108 113H647.372L662.636 41H683.372L681.788 48.488C686.684 43.016 692.54 40.28 699.356 40.28C707.804 40.28 712.748 44.408 714.188 52.664C719.468 44.504 726.14 40.424 734.204 40.424C739.1 40.424 742.988 41.768 745.868 44.456C748.748 47.144 750.188 51.224 750.188 56.696C750.188 59.48 749.852 62.6 749.18 66.056C748.508 69.416 747.548 73.544 746.3 78.44C745.532 81.416 744.812 84.344 744.14 87.224C743.564 90.008 743.276 92.216 743.276 93.848C743.276 95.768 743.708 97.256 744.572 98.312C745.436 99.368 746.924 99.896 749.036 99.896C751.916 99.896 754.22 98.888 755.948 96.872C757.676 94.76 759.404 91.544 761.132 87.224H767.18C763.628 97.784 759.5 104.888 754.796 108.536C750.188 112.088 745.388 113.864 740.396 113.864Z"/>
                    <path d="M813.109 113.864C807.253 113.864 802.933 112.328 800.149 109.256C797.461 106.088 796.117 102.2 796.117 97.592C796.117 95.576 796.357 93.32 796.837 90.824C797.317 88.232 797.797 85.736 798.277 83.336C798.853 80.936 799.237 79.4 799.429 78.728C800.197 75.368 800.917 72.056 801.589 68.792C802.261 65.528 802.597 62.888 802.597 60.872C802.597 55.976 800.869 53.528 797.413 53.528C794.917 53.528 792.709 54.776 790.789 57.272C788.869 59.672 787.333 62.84 786.181 66.776L776.389 113H755.653L770.917 41H791.653L790.069 48.488C794.869 43.112 800.485 40.424 806.917 40.424C811.813 40.424 815.701 41.768 818.581 44.456C821.461 47.144 822.901 51.224 822.901 56.696C822.901 59.48 822.565 62.6 821.893 66.056C821.221 69.416 820.261 73.544 819.013 78.44C818.245 81.416 817.525 84.344 816.853 87.224C816.277 90.008 815.989 92.216 815.989 93.848C815.989 95.768 816.421 97.256 817.285 98.312C818.149 99.368 819.637 99.896 821.749 99.896C824.629 99.896 826.933 98.888 828.661 96.872C830.389 94.76 832.117 91.544 833.845 87.224H839.893C836.341 97.784 832.213 104.888 827.509 108.536C822.901 112.088 818.101 113.864 813.109 113.864Z"/>
                    <path d="M857.876 33.224C854.708 33.224 852.02 32.12 849.812 29.912C847.604 27.704 846.5 25.016 846.5 21.848C846.5 18.68 847.604 15.992 849.812 13.784C852.02 11.48 854.708 10.328 857.876 10.328C861.044 10.328 863.732 11.48 865.94 13.784C868.244 15.992 869.396 18.68 869.396 21.848C869.396 25.016 868.244 27.704 865.94 29.912C863.732 32.12 861.044 33.224 857.876 33.224ZM848.084 113.864C843.476 113.864 839.732 112.424 836.852 109.544C834.068 106.664 832.676 102.344 832.676 96.584C832.676 94.184 833.06 91.064 833.828 87.224L843.62 41H864.356L853.988 89.96C853.604 91.4 853.412 92.936 853.412 94.568C853.412 96.488 853.844 97.88 854.708 98.744C855.668 99.512 857.204 99.896 859.316 99.896C861.044 99.896 862.58 99.608 863.924 99.032C863.54 103.832 861.812 107.528 858.74 110.12C855.764 112.616 852.212 113.864 848.084 113.864Z"/>
                    </mask>
                    <path d="M35.392 129.416C31.84 129.416 28.72 129.128 26.032 128.552C23.344 127.976 20.992 126.584 18.976 124.376C17.056 122.168 16.096 118.76 16.096 114.152C16.096 107.72 18.016 99.08 21.856 88.232C25.792 77.384 30.928 66.488 37.264 55.544C32.464 55.832 28.672 56.552 25.888 57.704C23.104 58.856 21.28 60.632 20.416 63.032C20.8 63.032 21.184 63.512 21.568 64.472C22.048 65.432 22.288 66.44 22.288 67.496C22.288 69.224 21.52 70.616 19.984 71.672C18.448 72.632 16.528 73.112 14.224 73.112C11.536 73.112 9.37599 72.392 7.74399 70.952C6.11199 69.512 5.29599 67.448 5.29599 64.76C5.29599 61.496 6.54399 58.52 9.03999 55.832C11.632 53.144 15.184 51.032 19.696 49.496C24.208 47.864 29.2 47.048 34.672 47.048C36.688 47.048 39.184 47.192 42.16 47.48C50.032 35 58.336 24.824 67.072 16.952C75.904 8.98399 84.304 4.99999 92.272 4.99999C96.88 4.99999 100.672 5.67199 103.648 7.01599L81.04 113H60.304L71.392 60.728C67.84 59.096 64.576 57.896 61.6 57.128C58.624 56.36 55.456 55.832 52.096 55.544C46.624 67.352 42.112 79.448 38.56 91.832C35.104 104.12 33.376 113.96 33.376 121.352C33.376 125 34.048 127.688 35.392 129.416ZM81.04 15.224C76.912 17.432 72.592 21.56 68.08 27.608C63.664 33.56 59.344 40.808 55.12 49.352C62.032 50.696 67.888 52.376 72.688 54.392L81.04 15.224Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M187.739 113.864C181.883 113.864 177.563 112.328 174.779 109.256C172.091 106.088 170.747 102.2 170.747 97.592C170.747 95.576 170.987 93.32 171.467 90.824C171.947 88.232 172.427 85.736 172.907 83.336C173.483 80.936 173.867 79.4 174.059 78.728C174.827 75.368 175.547 72.056 176.219 68.792C176.891 65.528 177.227 62.888 177.227 60.872C177.227 55.976 175.499 53.528 172.043 53.528C169.547 53.528 167.339 54.776 165.419 57.272C163.499 59.672 161.963 62.84 160.811 66.776L151.019 113H130.283L140.795 63.32C141.083 62.168 141.227 60.968 141.227 59.72C141.227 55.496 139.787 53.384 136.907 53.384C134.219 53.384 131.867 54.632 129.851 57.128C127.931 59.528 126.395 62.744 125.243 66.776L115.451 113H94.7155L109.979 41H130.715L129.131 48.488C134.027 43.016 139.883 40.28 146.699 40.28C155.147 40.28 160.091 44.408 161.531 52.664C166.811 44.504 173.483 40.424 181.547 40.424C186.443 40.424 190.331 41.768 193.211 44.456C196.091 47.144 197.531 51.224 197.531 56.696C197.531 59.48 197.195 62.6 196.523 66.056C195.851 69.416 194.891 73.544 193.643 78.44C192.875 81.416 192.155 84.344 191.483 87.224C190.907 90.008 190.619 92.216 190.619 93.848C190.619 95.768 191.051 97.256 191.915 98.312C192.779 99.368 194.267 99.896 196.379 99.896C199.259 99.896 201.563 98.888 203.291 96.872C205.019 94.76 206.747 91.544 208.475 87.224H214.523C210.971 97.784 206.843 104.888 202.139 108.536C197.531 112.088 192.731 113.864 187.739 113.864Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M232.517 33.224C229.349 33.224 226.661 32.12 224.453 29.912C222.245 27.704 221.141 25.016 221.141 21.848C221.141 18.68 222.245 15.992 224.453 13.784C226.661 11.48 229.349 10.328 232.517 10.328C235.685 10.328 238.373 11.48 240.581 13.784C242.885 15.992 244.037 18.68 244.037 21.848C244.037 25.016 242.885 27.704 240.581 29.912C238.373 32.12 235.685 33.224 232.517 33.224ZM222.725 113.864C218.117 113.864 214.373 112.424 211.493 109.544C208.709 106.664 207.317 102.344 207.317 96.584C207.317 94.184 207.701 91.064 208.469 87.224L218.261 41H238.997L228.629 89.96C228.245 91.4 228.053 92.936 228.053 94.568C228.053 96.488 228.485 97.88 229.349 98.744C230.309 99.512 231.845 99.896 233.957 99.896C236.741 99.896 239.333 98.744 241.733 96.44C244.133 94.04 245.861 90.968 246.917 87.224H252.965C249.413 97.592 244.853 104.648 239.285 108.392C233.717 112.04 228.197 113.864 222.725 113.864Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M298.843 113.864C292.987 113.864 288.667 112.328 285.883 109.256C283.195 106.088 281.851 102.2 281.851 97.592C281.851 95.576 282.091 93.32 282.571 90.824C283.051 88.232 283.531 85.736 284.011 83.336C284.587 80.936 284.971 79.4 285.163 78.728C285.931 75.368 286.651 72.056 287.323 68.792C287.995 65.528 288.331 62.888 288.331 60.872C288.331 55.976 286.603 53.528 283.147 53.528C280.651 53.528 278.443 54.776 276.523 57.272C274.603 59.672 273.067 62.84 271.915 66.776L262.123 113H241.387L256.651 41H277.387L275.803 48.488C280.603 43.112 286.219 40.424 292.651 40.424C297.547 40.424 301.435 41.768 304.315 44.456C307.195 47.144 308.635 51.224 308.635 56.696C308.635 59.48 308.299 62.6 307.627 66.056C306.955 69.416 305.995 73.544 304.747 78.44C303.979 81.416 303.259 84.344 302.587 87.224C302.011 90.008 301.723 92.216 301.723 93.848C301.723 95.768 302.155 97.256 303.019 98.312C303.883 99.368 305.371 99.896 307.483 99.896C310.363 99.896 312.667 98.888 314.395 96.872C316.123 94.76 317.851 91.544 319.579 87.224H325.627C322.075 97.784 317.947 104.888 313.243 108.536C308.635 112.088 303.835 113.864 298.843 113.864Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M339.866 113.864C332.858 113.864 327.387 112.04 323.451 108.392C319.515 104.648 317.547 98.84 317.547 90.968C317.547 84.344 318.843 77.048 321.435 69.08C324.027 61.112 328.251 54.248 334.107 48.488C339.963 42.632 347.403 39.704 356.427 39.704C366.987 39.704 372.267 44.312 372.267 53.528C372.267 58.904 370.731 63.848 367.659 68.36C364.587 72.872 360.506 76.52 355.418 79.304C350.33 81.992 344.907 83.528 339.147 83.912C338.955 86.024 338.858 87.464 338.858 88.232C338.858 96.2 341.834 100.184 347.786 100.184C350.474 100.184 353.355 99.464 356.427 98.024C359.499 96.584 362.283 94.76 364.779 92.552C362.187 106.76 353.882 113.864 339.866 113.864ZM340.155 77C343.803 76.904 347.211 75.704 350.379 73.4C353.643 71.096 356.235 68.168 358.155 64.616C360.171 60.968 361.178 57.176 361.178 53.24C361.178 49.304 359.978 47.336 357.578 47.336C354.218 47.336 350.859 50.408 347.499 56.552C344.235 62.6 341.787 69.416 340.155 77Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M449.74 14.072C442.444 16.472 436.78 20.456 432.748 26.024C428.812 31.496 426.844 38.312 426.844 46.472C426.844 50.12 427.18 52.616 427.852 53.96C428.524 55.304 428.86 56.12 428.86 56.408C418.588 56.408 413.452 52.04 413.452 43.304C413.452 37.352 415.708 31.4 420.22 25.448C424.828 19.4 430.684 14.504 437.788 10.76C444.988 6.91999 452.14 4.99999 459.244 4.99999C462.796 4.99999 466.444 5.67199 470.188 7.01599L466.876 82.904L498.556 7.01599H519.292L504.172 113H483.436L492.652 48.344L465.58 113H445.852L448.732 48.056L424.684 113H413.164L449.74 14.072Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M537.883 113.576C530.779 113.576 525.163 111.752 521.035 108.104C516.907 104.456 514.843 98.696 514.843 90.824C514.843 84.296 516.187 77.048 518.875 69.08C521.563 61.112 525.883 54.248 531.835 48.488C537.787 42.632 545.275 39.704 554.299 39.704C566.587 39.704 572.731 47.384 572.731 62.744V62.888C573.019 62.984 573.547 63.032 574.315 63.032C577.483 63.032 581.131 62.216 585.259 60.584C589.387 58.856 593.131 56.792 596.491 54.392L597.787 58.28C595.003 61.256 591.355 63.8 586.843 65.912C582.427 67.928 577.579 69.368 572.299 70.232C571.531 78.968 569.563 86.6 566.395 93.128C563.227 99.656 559.147 104.696 554.155 108.248C549.163 111.8 543.739 113.576 537.883 113.576ZM543.643 100.616C545.947 100.616 548.251 99.32 550.555 96.728C552.859 94.04 554.875 90.44 556.603 85.928C558.331 81.32 559.579 76.232 560.347 70.664C557.755 70.088 556.459 68.072 556.459 64.616C556.459 60.68 557.947 58.088 560.923 56.84C560.731 53.672 560.251 51.512 559.483 50.36C558.715 49.112 557.371 48.488 555.451 48.488C552.283 48.488 549.211 50.792 546.235 55.4C543.259 60.008 540.859 65.528 539.035 71.96C537.211 78.392 536.299 84.056 536.299 88.952C536.299 93.56 536.827 96.68 537.883 98.312C538.939 99.848 540.859 100.616 543.643 100.616Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M594.397 113.864C589.789 113.864 586.045 112.424 583.165 109.544C580.381 106.664 578.989 102.344 578.989 96.584C578.989 94.184 579.373 91.064 580.141 87.224L589.933 41H610.669L600.301 89.96C600.013 91.4 599.869 92.744 599.869 93.992C599.869 97.928 601.309 99.896 604.189 99.896C606.877 99.896 609.181 98.792 611.101 96.584C613.021 94.28 614.557 91.16 615.709 87.224L625.501 41H646.237L635.869 89.96C635.485 91.4 635.293 92.936 635.293 94.568C635.293 96.488 635.725 97.88 636.589 98.744C637.549 99.512 639.085 99.896 641.197 99.896C643.885 99.896 646.189 98.744 648.109 96.44C650.125 94.136 651.709 91.064 652.861 87.224H658.909C655.357 97.592 650.941 104.648 645.661 108.392C640.477 112.04 635.245 113.864 629.965 113.864C625.837 113.864 622.525 112.712 620.029 110.408C617.629 108.104 616.189 104.696 615.709 100.184C612.445 105.464 608.989 109.064 605.341 110.984C601.789 112.904 598.141 113.864 594.397 113.864Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M740.396 113.864C734.54 113.864 730.22 112.328 727.436 109.256C724.748 106.088 723.404 102.2 723.404 97.592C723.404 95.576 723.644 93.32 724.124 90.824C724.604 88.232 725.084 85.736 725.564 83.336C726.14 80.936 726.524 79.4 726.716 78.728C727.484 75.368 728.204 72.056 728.876 68.792C729.548 65.528 729.884 62.888 729.884 60.872C729.884 55.976 728.156 53.528 724.7 53.528C722.204 53.528 719.996 54.776 718.076 57.272C716.156 59.672 714.62 62.84 713.468 66.776L703.676 113H682.94L693.452 63.32C693.74 62.168 693.884 60.968 693.884 59.72C693.884 55.496 692.444 53.384 689.564 53.384C686.876 53.384 684.524 54.632 682.508 57.128C680.588 59.528 679.052 62.744 677.9 66.776L668.108 113H647.372L662.636 41H683.372L681.788 48.488C686.684 43.016 692.54 40.28 699.356 40.28C707.804 40.28 712.748 44.408 714.188 52.664C719.468 44.504 726.14 40.424 734.204 40.424C739.1 40.424 742.988 41.768 745.868 44.456C748.748 47.144 750.188 51.224 750.188 56.696C750.188 59.48 749.852 62.6 749.18 66.056C748.508 69.416 747.548 73.544 746.3 78.44C745.532 81.416 744.812 84.344 744.14 87.224C743.564 90.008 743.276 92.216 743.276 93.848C743.276 95.768 743.708 97.256 744.572 98.312C745.436 99.368 746.924 99.896 749.036 99.896C751.916 99.896 754.22 98.888 755.948 96.872C757.676 94.76 759.404 91.544 761.132 87.224H767.18C763.628 97.784 759.5 104.888 754.796 108.536C750.188 112.088 745.388 113.864 740.396 113.864Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M813.109 113.864C807.253 113.864 802.933 112.328 800.149 109.256C797.461 106.088 796.117 102.2 796.117 97.592C796.117 95.576 796.357 93.32 796.837 90.824C797.317 88.232 797.797 85.736 798.277 83.336C798.853 80.936 799.237 79.4 799.429 78.728C800.197 75.368 800.917 72.056 801.589 68.792C802.261 65.528 802.597 62.888 802.597 60.872C802.597 55.976 800.869 53.528 797.413 53.528C794.917 53.528 792.709 54.776 790.789 57.272C788.869 59.672 787.333 62.84 786.181 66.776L776.389 113H755.653L770.917 41H791.653L790.069 48.488C794.869 43.112 800.485 40.424 806.917 40.424C811.813 40.424 815.701 41.768 818.581 44.456C821.461 47.144 822.901 51.224 822.901 56.696C822.901 59.48 822.565 62.6 821.893 66.056C821.221 69.416 820.261 73.544 819.013 78.44C818.245 81.416 817.525 84.344 816.853 87.224C816.277 90.008 815.989 92.216 815.989 93.848C815.989 95.768 816.421 97.256 817.285 98.312C818.149 99.368 819.637 99.896 821.749 99.896C824.629 99.896 826.933 98.888 828.661 96.872C830.389 94.76 832.117 91.544 833.845 87.224H839.893C836.341 97.784 832.213 104.888 827.509 108.536C822.901 112.088 818.101 113.864 813.109 113.864Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                    <path d="M857.876 33.224C854.708 33.224 852.02 32.12 849.812 29.912C847.604 27.704 846.5 25.016 846.5 21.848C846.5 18.68 847.604 15.992 849.812 13.784C852.02 11.48 854.708 10.328 857.876 10.328C861.044 10.328 863.732 11.48 865.94 13.784C868.244 15.992 869.396 18.68 869.396 21.848C869.396 25.016 868.244 27.704 865.94 29.912C863.732 32.12 861.044 33.224 857.876 33.224ZM848.084 113.864C843.476 113.864 839.732 112.424 836.852 109.544C834.068 106.664 832.676 102.344 832.676 96.584C832.676 94.184 833.06 91.064 833.828 87.224L843.62 41H864.356L853.988 89.96C853.604 91.4 853.412 92.936 853.412 94.568C853.412 96.488 853.844 97.88 854.708 98.744C855.668 99.512 857.204 99.896 859.316 99.896C861.044 99.896 862.58 99.608 863.924 99.032C863.54 103.832 861.812 107.528 858.74 110.12C855.764 112.616 852.212 113.864 848.084 113.864Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                </svg>                
        </div>
    </div> 
    </div>
    <!-- <script src="./js/jquery.waypoint.min.js"></script> -->
    <script src="{{asset('js/jquery.waypoint.min.js')}}"></script>
    <script src="{{asset('js/typed.js')}}"></script>
    <script src="./js/typed.js"></script>
    <!-- <script src="./js/jquery.js"></script> -->
    <script src="{{asset('js/vue.js')}}"></script>
    <script src="{{asset('js/axios.js')}}"></script>
    <!-- <script src="./js/script.js"></script> -->
    <script src="{{asset('js/script.js')}}"></script>
    

</body>
</html>