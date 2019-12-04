/*function allnumeric(inputtxt)
document.getElementById('CCNSC')
      {
      var numbers = /^[0-9]+$/;
      if(inputtxt.value.match(numbers))
      {
      alert('Congratulations your Bank Info has been accepted');
      return true;
      }
      else
      {
      alert('Please input numbers characters only for credit card number and security number');
      return false;
      }
      }

function allLetter(inputtxt)
document.getElementById('FNLN')
      {
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
      alert('Congratulations your name has been accepted');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only for the Name portion');
      return false;
      }
      }
*/
function CardValidate(){
  var Fname = document.forms["form1"]["Fname"].value;
  	var Lname = document.forms["form1"]["Lname"].value;
  	var CardN = document.forms["form1"]["CardN"].value;
  	var Code = document.forms["form1"]["Code"].value;
  	var Month = document.forms["form1"]["Month"].value;
  	var Year = document.forms["form1"]["Year"].value;
  	var Address = document.forms["form1"]["Address"].value;
  	var Address2 = document.forms["form1"]["Address2"].value;
  	var City = document.forms["form1"]["city"].value;
  	var Province = document.forms["form1"]["province"].value;

  	var Country = document.forms["form1"]["Country"].value;
  	var Date = document.forms["form1"]["Date"].value;
  	var Email = document.forms["form1"]["email"].value;

    if(Fname==null||Fname==""){
    		alert("First Name needs to be added");
    		return false;
    	}


    	if(Lname==null||Lname==""){
    		alert("Last Name needs to be added");
    		return false;
    	}
    	if (CardN.length!==12){
    		alert("Card Number needs to be 12 digits long");
    		return false;
    	}
    	if (Code.length!==3){
    		alert("Security Code must be 3 digits long");
    		return false;
    	}
    	if(Address==null||Address==""){
    		alert("An Address  eeds to be added");
    		return false;
    	}

    	if(City==null||City==""){
    		alert("A City needs to be added");
    		return false;
    	}
    	if(Province==null||Province==""){
    		alert("A Province/State needs to be added");
    		return false;
    	}

    	if(Date==null||Date==""){
    		alert("A Delivery Date must be added");
    		return false;
    	}
    	if(Email==null||Email==""){
    		alert("A email must be added");
    		return false;
    	}
}
function SignupValidate(){
  var Fname = document.forms["form1"]["Fname"].value;
  var Lname = document.forms["form1"]["Lname"].value;
  var Uname = document.forms["form1"]["Uname"].value;
  var Pass = document.forms["form1"]["pass"].value;

  if(Fname==null||Fname==""){
      alert("First Name needs to be added");
      return false;
    }


    if(Lname==null||Lname==""){
      alert("Last Name needs to be added");
      return false;
    }
    if(Uname=null||Uname==""){
      alert("A user name must be added");
      return false;
    }
    if(Pass==null||Pass==""){
      alert("A password must be added");
      return false;
    }

}
function lettersOnly(input){
	var regex = /[^a-z]/gi;
	input.value =input.value.replace(regex,"")

}
