//API Notification
window.onload = function () {
  document.getElementById("btn").addEventListener("click", function () {
    Notification.requestPermission().then((resultado) =>
      console.log(resultado)
    );

    if (Notification.permission == "granted") {
      new Notification("Esto es una notificación"),
        {
          icon: "/alert.svg",
          body: "Mensaje de prueba",
        };
    }
  });
};
