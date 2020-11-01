<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,800;1,300;1,400;1,500;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="{{asset('js/jquery.js')}}"></script>
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
                <h4 class="nav__logo">Guegzosis</h4>

                <div class="nav__items ">
                    <ul class="nav__menu">
                        <li class="nav__menu-items"><a href="#" class="nav__menu-item">About</a></li>
                        <li class="nav__menu-items"><a href="#" class="nav__menu-item">Competences</a></li>
                        <li class="nav__menu-items"><a href="#" class="nav__menu-item">Contact</a></li>
                        
                    </ul>
                    <a href="https://www.instagram.com/guegzosis/" target="_blank" class="nav__btn">Direct me</a>
                </div>
                <div class="hamburger js--nav-icon">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </nav>
        <div class="social">
            <ul class="socialmedia">
                <li><a class="socialmedia__git" href="#"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                <li><a class="socialmedia__face" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li><a class="socialmedia__insta"href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a class="socialmedia__whatsapp"href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
        </div>
        <div class="intro">
            <h1 class="intro__heading">
                Hello, I'm <span class="intro__heading-name">Amine Moumni</span>. <br>
                I'm a Full Stack Web Developer.
            </h1>
        </div>

        <!-- <div>
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
        </div> -->
    </header>

    <section class="about">
        <div class="about__container row">
            <h2 class="about__title text-secondary">
                Get To Know Me Better
            </h2>
            <div class="about__photo">
                <figure class="about__photo--pic">
                    <img src="./images/me.jpg" alt="" class="about__photo--pic--picture">
                    <figcaption>Amine Moumni</figcaption>
                </figure>
                <h4 class="about__photo--text">
                    Im a <span class="typedone"></span> web developer
                </h4>
            </div>
            <p class="about__paraghraph">
                <!-- Hi lets start to know me better my name is Amine Moumni like u saw in the first title of the page <i class="fas fa-laugh-squint"></i>
                i have 22 years old a technicien specialise developement multimedia fullstack web developer
                humm what i love ?
                i love develope web site and web application with a patience, time and the most important thing with love. so if u are like me dont firget the contact me if u see anything need change on my portfolio or for a freelance mission.

                what i do in the free time ?
                i have three most importance thing in my life i cant resist to do them 
                i love ride my bicycle (VTT and Enduro), i like long walk with someone i love and i like to play games for sure like everyone
                u can download my resume here below . thank you for your time <i class="fa fa-heart" aria-hidden="true"></i>. -->

                Hi let's start to know me better my name is Amine Moumni like you saw in the first title of the page <i class="fas fa-laugh-squint"></i>.<br> 
                I have 22 years old, I'm a full stack web developer <br>
                <br>
                <span>Hmm, what I love?</span> <br>
                I love to develop web sites and web applications with patience, time, and the most important thing with love. <br>
                <br>
                So if you are like me don't forget to contact me if you see anything that needs change on my portfolio or for a freelance mission. <br>
                <br>
                <span>What do I do in my free time?</span> <br>
                I have three most important thing in my life I can't resist to do them: <br>
                <i class="fas fa-chevron-right"></i> I love riding my bicycle (VTT and Enduro). <br>
                <i class="fas fa-chevron-right"></i> I like long walk with someone I love. <br>
                <i class="fas fa-chevron-right"></i> I like to play games for sure like everyone <br>
                <br>
                <span>You can download my resume here below. thank you for your time </span> <i class="fa fa-heart" aria-hidden="true"></i>.
                
            </p>
            <div class="btn__container">
                <a href="./images/aminecv.pdf" class="btn btn-white" download><i class="fas fa-arrow-circle-down"></i> Download Resume</a>
            </div>
        </div>
    </section>
 

<div class="cc">
    <section class="competences__section row">
        <h2 class="text-secondary">Competences</h2>
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
                            <h3>HTML5</h3>
                            <p id="percent">90%</p>
                        </div>
                        <div class="item-bare w-90">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>CSS3, SASS,  Bootstrap 4</h3>
                            <p id="percent">80%</p>
                        </div>
                        <div class="item-bare w-80">
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
                            <h3>JavaScript ES6</h3>
                            <p id="percent">75%</p>
                        </div>
                        <div class="item-bare w-75">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>jQuery, Ajax</h3>
                            <p id="percent">80%</p>
                        </div>
                        <div class="item-bare w-80">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>Vue Js (Vue CLI, VueX, Vue-Router, Vuetify, Axios)</h3>
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
                            <h3>MySql</h3>
                            <p id="percent">70%</p>
                        </div>
                        <div class="item-bare w-70">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>Laravel or Laravel + Vue (SPA)</h3>
                            <p id="percent">80%</p>
                        </div>
                        <div class="item-bare w-80">
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-percent">
                            <h3>Symfony</h3>
                            <p id="percent">70%</p>
                        </div>
                        <div class="item-bare w-70">
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="item-percent">
                            <h3>Wordpress</h3>
                            <p id="percent">75%</p>
                        </div>
                        <div class="item-bare w-75">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>

<section class="contact">
    <div class="row">
        <h2 class="text-secondary">get in touch with us</h2>
        <div class="contact__container">
            <div class="contact__form">
                <h4 class="text-fourth">Send Happiness</h4>
                <form class="form">
                    <div class="form__div">
                        <input type="text" v-model.lazy="name" @change="validateName" placeholder=" " id="name" class="form__input">
                        <label for="name" class="form__label" id="namelabel">Full Name</label>
                    </div>
                    <div class="form__div">
                        <input type="text" v-model.lazy="object" @change="validateObject" placeholder=" " id="object" class="form__input"> <!--successinput // errorinput-->
                        <label for="object" class="form__label" id="objectlabel">Object</label> <!--successlabel // errorlabel-->
                    </div>
                    <div class="form__div">
                        <input type="email" v-model.lazy="email" @change="validateEmail" placeholder=" " id="email" class="form__input">
                        <label for="email" class="form__label" id="emaillabel">Email</label>
                    </div>

                    <div class="form__div">
                        <textarea v-model.lazy="message" @change="validateMessage" class="form__input textarea" id="message" placeholder=" " cols="30" rows="5"></textarea>
                        <label for="message" class="form__label" id="messagelabel">Message</label>
                    </div>
                    <button class="btn btn-white"  @click.prevent="submitForm">Send</button>
                </form>
            </div>
            <div class="contact__img">
                <div class="contact__img-image">
                    <img src="./images/contact.jpg" alt="" class="contact__img-image-img">
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
                    <p>My Social Media</p>

                    <ul class="footer__container--socialmedia">
                        <li><a class="footer__container--socialmedia__git" href="#"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                        <li><a class="footer__container--socialmedia__face" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a class="footer__container--socialmedia__insta"href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a class="footer__container--socialmedia__whatsapp"href="#"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="footer__container--adress">
                    <p>My Adresse</p>
                    <span>
                        <i class="fas fa-map-marker-alt"></i> 365 LOT EL KOURA, RABAT 10140
                    </span>
                </div>
            </div>
            <p class="footer__copyright">
                Copyright &copy; 2020 Moumni Amine.
            </p>
        </div>
    </footer>









    <!-- <div class="overlay-back"></div>
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

    <div class="loading-overlay">
        <div class="loading-overlay__title">
            <svg id="logo" class="loading-overlay__logo" width="689" height="200" viewBox="0 0 689 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                <mask id="path-1-outside-1" maskUnits="userSpaceOnUse" x="4.42001" y="0.73999" width="680" height="192" fill="black">
                <rect fill="white" x="4.42001" y="0.73999" width="680" height="192"/>
                <path d="M47.58 179.26C38.82 179.26 31.74 176.98 26.34 172.42C21.06 167.98 18.42 162.1 18.42 154.78C18.42 150.22 19.5 146.02 21.66 142.18C23.82 138.34 26.76 135.34 30.48 133.18C34.2 130.9 38.28 129.76 42.72 129.76C47.28 129.76 50.94 130.9 53.7 133.18C56.58 135.46 58.02 138.46 58.02 142.18C58.02 145.06 57.36 147.34 56.04 149.02C54.96 147.58 53.46 146.44 51.54 145.6C49.74 144.76 47.82 144.34 45.78 144.34C42.18 144.34 39.24 145.54 36.96 147.94C34.68 150.34 33.54 153.46 33.54 157.3C33.54 161.14 34.62 164.26 36.78 166.66C39.06 169.06 41.88 170.26 45.24 170.26C49.44 170.26 53.04 168.4 56.04 164.68C59.04 160.96 61.32 155.44 62.88 148.12L71.88 108.34H71.16C67.92 112.9 63.96 116.38 59.28 118.78C54.72 121.18 49.68 122.38 44.16 122.38C37.2 122.38 31.08 120.52 25.8 116.8C20.52 113.08 16.44 107.8 13.56 100.96C10.8 94 9.42001 85.96 9.42001 76.84C9.42001 63.64 12.3 51.64 18.06 40.84C23.82 29.92 31.74 21.34 41.82 15.1C51.9 8.85999 63 5.73999 75.12 5.73999C85.32 5.73999 93.36 7.95999 99.24 12.4C105.24 16.84 108.24 22.9 108.24 30.58C108.24 35.74 106.98 39.88 104.46 43C101.94 46.12 98.64 47.68 94.56 47.68C92.28 47.68 90.12 47.2 88.08 46.24C86.16 45.28 84.54 43.9 83.22 42.1C85.38 40.66 87.18 38.38 88.62 35.26C90.18 32.02 90.96 28.78 90.96 25.54C90.96 21.94 89.88 19.18 87.72 17.26C85.68 15.22 82.74 14.2 78.9 14.2C71.94 14.2 65.22 17.32 58.74 23.56C52.26 29.68 47.04 37.72 43.08 47.68C39.12 57.64 37.14 68.08 37.14 79C37.14 88 38.58 94.9 41.46 99.7C44.34 104.38 48.48 106.72 53.88 106.72C60.36 106.72 66.06 103.3 70.98 96.46C76.02 89.62 80.04 79.66 83.04 66.58L104.28 66.76L91.14 127.24C87.3 145.12 81.84 158.26 74.76 166.66C67.8 175.06 58.74 179.26 47.58 179.26Z"/>
                <path d="M127.883 143.08C122.123 143.08 117.443 141.28 113.843 137.68C110.363 134.08 108.623 128.68 108.623 121.48C108.623 118.48 109.103 114.58 110.063 109.78L122.303 52H148.223L135.263 113.2C134.903 115 134.723 116.68 134.723 118.24C134.723 123.16 136.523 125.62 140.123 125.62C143.483 125.62 146.363 124.24 148.763 121.48C151.163 118.6 153.083 114.7 154.523 109.78L166.763 52H192.683L179.723 113.2C179.243 115 179.003 116.92 179.003 118.96C179.003 121.36 179.543 123.1 180.623 124.18C181.823 125.14 183.743 125.62 186.383 125.62C189.743 125.62 192.623 124.18 195.023 121.3C197.543 118.42 199.523 114.58 200.963 109.78H208.523C204.083 122.74 198.563 131.56 191.963 136.24C185.483 140.8 178.943 143.08 172.343 143.08C167.183 143.08 163.043 141.64 159.923 138.76C156.923 135.88 155.123 131.62 154.523 125.98C150.443 132.58 146.123 137.08 141.563 139.48C137.123 141.88 132.563 143.08 127.883 143.08Z"/>
                <path d="M226.681 143.08C217.801 143.08 210.901 140.8 205.981 136.24C201.061 131.56 198.601 124.3 198.601 114.46C198.601 106.18 200.221 97.06 203.461 87.1C206.701 77.14 211.981 68.56 219.301 61.36C226.621 54.04 235.921 50.38 247.201 50.38C260.401 50.38 267.001 56.14 267.001 67.66C267.001 74.38 265.081 80.56 261.241 86.2C257.401 91.84 252.301 96.4 245.941 99.88C239.581 103.24 232.801 105.16 225.601 105.64C225.361 109.24 225.241 111.64 225.241 112.84C225.241 118.72 226.261 122.74 228.301 124.9C230.341 126.94 233.641 127.96 238.201 127.96C244.681 127.96 250.201 126.46 254.761 123.46C259.441 120.46 264.541 115.9 270.061 109.78H276.181C262.861 131.98 246.361 143.08 226.681 143.08ZM227.041 97C231.481 96.76 235.681 95.2 239.641 92.32C243.721 89.44 246.961 85.78 249.361 81.34C251.881 76.9 253.141 72.22 253.141 67.3C253.141 62.38 251.641 59.92 248.641 59.92C244.321 59.92 240.061 63.7 235.861 71.26C231.781 78.82 228.841 87.4 227.041 97Z"/>
                <path d="M301.523 187C295.883 187 290.903 185.14 286.583 181.42C282.383 177.82 280.283 173.2 280.283 167.56C280.283 162.28 281.603 157.96 284.243 154.6C286.883 151.24 290.303 148.6 294.503 146.68C298.703 144.76 304.343 142.72 311.423 140.56L313.043 133C306.803 139.72 299.603 143.08 291.443 143.08C284.603 143.08 278.903 140.74 274.343 136.06C269.783 131.38 267.503 124.06 267.503 114.1C267.503 105.22 269.243 95.92 272.723 86.2C276.323 76.36 281.603 68.08 288.563 61.36C295.643 54.52 304.043 51.1 313.763 51.1C318.683 51.1 322.343 51.94 324.743 53.62C327.143 55.3 328.343 57.52 328.343 60.28V60.64L330.143 52H356.243L334.283 156.4C331.883 167.92 327.623 175.9 321.503 180.34C315.503 184.78 308.843 187 301.523 187ZM402.143 61.72H392.063C388.703 61.72 386.183 61.9 384.503 62.26C382.943 62.62 382.163 63.4 382.163 64.6C382.163 64.84 382.463 65.14 383.063 65.5C383.783 65.74 384.143 66.76 384.143 68.56C384.143 71.68 383.183 74.08 381.263 75.76C379.343 77.32 377.063 78.1 374.423 78.1C372.143 78.1 370.163 77.44 368.483 76.12C366.923 74.68 366.143 72.7 366.143 70.18C366.143 67.66 366.983 64.96 368.663 62.08C370.463 59.2 372.923 56.8 376.043 54.88C379.283 52.96 382.943 52 387.023 52H433.283L389.183 128.14C389.903 128.14 391.223 128.26 393.143 128.5C397.223 128.98 400.463 129.22 402.863 129.22C408.023 129.22 410.843 128.02 411.323 125.62C410.243 125.5 409.403 125.14 408.803 124.54C408.203 123.82 407.903 122.92 407.903 121.84C407.903 119.92 408.803 118.18 410.603 116.62C412.403 114.94 414.863 114.1 417.983 114.1C420.623 114.1 422.603 114.88 423.923 116.44C425.243 118 425.903 120.1 425.903 122.74C425.903 125.62 425.003 128.56 423.203 131.56C421.403 134.56 418.823 137.08 415.463 139.12C412.103 141.04 408.263 142 403.943 142H356.243L402.143 61.72ZM303.143 125.62C305.903 125.62 308.663 124.48 311.423 122.2C314.303 119.8 316.343 116.44 317.543 112.12L326.723 68.56C325.763 64.36 323.303 62.26 319.343 62.26C314.543 62.26 310.223 65.08 306.383 70.72C302.543 76.24 299.543 82.96 297.383 90.88C295.223 98.68 294.143 105.58 294.143 111.58C294.143 117.58 294.983 121.42 296.663 123.1C298.463 124.78 300.623 125.62 303.143 125.62ZM297.383 170.98C299.543 170.98 301.583 169.84 303.503 167.56C305.423 165.4 306.923 161.86 308.003 156.94L310.163 146.32C303.803 148.48 298.883 151 295.403 153.88C291.923 156.76 290.183 160.48 290.183 165.04C290.183 166.48 290.903 167.8 292.343 169C293.783 170.32 295.463 170.98 297.383 170.98Z"/>
                <path d="M530.884 143.08C521.284 143.08 514.684 140.8 511.084 136.24C507.604 131.68 505.864 125.98 505.864 119.14C505.864 114.1 507.184 110.02 509.824 106.9C512.464 103.66 515.464 102.04 518.824 102.04C525.064 102.04 528.184 104.56 528.184 109.6C528.184 111.76 527.344 113.68 525.664 115.36C523.984 116.92 521.944 117.7 519.544 117.7C517.024 117.7 515.404 116.92 514.684 115.36C514.684 119.68 515.524 123.04 517.204 125.44C519.004 127.72 521.644 128.86 525.124 128.86C529.204 128.86 532.084 127.66 533.764 125.26C535.564 122.74 536.464 118.36 536.464 112.12C536.464 108.52 536.104 103.96 535.384 98.44C534.184 86.92 533.224 75.16 532.504 63.16C523.984 76.24 513.904 84.52 502.264 88C501.544 99.04 499.204 108.7 495.244 116.98C491.284 125.26 486.184 131.62 479.944 136.06C473.824 140.5 467.044 142.72 459.604 142.72C450.724 142.72 443.704 140.44 438.544 135.88C433.384 131.32 430.804 124.12 430.804 114.28C430.804 106 432.424 96.94 435.664 87.1C438.904 77.14 444.184 68.56 451.504 61.36C458.824 54.04 468.184 50.38 479.584 50.38C494.824 50.38 502.504 59.8 502.624 78.64C511.504 78.16 521.284 68.62 531.964 50.02L558.604 46.42C559.204 61.78 560.224 78.4 561.664 96.28C562.264 103.48 562.564 108.7 562.564 111.94C562.564 114.34 562.384 116.56 562.024 118.6C565.624 116.56 569.884 113.62 574.804 109.78H582.364C575.764 117.46 567.424 124.48 557.344 130.84C554.344 135.16 550.504 138.28 545.824 140.2C541.264 142.12 536.284 143.08 530.884 143.08ZM466.804 126.52C471.244 126.52 475.384 122.98 479.224 115.9C483.064 108.7 485.704 99.82 487.144 89.26C484.264 88.18 482.824 85.48 482.824 81.16C482.824 76.48 484.504 73.36 487.864 71.8C487.624 67.96 486.964 65.26 485.884 63.7C484.924 62.14 483.304 61.36 481.024 61.36C477.064 61.36 473.284 64.24 469.684 70C466.084 75.64 463.144 82.54 460.864 90.7C458.704 98.74 457.624 105.82 457.624 111.94C457.624 117.7 458.284 121.6 459.604 123.64C460.924 125.56 463.324 126.52 466.804 126.52Z"/>
                <path d="M604.888 42.28C600.928 42.28 597.568 40.9 594.808 38.14C592.048 35.38 590.668 32.02 590.668 28.06C590.668 24.1 592.048 20.74 594.808 17.98C597.568 15.1 600.928 13.66 604.888 13.66C608.848 13.66 612.208 15.1 614.968 17.98C617.848 20.74 619.288 24.1 619.288 28.06C619.288 32.02 617.848 35.38 614.968 38.14C612.208 40.9 608.848 42.28 604.888 42.28ZM592.648 143.08C586.888 143.08 582.208 141.28 578.608 137.68C575.128 134.08 573.388 128.68 573.388 121.48C573.388 118.48 573.868 114.58 574.828 109.78L587.068 52H612.988L600.028 113.2C599.548 115 599.308 116.92 599.308 118.96C599.308 121.36 599.848 123.1 600.928 124.18C602.128 125.14 604.048 125.62 606.688 125.62C610.168 125.62 613.408 124.18 616.408 121.3C619.408 118.3 621.568 114.46 622.888 109.78H630.448C626.008 122.74 620.308 131.56 613.348 136.24C606.388 140.8 599.488 143.08 592.648 143.08Z"/>
                <path d="M643.336 143.08C637.576 143.08 632.716 142 628.756 139.84C624.796 137.56 621.856 134.68 619.936 131.2C618.016 127.6 617.056 123.88 617.056 120.04C617.056 116.08 618.016 112.66 619.936 109.78C621.736 106.78 623.956 104.62 626.596 103.3C631.276 94.9 635.356 86.44 638.836 77.92C642.316 69.28 645.616 59.98 648.736 50.02L675.376 46.42C675.976 61.78 676.996 78.4 678.436 96.28C679.036 103.48 679.336 108.7 679.336 111.94C679.336 119.26 677.476 125.26 673.756 129.94C670.036 134.62 665.416 137.98 659.896 140.02C654.496 142.06 648.976 143.08 643.336 143.08ZM637.576 128.86C642.016 128.86 645.736 127.54 648.736 124.9C651.736 122.26 653.236 118 653.236 112.12C653.236 108.52 652.876 103.48 652.156 97C650.956 83.32 650.176 74.14 649.816 69.46C646.936 78.94 642.076 90.28 635.236 103.48C637.996 104.92 639.376 107.02 639.376 109.78C639.376 112.06 638.596 114.1 637.036 115.9C635.596 117.7 633.736 118.6 631.456 118.6C628.936 118.6 627.316 117.82 626.596 116.26C626.596 120.58 627.436 123.76 629.116 125.8C630.916 127.84 633.736 128.86 637.576 128.86Z"/>
                </mask>
                <path d="M47.58 179.26C38.82 179.26 31.74 176.98 26.34 172.42C21.06 167.98 18.42 162.1 18.42 154.78C18.42 150.22 19.5 146.02 21.66 142.18C23.82 138.34 26.76 135.34 30.48 133.18C34.2 130.9 38.28 129.76 42.72 129.76C47.28 129.76 50.94 130.9 53.7 133.18C56.58 135.46 58.02 138.46 58.02 142.18C58.02 145.06 57.36 147.34 56.04 149.02C54.96 147.58 53.46 146.44 51.54 145.6C49.74 144.76 47.82 144.34 45.78 144.34C42.18 144.34 39.24 145.54 36.96 147.94C34.68 150.34 33.54 153.46 33.54 157.3C33.54 161.14 34.62 164.26 36.78 166.66C39.06 169.06 41.88 170.26 45.24 170.26C49.44 170.26 53.04 168.4 56.04 164.68C59.04 160.96 61.32 155.44 62.88 148.12L71.88 108.34H71.16C67.92 112.9 63.96 116.38 59.28 118.78C54.72 121.18 49.68 122.38 44.16 122.38C37.2 122.38 31.08 120.52 25.8 116.8C20.52 113.08 16.44 107.8 13.56 100.96C10.8 94 9.42001 85.96 9.42001 76.84C9.42001 63.64 12.3 51.64 18.06 40.84C23.82 29.92 31.74 21.34 41.82 15.1C51.9 8.85999 63 5.73999 75.12 5.73999C85.32 5.73999 93.36 7.95999 99.24 12.4C105.24 16.84 108.24 22.9 108.24 30.58C108.24 35.74 106.98 39.88 104.46 43C101.94 46.12 98.64 47.68 94.56 47.68C92.28 47.68 90.12 47.2 88.08 46.24C86.16 45.28 84.54 43.9 83.22 42.1C85.38 40.66 87.18 38.38 88.62 35.26C90.18 32.02 90.96 28.78 90.96 25.54C90.96 21.94 89.88 19.18 87.72 17.26C85.68 15.22 82.74 14.2 78.9 14.2C71.94 14.2 65.22 17.32 58.74 23.56C52.26 29.68 47.04 37.72 43.08 47.68C39.12 57.64 37.14 68.08 37.14 79C37.14 88 38.58 94.9 41.46 99.7C44.34 104.38 48.48 106.72 53.88 106.72C60.36 106.72 66.06 103.3 70.98 96.46C76.02 89.62 80.04 79.66 83.04 66.58L104.28 66.76L91.14 127.24C87.3 145.12 81.84 158.26 74.76 166.66C67.8 175.06 58.74 179.26 47.58 179.26Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                <path d="M127.883 143.08C122.123 143.08 117.443 141.28 113.843 137.68C110.363 134.08 108.623 128.68 108.623 121.48C108.623 118.48 109.103 114.58 110.063 109.78L122.303 52H148.223L135.263 113.2C134.903 115 134.723 116.68 134.723 118.24C134.723 123.16 136.523 125.62 140.123 125.62C143.483 125.62 146.363 124.24 148.763 121.48C151.163 118.6 153.083 114.7 154.523 109.78L166.763 52H192.683L179.723 113.2C179.243 115 179.003 116.92 179.003 118.96C179.003 121.36 179.543 123.1 180.623 124.18C181.823 125.14 183.743 125.62 186.383 125.62C189.743 125.62 192.623 124.18 195.023 121.3C197.543 118.42 199.523 114.58 200.963 109.78H208.523C204.083 122.74 198.563 131.56 191.963 136.24C185.483 140.8 178.943 143.08 172.343 143.08C167.183 143.08 163.043 141.64 159.923 138.76C156.923 135.88 155.123 131.62 154.523 125.98C150.443 132.58 146.123 137.08 141.563 139.48C137.123 141.88 132.563 143.08 127.883 143.08Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                <path d="M226.681 143.08C217.801 143.08 210.901 140.8 205.981 136.24C201.061 131.56 198.601 124.3 198.601 114.46C198.601 106.18 200.221 97.06 203.461 87.1C206.701 77.14 211.981 68.56 219.301 61.36C226.621 54.04 235.921 50.38 247.201 50.38C260.401 50.38 267.001 56.14 267.001 67.66C267.001 74.38 265.081 80.56 261.241 86.2C257.401 91.84 252.301 96.4 245.941 99.88C239.581 103.24 232.801 105.16 225.601 105.64C225.361 109.24 225.241 111.64 225.241 112.84C225.241 118.72 226.261 122.74 228.301 124.9C230.341 126.94 233.641 127.96 238.201 127.96C244.681 127.96 250.201 126.46 254.761 123.46C259.441 120.46 264.541 115.9 270.061 109.78H276.181C262.861 131.98 246.361 143.08 226.681 143.08ZM227.041 97C231.481 96.76 235.681 95.2 239.641 92.32C243.721 89.44 246.961 85.78 249.361 81.34C251.881 76.9 253.141 72.22 253.141 67.3C253.141 62.38 251.641 59.92 248.641 59.92C244.321 59.92 240.061 63.7 235.861 71.26C231.781 78.82 228.841 87.4 227.041 97Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                <path d="M301.523 187C295.883 187 290.903 185.14 286.583 181.42C282.383 177.82 280.283 173.2 280.283 167.56C280.283 162.28 281.603 157.96 284.243 154.6C286.883 151.24 290.303 148.6 294.503 146.68C298.703 144.76 304.343 142.72 311.423 140.56L313.043 133C306.803 139.72 299.603 143.08 291.443 143.08C284.603 143.08 278.903 140.74 274.343 136.06C269.783 131.38 267.503 124.06 267.503 114.1C267.503 105.22 269.243 95.92 272.723 86.2C276.323 76.36 281.603 68.08 288.563 61.36C295.643 54.52 304.043 51.1 313.763 51.1C318.683 51.1 322.343 51.94 324.743 53.62C327.143 55.3 328.343 57.52 328.343 60.28V60.64L330.143 52H356.243L334.283 156.4C331.883 167.92 327.623 175.9 321.503 180.34C315.503 184.78 308.843 187 301.523 187ZM402.143 61.72H392.063C388.703 61.72 386.183 61.9 384.503 62.26C382.943 62.62 382.163 63.4 382.163 64.6C382.163 64.84 382.463 65.14 383.063 65.5C383.783 65.74 384.143 66.76 384.143 68.56C384.143 71.68 383.183 74.08 381.263 75.76C379.343 77.32 377.063 78.1 374.423 78.1C372.143 78.1 370.163 77.44 368.483 76.12C366.923 74.68 366.143 72.7 366.143 70.18C366.143 67.66 366.983 64.96 368.663 62.08C370.463 59.2 372.923 56.8 376.043 54.88C379.283 52.96 382.943 52 387.023 52H433.283L389.183 128.14C389.903 128.14 391.223 128.26 393.143 128.5C397.223 128.98 400.463 129.22 402.863 129.22C408.023 129.22 410.843 128.02 411.323 125.62C410.243 125.5 409.403 125.14 408.803 124.54C408.203 123.82 407.903 122.92 407.903 121.84C407.903 119.92 408.803 118.18 410.603 116.62C412.403 114.94 414.863 114.1 417.983 114.1C420.623 114.1 422.603 114.88 423.923 116.44C425.243 118 425.903 120.1 425.903 122.74C425.903 125.62 425.003 128.56 423.203 131.56C421.403 134.56 418.823 137.08 415.463 139.12C412.103 141.04 408.263 142 403.943 142H356.243L402.143 61.72ZM303.143 125.62C305.903 125.62 308.663 124.48 311.423 122.2C314.303 119.8 316.343 116.44 317.543 112.12L326.723 68.56C325.763 64.36 323.303 62.26 319.343 62.26C314.543 62.26 310.223 65.08 306.383 70.72C302.543 76.24 299.543 82.96 297.383 90.88C295.223 98.68 294.143 105.58 294.143 111.58C294.143 117.58 294.983 121.42 296.663 123.1C298.463 124.78 300.623 125.62 303.143 125.62ZM297.383 170.98C299.543 170.98 301.583 169.84 303.503 167.56C305.423 165.4 306.923 161.86 308.003 156.94L310.163 146.32C303.803 148.48 298.883 151 295.403 153.88C291.923 156.76 290.183 160.48 290.183 165.04C290.183 166.48 290.903 167.8 292.343 169C293.783 170.32 295.463 170.98 297.383 170.98Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                <path d="M530.884 143.08C521.284 143.08 514.684 140.8 511.084 136.24C507.604 131.68 505.864 125.98 505.864 119.14C505.864 114.1 507.184 110.02 509.824 106.9C512.464 103.66 515.464 102.04 518.824 102.04C525.064 102.04 528.184 104.56 528.184 109.6C528.184 111.76 527.344 113.68 525.664 115.36C523.984 116.92 521.944 117.7 519.544 117.7C517.024 117.7 515.404 116.92 514.684 115.36C514.684 119.68 515.524 123.04 517.204 125.44C519.004 127.72 521.644 128.86 525.124 128.86C529.204 128.86 532.084 127.66 533.764 125.26C535.564 122.74 536.464 118.36 536.464 112.12C536.464 108.52 536.104 103.96 535.384 98.44C534.184 86.92 533.224 75.16 532.504 63.16C523.984 76.24 513.904 84.52 502.264 88C501.544 99.04 499.204 108.7 495.244 116.98C491.284 125.26 486.184 131.62 479.944 136.06C473.824 140.5 467.044 142.72 459.604 142.72C450.724 142.72 443.704 140.44 438.544 135.88C433.384 131.32 430.804 124.12 430.804 114.28C430.804 106 432.424 96.94 435.664 87.1C438.904 77.14 444.184 68.56 451.504 61.36C458.824 54.04 468.184 50.38 479.584 50.38C494.824 50.38 502.504 59.8 502.624 78.64C511.504 78.16 521.284 68.62 531.964 50.02L558.604 46.42C559.204 61.78 560.224 78.4 561.664 96.28C562.264 103.48 562.564 108.7 562.564 111.94C562.564 114.34 562.384 116.56 562.024 118.6C565.624 116.56 569.884 113.62 574.804 109.78H582.364C575.764 117.46 567.424 124.48 557.344 130.84C554.344 135.16 550.504 138.28 545.824 140.2C541.264 142.12 536.284 143.08 530.884 143.08ZM466.804 126.52C471.244 126.52 475.384 122.98 479.224 115.9C483.064 108.7 485.704 99.82 487.144 89.26C484.264 88.18 482.824 85.48 482.824 81.16C482.824 76.48 484.504 73.36 487.864 71.8C487.624 67.96 486.964 65.26 485.884 63.7C484.924 62.14 483.304 61.36 481.024 61.36C477.064 61.36 473.284 64.24 469.684 70C466.084 75.64 463.144 82.54 460.864 90.7C458.704 98.74 457.624 105.82 457.624 111.94C457.624 117.7 458.284 121.6 459.604 123.64C460.924 125.56 463.324 126.52 466.804 126.52Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                <path d="M604.888 42.28C600.928 42.28 597.568 40.9 594.808 38.14C592.048 35.38 590.668 32.02 590.668 28.06C590.668 24.1 592.048 20.74 594.808 17.98C597.568 15.1 600.928 13.66 604.888 13.66C608.848 13.66 612.208 15.1 614.968 17.98C617.848 20.74 619.288 24.1 619.288 28.06C619.288 32.02 617.848 35.38 614.968 38.14C612.208 40.9 608.848 42.28 604.888 42.28ZM592.648 143.08C586.888 143.08 582.208 141.28 578.608 137.68C575.128 134.08 573.388 128.68 573.388 121.48C573.388 118.48 573.868 114.58 574.828 109.78L587.068 52H612.988L600.028 113.2C599.548 115 599.308 116.92 599.308 118.96C599.308 121.36 599.848 123.1 600.928 124.18C602.128 125.14 604.048 125.62 606.688 125.62C610.168 125.62 613.408 124.18 616.408 121.3C619.408 118.3 621.568 114.46 622.888 109.78H630.448C626.008 122.74 620.308 131.56 613.348 136.24C606.388 140.8 599.488 143.08 592.648 143.08Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                <path d="M643.336 143.08C637.576 143.08 632.716 142 628.756 139.84C624.796 137.56 621.856 134.68 619.936 131.2C618.016 127.6 617.056 123.88 617.056 120.04C617.056 116.08 618.016 112.66 619.936 109.78C621.736 106.78 623.956 104.62 626.596 103.3C631.276 94.9 635.356 86.44 638.836 77.92C642.316 69.28 645.616 59.98 648.736 50.02L675.376 46.42C675.976 61.78 676.996 78.4 678.436 96.28C679.036 103.48 679.336 108.7 679.336 111.94C679.336 119.26 677.476 125.26 673.756 129.94C670.036 134.62 665.416 137.98 659.896 140.02C654.496 142.06 648.976 143.08 643.336 143.08ZM637.576 128.86C642.016 128.86 645.736 127.54 648.736 124.9C651.736 122.26 653.236 118 653.236 112.12C653.236 108.52 652.876 103.48 652.156 97C650.956 83.32 650.176 74.14 649.816 69.46C646.936 78.94 642.076 90.28 635.236 103.48C637.996 104.92 639.376 107.02 639.376 109.78C639.376 112.06 638.596 114.1 637.036 115.9C635.596 117.7 633.736 118.6 631.456 118.6C628.936 118.6 627.316 117.82 626.596 116.26C626.596 120.58 627.436 123.76 629.116 125.8C630.916 127.84 633.736 128.86 637.576 128.86Z" stroke="white" stroke-width="10" mask="url(#path-1-outside-1)"/>
                </g>
                <defs>
                <filter id="filter0_d" x="0.420013" y="0.73999" width="687.916" height="199.26" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                </defs>
                </svg>    

                
        </div>
    </div> -->
    </div>
    <script src="./js/jquery.waypoints.min.js"></script>
    <script src="./js/typed.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>