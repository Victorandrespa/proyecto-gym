const URL = "../../proyecto-gym.json";

async function consumirDatos() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaActividad = convertir.find(item => item.type === "table" && item.name === "actividad");
        const actividades = tablaActividad.data;

        const printDatos = document.getElementById("verActividades");

        actividades.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.actividad_id}</td>
                <td>${element.personal_id}</td>
                <td>${element.nombre}</td>
                <td>${element.modalidad}</td>
                <td>${element.nivel}</td>
                <td>${element.cupo_maximo}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.actividad_id}">
                <i class="bi bi-plus-square"></i>
            </button>
        </td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}

consumirDatos();