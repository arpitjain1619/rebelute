$('document').ready(function(){
    $('#add_vendor').click(function() {
        var vendors = $('[name="vendors[]"]:checked').length;
        if(vendors === 0 || vendors < 0) {
            alert("Please select atleast 1 vendor")
            return false;
        }
    });
});