var type , modele , prix, expanded = false;

  function showCheckboxes(type) {
    var checkboxes = document.getElementById(type);
    expanded ? (checkboxes.style.display = "none" , expanded = false) : (checkboxes.style.display = "block" , expanded = true);
  }
