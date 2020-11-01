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
        console.log("hi");
        $(".overlay-back").remove();
        $(".model").remove();
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






new Vue({
    el: "#app",
    data: {
        name:"",
        object:"",
        email:"",
        message:"",
        valid: false
    },
    methods: {
        submitForm() {
            this.validateSubmit()
            if(this.valid) {
                axios.post('/sendmessage', {
                    name: this.name,
                    object: this.object,
                    email: this.email,
                    message: this.message
                })
                .then((success) => {
                    console.log(success.data)
                })
                .catch((err) => {
                    console.log(err)
                })
            }
        },
        validateName(){
            if(this.name.length < '3') {
                $("#name").addClass("errorinput");
                $("#namelabel").addClass("errorlabel");
                $("#name").removeClass("successinput");
                $("#namelabel").removeClass("successlabel");
                this.validateSubmit()
            } else {
                
                $("#name").addClass("successinput");
                $("#namelabel").addClass("successlabel");
                $("#name").removeClass("errorinput");
                $("#namelabel").removeClass("errorlabel");
                this.validateSubmit()
            }
        },
        validateObject(){
            if(this.object.length < '3') {
                $("#object").addClass("errorinput");
                $("#objectlabel").addClass("errorlabel");
                $("#object").removeClass("successinput");
                $("#objectlabel").removeClass("successlabel");
                this.validateSubmit()
            } else {
                $("#object").addClass("successinput");
                $("#objectlabel").addClass("successlabel");
                $("#object").removeClass("errorinput");
                $("#objectlabel").removeClass("errorlabel");
                this.validateSubmit()
            }
        },
        validateEmail(){
            var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            if(!pattern.test(this.email) ) {
                $("#email").addClass("errorinput");
                $("#emaillabel").addClass("errorlabel");
                $("#email").removeClass("successinput");
                $("#emaillabel").removeClass("successlabel");
                this.validateSubmit()
            } else {
                $("#email").removeClass("errorinput");
                $("#emaillabel").removeClass("errorlabel");
                $("#email").addClass("successinput");
                $("#emaillabel").addClass("successlabel");
                this.validateSubmit()
            }
        },
        validateMessage(){
            if(this.message.length < '3') {
                $("#message").addClass("errorinput");
                $("#messagelabel").addClass("errorlabel");
                $("#message").removeClass("successinput");
                $("#messagelabel").removeClass("successlabel");
                this.validateSubmit()
            } else {
                $("#message").removeClass("errorinput");
                $("#messagelabel").removeClass("errorlabel");
                $("#message").addClass("successinput");
                $("#messagelabel").addClass("successlabel");
                this.validateSubmit()
            }
        },
        validateSubmit(){
            if(
                $("#name").hasClass("successinput") &&
                $("#email").hasClass("successinput") &&
                $("#object").hasClass("successinput") &&
                $("#message").hasClass("successinput") 
            ) {
                this.valid = true;
            } else {
                this.valid = false;
            }
        }
    }
})