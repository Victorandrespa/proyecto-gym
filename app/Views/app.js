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

//tabla de Membresias - admin

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


//tabla de Pagos - admin

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


//tabla de Puestos - admin

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
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.puesto_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.puesto_id}">
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



//tabla de Estados Membresia 

async function consumirEstadosMembresias() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaEstadoMembresia = convertir.find(item => item.type === "table" && item.name === "estado_membresia");
        const estadoMembresia = tablaEstadoMembresia.data;

        if (!tablaEstadoMembresia) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verEstadoMembresia");

        estadoMembresia.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.estado_membresia_id}</td>
                <td>${element.membresia_id}</td>
                <td>${element.cliente_id}</td>
                <td>${element.fecha_inicio}</td>
                <td>${element.fecha_fin}</td>
                <td>${element.estado}</td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}
consumirEstadosMembresias();



//tabla de Estados Membresia admin

async function consumirEstadosMembresias_admin() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaEstadoMembresia = convertir.find(item => item.type === "table" && item.name === "estado_membresia");
        const estadoMembresia = tablaEstadoMembresia.data;

        if (!tablaEstadoMembresia) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verEstadoMembresia-admin");

        estadoMembresia.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.estado_membresia_id}</td>
                <td>${element.membresia_id}</td>
                <td>${element.cliente_id}</td>
                <td>${element.fecha_inicio}</td>
                <td>${element.fecha_fin}</td>
                <td>${element.estado}</td>
                 <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.estado_membresia_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.estado_membresia_id}">
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
consumirEstadosMembresias_admin();


//tabla de Clientes

async function consumirTablaClientes() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaClientes = convertir.find(item => item.type === "table" && item.name === "cliente");
        const registroClientes = tablaClientes.data;

        if (!tablaClientes) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verTablaCliente");

        registroClientes.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.cliente_id}</td>
                <td>${element.nombre}</td>
                <td>${element.apellido}</td>
                <td>${element.edad}</td>
                <td>${element.telefono}</td>
                <td>${element.email}</td>
                <td>${element.contacto_emergencia}</td>
                <td>${element.telefono_emergencia}</td>
                <td>${element.fecha_registro}</td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}
consumirTablaClientes();



//tabla de Clientes Admin
 
async function consumirTablaClientes_admin() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaClientes = convertir.find(item => item.type === "table" && item.name === "cliente");
        const registroClientes = tablaClientes.data;

        if (!tablaClientes) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verTablaCliente_admin");

        registroClientes.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.cliente_id}</td>
                <td>${element.nombre}</td>
                <td>${element.apellido}</td>
                <td>${element.edad}</td>
                <td>${element.telefono}</td>
                <td>${element.email}</td>
                <td>${element.contacto_emergencia}</td>
                <td>${element.telefono_emergencia}</td>
                <td>${element.fecha_registro}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.cliente_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.cliente_id}">
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
consumirTablaClientes_admin();




//tabla de Plan Nutrional cliente

async function consumirPlanNutricional_personal() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaPlan = convertir.find(item => item.type === "table" && item.name === "plan_nutricional");
        const registroPlan = tablaPlan.data;

        if (!tablaPlan) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verPlanNutricional_personal");

        registroPlan.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.plan_id}</td>
                <td>${element.personal_id}</td>
                <td>${element.objetivo}</td>
                <td>${element.duracion}</td>
                <td>${element.descripcion}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.plan_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.plan_id}">
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
consumirPlanNutricional_personal();




//tabla de Plan Nutrional Personal

async function consumirPlanNutricional() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaPlan = convertir.find(item => item.type === "table" && item.name === "plan_nutricional");
        const registroPlan = tablaPlan.data;

        if (!tablaPlan) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verPlanNutricional");

        registroPlan.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.plan_id}</td>
                <td>${element.personal_id}</td>
                <td>${element.objetivo}</td>
                <td>${element.duracion}</td>
                <td>${element.descripcion}</td>
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
consumirPlanNutricional();




//tabla de Historial Nutricional

async function consumirHistorial() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaHistorial = convertir.find(item => item.type === "table" && item.name === "historial_medicion");
        const registroHistorial = tablaHistorial.data;

        if (!tablaHistorial) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verHistorial");

        registroHistorial.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.medicion_id}</td>
                <td>${element.plan_id}</td>
                <td>${element.cliente_id}</td>
                <td>${element.fecha_medicion}</td>
                <td>${element.peso}</td>
                <td>${element.altura}</td>
                <td>${element.indice_masaCorporal}</td>
                <td>${element.promedio_calorias}</td>
                <td>${element.observaciones}</td>
                 <td class="text-center">
                    <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.medicion_id}">
               <i class="bi bi-pencil"></i>
                <button class="btn btn-sm btn-outline-dark asignar-btn" data-id="${element.medicion_id}">
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
consumirHistorial();



//tabla de Historial Nutricional

async function consumirHistorial_cliente() {
    try {
        const leerDatos = await fetch(URL);
        const convertir = await leerDatos.json();

        // Buscar la tabla "actividad"
        const tablaHistorial = convertir.find(item => item.type === "table" && item.name === "historial_medicion");
        const registroHistorial = tablaHistorial.data;

        if (!tablaHistorial) {
            console.error("⚠️ No se encontró la tabla 'personal' en el JSON");
            return;
        }

        const printDatos = document.getElementById("verHistorial_cliente");

        registroHistorial.forEach(element => {
            const filaRegistro = document.createElement("tr");
            filaRegistro.innerHTML = `
                <td>${element.medicion_id}</td>
                <td>${element.plan_id}</td>
                <td>${element.cliente_id}</td>
                <td>${element.fecha_medicion}</td>
                <td>${element.peso}</td>
                <td>${element.altura}</td>
                <td>${element.indice_masaCorporal}</td>
                <td>${element.promedio_calorias}</td>
                <td>${element.observaciones}</td>
            `;

            printDatos.appendChild(filaRegistro);

        });
    } catch (error) {
        console.error("error en datos: ", error)
    }
}
consumirHistorial_cliente();