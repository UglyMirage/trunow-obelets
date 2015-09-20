<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style> 
            body{
    max-height:99vh;
}
.shaker:hover {
	
    -webkit-animation: shake 0.2s ease-in-out infinite;
    
	animation: shake 0.2s ease-in-out infinite;
}

@-webkit-keyframes shake {
	from { -webkit-transform: rotateZ(1deg) }
	38% { -webkit-transform: rotateZ(-1deg) }
	to { -webkit-transform: rotateZ(.5deg) }
}


@keyframes shake {
	from { transform: rotateZ(1deg) }
	38% { transform: rotateZ(-1deg) }
	to { transform: rotateZ(.5deg) }
}
/*
 * Loader
 */
.loader {
    display: block;
    clear: both;
}
.loader::before {
	background-color: #fff;
    content:".";
    animation: load 1s linear infinite;
    position: relative;
    top: 0px;
    width:24px;
    height:24px;
    margin: 0 8px 0 0;
    overflow: hidden;
    display: block;
    color: #000;
    border-radius: 24px;
    font:bold 32px/0.2 serif;
    float: left;
}
@keyframes load {
	from {
	    transform: rotate(0deg);
        background-color: #fff;
        color: #000;
    }
    50% {
        transform: rotate(180deg);
        background-color: #000;
        color: #fff;
    }
	to {
	    transform: rotate(360deg);
        background-color: #fff;
        color: #000;
    }
}


#div {
    width: 200px;
    height: 200px;
    margin: 40px auto;
    position: relative;
    
}
#bugw{
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
}
#bug{
    font-size: 4em;
    position: relative;
    top: 0px;
    left: 0px;
    width: 60px;
    height: 60px;
    text-align: center;
    z-index: 100;
}
#butl {
    position: absolute;
    top: 160px;
    left: 40px;
    width: 120px;
    cursor: pointer;
    background-color:yellow;
    heigth: 40px;
    text-align: center;
    z-index: 200;
}
#but {
    visibility: hidden;
}
#but:checked + #bugw {
    color: red;
    animation: move 1s linear infinite;
    -webkit-animation: move 1s linear infinite;
}
@keyframes move {
    from {
        transform: rotate(0deg);
    }
    50% {
        transform: rotate(90deg);
    }
    to {
        transform: rotate(360deg);
    }
}
@-webkit-keyframes move {
    from {
        -webkit-transform: rotate(0deg);
    }
    50% {
        -webkit-transform: rotate(90deg);
    }
    to {
        -webkit-transform: rotate(360deg);
    }
}

.a {
    padding: 5px 10px;
    background: #69f;
    color: #000;
   
     -webkit-transition: background 4.5s ease, color 2.3s ease;//1.1 2 otve4aet za shrift
    /* -webkit-transition-property: background; //1.0 -webkit-transition: background 0.5s ease;
    -webkit-transition-duration: 5.5s;
    -webkit-transition-timing-function: ease; //? 
    */
    }
.a:hover {
    background: #f00;//#33f;
    color: #fff;
    }
    
    //ll
    
    #ball {
    width: 60px;
    height: 60px;
    border-radius: 30px;
    background: #f00;
    position: absolute;
    bottom: 0;
    border: 1px outset #f00;
    }
    @-webkit-keyframes bounce {
    0%	{ bottom: 0; }
    50%	{ bottom: 100px; }
    100%	{ bottom: 0; }
    }
    #ball:hover {
    -webkit-animation: bounce 1s infinite ease;
    }
</style>
    </head>
    
    <body>
                
        
            <p class="shaker">трясучка (курсор наведи!)</p>
            <p class="loader">загрузка...</p>
            <p class="a"> linkpage </p>
            <div id="div">
    <label id="butl" for="but">Move Bug!</label>
  <input type="checkbox" name="but" id="but">
  <div id="bugw"><span id="bug">*</span></div>
</div>
            
               <div id="ball">   
               </div>       
       

     
    </body>
</html>
