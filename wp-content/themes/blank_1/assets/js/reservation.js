var otherCheckbox = document.querySelector('input[value="accept"]');

otherCheckbox.onchange = function() {
  if(otherCheckbox.checked == false) {
    document.getElementById('checkError').innerHTML = "je change le text";
  } else {
    otherText.style.visibility = 'hidden';
  }
};