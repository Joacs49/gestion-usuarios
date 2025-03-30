document.addEventListener("DOMContentLoaded", function () {
    if (typeof Livewire === 'undefined' || typeof Livewire.dispatch !== 'function') {
        console.error('Livewire o Livewire.emit no están definidos');
        return;
    }
    const inputBusqueda = document.getElementById("busqueda");
    const listaResultados = document.getElementById("resultado");

    function buscarUsuarios(query) {
        fetch(`/users/show?busqueda=${query}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Error en la respuesta del servidor");
                }
                return response.json();
            })
            .then(data => {
                let html = "";
                if (data.length > 0) {
                    data.forEach(user => {
                        html += `
                            <li><strong>Nombre:</strong> ${user.name}</li>
                            <li><strong>Apellido:</strong> ${user.lastname}</li>
                            <li><strong>Email:</strong> ${user.email}</li>
                            <li><strong>Teléfono:</strong> ${user.numberphone}</li>
                            <li><strong>Ubicación:</strong> ${user.country}, ${user.district}</li>
                            <li><strong>Dirección:</strong> ${user.direction}</li>
                            <button onclick="Livewire.dispatch('openModal', { data: { id: ${user.id} } })">Actualizar</button>
                            <hr>
                        `;
                    });
                } else {
                    html = "<li>No se encontraron usuarios.</li>";
                }
                listaResultados.innerHTML = html;
            })
            .catch(error => {
                console.error("Error en la búsqueda:", error);
                listaResultados.innerHTML = "<li>Ocurrió un error al realizar la búsqueda.</li>";
            });
    }

    buscarUsuarios("");

    inputBusqueda.addEventListener("keyup", function () {
        let query = inputBusqueda.value.trim();
        buscarUsuarios(query);
    });
});