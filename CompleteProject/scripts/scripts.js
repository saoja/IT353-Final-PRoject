//creating close button for example list items.
var createList = document.getElementsByTagName('li');
var index;

for (index = 0; index < createList.length; index++) {
  var newSpan = document.createElement("SPAN");
  var textNode = document.createTextNode("\u00D7");
  newSpan.className = "close";
  newSpan.appendChild(textNode);
  createList[index].appendChild(newSpan);


}
var closeButton = document.getElementsByClassName("close");
//removes items from list when clicking the onclick method
//styled to be an x

for (i = 0; i < closeButton.length; i++) {
  closeButton[i].onclick = function() {
    var theDiv = this.parentElement;
    theDiv.style.display = "none";
  }
}
//creates the elements for the todo list function
function createNewElement() {
  var li = document.createElement('li');
  var userInput = document.getElementById("input").value;
  var textNode = document.createTextNode(userInput);
  li.appendChild(textNode);

  //prompt to tell user his entry isnt valid.
  if (userInput === '') {
    alert("Try Again! Add items to your list!")
  } else {
    //gives user chance to add element to the list
    document.getElementById("todo").appendChild(li);
  }


//gets userInput and creates new list items
  document.getElementById("input").value = "";
  var closeTag = document.createElement("SPAN");
  var text2 = document.createTextNode("\u00D7");
  closeTag.className = "close";
  closeTag.appendChild(text2);
  li.appendChild(closeTag);

  for (i = 0; i < closeButton.length; i++) {
    closeButton[i].onclick = function() {
      var createDiv = this.parentElement;
      createDiv.style.display = "none";
    }

  }

}


//checking thru items
var ulList = document.querySelector('ul');
ulList.addEventListener('click', function(event) {
  if (event.target.tagName === "LI") {
    event.target.classList.toggle('checked');
  }

}, false);

//calls the function
createNewElement();
