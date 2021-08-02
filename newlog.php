
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

	<style>
		      @import url('https://fonts.googleapis.com/css?family=Dosis');

* {
    box-sizing: border-box;
    font-size: 5vmin;
    font-family: 'Montserrat', sans-serif;
}

body {
    color: white;
    background: linear-gradient(290deg, #463277 0%, #199ea0 100%) fixed;
    background-size: cover;
    min-height: 100vh;
    font-weight: 300;
    line-height: 1.25;
    letter-spacing: 1px;
    display: flex;
    justify-content: center;
    margin: 0 auto;
}
.w100 {
    width:100%;
}
.wrapper {
  margin: 10vmin 15vmin 15vmin 15vmin  ;
}

.container {
    position: relative;
    display: flex;
    background: rgba(0, 0, 0, 0.25);
    box-shadow: -0.5em 1em 2em rgba(0, 0, 0, 0.5);
    height:100%;
    border-radius:1em;
}

.container > input {
    position: absolute;
    top: 0;
    left: -9999px;
}

.content {
    background: linear-gradient(45deg, rgb(117, 40, 248) 0%, rgb(135, 92, 207) 29%, rgb(188, 53, 169) 65%, #25e8ee 100%);
    position: absolute;
    display:flex;
    top: 0;
    left: 0;
    height:100%;
    justify-content: center;
    align-items:center;
    border-radius:1em;
}

form {    
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    padding-top: 15vmin;
    align-items: center;        
}

.field {
    position: relative;
    margin-bottom: 0.5em;
}

.field>input,
form>button {
    border: none;
    background: none;
    outline:none;
    color: white;
}
.field>input {
    width: 100%;
    border-bottom: 1px solid white;
    text-indent: 1.5em;
}
.field.small  {    
    margin: 1em 15% 0.5em 15%;
    font-size:0.5em;
}
.field.small a {
    font-size:1em;
    color:white;
}
 
button {
    position: relative;
    cursor: pointer;
    margin-top:0.5em;

    padding:5px;
   
  
}
 
button>.icon {
    width: 0%;
    left:100%;
    transition: all 0.5s ;
}

button:hover>.icon {    
    width: 1em;
}

.icon,.icon-eye {
    display: inline-block;
    width: 1em;
    height: 1em;
    stroke-width: 0;
    stroke: currentColor;
    fill: currentColor;
    position: absolute;
    bottom: 0.2em;
    left: 0;
}
.icon-eye  {
    cursor:pointer;
    left: 100%;
}
 
.svg-icons {
    display: none;
}

input:required+.icon {
    transition: all 1s;
}
input:required:invalid {
    box-shadow: none;
    outline: none;
}
input:required:invalid:focus+.icon {
    fill: red;
    box-shadow: inset 0 0 1em 1em rgba(255,255,255,0.7);
    border-radius: 0.25em;
}
input:required:valid +.icon {
    fill: greenyellow;
    border-radius: 3px;
}

::-webkit-input-placeholder {
    color: rgba(255,255,255,0.5);
}

 input:focus::-webkit-input-placeholder {
    transform:translateY(-10px);
    font-size: 0.5em;
}

input:focus::-moz-placeholder  {
    font-size: 0.5em;
}

.tabs {
    display: grid;
    grid-template-columns: 1fr 1fr;
    justify-content: center;
    height: 2em;
    z-index: 1;
    text-align: center;
}

#tab1~#contentOne {
    clip-path: polygon(50% 0, 50% 0, 50% 2em, 100% 2em, 100% 2em, 0 2em, 0 2em, 50% 2em);
    transition: all 0.351s cubic-bezier(0.755, 0.05, 0.855, 0.06);

}

#tab1:checked~#contentOne {
    clip-path: polygon(0 0, 50% 0, 50% 2em, 100% 2em, 100% 100%, 0 100%, 0 2em, 0 2em);
}

#tab2~#contentTwo {
    clip-path: polygon(50% 0, 50% 0, 50% 2em, 100% 2em, 100% 2em, 0 2em, 0 2em, 50% 2em);
    transition: all 0.351s cubic-bezier(0.755, 0.05, 0.855, 0.06);
    background: linear-gradient(-135deg, rgb(117, 40, 248) 0%, rgb(135, 92, 207) 29%, rgb(188, 53, 169) 65%, #25e8ee 100%);
}

#tab2:checked~#contentTwo {
    clip-path: polygon(50% 0, 100% 0, 100% 2em, 100% 2em, 100% 100%, 0 100%, 0 2em, 50% 2em);
}

#tab1~.tabs .t1,
#tab1~.tabs .t2 {
    color: #eee;
    height: 2em;
    padding-top:  0.5em;
    font-variant: small-caps;
    cursor: pointer;

}

#tab1:checked~.tabs .t1,
#tab2:checked~.tabs .t2 {
    font-weight: bold;
}

.pop {
    display: none;
    position: absolute;
    left: 0;
    height: 100%;
    justify-content: center;
    align-items: center;
    overflow: auto;    
    background-color: rgba(0, 0, 0, 0.5);
    z-index:2;
    
}
.pop:target {
    display:flex;
}

.pop:target  .dialog{
  animation: scaleIn 0.25s;
}

.dialog {
    position:relative;
    width: 75%;
    max-height: 85%; 
    padding: 1em;
    background: white;
    color:steelblue;;
    border-radius:0 1em 1em 1em;
    overflow-y:auto;
} 
.dialog a,.dialog h2 {
    color:white;
    background: steelblue;
    font-weight:bold;
    text-decoration:none;
    top:0;
    right: 0;
    position:absolute;
    padding: 0.5em;
    line-height: 0.5;
}
.dialog h2 {
  left:0;
  margin:0;
}

.dialog > form,.dialog > div  {padding-top:1.5em;font-size:0.75em;}
.dialog button,.dialog input { color:steelblue;}
.dialog input { border-bottom: 1px solid steelblue;}

@keyframes scaleIn {
  0%   { 
    clip-path: polygon(50% 50%, 50% 50%, 50% 50%, 50% 50%, 50% 50%, 50% 50%, 50% 50%, 50% 50%, 50% 50%, 50% 50%);
  }
  100% { 
    clip-path: polygon(50% 0%, 98% 2%, 100% 35%, 100% 70%, 97% 98%, 50% 100%, 3% 98%, 0% 70%, 0% 35%, 2% 1%);
    }
}
	</style>
</head>
<body>


<div class="wrapper w100" >
  <div class="container w100">
    <input id='tab1' name="tabs" type='radio' checked />
    <input id='tab2' name="tabs" type='radio' />
    <div class="tabs w100">
      <label class="t1" for='tab1'>Login</label>
      <label class="t2" for='tab2'>Sign up</label>
    </div>
    <div class="content w100" id="contentOne" >
      <form  action="nlconnect.php" method="post">
        <div class="field">
          <input id="rmail" placeholder="your email" type="email" name="email" required>
          <svg class="icon">
                            <use xlink:href="#icon-mail"></use>
                        </svg>
        </div>
        <div class="field">
          <input id="upass" placeholder="Password" type="password" name="pass" required>
          <svg class="icon">
                            <use xlink:href="#icon-lock"></use>
                        </svg>
          <svg class="icon-eye" onclick="togglePassVisibility('upass');">
                            <use xlink:href="#icon-eye"></use>
                        </svg>
        </div>
        <button type="submit" name="submit"> Login
                        <svg class="icon">
                            <use xlink:href="#icon-arrow-right-outline"></use>
                        </svg>
                    </button>
        <div class="field small">
          <a href="#forgot" tabindex="5" class="forgot-password">Forgot
                            Password?</a>
        </div>
      </form>
    </div>

    <div class="content w100" id="contentTwo" style="height: 600px">


      <form action="nconnect.php" method="post">
      	<div class="field">
          <input id="rname" placeholder="Full name" type="text" name="fname" required>
          <svg class="icon">
                            <use xlink:href="#icon-person"></use>
                        </svg>
        </div>
        
        <div class="field">
          <input id="rmail" placeholder="your email" type="email" name="email" required>
          <svg class="icon">
                            <use xlink:href="#icon-mail"></use>
                        </svg>
        </div>
        <div class="field">
          <input id="rname" placeholder="Phone Number" type="int" name="ph" required>
          <svg class="icon">
                            <use xlink:href="#icon-person"></use>
                        </svg>
        </div>
        <div class="field">
          <input id="rname" placeholder="location" type="text" name="location" required>
          <svg class="icon">
                            <use xlink:href="#icon-person"></use>
                        </svg>
        </div>
        
        <div class="field">
          <input id="rpass" placeholder="password" type="password" name="pass" required>
          <svg class="icon">
                            <use xlink:href="#icon-lock"></use>
                        </svg>
          <svg class="icon-eye" onclick="togglePassVisibility('rpass');">
                            <use xlink:href="#icon-eye"></use>
                        </svg>
        </div>
        <button type="submit" name="signup"> Sign up
                        <svg class="icon">
                            <use xlink:href="#icon-arrow-right-outline"></use>
                        </svg>
        </button>
       

      </form>
    </div>
  </div>
</div>

<div id="forgot" class="pop w100">
  <div class="dialog">
    <h2>Password Recovery</h2>
    <a href="#">&#x2715;</a>
    <form action="javascript:return false;">
      <div class="field">
        <input id="uname" placeholder="E-mail" type="email" name="recover" required>
        <svg class="icon">
                        <use xlink:href="#icon-mail"></use>
                    </svg>
      </div>
      <button type="submit"> Send new password
                    <svg class="icon">
                        <use xlink:href="#icon-arrow-right-outline"></use>
                    </svg>
                </button>
    </form>
  </div>
</div>
	
<div id="cookies" class="pop w100">
  <div class="dialog">
    <h2>Cookie Policy</h2>
    <a href="#">&#x2715;</a>
    <div>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. </div>
  </div>
</div>
</div>

<svg class="svg-icons">
        <symbol id="icon-person" viewBox="0 0 24 24">
            <path d="M12 14.016c2.672 0 8.016 1.313 8.016 3.984v2.016h-16.031v-2.016c0-2.672 5.344-3.984 8.016-3.984zM12 12c-2.203 0-3.984-1.781-3.984-3.984s1.781-4.031 3.984-4.031 3.984 1.828 3.984 4.031-1.781 3.984-3.984 3.984z"></path>
        </symbol>
        <symbol id="icon-lock" viewBox="0 0 24 24">
            <path d="M8.5 11c0 0.732 0.166 1.424 0.449 2.051l-3.949 3.949c0 0 0 0.672 0 1.5s0.896 1.5 2 1.5h2v-2h2v-2c0 0 2.329 0 2.5 0 2.762 0 5-2.238 5-5s-2.238-5-5-5-5 2.238-5 5zM13.5 13c-1.104 0-2-0.896-2-2 0-1.105 0.896-2.002 2-2.002 1.105 0 2 0.896 2 2.002 0 1.104-0.895 2-2 2z"></path>
        </symbol>
        <symbol id="icon-mail" viewBox="0 0 24 24">
            <path d="M12 11.016l8.016-5.016h-16.031zM20.016 18v-9.984l-8.016 4.969-8.016-4.969v9.984h16.031zM20.016 3.984c1.078 0 1.969 0.938 1.969 2.016v12c0 1.078-0.891 2.016-1.969 2.016h-16.031c-1.078 0-1.969-0.938-1.969-2.016v-12c0-1.078 0.891-2.016 1.969-2.016h16.031z"></path>
        </symbol>
        <symbol id="icon-arrow-right-outline" viewBox="0 0 24 24">
                <path d="M13.293 7.293c-0.391 0.391-0.391 1.023 0 1.414l2.293 2.293h-7.586c-0.552 0-1 0.448-1 1s0.448 1 1 1h7.586l-2.293 2.293c-0.391 0.391-0.391 1.023 0 1.414 0.195 0.195 0.451 0.293 0.707 0.293s0.512-0.098 0.707-0.293l4.707-4.707-4.707-4.707c-0.391-0.391-1.023-0.391-1.414 0z"></path>
        </symbol>
        <symbol id="icon-eye" viewBox="0 0 24 24">
            <path d="M12 9c1.641 0 3 1.359 3 3s-1.359 3-3 3-3-1.359-3-3 1.359-3 3-3zM12 17.016c2.766 0 5.016-2.25 5.016-5.016s-2.25-5.016-5.016-5.016-5.016 2.25-5.016 5.016 2.25 5.016 5.016 5.016zM12 4.5c5.016 0 9.281 3.094 11.016 7.5-1.734 4.406-6 7.5-11.016 7.5s-9.281-3.094-11.016-7.5c1.734-4.406 6-7.5 11.016-7.5z"></path>
            <rect id="visible" style="stroke-width:3;" width="19.118645" height="0.40677965" x="6.4119263" y="-3.57639"
                transform="matrix(0.54941993,0.83554637,-0.83554637,0.54941993,0,0)" />
        </symbol>
    </svg>


    <script>
    	$ = id => {
  return document.getElementById(id);
}
togglePassVisibility = el => {
  $(el).type === "password"? 
    $(el).type = "text"
    : $(el).type = "password";
  $("visible").style.display === "none"?
    $("visible").style.display = "block"
    : $("visible").style.display = "none";
}


    </script>
</body>
</html>