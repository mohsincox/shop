$(function() {
    $(document).on('click', '#btnSassoBij', function() {
        //$('#hamba').text($(this).val());
        var sasshoBijId = $(this).val();
        var value = 'id='+sasshoBijId;
        var u = $('#url').html();
        //alert(value);
        //console.log(u);
        $url = u+"/show-to-model-sasso-bij";
        console.log($url);
        $.ajax({
            type:"GET",
            url:$url,
            data:value
        }).success(function(data) {
            $('#hamba').html(data);
        })
            .error(function (data) {
            });
    });
});

$(function() {
    $(document).on('click', '#btnShakSobjiBij', function() {
        //$('#hamba').text($(this).val());
        var sasshoBijId = $(this).val();
        var value = 'id='+sasshoBijId;
        var u = $('#url').html();
        //alert(value);
        //console.log(u);
        $url = u+"/show-to-model-shak-sobji-bij";
        console.log($url);
        $.ajax({
            type:"GET",
            url:$url,
            data:value
        }).success(function(data) {
            $('#hamba').html(data);
        })
            .error(function (data) {
            });
    });
});