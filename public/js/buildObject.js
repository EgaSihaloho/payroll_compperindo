function buildObject(appendTo, data) {
  const obj = document.createElement(data.type);
  if (data.attr !== undefined) {
    Object.keys(data.attr).forEach((key) => {
      obj.setAttribute(key, data.attr[key]);
    });
  }
  if (data.classes !== undefined) {
    data.classes.forEach((data) => {
      obj.classList.add(data);
    });
  }
  if (data.html !== undefined) obj.innerHTML = data.html;
  if (data.dataSet !== undefined) {
    if (data.dataSet.id !== undefined) obj.dataset.id = data.dataSet.id;
    if (data.dataSet.value !== undefined) obj.dataset.value = data.dataSet.value;
    if (data.dataSet.bsTogle !== undefined) obj.dataset.bsTogle = data.dataSet.bsTogle;
    if (data.dataSet.bsTarget !== undefined) obj.dataset.bsTarget = data.dataSet.bsTarget;
    if (data.dataSet.bsDismiss !== undefined) obj.dataset.bsDismiss = data.dataSet.bsDismiss;
    if (data.dataSet.url !== undefined) obj.dataset.url = data.dataSet.url;
    if (data.dataSet.urlPage !== undefined) obj.dataset.urlPage = data.dataSet.urlPage;
  }
  if (data.value !== undefined) obj.value = data.value;
  if (data.childObj !== undefined) {
    data.childObj.forEach((data) => {
      buildObject(obj, data);
    });
  }

  appendTo.appendChild(obj);
  return obj;
}
