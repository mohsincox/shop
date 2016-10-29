$(function() {
    $(document).on('click', '#btnSassoBij', function() {
        //$('#hamba').text($(this).val());
        var sasshoBijId = $(this).val();
        var value = 'id='+sasshoBijId;
        console.log(value);
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

$(function() {
    $(document).on('click', '#btnKitnashok', function() {
        //$('#hamba').text($(this).val());
        var sasshoBijId = $(this).val();
        var value = 'id='+sasshoBijId;
        console.log(value);
        var u = $('#url').html();
        //alert(value);
        //console.log(u);
        $url = u+"/show-to-model-kitnashok";
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
    $(document).on('click', '#ttt', function() {
        //$('#hamba').text($(this).val());
        var sasshoBijId = $(this).val();
        var value = 'id='+sasshoBijId;
        console.log(value);
        var u = $('#url').html();
        //alert(value);
        //console.log(u);
        $url = u+"/show-to-model-jontropati";
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
    $(document).on('click', '#uuu', function() {
        //$('#hamba').text($(this).val());
        var sasshoBijId = $(this).val();
        var value = 'id='+sasshoBijId;
        console.log(value);
        var u = $('#url').html();
        //alert(value);
        //console.log(u);
        $url = u+"/show-to-model-opokoron";
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
    $(document).on('click', '#vvv', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-postika?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        }); 

    });
});

$(function() {
    $(document).on('click', '#ful', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-ful-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        }); 

    });
});

$(function() {
    $(document).on('click', '#falojo', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-falojo-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        }); 

    });
});

$(function() {
    $(document).on('click', '#bonojo', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-bonojo-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        }); 

    });
});

$(function() {
    $(document).on('click', '#osodhi', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-osodhi-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        }); 

    });
});