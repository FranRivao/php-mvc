$("#search").keyup(function(e){
    let search = e.target.value;

    $.ajax({
        url: 'http://localhost/narf_industries/public/admin/search',
        type: 'POST',
        data: { search },
        success: function(response){
            $("#content").html("");
            $("#content").html(response);
        }
    });
});