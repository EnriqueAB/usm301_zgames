
const cargarTabla = (consolas)=>{
    //
    let tbody = document.querySelector("#tbody-consola");

    for(let i=0; i < consolas.length; ++i){
        let tr = document.createElement("tr");
        let tdNombre = document.createElement("td");
        tdNombre.innerText = consolas[i].nombre;
        let tdMarca = document.createElement("td");
        tdMarca.innerText = consolas[i].marca;
        let tdAnio = document.createElement("td");
        tdAnio.innerText = consolas[i].anio;
        let tdAcciones = document.createElement("td");
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idConsola = consolas[i].id;
        tdAcciones.appendChild(botonEliminar);

        tdAcciones.appendChild(tdNombre);
        tr.appendChild(tdMarca);
        tr.appendChild(tdAnio);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
};

document.addEventListener("DOMContentLoader", async ()=>{
    //Aqui voy a cargar la tabla de consolas, porque si entra aqui
    //lo que haga en esta parte estoy seguro que se está ejecutando
    //cuando la pagina esta totalmente cargada
    let consolas = await getConsolas();
    cargarTabla(consolas);
});