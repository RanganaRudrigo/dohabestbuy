$(function () {
    // editable elements
    tisa_editable_elements.init();
})

// editable elements
tisa_editable_elements = {
    init: function () {

        function log(settings, response) {
            var s = [], str;
            s.push(settings.type.toUpperCase() + ' url = "' + settings.url + '"');
            for (var a in settings.data) {
                if (settings.data[a] && typeof settings.data[a] === 'object') {
                    str = [];
                    for (var j in settings.data[a]) {
                        str.push(j + ': "' + settings.data[a][j] + '"');
                    }
                    str = '{ ' + str.join(', ') + ' }';
                } else {
                    str = '"' + settings.data[a] + '"';
                }
                s.push(a + ' = ' + str);
            }
            s.push('RESPONSE: status = ' + response.status);

            if (response.responseText) {
                if ($.isArray(response.responseText)) {
                    s.push('[');
                    $.each(response.responseText, function (i, v) {
                        s.push('{value: ' + v.value + ', text: "' + v.text + '"}');
                    });
                    s.push(']');
                } else {
                    s.push($.trim(response.responseText));
                }
            }
            s.push('--------------------------------------\n');
            $('#console').val(s.join('\n') + $('#console').val());
        }

        /*	//defaults
         $.fn.editable.defaults.url = URL.current ;
         */
        $('.edit').editable({
            validate: function (value) {
                if ($.trim(value) == '') return 'This field is required';
                else {
                    var b = $(this), c = {};
                    if (!b.data('pk')) return !0;
                    $.ajax({
                        url: URL.current,
                        type:'post',
                        data: {id:b.data('pk') , name:b.data('name'),val:value},
                        response: function (xhr) {
                            return this.responseText ;
                        }
                    });
                }
            }
        });
    }
};