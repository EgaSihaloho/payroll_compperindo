function findData(url, methods, data) {
  if (methods == "post") {
    return fetch(url, {
      method: methods,
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": data.token,
      },
      body: JSON.stringify(data),
    })
      .then((response) => {
        if (!response.ok) throw new Error(response.statusText);
        return response.json();
      })
      .then((response) => {
        if (response.code !== "00") throw new Error(response.desc);
        return response;
      });
  } else {
    return fetch(url, {
      method: methods,
    })
      .then((response) => {
        if (!response.ok) throw new Error(response.statusText);
        return response.json();
      })
      .then((response) => {
        if (response.code !== "00") throw new Error(response.desc);
        return response;
      });
  }
}
