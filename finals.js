$(document).ready(function(){
    
    $("#mainOptions").load("navigate.html");
    $('ul li a').click(function(){
            $('li a').removeClass("active");
            $(this).addClass("active");
    });
    
    $( ".logInHolder" ).draggable();
    

});

function userSignIn(){
        $.post("logBackend.php",
        {
            action: 'login',
            username: $("#username").val(),
            password: $("#password").val()
        },
        function(data){
            window.alert(data);
            if(data == 'Login: Success')
            {
                 window.location.assign("mainPage.php");    
            }
            /*$("#stage").html(data);*/
        });
}

function userSignOut(){
     $.post('logBackend.php',
        { 
            action: 'logout' 
        },
        function(data){
            $('#stage').html(data);
     });
     window.location.assign("end.html");
}

function save_func(){
    var y = $(".save").parent().parent();
    

    console.log($('#firstname').val());
    if($('#firstname').val() == ""){
        alert("First name missing");
    }
    if($('#lastname').val() == ""){
        alert("Last name missing");
    }
    if($('#classLevel').val() == ""){
        alert("First name missing");
    }
        

    y.action = "admissions.php";
    y.submit();

}

/*
    Source: https://stackoverflow.com/questions/18956956/validate-date-for-anyone-over-18-with-jquery
*/
function dateValid(){
    var birth = document.getElementById("date").value;
    //console.log(m);
    //console.log(n);
    var day = 1;
    var month = 1;
    var year = 2014;
    var age = 18;
    var setDate = new Date(year, month, day);


    if (birth >= setDate) {
    // you are above 18
        alert("Error, Cannot Enroll");
    } 
}

function openStudentForm(){
    $("#card2").empty();
    $("#card2").append('<form action="admissions.php" method="get" class="admitStudent"><br><label for="firstname">Firstname:</label><br><input type="text" id="firstname" name="theFirstname" placeholder="First Name"><br><label for="lastname">Lastname:</label><br><input type="text" id="lastname" name="theLastname" placeholder="Last Name"><br><label for="date">D.O.B:</label><br><input type="date" id="date" name="theBirthday" oninput="dateValid()" min="2009-12-31" max="2018-01-02"><br><label for="classLevel">Class:</label><br><input type="number" id="classLevel" name="theClass" placeholder="Class"min="1" max="4"><input class="invisible" name="function" value="nameFL"><div class="btns"><button class="save" type="submit" value="Submit">Submit</button><input class="clear" type="reset" value="Clear"></div></form');
}

/*Source: https://www.w3schools.com/howto/howto_js_slideshow.asp*/
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}