<p>
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
   "address": "Nueva dirección"
}
</pre>
DELETE http://127.0.0.1:8000/api/offices/16
<hr>
<h4>Ficheros de uso:</h4>
- app/Http/Controllers/OfficeController.php<br/>
- app/Office.php<br/>
- database/migrations/2020_11_04_093939_create_offices_table.php<br/>
- database/seeds/OfficesTableSeeder.php<br/>
- routes/api.php<br/>
</p>
