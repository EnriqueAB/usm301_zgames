//ESTE ARCHIVO VA A TENER LAS OPERACIONES TIPICAS PARA COMUNICARSE CON EL CONTROLADOR

//getConsolas (get para obtener, traer)
const getConsolas = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/consolas/get");
    }else{
        resp = await axios.get(`api/consolas/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};
//crearConsola (post para ingresar)

const crearConsola = async (consola)=>{ //arrow functions
    //Estructura de peticion post al servidor con axios
    //  rut - objeto - tipo de objeto
    let resp = await axios.post("api/consolas/post", consola,{
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};

const eliminarConsola = async(id)=>{
    try{
        let resp = await axios.post("api/consolas/delete", {id}, {
            headers:{
                "Content-Type":"application/json"
            }
        });
        return resp.data == "ok";
    }catch(e){
        return false;
    }
    
}