function toggleDropdown() { 
  document.getElementById("ComplexityList").classList.toggle("show"); 
} 
function selectOption(element) { 
  const button = document.querySelector('.filter button'); 
  button.textContent = element.textContent; 
  document.getElementById("ComplexityList").classList.remove("show"); 
} 
window.onclick = function(event) { 
  if (!event.target.matches('.filter button')) { 
    let dropdowns = document.getElementsByClassName("Complexity-list"); 
    for (let i = 0; i < dropdowns.length; i++) { 
      let openDropdown = dropdowns[i]; 
      if (openDropdown.classList.contains('show')) { 
        openDropdown.classList.remove('show'); 
      } 
    } 
  } 
}