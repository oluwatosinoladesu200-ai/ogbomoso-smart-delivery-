const postcodeInput = document.getElementById("postcode");
const message = document.getElementById("postcodeMessage");
const checkBtn = document.getElementById("checkBtn");
const form = document.getElementById("deliveryForm");

function normalizedPostcode() {
  return postcodeInput.value.toUpperCase().replace(/\s+/g, "");
}
function showMessage(text, kind) {
  message.textContent = text;
  message.className = "message " + kind;
}
function checkFormat() {
  const code = normalizedPostcode();
  postcodeInput.value = code;
  if (!code) {
    showMessage("Enter the postcode for the destination building.", "info");
    return false;
  }
  if (!/^[A-Z0-9]{11}$/.test(code)) {
    showMessage("The postcode should contain exactly 11 letters/numbers. Check the code and try again.", "error");
    return false;
  }
  showMessage("Format looks correct. This does not confirm that the postcode exists; live NIPOST verification will be connected after API access is configured.", "info");
  return true;
}
checkBtn.addEventListener("click", checkFormat);
postcodeInput.addEventListener("input", () => {
  message.textContent = "";
  message.className = "message";
});
form.addEventListener("submit", (event) => {
  event.preventDefault();
  if (!checkFormat()) return;
  const request = {
    postcode: normalizedPostcode(),
    address: document.getElementById("address").value.trim(),
    customerName: document.getElementById("customerName").value.trim(),
    phone: document.getElementById("phone").value.trim(),
    notes: document.getElementById("notes").value.trim()
  };
  // Demo only: no data is sent to a server or stored.
  alert(
    "Demo delivery request prepared.\\n\\n" +
    "Postcode: " + request.postcode + "\\n" +
    "Address: " + request.address + "\\n\\n" +
    "Next stage: connect authorised postcode verification and save orders securely."
  );
});
