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

$(document).ready(function() {  
  var modals = ['#ful', '#anotherModal'];
  if (window.location.hash && ~modals.indexOf(window.location.hash)) {
     $(window.location.hash).modal();
  }
})

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

$(function() {
    $(document).on('click', '#mosla-bij', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-mosla-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#tonto-bij', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-tonto-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#toil-bij', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-toil-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#dana-bij', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-dana-bij?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#gobadi-poshor-khaddo', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-gobadi-poshor-khaddo?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#has-morgir-khaddo', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-has-morgir-khaddo?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#macher-khaddo', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-macher-khaddo?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#posho-pakhir-khaddo', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-posho-pakhir-khaddo?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#krishi-khaddo', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-krishi-khaddo?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#gobadi-poshor-osodh', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-gobadi-poshor-osodh?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#has-morgir-osodh', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-has-morgir-osodh?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#motso-osodh', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-motso-osodh?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#posho-pakhir-osodh', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-posho-pakhir-osodh?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#ful', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-ful?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#fal', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-fal?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#osodhi', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-osodhi?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#bonoj', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-bonoj?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#kaktas', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-kaktas?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#vegetables', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-vegetables?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#fruits', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-fruits?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#traps', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-traps?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});

$(function() {
    $(document).on('click', '#farming', function(){
        var id = $(this).val();
        var u = $('#url').html();
        var url  = u+"/show-to-model-farming?id="+ id;
        $.get(url, function (data) {
            $('#hamba').html(data);
        });

    });
});