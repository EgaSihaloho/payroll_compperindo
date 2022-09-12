function toRp(data) {
  return "Rp. " + parseFloat(data).toLocaleString("en-US", { style: "currency", currency: "USD" }).replace("$", "").replace(".00", "");
}

function removeRp(data) {
  return data.replace("Rp.", "");
}

function removeComa(data) {
  return data.replace(/,/g, "");
}
