$('document').ready(function (){
    $.post('Tabla.php', function (ret) {
                 $("#datagrid").jsGrid({
                 width: "100%",
                 height: "500px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: ret,
                 fields: [{ name: "IdCliente",type: "number",title: "ID", width: 10,validate: "required",align:"center"},
                         { name: "Colonia",type: "text",title: "Colonia",width: 80,align:"center"},
                         { name: "Calle",type: "text",title: "Calle", width: 55,align:"center"},
                         { name: "NumDomicilio",type: "text",title: "Num Domicilio", width: 40,align:"center"},
                         { name: "Telefono",type: "text",title: "Telefono", width: 40,align:"center"},
                         { name: "NumMascotas",type: "number",title: "Num Mascotas",width: 30,align:"center"},
                         { type: "control"}],
                });
            }
    ,'json');
});