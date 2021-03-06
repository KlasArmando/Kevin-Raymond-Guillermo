<style>
/* Blog style */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
  box-shadow: 7px 7px 5px grey;
}

  /* Left column */
.leftcolumn {
  float: left;
  width: 69%;
}

  /* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 50px;
}

  /* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
  box-shadow: 7px 7px 5px grey;
}

  /* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
  box-shadow: 7px 7px 5px grey;
}

  /* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

  /* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
  width: 100%;
  padding: 0;
  }
}

 /* style for the buttons */
.button > a{
    background-color: #F2F2F2;
    border: none;
    color: #AAAAAA;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 3px 1px;
    cursor: pointer;
    transition-duration: 0.4s;
}

.hoverButton:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

input[type=text] {
    width: 200px;
    border-radius: 4px;
}

input[type=submit],[type=reset],[type=button] {
    background-color: #F2F2F2; /* Green */
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    transition-duration: 0.4s;
}

input[type=submit]:hover,[type=reset]:hover,[type=button]:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.pagination {
    display: inline-block;
    list-style: none;
}

.pagination li {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination li.active {
    background-color: #4CAF50;
    color: white;
}

.pagination li:hover:not(.active) {background-color: #ddd;}
</style>
