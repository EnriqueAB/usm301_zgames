//ESTE ARCHIVO VA A TENER LAS OPERACIONES TIPICAS PARA COMUNICARSE CON EL CONTROLADOR

//getConsolas (get para obtener, traer)
const getConsolas = async ()=>{
    let resp = await axios.get("api/consolas/get");
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