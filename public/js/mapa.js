async function initMap() {
  const position = { lat: -27.093392, lng: -52.619137 };
  const { Map, InfoWindow } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  map = new Map(document.getElementById("map"), {
    zoom: 15,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  const content1 =
    '<div id="content">' +
    '<div id="bodyContent">' +
    "<p><b>Motorista:</b> João</p>" +
    "<p><b>Placa:</b> ABC1234</p>" +
    "</div>" +
    "</div>";

  const infowindow1 = new InfoWindow({
    content: content1,
    ariaLabel: "Local1",
  });

  const content2 =
    '<div id="content">' +
    '<div id="bodyContent">' +
    "<p><b>Motorista:</b> Pedro</p>" +
    "<p><b>Placa:</b> XYZ2024</p>" +
    "</div>" +
    "</div>";

  const infowindow2 = new InfoWindow({
    content: content2,
    ariaLabel: "Local2",
  });

  const truckImg1 = document.createElement("img");
  truckImg1.style.height = "80px";
  truckImg1.src =
    "https://cdn2.iconfinder.com/data/icons/3d-transport/512/Truck.png";

    const truckImg2 = document.createElement("img");
  truckImg2.style.height = "80px";
  truckImg2.src =
    "https://cdn2.iconfinder.com/data/icons/3d-transport/512/Truck.png";

  const marker1 = new AdvancedMarkerElement({
    map,
    position: position,
    content: truckImg1,
  });

  marker1.addListener("click", () => {
    infowindow1.open({
      anchor: marker1,
      map,
    });
  });

  const marker2 = new AdvancedMarkerElement({
    map,
    position: { lat: -27.091654, lng: -52.628149 },
    content: truckImg2,
  });

  marker2.addListener("click", () => {
    infowindow2.open({
      anchor: marker2,
      map,
    });
  });
}
