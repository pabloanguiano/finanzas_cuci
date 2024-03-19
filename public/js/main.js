let modul,modul_form,formData,ajaxurl, form;

 $(document).ready(function () {
 $("#receipt_date").datepicker({ dateFormat: 'yy-mm-dd',language: 'es' });
  $('#datos').DataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      }
  });
});

const edit_captura = async (param) => {
    try {
        modul = await import('./class_server.js');
        var formData = {
            id: param
        };
        ajaxurl = '/Captura/edit';
        const serv = new modul.Server(ajaxurl, formData);
        let resp = serv.Ajax();
        modul_form = await import('./class_form.js');

        resp.forEach(element => {
            let form = new modul_form.Form(
                element.application, element.beneficiary_name, element.concept, element.fund,
                element.id, element.patrimonial_registration, element.payment_complement, element.payment_method,
                element.payment_type, element.project_name, element.project_p3e, element.receipt_date,
                element.request_amount, element.status_application, element.stock, element.stock_name,
                element.travel_format, element.type_application, element.ures, element.ures_name, element.user);
            form.Form_captura_update();
        });

    } catch (error) {
        console.log(error);
    }

}

const update_captura = async () => {
    try {
        formData = JSON.parse(JSON.stringify($("form").serializeArray()));
        ajaxurl = '/Captura/update';
        serv = new modul.Server(ajaxurl, formData);
        let records = serv.Ajax();
        form = new modul_form.Form();
        form.Clean_captura(formData,records);
    }
    catch (error) {
        console.log(error);
    }
}

const delete_captura = async (param) => {
    try {
        console.log("entrto"+param);
        formData = {id: param}
        let formData_clean = JSON.parse(JSON.stringify($("form").serializeArray()));
        ajaxurl = '/Captura/delete';
        serv = new modul.Server(ajaxurl,formData);
        let records = serv.Ajax();
        console.log(records);
        form = new modul_form.Form();
        form.Clean_captura(formData_clean,records);
        
        
    } catch (error) {
        console.log(error);
    }
}





   