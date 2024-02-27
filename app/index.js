import express from "express";

//fix para dirname
import path from 'path';
import {fileURLToPath} from 'url';
const __dirname = path.dirname(fileURLToPath(import.meta.url));

//Crear servidor

const app = express();
app.set("port", 4000);
app.listen(app.get("port"));
console.log("Servidor corriendo en puerto", app.get("port"));

//Configuración
app.use(express.static(__dirname + "/public"));


//Rutas

app.get("/", (req,res)=>res.sendfile(__dirname + "/pages/ingreso.html"))
app.get("/registro", (req, res) => res.sendFile(__dirname + "/pages/registro.html"))