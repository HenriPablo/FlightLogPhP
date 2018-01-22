$(document).ready( function () {
    var $crw = $('#crw-ids');
    $("#actingas-ids").change( function () {
        var selectedValue = $(this).val();
        var targeturl = url + '?id=' + selectedValue;
        $.ajax({
            type: 'get',
            url: targeturl,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success: function(response) {
                if (response.error) {
                    alert(response.error);
                    console.log(response.error);
                }
                if (response.crw) {
                    $crw.empty();
                    for ( var i = 0; i < response.crw.length; i++ ){
                        /** reference: https://www.codebyamir.com/blog/populate-a-select-dropdown-list-with-json */
                        $crw.append( $('<option></option>').attr('value', response.crw[i]['id'] ).text( response.crw[i]['title'] ));
                    }
                }
            },
            error: function(e) {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });/* end change */
});/* end doc ready */
