// var type , modele , prix, expanded = false;

  // function showCheckboxes(type) {
  //   var checkboxes = document.getElementById(type);
  //   expanded ? (checkboxes.style.display = "none" , expanded = false) : (checkboxes.style.display = "block" , expanded = true);
  // }

  document.getElementById('categorie-container').addEventListener('click', function(event){
    if(event.target.className === "overSelect" ) {
      let checkboxes = event.target.parentNode.parentNode.querySelector('.checkboxes');
      checkboxes.style.display = checkboxes.style.display === "none" ? "block" : "none";
    }
  },false);
