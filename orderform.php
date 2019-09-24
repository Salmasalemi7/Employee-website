<!DOCTYPE html>
<html>
<head>

<style>
* {
  box-sizing: border-box;
}

input[type=text], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number], select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
a:link, a:visited {
  background-color: lightblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin-top: 10px;
  margin-left: 89%;
   border-radius:18px;
}

a:hover, a:active {
  background-color: lightgreen;
}
h2{text-align: center;}
p{text-align: center;}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
button{
  margin-left: 90%;
  background-color: lightblue;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
   border-radius:18px;
}
</style>
</head>
<body>

<h2>Order Form</h2>
<p>Please fill in the form and you will be contacted via email within 24 to 48 work hours.<br> 
Thanks,</p>


<div class="container">
  <form action="requestorder.php"  method="post">
  <!--<div class="row">
    <div class="col-25">
      <label for="fname">Product Name:</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="firstname" requrid/>
    </div>
  </div>-->
  <div class="row">
    <div class="col-25">
      <label for="lname">Product ID: </label>
    </div>
    <div class="col-75">
      <input type="number" name="Product_ID" requrid/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Quantity </label>
    </div>
    <div class="col-75">
      <select  name="Quantity" required/>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Employee Name: </label>
    </div>
    <div class="col-75">
      <input type="text" type="hidden" name="Employee_Name" required/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Emplyee ID: </label>
    </div>
    <div class="col-75">
      <input type="number" name="Emplyee_ID" required/>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Email : </label>
    </div>
    <div class="col-75">
      <input type="text"  name="Email" placeholder="Employee @Company.edu.sa " required/>
    </div>
  </div>
  <div class="row">
    <button onclick="myFunction()" type="submit" name="submit">Submit</button>
    <!--<input type="submit">-->

   <!--<input type="submit" value="Submit">-->
  </div>
  </form>
</div>

</body>
</html>
<script type="text/javascript">
  function myFunction() {
  alert("SUBMIT SUCCESSFULLY!");
}
</script>
