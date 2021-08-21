
// const logo = document.querySelectorAll('#logo path');
// for(let i = 0; i<logo.length; i++) {
//     console.log(`letter ${i} is ${logo[i].getTotalLength()}`);
// };

new Vue({
    el: "#app",
    data: {
        name:"",
        object:"",
        email:"",
        message:"",
        btntitle: "Send",
        valid: false,
        errors: {},
        hacker: ""
    },
    methods: {
        submitForm() {
            this.validateSubmit()
            if(this.valid) {
                axios.post('/sendmessage', {
                    name: this.name,
                    object: this.object,
                    email: this.email,
                    message: this.message,
                    messageError: ""
                })
                .then((success) => {
                    this.btntitle = "Thank you!"
                    this.name = ""
                    this.object = ""
                    this.email = ""
                    this.message = ""
                    $("#name, #email, #object, #message").removeClass("successinput");
                    $("#namelabel, #emaillabel, #objectlabel, #messagelabel").removeClass("successlabel");
                    //console.log(success.data)

                    setTimeout(()=>{
                        this.btntitle = "Send"
                    }, 5000)
                })
                .catch((err) => {
                    console.log(err.response.data[0])

                    this.errors = err.response.data[0];
                    this.hacker = err.response.data.hacker;
                    //console.log(this.errors)
                })
            }
        },
        validateName(){
            if(this.name.length < '3') {
                $("#name").addClass("errorinput");
                $("#namelabel").addClass("errorlabel");
                $("#name").removeClass("successinput");
                $("#namelabel").removeClass("successlabel");
                //this.validateSubmit()
            } else {
                
                $("#name").addClass("successinput");
                $("#namelabel").addClass("successlabel");
                $("#name").removeClass("errorinput");
                $("#namelabel").removeClass("errorlabel");
                //this.validateSubmit()
            }
        },
        validateObject(){
            if(this.object.length < '3') {
                $("#object").addClass("errorinput");
                $("#objectlabel").addClass("errorlabel");
                $("#object").removeClass("successinput");
                $("#objectlabel").removeClass("successlabel");
                //this.validateSubmit()
            } else {
                $("#object").addClass("successinput");
                $("#objectlabel").addClass("successlabel");
                $("#object").removeClass("errorinput");
                $("#objectlabel").removeClass("errorlabel");
                //this.validateSubmit()
            }
        },
        validateEmail(){
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            if(!pattern.test(this.email) ) {
                $("#email").addClass("errorinput");
                $("#emaillabel").addClass("errorlabel");
                $("#email").removeClass("successinput");
                $("#emaillabel").removeClass("successlabel");
                //this.validateSubmit()
            } else {
                $("#email").removeClass("errorinput");
                $("#emaillabel").removeClass("errorlabel");
                $("#email").addClass("successinput");
                $("#emaillabel").addClass("successlabel");
                //this.validateSubmit()
            }
        },
        validateMessage(){
            if(this.message.length < '6') {
                $("#message").addClass("errorinput");
                $("#messagelabel").addClass("errorlabel");
                $("#message").removeClass("successinput");
                $("#messagelabel").removeClass("successlabel");
                //this.validateSubmit()
            } else {
                $("#message").removeClass("errorinput");
                $("#messagelabel").removeClass("errorlabel");
                $("#message").addClass("successinput");
                $("#messagelabel").addClass("successlabel");
                //this.validateSubmit()
            }
        },
        validateSubmit(){
            this.btntitle = "icon"
            if(
                $("#name").hasClass("successinput") &&
                $("#email").hasClass("successinput") &&
                $("#object").hasClass("successinput") &&
                $("#message").hasClass("successinput") 
            ) {
                this.valid = true;
            } else {
                this.btntitle = "send"
                this.valid = false;
                this.validateName();
                this.validateObject();
                this.validateEmail();
                this.validateMessage();
            }
        }
    }
})


/** OTHER SCRIPTS */
$(document).ready(function(){
    $(window).on('load', function() {
        setTimeout(() => {
            $(".loading-overlay").hide(0, function(){
                $(this).remove();
                removeBodyClass();
            })
        }, 2900);
    });
    function removeBodyClass() {
        $('body').removeClass("bodyActive");
    }

    $('.experience').waypoint({
        onActive: function () {
          $("header").addClass('blackheader');
        //   alert("ok");
        },
      
        onExit: function () {
            $("header").removeClass('blackheader');
        },
    });
    $('.competences__section').waypoint({
        onActive: function () {
            $("header").removeClass('blackheader');
        //   alert("ok");
        },
    });
    // $('.contact').waypoint({
    //     onActive: function () {
    //         $(".contact__form").addClass('animate__animated  animate__bounceInLeft')
    //         $(".contact__img").addClass('animate__animated  animate__bounceInRight')
    //     //   alert("ok");
    //     },
    // });

    // $('.experience').waypoint(function(direction){
    //     if(direction == "down") {
    //         $('header').addClass('sticky');
    //     } else {
    //         $('nav').removeClass('sticky');
    //     }
    // },{
    //     offset: '60px' /* this mean it will show before 50px */ 
    // });
});



const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav__items");
const body = document.querySelector("body");
hamburger.addEventListener("click", () => {
    navLinks.classList.toggle("active");
    hamburger.classList.toggle("actived");
        setTimeout(() => {
            document.querySelector(".socialmedia").classList.toggle("socialActive");
            //body.classList.toggle("bodyActive")
            
        }, 400);
})

navLinks.addEventListener("click", () => {
    if(navLinks.classList.contains('active')) {
        navLinks.classList.toggle("active");
        hamburger.classList.toggle("actived");
        setTimeout(() => {
            document.querySelector(".socialmedia").classList.toggle("socialActive");
            //body.classList.toggle("bodyActive")
            
        }, 400);
    }
})

// const logo = document.querySelectorAll('#logo path');
// for(let i = 0; i < logo.length; i++) {
//     console.log(`Letter ${i} is ${logo[i].getTotalLength()}`)
// }



/** Typed js */

var options = {
    strings: ['Frontend', 'Backend'],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
  };
  
var typed = new Typed('.typedone', options);


/** scroll menu sticky */

window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})



/** model remove */

$(document).ready(function(){
    $(".fa-times").click(function() {
        //console.log("hi");
        $(".model").remove();
        $(".overlay-back").remove();
    });

    $("#times").click(function() {
        //console.log("hi");
        $("#modelHacker").remove();
        //$(".overlay-back").remove();
    });


})




var options = {
    strings: ['Welcome to my portfolio, Thank you for your trust!',
            'Subscribe if you wanna see more!'],
    typeSpeed: 60,
    loop: false
  };

setTimeout(() => {
    var typed = new Typed('#modelh3', options);
}, 4200);

/* navigation scroll smooth just copie coller dont modifie anything */
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
    // On-page links
    if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
    && 
    location.hostname == this.hostname
    ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll  target exist?
    if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
        scrollTop: target.offset().top
        }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
            return false;
        } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
        };
        });
    }
    }



    
    

    
});