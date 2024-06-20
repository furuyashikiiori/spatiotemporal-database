let storeList = [];
let deliveryList = [];

function registerStore() {
  const name = document.getElementById("store-name").value;
  const address = document.getElementById("store-address").value;
  const location = document.getElementById("store-location").value;
  const notes = document.getElementById("store-notes").value;

  if (name && address && location) {
    const store = {
      name: name,
      address: address,
      location: location,
      notes: notes,
    };
    storeList.push(store);
    storeList.sort((a, b) => a.name.localeCompare(b.name));
    displayStores();
    clearRegisterForm();
  } else {
    alert("全てのフィールドを入力してください。");
  }
}

function clearRegisterForm() {
  document.getElementById("store-name").value = "";
  document.getElementById("store-address").value = "";
  document.getElementById("store-location").value = "";
  document.getElementById("store-notes").value = "";
}

function displayStores() {
  const storeListElement = document.getElementById("store-list");
  if (!storeListElement) return;

  storeListElement.innerHTML = "";
  storeList.forEach((store, index) => {
    const li = document.createElement("li");
    li.textContent = `${store.name} - ${store.address}`;
    const addButton = document.createElement("button");
    addButton.textContent = "配達先に追加";
    addButton.onclick = () => addDelivery(store);
    li.appendChild(addButton);
    storeListElement.appendChild(li);
  });
}

function addDelivery(store) {
  deliveryList.push(store);
  displayDeliveries();
}

function displayDeliveries() {
  const deliveryListElement = document.getElementById("delivery-list");
  if (!deliveryListElement) return;

  deliveryListElement.innerHTML = "";
  deliveryList.forEach((store, index) => {
    const li = document.createElement("li");
    li.textContent = `${store.name} - ${store.address}`;
    deliveryListElement.appendChild(li);
  });
}

function searchStores() {
  const query = document.getElementById("search-query").value.toLowerCase();
  const searchResultsElement = document.getElementById("search-results");
  if (!searchResultsElement) return;

  searchResultsElement.innerHTML = "";
  storeList.forEach((store) => {
    if (store.name.toLowerCase().includes(query)) {
      const li = document.createElement("li");
      li.textContent = `${store.name} - ${store.address}`;
      const addButton = document.createElement("button");
      addButton.textContent = "配達先に追加";
      addButton.onclick = () => addDelivery(store);
      li.appendChild(addButton);
      searchResultsElement.appendChild(li);
    }
  });
}
