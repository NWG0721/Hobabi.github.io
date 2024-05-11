function Redirect() {
  window.location.replace("../AppWrite/AddWrite.php");
}
function Refresh() {
  window.location.replace("../AdminPanel/AdminPanel.php");
}
function UpDateAndDelete(id) {
  window.location.replace("../AdminPanel/AdminPanel.php?ID=" + id);
}
function UpDatediraction(id) {
  window.location.replace("../AppWrite/EditWrite.php?ID=" + id);
}

let write = document.getElementById("Writes");
let contacts = document.getElementById("Contacts");
function Writes() {
  if (write.className == "hidden") {
    write.className = "visible";
    contacts.className = "hidden";
  } else {
    write.className = "hidden";
  }
}
function Contacts() {
  if (contacts.className == "hidden") {
    contacts.className = "visible";
    write.className = "hidden";
  } else {
    contacts.className = "hidden";
  }
}
