@extends('layouts.app')
<!-- Select Project -->

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body {
  font-family: 'Ubuntu', sans-serif;
  margin: 0;
  padding: 0;
  font-size: 1em;
}

/* nav */

#container {
  display: grid;
  grid-template-columns: 0.5fr 0.5fr 5fr 1fr;
}

#container div {
  box-shadow: 0px 4px 2px rgba(0, 0, 0, 0.1);
  height: 50px;
}

#container i {
  padding-top: 15px;
  color: #C4C4C4
}

#container p {
  justify-content: center;
  margin-top: 15px;
  font-style: normal;
  font-weight: bold;
  color: #323A43;
}

.cnc {
  border: none;
  background:rgba(207, 204, 204, 0.4);
  height: 50px;
  width: 100%;
  color: white
}

/* main section */

.main-section {
  margin: 50px auto;
  width: 50%;
}

.section1 {
  border: 1px solid #919191;
  box-sizing: border-box;
}

.section1 div {
  padding: 5px 20px;
}

#word h1 {
  font-family: Ubuntu;
  font-style: normal;
  font-weight: bold;
  font-size: 32px;
  line-height: 48px;
  color: #262626;
}

#word h5 {
  font-family: Ubuntu;
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  line-height: 21px;
  color: #262626;
}

#glac h1 {
  font-family: Ubuntu;
  font-style: normal;
  font-weight: normal;
  font-size: 1.8rem;
  line-height: 41px;
  color: #262626;
  padding-top: 30px;
  margin-left: 50px;
}

div h3 {
  font-family: Ubuntu;
  font-style: bold;
  font-weight: bold;
  font-size: 1.4rem;
  line-height: 41px;
  color: #262626;
}

.bill p {
  font-size: 1em;
  padding-top: 10px;
  color: #262626;
}

.hour {
  display: grid;
  grid-template-columns: 1fr 1fr;
}

.hours {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;

   }

input {
  height: 30px;
  width: 50%;
  text-align: center;
  border: 1px solid;
}

.start {
  margin-left: 1px;
  width: 100%;
}

.end {
  margin-left: 50px;
  width: 100%;
}

i input {
  border: none;
  border-bottom: 1px solid;
  text-decoration: underline;
}

.sub {
  width: 90%;
}

.hour {
  display: grid;
  grid-template-columns: 1fr 1fr;
}



#currency {
  font-family: Ubuntu;
  font-style: normal;
  font-weight: normal;
  font-size: 20px;
  line-height: 28px;
  color: #262626;
  padding-bottom: 20px;
  
}

#currency p{
float: right;
padding-right: 10px;
}
select {
  border: none;
  border-bottom: 1px solid;
}

.btn {
  border: 1px solid #e4e4e4;
  background: rgba(207, 204, 204, 0.4);
  margin-top: 40px;
  margin-left: 30%;
  width: 40%;
  height: 60px;
  color: white;
  font-size:17px;
}

@media screen and (max-width: 1400px) {
  .start {
    margin-left: 80px;
    width: 100%;
  }
  .end {
    margin-left: 30px;
    width: 100%;
  }
}

@media screen and (max-width: 1102px) {
  .hours {
    display: grid;
    grid-template-columns: 0.5fr 1fr 1fr;
  }
}

@media (max-width: 948px) {
  .hour, .hours {
    display: block;
  }
  .start {
    margin-left: 0px;
    width: 100%;
  }
  .end {
    margin-left: 0px;
    width: 100%;
  }
}
    
 @media (max-width: 600px) {
  .main-section {
  margin: 50px auto;
  width: 80%;
}
  
  
input {
   width: 80%;
  margin-bottom:10px;
 }
}

.text-center:hover{
color: black;
}

txt:hover{
  color: black;
}
</style>

@endsection


@section('content')
<div id="container">

    <!------I added the href function in order to make the cancel button return to the dashboard------>
<div class=" text-center" id="txt">
  <span>
      
    <a href="dashboard.html">
    <i class="fa fa-times"></i>
  </span></a>
</div>

 <!------I added the href function in order to make the back button return to step 1------>
<div class="text-center">
  <span>
        <a href="create_estimate_page.html">
    <i class="fa fa-chevron-left"></i>
  </span></a>
</div>

<div class="text-center">
  <p class=""> <h4>Create Estimate</h4></p>
</div>

<div class="">

  <input class="text-center cnc" id="but" value="SETUP THIS PROJECT" type="button">
</div>


</div>


<div class="container-fluid main-section">

<div id="word">
  <h1>Evaluation</h1>
  <h5>Please Input the required fields in the form below</h5><br>
</div>



<div class="section1">

  <div id="glac">
    <h1>Glacier Fintech App</h1>
    <hr />
  </div>
  <hr />

<form action="/estimate/create/step3" method="post">
    @csrf
  <div id="bill">
    <h3>&nbsp&nbsp&nbsp Billing</h3>

     <div class="hour">
      <p>How long (in hours) will it take you <br> to complete this project?</p>

      <input type="number" name="time" placeholder="Hours" id="hrs"  style="border: 1px solid #919191;" required/>
    </div>

                      <!------I eliminated the "how much in hours, do you charge per hour" text------>

    <div class="hours">
      <p> Project starts/ends</p>
      <i class="fa fa-calendar start"><input type="text" min="2019-10-31" placeholder="Set start date" onfocus="(this.type='date')" name="start"
          placeholder=" Set start date"  required/></i>
      <i class="fa fa-calendar end"><input type="text" min="2019-10-31" placeholder="Set end date" onfocus="(this.type='date')" name="end"
          placeholder="Set end date" required/></i>

    </div>

  </div>

  <hr />
  <div>
    <h3>&nbsp&nbsp&nbsp Expenses</h3>
    <div class="hour">
      <p id="cost">
        How much would it cost you to power your devices or equipment <br>for this
        project?
      </p>
      <input type="number" name="equipment_cost" placeholder="NGN 0.00" id="amt"  style="border: 1px solid #919191;" required/>
    </div>


    <div class="hour">
      <p id="sub">Are you subcontracting to anyone?</p>
      <input type="text" name="sub_contractors" id="estt"  placeholder="E.g. Illustrator, Consulting..." class="sub"  style="border: 1px solid #919191;" required/>
    </div><br>

    <div class="hour">
      <p id="pay">How much would they be paid?</p>
      <input type="number" name="sub_contractors_cost" placeholder="NGN 0.00" id="amt2" style="border: 1px solid #919191;" required/>
    </div>
  </div>
  <br>
  <div>
    <h3>&nbsp&nbsp&nbsp Expertise</h3>

    <div class="hour">
      <p id="proj">How many similar projects have<br>you done before?</p>
      <input type="number" name="similar_projects" id="sp" style="border: 1px solid #919191;" required/>

    </div>


    <div class="hour">
        <p id="rate">Out of 5 how would you rate your<br>experience level in executing this </i><br>project?<p>
        <input type="number" name="rating" id="rte" style="border: 1px solid #919191;" required/>/5
    </div>

  </div>
  <hr />


  <div class="ml-4" id="currency" name="currency_id" style="color: 1px solid #919191;">
         Currency:<select>
         
      <option>NGN</option>
      <option>AED</option>
      <option>AFN</option>
      <option>ALL</option>
      <option>AMD</option>
      <option>ANG</option>
      <option>AOA</option>
      <option>ARS</option>
      <option>AUD</option>
      <option>AWG</option>
      <option>AZN</option>
      <option>BAM</option>
      <option>BBD</option>
      <option>BDT</option>
      <option>BGN</option>
      <option>BHD</option>
      <option>BIF</option>
      <option>BMD</option>
      <option>BND</option>
      <option>BOB</option>
      <option>BRL</option>
      <option>BSD</option>
      <option>BSD</option>
      <option>BTN</option>
      <option>BWP</option>
      <option>BYN</option>
      <option>BZD</option>
      <option>CAD</option>
      <option>CDF</option>
      <option>CHF</option>
      <option>CLP</option>
      <option>CNY</option>
      <option>COP</option>
      <option>CRC</option>
      <option>CUC</option>
    </select>

   </div>

  



</div>


  <button type="submit" class="btn next" id="button">SETUP THIS PROJECT</button>
</div>
</form>
@endsection

@section('script')
<script>
    var button = document.getElementById("button");
    var but = document.getElementById("but");
    but.addEventListener("click",function(){
      var hrs = document.getElementById("hrs").value;
      var estt = document.getElementById("estt").value;
      var amt = document.getElementById("amt").value;
      var amt2 = document.getElementById("amt2").value;
      var sp = document.getElementById("sp").value;
      var rte = document.getElementById("rte").value;
    //&& est2.length < 1 && amt.length < 1 && amt2.length < 1 && sp.length < 1 && rte.length < 1){  
     if(hrs.length < 1 ){
        alert("please answer all the questions to proceed");
      }
      else{
        if(amt.length < 1){
          alert("please answer all the questions to proceed");
        }
        else if(amt.length < 1){
          alert("please answer all the questions to proceed");
        }
        else if(estt.length < 1){
          alert("please answer all the questions to proceed");
        }
        else if{
          if(amt2.length < 1){
          alert("please answer all the questions to proceed");
        }
        else if(sp.length < 1){
          alert("please answer all the questions to proceed");
        }
        else if(rte.length < 1){
            alert("please answer all the questions to proceed");
        }
        // else{
        // window.open("create_estimate_step1.html");
        // }
    
      }
    },false);

    button.addEventListener("click",function(){
      var hrs = document.getElementById("hrs").value;
      var estt = document.getElementById("estt").value;
      var amt = document.getElementById("amt").value;
      var amt2 = document.getElementById("amt2").value;
      var sp = document.getElementById("sp").value;
      var rte = document.getElementById("rte").value;
    //&& est2.length < 1 && amt.length < 1 && amt2.length < 1 && sp.length < 1 && rte.length < 1){  
     if(hrs.length < 1 ){
        alert("please answer all the questions to proceed");
      }
      else{
        if(amt.length < 1){
          alert("please answer all the questions to proceed");
        }
        else{
          if(amt.length < 1){
          alert("please answer all the questions to proceed");
        }
        else{
          if(estt.length < 1){
          alert("please answer all the questions to proceed");
        }
        else{
          if(amt2.length < 1){
          alert("please answer all the questions to proceed");
        }
        else{
          if(sp.length < 1){
          alert("please answer all the questions to proceed");
        }
        else{
          if(rte.length < 1){
          alert("please answer all the questions to proceed");
        }
        else{
        window.open("/estimate/create/step3");
        }
        }
        }
        }
        }
  
        }
      }
    },false);
  </script>
  
  
  <script>
  var currentDate = new Date();
  
  var date = currentDate.getDate();
  var day = currentDate.getDay();
  var month = currentDate.getMonth(); //Be careful! January is 0 not 1
  var year = currentDate.getFullYear();
  
  var cld = document.getElementById("cld");
  var cldTwo = document.getElementById("cldTwo");
  
  cld.min ="year-month-day";
  cldTwo.min ="year-month-day";
  
  
  </script>
  
  <script>
  $(document).ready(function(){
     
     $('input').on('keypress',function(){
      $('.next').css({"background":"#0ABAB5" , "color":"white"});
      $('.cnc').css({"background":"#0ABAB5"});
    })
    $('input').on('keyup',function(){
      $('.next').addClass("cnc");
      $('.cnc').css({"background":"rgba(207, 204, 204, 0.4);"});
    })
    
    
  })
  </script>
@endsection