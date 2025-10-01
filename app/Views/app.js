const URL = "../../../proyecto-gym.json";

//tabla de actividades

async function consumirActividades() {
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

consumirActividades();

//tabla de personal - admin


async function consumirPersonalAdmin() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaPersonalAdmin = convertir.find(item => item.type === "table" && item.name === "personal");
        const personalAdmin = tablaPersonalAdmin.data;

        if (!tablaPersonalAdmin) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verPersonal-admin");

        personalAdmin.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.personal_id}</td>
                <td>${element.puesto_id}</td>
                <td>${element.nombre}</td>
                <td>${element.apellido}</td>
                <td>${element.telefono}</td>
                <td>${element.email}</td>
                <td>${element.fecha_contratacion}</td>
                <td>${element.estado}</td>
                <td>${element.horario}</td>
                <td>${element.sede_principal}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.personal_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.personal_id}">
                <i class="bi bi-trash3"></i>
            </button>
        </td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}


consumirPersonalAdmin();



async function consumirMembresiaAdmin() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaMembresiaAdmin = convertir.find(item => item.type === "table" && item.name === "membresia");
        const membresiaAdmin = tablaMembresiaAdmin.data;

        if (!tablaMembresiaAdmin) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verMembresia-admin");

        membresiaAdmin.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.membresia_id}</td>
                <td>${element.tipo_plan}</td>
                <td>${element.precio}</td>
                <td>${element.duracion_meses}</td>
                <td>${element.beneficios}</td>
                <td>${element.sede}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.membresia_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.membresia_id}">
                <i class="bi bi-trash3"></i>
            </button>
        </td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}


consumirMembresiaAdmin();


async function consumirPagosAdmin() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaPagosAdmin = convertir.find(item => item.type === "table" && item.name === "pago");
        const pagosAdmin = tablaPagosAdmin.data;

        if (!tablaPagosAdmin) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verPagos-admin");

        pagosAdmin.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.pago_id}</td>
                <td>${element.cliente_id}</td>
                <td>${element.membresia_id}</td>
                <td>${element.fecha_pago}</td>
                <td>${element.monto}</td>
                <td>${element.metodo_pago}</td>
                <td>${element.concepto}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.pagos_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.pagos_id}">
                <i class="bi bi-trash3"></i>
            </button>
        </td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}

consumirPagosAdmin();



async function consumirPuestosAdmin() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaPuestosAdmin = convertir.find(item => item.type === "table" && item.name === "puesto");
        const puestosAdmin = tablaPuestosAdmin.data;

        if (!tablaPuestosAdmin) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verPuestos-admin");

        puestosAdmin.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.puesto_id}</td>
                <td>${element.rol}</td>
                <td>${element.departamento}</td>
                <td>${element.descripcion}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.pago_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.pago_id}">
                <i class="bi bi-trash3"></i>
            </button>
        </td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}

consumirPuestosAdmin();