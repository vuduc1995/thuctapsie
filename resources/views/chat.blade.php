<!DOCTYPE html>
<html lang="en">
<head>




<title>College Instructor TimeSheet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft", "Roboto", sans-serif}
.w3-bar-block .w3-bar-item {padding: 16px}
</style>


    <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

<script>
function sendEmail(e) {
    document.getElementById('id01').style.display='none';
    var sendTo = document.getElementById('sendTo123').value;
    var subject = document.getElementById('subject123').value;
    var content = document.getElementById('content123').value;

    //e.preventDefault();
    $.ajax({
        url:'/{{$subdomain}}/chat',
        type:'post',
        data:{'sendTo': sendTo, 'subject': subject, 'content': content},
        success:function(){
            //whatever you wanna do after the form is successfully submitted
        }
    }).done(function( msg ) {
    // alert( "Data Saved: " + msg );
    if(msg==1){
      alert( "Successfully" );
    }else{
      alert( "Error!" );
    };

})
}


// loop
window.onload = function start() {
    slide();
}
function slide() {
    //var num = 0, style = document.getElementById('container').style;
    window.setInterval(function () {
      // read message
      readMessage();
    }, 500); // repeat forever, polling every 1/2 seconds
}

function openMail123(id,status,header,message,isFeedback,senderName,senderAvatar) {
  var i;
  var x = document.getElementsByClassName("person");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x = document.getElementsByClassName("test");
  for (i = 0; i < x.length; i++) {
     x[i].className = x[i].className.replace(" w3-light-grey", "");
  }
  // document.getElementById(personName).style.display = "block";
  event.currentTarget.className += " w3-light-grey";

  var element = document.getElementById("MainContent123");
  element.innerHTML = '';


  // cuc hien thi email
  var big = document.createElement("div");
  big.setAttribute('class', 'w3-container person');
  var br = document.createElement("br");
  big.appendChild(br);
  var img = document.createElement("img");
  img.setAttribute('class', 'w3-round w3-animate-top aaaa');
  img.setAttribute('src', "{{URL::asset("/")}}" + senderAvatar);
  img.setAttribute('style', 'width:20%;');
  var h5 = document.createElement("h5");
  h5.setAttribute('class', 'w3-opacity');
  if (isFeedback) {
    h5.innerHTML = '[Feedback] ' + header;
  } else {
    h5.innerHTML = '[Mail] ' + header;
  }
  big.appendChild(img);
  big.appendChild(h5);

  var h4 = document.createElement('h4');
  var h4_i = document.createElement('i');
  h4_i.setAttribute('class', 'fa fa-clock-o');
  var node = document.createTextNode(' From '+senderName);//, Sep 23, 2015.');
  h4.appendChild(h4_i);
  h4.appendChild(node);
  big.appendChild(h4);

  // var a = document.createElement('a');
  // a.setAttribute('class', 'w3-button w3-light-grey');
  // a.innerHTML = 'Reply';
  // var a_i = document.createElement('i');
  // a_i.setAttribute('class', 'w3-margin-left fa fa-mail-reply');
  // a.appendChild(a_i);
  // big.appendChild(a);

  // a = document.createElement('a');
  // a.setAttribute('class', 'w3-button w3-light-grey');
  // a.innerHTML = 'Forward';
  // var a_i = document.createElement('i');
  // a_i.setAttribute('class', 'w3-margin-left fa fa-arrow-right');
  // a.appendChild(a_i);
  // big.appendChild(a);

  var hr = document.createElement("hr");
  big.appendChild(hr);
  var para = document.createElement("p");
  var node = document.createTextNode(message);
  para.appendChild(node);
  big.appendChild(para);

  big.style.display = "block";

  element.appendChild(big);
}

function readMessage() {
    $.ajax({
        url:'/{{$subdomain}}/chat/read',
        type:'get',
        data:{},
        success:function(){
        }
    }).done(function( msg ) {
    if(msg==0){
      alert( "Error!" );
    }else{
      var object = JSON.parse(msg);
      var arrayLength = object.length;

      document.getElementById('numOfInbox').textContent = 'Inbox ('+(arrayLength-1)+')';

      for (var i = 0; i < arrayLength; i++) {
        console.log( "" + object[i].id + "-" + object[i].status+ "-" + object[i].header+ "-" + object[i].message);
      }

      var element = document.getElementById("MessageList123");
      element.innerHTML = '';
      var messageList = "";
      for (var i = 0; i < arrayLength; i++) {
        if (object[i].id != -1) {
          messageList = messageList + object[i].id + "-" + object[i].status+ "-" + object[i].header+ "-" + object[i].message + "</br>";





          var big = document.createElement("a");
          big.setAttribute('class', 'w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey');
          big.setAttribute('onclick', "openMail123("+object[i].id+",'"+object[i].status+"','"+object[i].header+"','"+object[i].message+"',"+object[i].isFeedback+",'"+ object[i].senderName + "','"+object[i].senderAvatar + "')");

          var img = document.createElement("img");
          img.setAttribute('class', 'w3-round w3-margin-right');
          img.setAttribute('src', '{{ URL::asset('/') }}' + object[i].senderAvatar);
          img.setAttribute('style', 'width:15%;');

          var para = document.createElement("span");
          var node = document.createTextNode(object[i].senderName);
          if (object[i].isFeedback) {
            node = document.createTextNode("Feedback: "+object[i].header);
          }
          para.appendChild(node);

          var h6 = document.createElement('h6');
          var h6_text = document.createTextNode('Mail: ' + object[i].header);
          if (object[i].isFeedback) {
            h6_text = document.createTextNode('Feedback: ' + object[i].header);
          }
          h6.appendChild(h6_text);

          var p = document.createElement('h6');
          var text = object[i].message.match(/.{1,100}/g)[0];
          if (object[i].message.length > 100) {
            text += "...";
          }
          var p_text = document.createTextNode(text);
          p.appendChild(p_text);

          var div_div_w3 = document.createElement("div");
          div_div_w3.setAttribute('class', 'w3-container');
          div_div_w3.appendChild(img);
          div_div_w3.appendChild(para);
          div_div_w3.appendChild(h6);
          div_div_w3.appendChild(p);

          big.appendChild(div_div_w3);

          element.appendChild(big);
        }
      }

    };
})
}


</script>

</head>
  
<body>



<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-white w3-animate-left w3-card" style="z-index:3;width:320px;" id="mySidebar">

  <div class="w3-container">
        <span class=" w3-margin-right">Hello! {{$users->name}}</span><a href="/{{$subdomain}}"><img class=" w3-large" src="{{ URL::asset($users->avatar) }}" style="width:25%; margin-bottom: -33px; margin-top: 20px; padding-bottom: 20px; margin-left: 15px"></a>
        <p></p>
      </div>

<!--
  <a href="/{{$subdomain}}" class="w3-bar-item w3-button w3-border-bottom w3-large"><img src="{{ URL::asset('images/logo60nambk.png') }}" style="width:60%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()" title="Close Sidemenu" 
  class="w3-bar-item w3-button w3-hide-large w3-large">Close <i class="fa fa-remove"></i></a>
  -->
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-dark-grey w3-button w3-hover-black w3-left-align" onclick="document.getElementById('id01').style.display='block'">New Message <i class="w3-padding fa fa-pencil"></i></a>
  <a id="myBtn" onclick="myFunc('Demo1')" href="javascript:void(0)" class="w3-bar-item w3-button"><i class="fa fa-inbox w3-margin-right"></i><span id="numOfInbox">Inbox (0)</span><i class="fa fa-caret-down w3-margin-left"></i></a>
  <div id="Demo1" class="w3-hide w3-animate-left">
  <div id="MessageList123">
  <!--
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Borge');w3_close();" id="firstTab">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/w3images/avatar3.png" style="width:15%;"><span class="w3-opacity w3-large">Borge Refsnes</span>
        <h6>Subject: Remember Me</h6>
        <p>Hello, i just wanted to let you know that i'll be home at...</p>
      </div>
    </a>


     <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('Jane');w3_close();">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/w3images/avatar5.png" style="width:15%;"><span class="w3-opacity w3-large">Jane Doe</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
      </div>
    </a>


    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-border-bottom test w3-hover-light-grey" onclick="openMail('John');w3_close();">
      <div class="w3-container">
        <img class="w3-round w3-margin-right" src="/w3images/avatar2.png" style="width:15%;"><span class="w3-opacity w3-large">John Doe</span>
        <p>Welcome!</p>
      </div>
    </a>
    -->
  </div>
  </div>
  <a href="/logout" class="w3-bar-item w3-button"><i class="fa fa-sign-out w3-margin-right"></i>Sign Out</a>
</nav>

<!-- Modal that pops up when you click on "New Message" -->
<div id="id01" class="w3-modal" style="z-index:4">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-padding w3-red">
       <span onclick="document.getElementById('id01').style.display='none'"
       class="w3-button w3-red w3-right w3-xxlarge"><i class="fa fa-remove"></i></span>
      <h2>Send Mail</h2>
    </div>
    <div class="w3-panel">
      <label>To</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" id="sendTo123">
      <label>From</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text">
      <label>Subject</label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" id="subject123">
      <input class="w3-input w3-border w3-margin-bottom" style="height:150px" placeholder="What's on your mind?" id="content123">
      <div class="w3-section">
        <a class="w3-button w3-red" onclick="document.getElementById('id01').style.display='none'">Cancel &nbsp;<i class="fa fa-remove"></i></a>
        <a class="w3-button w3-light-grey w3-right" onclick="sendEmail()">Send &nbsp;<i class="fa fa-paper-plane"></i></a> 
      </div>    
    </div>
  </div>
</div>

<!-- Overlay effect when opening the side navigation on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="Close Sidemenu" id="myOverlay"></div>

<!-- Page content -->
<div class="w3-main" style="margin-left:320px;">
<i class="fa fa-bars w3-button w3-white w3-hide-large w3-xlarge w3-margin-left w3-margin-top" onclick="w3_open()"></i>
<a href="javascript:void(0)" class="w3-hide-large w3-red w3-button w3-right w3-margin-top w3-margin-right" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-pencil"></i></a>

<div id="MainContent123">
<div style="display:none;">
<div id="Borge" class="w3-container person">
  <br>
  <img class="w3-round  w3-animate-top" src="/w3images/avatar3.png" style="width:20%;">
  <h5 class="w3-opacity">Subject: Remember Me</h5>
  <h4><i class="fa fa-clock-o"></i> From Borge Refsnes, Sep 27, 2015.</h4>
  <a class="w3-button w3-light-grey" href="#">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
  <a class="w3-button w3-light-grey" href="#">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
  <hr>
  <p>Hello, i just wanted to let you know that i'll be home at lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <p>Best Regards, <br>Borge Refsnes</p>
</div>

<div id="Jane" class="w3-container person">
  <br>
  <img class="w3-round w3-animate-top" src="/w3images/avatar5.png" style="width:20%;">
  <h5 class="w3-opacity">Subject: None</h5>
  <h4><i class="fa fa-clock-o"></i> From Jane Doe, Sep 25, 2015.</h4>
  <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
  <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
  <hr>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <p>Forever yours,<br>Jane</p>
</div>

<div id="John" class="w3-container person">
  <br>
  <img class="w3-round w3-animate-top" src="/w3images/avatar2.png" style="width:20%;">
  <h5 class="w3-opacity">Subject: None</h5>
  <h4><i class="fa fa-clock-o"></i> From John Doe, Sep 23, 2015.</h4>
  <a class="w3-button w3-light-grey">Reply<i class="w3-margin-left fa fa-mail-reply"></i></a>
  <a class="w3-button w3-light-grey">Forward<i class="w3-margin-left fa fa-arrow-right"></i></a>
  <hr>
  <p>Welcome.</p>
  <p>That's it!</p>
</div>
     
</div>
</div>
</div>

<script>
var openInbox = document.getElementById("myBtn");
openInbox.click();

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

function myFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show"; 
        x.previousElementSibling.className += " w3-red";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-red", "");
    }
}

//openMail("Borge")
function openMail(personName) {
    var i;
    var x = document.getElementsByClassName("person");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    x = document.getElementsByClassName("test");
    for (i = 0; i < x.length; i++) {
       x[i].className = x[i].className.replace(" w3-light-grey", "");
    }
    document.getElementById(personName).style.display = "block";
    event.currentTarget.className += " w3-light-grey";
}

</script>

<script>
var openTab = document.getElementById("firstTab");
//openTab.click();
</script>


</body>