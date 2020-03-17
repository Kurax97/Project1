function searchFunction() {
  // Declare variables
  var input, filter, div, divname, i, txtValue;
  input = document.getElementById('searchbar');
  filter = input.value.toUpperCase();
  div = document.getElementsByClassName('station');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < div.length; i++) {
    divname = div[i].getElementsByClassName('name')[0];
    txtValue = divname.textContent || divname.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      div[i].style.display = "";
    } else {
      div[i].style.display = "none";
    }
  }
}

submitForms = function(){
    document.forms["selectco"].submit();
    document.forms["cp"].submit();
    document.forms["cb"].submit();
}