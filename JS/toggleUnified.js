// this is a unified toggle system that will toggle all the files
function toggle(page){

  let contentForms

  contentForms = document.getElementsByClassName('contentForms');

  //function that shifts the pages
  for(i=0; i<contentForms.length; i++){
    contentForms[i].style.display = "none"
  }

  document.getElementById(page).style.display = "flex"
}

document.getElementById('defaultDisplay').click()