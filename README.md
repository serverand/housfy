GET http://127.0.0.1:8000/api/offices/ <br/>
GET http://127.0.0.1:8000/api/offices/15 <br/>
POST http://127.0.0.1:8000/api/offices <br/>
{
   "name": "Nombre Oficina",
   "address": "Dirección Oficina"
}
<br/>
PUT http://127.0.0.1:8000/api/offices/23 <br/>
{
   "name": "Nuevo Nombre",
   "developer": "Nueva dirección"
}
<br/>
DELETE http://127.0.0.1:8000/api/offices/16
