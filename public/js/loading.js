function loading(appendTo, type) {
  const loading = document.querySelectorAll(".loading");
  if (loading.length > 0) {
    loading.forEach((obj) => {
      obj.remove();
    });
  }
  if (type == "show") {
    appendTo.innerHTML = "";
    buildLoading(appendTo);
  } else {
    if (loading.length > 0) {
      loading.forEach((obj) => {
        obj.remove();
      });
    }
  }
}

function buildLoading(appendTo) {
  buildObject(appendTo, {
    type: "div",
    classes: ["loading", "d-flex", "justify-content-center"],
    childObj: [
      {
        type: "div",
        classes: ["spinner-border", "text-primary"],
        attr: {
          role: "status",
        },
        childObj: [
          {
            type: "span",
            classes: ["sr-only"],
            html: "loading...",
          },
        ],
      },
    ],
  });
  //   const wrapLoading = document.createElement("div");
  //   wrapLoading.classList.add("loading", "d-flex", "justify-content-center");
  //   const loadingDiv = document.createElement("div");
  //   loadingDiv.classList.add("spinner-border", "text-primary");
  //   loadingDiv.setAttribute("role", "status");
  //   const loadingSpan = document.createElement("span");
  //   loadingSpan.classList.add("sr-only");
  //   loadingSpan.innerHTML = "loading...";

  //   loadingDiv.appendChild(loadingSpan);
  //   wrapLoading.appendChild(loadingDiv);
  //   appendTo.appendChild(wrapLoading);
  // tableDiv.appendChild(wrapLoading);
}
