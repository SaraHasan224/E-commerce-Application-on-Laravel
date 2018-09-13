
    
    $('input[type=checkbox],input[type=radio],input[type=file]').uniform();
    
    //$('select').select2();
    
    // Form Validation
    $("#basic_validate").validate({
        rules:{
            required:{
                required:true
            },
            email:{
                required:true,
                email: true
            },
            date:{
                required:true,
                date: true
            },
            url:{
                required:true,
                url: true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    
    $("#number_validate").validate({
        rules:{
            min:{
                required: true,
                min:10
            },
            max:{
                required:true,
                max:24
            },
            number:{
                required:true,
                number:true
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });
    
    $("#password_validate").validate({
        rules:{
             current_pwd:{
                 required: true,
                 minlength:4,
                 maxlength:20
             },
             new_pwd:{
                 required:true,
                 minlength:6,
                 maxlength:20
             },
             confirm_pwd:{
                 required:true,
                 minlength:6,
                 maxlength:20,
                 equalTo:"#new_pwd"
             }
        },
         errorClass: "help-inline",
         errorElement: "span",
         highlight:function(element, errorClass, validClass) {
             $(element).parents('.control-group').addClass('error');
         },
         unhighlight: function(element, errorClass, validClass) {
             $(element).parents('.control-group').removeClass('error');
             $(element).parents('.control-group').addClass('success');
         }
     });    

     $("#category_validate").validate({
        rules:{
            categoryName:{
                 required: true
             },
             url:{
                 required:true
             },
             description:{
                 required:true
             }
        },
         errorClass: "help-inline",
         errorElement: "span",
         highlight:function(element, errorClass, validClass) {
             $(element).parents('.control-group').addClass('error');
         },
         unhighlight: function(element, errorClass, validClass) {
             $(element).parents('.control-group').removeClass('error');
             $(element).parents('.control-group').addClass('success');
         }
     });
    

     $("#subCategory_validate").validate({
        rules:{
            subCategoryName:{
                 required: true
             },
             CategoryId:{
                required: true,   
                number: true
            },
             url:{
                 required:true,
             },
             description:{
                 required:true,
                 minlength:10
             }
        },
         errorClass: "help-inline",
         errorElement: "span",
         highlight:function(element, errorClass, validClass) {
             $(element).parents('.control-group').addClass('error');
         },
         unhighlight: function(element, errorClass, validClass) {
             $(element).parents('.control-group').removeClass('error');
             $(element).parents('.control-group').addClass('success');
         }
     });
