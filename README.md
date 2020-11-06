GET http://127.0.0.1:8000/api/offices/ <br/>
GET http://127.0.0.1:8000/api/offices/15 <br/>
POST http://127.0.0.1:8000/api/offices <br/>
<pre>
{
   "name": "Nombre Oficina",
   "address": "Dirección Oficina"
}
</pre>
PUT http://127.0.0.1:8000/api/offices/23 <br/>
<pre>
{
   "name": "Nuevo Nombre",
   "developer": "Nueva dirección"
}
</pre>
DELETE http://127.0.0.1:8000/api/offices/16
