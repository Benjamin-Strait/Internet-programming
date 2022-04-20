function showMenu() 
{
  document.getElementById("Dropdown").classList.toggle("show");
}

function hideMenu() 
{
  var myDropdown = document.getElementById("Dropdown");
    if (myDropdown.classList.contains('show')) 
    {
      myDropdown.classList.remove('show');
    }
}