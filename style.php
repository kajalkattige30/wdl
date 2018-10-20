*
{
    margin: 0;
    padding: 0;
}

body
{
    font-family: monospace;
    margin: 0px;
    padding:0px;
    height: 500%;
    width: 100%;
    cursor: url(cursor3.jpg),default;

}

*{
    scroll-behavior: smooth;
}

/*::-webkit-scrollbar{
    width: 8px;
}

::-webkit-scrollbar-thumb{
    border-radius: 10px;
    background-color: grey;
    box-shadow:inset 0 0  6px rgba(0,0,0,.3;
}

::-webkit-scrollbar-track{
    border-radius: 10px;
    background-color: white;
    box-shadow:inset 0 0  6px rgba(0,0,0,.3;   
}*/


.row
{
    max-width: 1200px;
    margin: auto;
    float: left;
}

.main-nav
{
    float: right;
    list-style: none;
    margin-top: 30px;
    margin-left: 150px;
}
.main-nav li
{
    display: inline-block;
}

.main-nav li.active a
{
    border: 1px solid white;
    
}

.main-nav li a:hover
{
    border: 1px solid white;
    background-color: maroon;
    transition: all 0.3s ease-in;
}


.main-nav li a
{
    color: white;
    text-decoration: none;
    padding: 5px 20px;
    font-family: "Roboto", sans-serif;
    font-size: 15px;
}

.page1
{
    position: absolute;
    width: 1200px;
    margin-left: 0px;
    margin-top: 0px;
    
}


h1
{
    color: white;
    text-transform: uppercase;
    font-size: 70px;
    text-align: center;
    margin-top: 275px;
    
}

h2
{
    color: white;
    text-transform: uppercase;
    font-size: 60px;
    text-align: center;
    margin-top: 25px;
    
}
header
{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(i4.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
.button
{
    margin-top: 30px;
    margin-left: 440px;
}

.btn
{
    border: 1px solid white;
    padding: 10px 30px;
    color: white;
    text-decoration: none;
    margin-right: 5px;
    font-size: 13px;
    text-transform: uppercase;
}
.btn-one
{

    font-family: "Roboto", sans-serif;
}
.btn-one:hover
{
    background-color: maroon;
    transition: all 0.3s ease-in;
}

.btn-two
{
    font-family: "Roboto", sans-serif;
}


.btn-two:hover
{
    background-color: maroon;
    transition: all 0.3s ease-in;
    
        
}

.logo img
{
    width: 150px;
    height: auto;
}

/*.page2
{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pic2.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}

.page3
{
    background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(pic1.jpg);
    height: 100vh;
    background-size: cover;
    background-position: center;
}*/

@keyframes slider {

0% {
    left: 0;
}

20% {
    left: 0;
}

25% {
    left: -100%;
}

45% {
    left: -100%;

}

50% {
        left: -200%;

}

70% {
    left: -200%;
}

75% {
    left: -300%;
}

95% {
    left: -300%;
}

100% {
    left: -400%;

}

}

#slider {
    background-color: #F9EEA7;
    overflow: hidden;
}

#slider figure img {
    width: 20%;
    float: left;
}

#slider figure {
    position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    text-align: left;
    font-size: 0;
    animation: 20s slider infinite; 

}



}










