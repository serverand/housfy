GET http://127.0.0.1:8000/api/offices/
GET http://127.0.0.1:8000/api/offices/15
POST http://127.0.0.1:8000/api/offices
{
   "name": "Nombre Oficina",
   "address": "Dirección Oficina"
}
PUT http://127.0.0.1:8000/api/offices/23
{
   "name": "Nuevo Nombre",
   "developer": "Nueva dirección"
}
DELETE http://127.0.0.1:8000/api/offices/16
