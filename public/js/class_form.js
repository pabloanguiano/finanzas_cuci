export class Form {

    constructor(application, beneficiary_name, concept, fund,
        id, patrimonial_registration, payment_complement,
        payment_method, payment_type, project_name, project_p3e,
        receipt_date, request_amount, status_application, stock,
        stock_name, travel_format, type_application, ures, ures_name, user) {

        this.application = application
        this.beneficiary_name = beneficiary_name
        this.concept = concept
        this.fund = fund
        this.id = id
        this.patrimonial_registration = patrimonial_registration
        this.payment_complement = payment_complement
        this.payment_method = payment_method
        this.payment_type = payment_type
        this.project_name = project_name
        this.project_p3e = project_p3e
        this.receipt_date = receipt_date
        this.request_amount = request_amount
        this.status_application = status_application
        this.stock = stock
        this.stock_name = stock_name
        this.travel_format = travel_format
        this.type_application = type_application
        this.ures = ures
        this.ures_name = ures_name
        this.user = user

    }

    Form_captura_update() {
        $("#application").val(this.application);
        $("#beneficiary_name").val(this.beneficiary_name);
        $("#concept").val(this.concept);
        $("#fund").val(this.fund);       
        $("#payment_method").val(this.payment_method);
        $("#payment_type").val(this.payment_type);
        $("#project_name").val(this.project_name);
        $("#project_p3e").val(this.project_p3e);
        $("#receipt_date").val(this.receipt_date);
        $("#request_amount").val(this.request_amount);
        $("#status_application").val(this.status_application);
        $("#stock").val(this.stock);
        $("#stock_name").val(this.stock_name);        
        $("#type_application").val(this.type_application);
        $("#ures").val(this.ures);
        $("#ures_name").val(this.ures_name);
        $("#user").val(this.user);
        $("#id").val(this.id);
        $('#btn_update').removeAttr('disabled');     
        $("#btn_save_new").attr('disabled', 'disabled');

        if(this.travel_format===1){
            $("#travel_format_yes").prop('checked',true);
            $("#travel_format_no").prop('checked',false);
        }
        else{
            $("#travel_format_yes").prop('checked',false);
            $("#travel_format_no").prop('checked',true);
        }  
        if(this.payment_complement===1){
            $("#payment_complement_yes").prop('checked',true);
            $("#payment_complement_no").prop('checked',false);
        }
        else{
            $("#payment_complement_yes").prop('checked',false);
            $("#payment_complement_no").prop('checked',true);
        }  
        if(this.patrimonial_registration===1){
            $("#patrimonial_registration_yes").prop('checked',true);
            $("#patrimonial_registration_no").prop('checked',false);
        }
        else{
            $("#patrimonial_registration_yes").prop('checked',false);
            $("#patrimonial_registration_no").prop('checked',true);
        }  
    }
    

    Clean_captura = function (formData, records) {
        formData.forEach(element => {
            if (element.name !== '_token') {
                $("#" + element.name).val("");
            }
            $(".form-check-input").prop('checked', false);
        });
        $("#btn_update").attr('disabled', 'disabled');
        $('#btn_save_new').removeAttr('disabled');
        $('#datos tbody').empty();
        records.forEach(record => {
            $('#datos tbody').append(
                '<tr>' +
                '<td class="lead">' + record.application + '</td>' +
                '<td class="lead">' + record.application + '</td>' +
                '<td class="lead">' + record.application + '</td>' +
                '<td class="lead">' + record.application + '</td>' +
                '<td class="lead">' + record.application + '</td>' +
                '<td class="lead">' + record.application + '</td>' +
                '<td class="lead"> Falta pendiente</td>' +
                '<td>' +
                '<div class="btn-toolbar separed" role="toolbar" aria-label="Toolbar with button groups">' +
                '<div class="btn-group me-2" role="group" aria-label="Second group">' +
                '<button type="button" class="btn btn-info btn-sm" id="btn_update" onclick="edit_captura(' + record.id + ')"><i class="bi bi-arrow-clockwise"></i>  Editar&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</button>' +
                ' </div>' +
                '</div>' +
                '<div class="btn-toolbar separed" role="toolbar" aria-label="Toolbar with button groups">' +
                '<div class="btn-group" role="group" aria-label="Third group">' +
                '<button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash3-fill" onclick="delete_captura(' + record.id + ')></i>  Eliminar &nbsp; &nbsp; </button>' +
                '</div>' +
                '</div>' +
                ' </td>' +
                '</tr>'
            )

        });
    }
}





export default Form;