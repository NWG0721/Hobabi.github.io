function Redirect() {
  window.location.replace("../AppWrite/AddWrite.php");
}
function Refresh() {
  window.location.Refresh();
}
function UpDateAndDelete(id) {
  window.location.replace("../AdminPanel/AdminPanel.php?ID=" + id);
}
function GotoCategory() {
  window.location.replace("../Categories/Data");
}
let write = document.getElementById("Writes");
let contacts = document.getElementById("Contacts");
let InBox = document.getElementById("InBox");
let Collection = document.getElementById("Collection");
function Writes() {
  write.className = "";
  contacts.className = "hidden";
  InBox.className = "hidden";
  Collection.className = "hidden"
}
function Contacts() {
  write.className = "hidden";
  contacts.className = "";
  InBox.className = "hidden";
  Collection.className = "hidden"
}
function _inbox() {
  write.className = "hidden";
  contacts.className = "hidden";
  InBox.className = "";
  Collection.className = "hidden"
}
function _Collection() {
  write.className = "hidden";
  contacts.className = "hidden";
  InBox.className = "hidden";
  Collection.className = ""
}
