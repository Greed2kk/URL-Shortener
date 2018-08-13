
       
       function send(){
        var msg = $('#url-form').serialize();
        $.ajax({
            type:'POST',
            url:'src/php/url_validator.php',
            data:msg,
            success:function (data) {
                console.log(data);
                    $('#result').text("result = " + data);
            }
        });
    }
     function add(){
        var msg = $('#url_form_add').serialize();
        $.ajax({
            type:'POST',
            url:'src/php/add.php',
            data:msg,
            success:function (data) {
                console.log(data);
                    $('#cre_res').text("result = " + data);
            }
        });
    }
   