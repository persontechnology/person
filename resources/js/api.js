window.onload = function() {

}

function cm(e) {
    $('#' + e).modal('hide')
}

window.livewire.on('alert', e => {
    alerta(e[0], e[1]);
});

window.livewire.on('cerrarModal', e => {
    cm(e)
});



function alerta(color, toastBody) {
    var toastConainerElement = document.getElementById("toast-container");
    toastConainerElement.innerHTML = "";
    var html =

        `<div id="liveToast" class="toast align-items-center text-white bg-${color} border-0 mb-1" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        ${toastBody}
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>`;

    var toastElement = htmlToElement(html);

    toastConainerElement.appendChild(toastElement);
    var toast = new bootstrap.Toast(toastElement, { delay: 3000, animation: true });
    toast.show();

    var myAlert = document.getElementById('liveToast'); //select id of toast
    var bsAlert = new bootstrap.Toast(myAlert); //inizialize it
    bsAlert.show(); //show it
}

function htmlToElement(html) {
    var template = document.createElement('template');
    html = html.trim(); // Never return a text node of whitespace as the result
    template.innerHTML = html;
    return template.content.firstChild;
}