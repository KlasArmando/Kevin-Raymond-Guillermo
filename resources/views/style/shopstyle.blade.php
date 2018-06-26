<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
html, body {
background: #d9d9d9;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #f2f2f2, #a6a6a6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #f2f2f2, #a6a6a6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

background-color: #d9d9d9;
color: #636b6f;
font-family: 'Raleway', sans-serif;
font-weight: 100;
height: 500vh;
margin: 0;
}

.full-height {
height: 100vh;
}

.flex-center {
align-items: center;
display: flex;
justify-content: center;
}

.position-ref {
position: relative;
}

.top-right {
position: absolute;
right: 10px;
top: 18px;
}

.content {
text-align: center;
    padding-left: 10px;
}

.title {
font-size: 84px;
}




.links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;

}
.links{
    list-style: none;
    margin: 0;

    background: #d9d9d9;

    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;

    -webkit-flex-flow: row wrap;
    justify-content: center;
}

.links a {
    text-decoration: none;
    display: block;
    padding: 1em;
    color: #636b6f;
}
@media all and (max-width: 800px) {
    .links {
        justify-content: space-around;
    }
}

@media all and (max-width: 600px) {
    .links {
        -webkit-flex-flow: column wrap;
        flex-flow: column wrap;
        padding: 0;
    }
    .links a {
        text-align: center;
        padding: 10px;
        border-top: 1px solid rgba(255,255,255,0.3);
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }


    .links :last-of-type a {
        border-bottom: none;
    }
}

.m-b-md {
margin-bottom: 30px;
}
.content :hover {
    background-color: gray;
    color: whitesmoke;
}



h2{
text-align: center;
}

hr {
color: #123455;
}

.container {
    margin: 0 auto;
    max-width: 1200px;

    padding-left: 90px;
}
.responsive-image {
    max-width: 95%;
    padding: 10px;
}
.cell img {
    display: block;
}
@media screen and (min-width: 600px) {
    .grid {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
    }
    .cell {
        width: calc(50% - 2rem);
    }
}
@media screen and (min-width: 1000px) {
    .cell {
        width: calc(50% - 2rem);
    }
}

.table{
    padding-left: 280px;
    padding-top: 20px;
}




.myButton {
-moz-box-shadow: 3px 4px 0 0 #899599;
-webkit-box-shadow: 3px 4px 0 0 #899599;
box-shadow: 3px 4px 0 0 #899599;
background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #bab1ba));
background:-moz-linear-gradient(top, #ededed 5%, #bab1ba 100%);
background:-webkit-linear-gradient(top, #ededed 5%, #bab1ba 100%);
background:-o-linear-gradient(top, #ededed 5%, #bab1ba 100%);
background:-ms-linear-gradient(top, #ededed 5%, #bab1ba 100%);
background:linear-gradient(to bottom, #ededed 5%, #bab1ba 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#bab1ba',GradientType=0);
background-color:#ededed;
-moz-border-radius:2px;
-webkit-border-radius:2px;
border-radius:2px;
border:1px solid #d6bcd6;
display:inline-block;
cursor:pointer;
color:#3a8a9e;
font-size:17px;
padding:7px 20px;
text-decoration:none;
text-shadow:0 1px 0 #e1e2ed;
}
.myButton:hover {
background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bab1ba), color-stop(1, #ededed));
background:-moz-linear-gradient(top, #bab1ba 5%, #ededed 100%);
background:-webkit-linear-gradient(top, #bab1ba 5%, #ededed 100%);
background:-o-linear-gradient(top, #bab1ba 5%, #ededed 100%);
background:-ms-linear-gradient(top, #bab1ba 5%, #ededed 100%);
background:linear-gradient(to bottom, #bab1ba 5%, #ededed 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bab1ba', endColorstr='#ededed',GradientType=0);
background-color:#bab1ba;
}
.myButton:active {
position:relative;
top:1px;
}

</style>
<body>
<div class="content4">
@yield('content4')
</div>

</body>
</html>