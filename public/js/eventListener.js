document.addEventListener("click", async function (e) {
  const tokenComperindo = document.querySelector("#tokenComperindo").value;
  if (e.target.classList.contains("page-link")) {
    if (e.target.dataset.urlPage !== "") {
      loadingTable("show");
      refreshTable(e.target.dataset.urlPage);
    }
  } else if (e.target.classList.contains("btnSubmit")) {
    e.preventDefault();
    loadingTable("show");
    const key = searchInput.value == "" ? "**" : searchInput.value;
    const cleanSearch = key == "**" ? "**" : removeRp(removeComa(key));
    refreshTable(urlFind + cleanSearch);
  } else if (e.target.classList.contains("fa-pen-to-square")) {
    if (head == "Data Barang") {
      let th = document.querySelectorAll("th");
      label = [];
      th.forEach((data) => label.push(data.innerHTML));
      const dataEdit = dataTable.data[e.target.dataset.id];
      delete dataEdit.created_at;
      constructModal("edit", { title: "Edit Barang" });
      constructForm(dataEdit, e.target.dataset.id, label, "edit");
    } else if (head == "Data Karyawan") {
      label = [];
      let th = document.querySelectorAll("th");
      th.forEach((data) => label.push(data.innerHTML));
      delete label[7];
      const dataEdit = dataTable.data[e.target.dataset.id];
      constructModal("edit", { title: "Edit Barang" });
      constructForm(dataEdit, e.target.dataset.id, label, "edit");
      constructCustomNav([
        {
          html: "Detail Karyawan",
          classes: "detailKaryawan",
          url: "",
          id: e.target.dataset.id,
        },
        {
          html: "Template Gaji",
          classes: "templateGaji",
          url: `http://localhost:8000/getRelGaji/${dataEdit.id_rel_gaji}`,
          id: e.target.dataset.id,
        },
        {
          html: "History Gaji",
          classes: "historyGaji",
          url: `http://localhost:8000/HistoryGaji?id=${e.target.dataset.value}`,
          id: e.target.dataset.id,
        },
      ]);
    }
    btnModal.click();
  } else if (e.target.classList.contains("save")) {
    e.preventDefault();
    const prepareData = {};
    const inputEdit = document.querySelectorAll(".modal-body input");
    inputEdit.forEach((data) => {
      dataValue = data.value;
      if (data.getAttribute("name") == "harga") dataValue = removeRp(removeComa(dataValue));
      prepareData[data.getAttribute("name")] = dataValue;
    });
    const selectInput = document.querySelectorAll(".modal-body select");
    selectInput.forEach((data) => {
      dataValue = data.value;
      if (data.getAttribute("name") == "harga") dataValue = removeRp(removeComa(dataValue));
      prepareData[data.getAttribute("name")] = dataValue;
    });

    prepareData["token"] = tokenComperindo;

    const resultData = await findData(e.target.dataset.url, "post", prepareData);
    let status = resultData.code == "99" ? false : true;
    showResponse(resultData.header, resultData.desc, status);
    loadingTable("show");
    refreshTable(urlTable);
  } else if (e.target.classList.contains("fa-plus")) {
    constructModal("add", { title: "Add Barang" });
    let th = document.querySelectorAll("th");
    label = [];
    th.forEach((data) => {
      if (data.innerHTML !== "#") label.push(data.innerHTML);
    });
    constructForm("", "", label, "add");
    btnModal.click();
  } else if (e.target.classList.contains("fa-trash")) {
    constructModal("delete", { title: "Delete Barang" });
    label = ["id"];
    constructForm("", e.target.dataset.value, label, "delete");
    btnModal.click();
  } else if (e.target.classList.contains("detailKaryawan")) {
    e.preventDefault();
    label = [];
    let th = document.querySelectorAll("th");
    th.forEach((data) => label.push(data.innerHTML));
    delete label[7];
    const dataEdit = dataTable.data[e.target.dataset.id];
    console.log(dataEdit, e.target.dataset.id, label);
    constructForm(dataEdit, e.target.dataset.id, label, "edit");
  } else if (e.target.classList.contains("templateGaji")) {
    e.preventDefault();
    loading(form, "show");
    const resultData = await findData(e.target.dataset.url, "get", "");
    loading(form, "hide");
    let status = resultData.code == "99" ? false : true;
    showResponse(resultData.header, resultData.desc, status);
    allHarian = resultData.data.allHarian;
    allLembur = resultData.data.allLembur;
    allMakan = resultData.data.allMakan;
    allRel = resultData.data.allRel;
    let detailRel = resultData.data.detailRel;
    let label = ["#", "Code Rel Gaji", "Is Assy", "Lembur", "Harian", "Makan"];
    constructForm(detailRel, "", label, "edit");
    console.log(resultData);
  } else if (e.target.classList.contains("historyGaji")) {
    e.preventDefault();
    window.open(`http://localhost:8000/dashboard`, "_blank").focus();
    console.log("History Gaji");
  }
});

document.addEventListener("change", function (e) {
  if (e.target.classList.contains("idRelGaji")) {
    let detailRel = allRel.filter((data) => data.id == e.target.value)[0];
    console.log(detailRel);
    let label = ["#", "Code Rel Gaji", "Is Assy", "Lembur", "Harian", "Makan"];
    constructForm(detailRel, "", label, "edit");
  }
});
