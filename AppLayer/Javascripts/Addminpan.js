function Redirect() {
  window.location.replace("../AppWrite/AddWrite.php");
}
function Refresh() {
  window.location.Refresh();
}
function UpDateAndDelete(id) {
  window.location.replace("../AdminPanel/AdminPanel.php?ID=" + id);
}
function UpDatediraction(id) {
  window.location.replace("../AppWrite/EditWrite.php?ID=" + id);
}

let write = document.getElementById("Writes");
let contacts = document.getElementById("Contacts");
let Inbox = document.getElementById("Inbox");

function Writes() {
  write.classList.toggle("visible");
  contacts.classList.add("hidden");
  Inbox.classList.add("hidden");
}

function Contacts() {
  contacts.classList.toggle("visible");
  write.classList.add("hidden");
  Inbox.classList.add("hidden");
}

function Inbox() {
  Inbox.classList.toggle("visible");
  write.classList.add("hidden");
  contacts.classList.add("hidden");
}
