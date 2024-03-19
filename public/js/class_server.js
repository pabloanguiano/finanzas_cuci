export class Server {

    url;
    FormData;


    constructor(url, FormData) {
        this.url = url;
        this.FormData = FormData
    }


    Ajax = function () {
        var resp, NewObject, array = [];
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            async: false,
            type: "POST",
            url: this.url,
            data: this.FormData,
            dataType: 'json',
            success: function (data) {
                if (Array.isArray(data)) {
                    resp = (data);
                } else if (typeof data === 'object') {
                    NewObject = new Object();
                    for (const [key, value] of Object.entries(data)) {
                        NewObject = JSON.parse(JSON.stringify(value));
                    }
                    array[0] = NewObject
                    resp = array
                }
            },
            error: function (data) {
                resp = (data);
            }
        });
        return resp
    }

}