function allnumeric(inputtxt)
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
