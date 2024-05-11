function Redirect() {
  window.location.replace("../AppWrite/AddWrite.php");
}
function Refresh() {
  window.location.replace("../AdminPanel/AdminPanel.php");
}
function UpDateAndDelete(id) {
  window.location.replace("../AdminPanel/AdminPanel.php?ID=" + id);
}

let write = document.getElementById("Writes");
let contacts = document.getElementById("Contacts");
let InBox = document.getElementById("InBox");
function Writes() {
  write.className = "visible";
  contacts.className = "hidden";
  InBox.className = "hidden";
}
function Contacts() {
  write.className = "hidden";
  contacts.className = "visible";
  InBox.className = "hidden";
}
function _inbox() {
  write.className = "hidden";
  contacts.className = "hidden";
  InBox.className = "";
}
