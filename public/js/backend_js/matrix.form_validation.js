   var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div style="padding-top:10px" >'+   
                        '<input type="text" class="span11" name="sku[]" id="sku[]" placeholder="Enter sku"  style="width:120px; margin-right:3px"/>'+
                        '<input type="text" class="span11" name="size[]" id="size[]" placeholder="Enter Size"  style="width:120px; margin-right:3px"/>'+
                        '<input type="text" class="span11" name="price[]" id="price[]" placeholder="Enter Price"  style="width:120px; margin-right:3px"/>'+
                        '<input type="text" class="span11" name="stock[]" id="stock[]" placeholder="Enter Stock"  style="width:120px; margin-right:3px"/>'+                        
                        '<a href="javascript:void(0)" class="btn btn-warning remove_button"><span class="icon icon-delete" aria-hidden="true"></span> Remove</a>'+
                    '</div>'; //New input field html 
    var x = 1; //Initial field counter is 1                                                                                          
    
    
    //Once add button is clicked
    $(addButton).click(function(){
        console.log('Hi');
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
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
    

     $("#blogs_validate").validate({
        rules:{
            title:{
                 required: true
             },
            //  file:{
            //     required: true
            // },
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
    

     $("#product_validate").validate({
        rules:{
            code:{
                 required: true
             },
             productName:{
                  required: true
              },
              category_id:{
                required: true
            },
            color:{
                required: true
            },
           image:{
              required: true
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


     $("#add_attribute").validate({
        rules:{
            sku:{
                 required: true
             },
            size:{
                required: true
              },
            price:{
                required: true,
                number:true,
               },
            stock:{
                required: true,
                number:true,
            },
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



$(".deleteRecord").click(function()
{
    var id=$(this).attr('rel');
    var deleteFunction = $(this).attr('rell');
    swal({
        title: 'Are you sure?',
        text:"You will not be able to recover this record again!",
        type: 'warning',
        showCancelButton: true,
        showCloseButton: true,
        confirmButtonColor:'#3085d6',
        confirmButtonText: 'Yes delete it!',
        },
        function(){
            window.location.href="/admin/products/"+deleteFunction+"/"+id;
        });
      });

      $(".deleteCategory").click(function()
      {
          var id=$(this).attr('rel');
          var deleteFunction = $(this).attr('rell');
          swal({
              title: 'Are you sure?',
              text:"You will not be able to recover this record again!",
              type: 'warning',
              showCancelButton: true,
              showCloseButton: true,
              confirmButtonColor:'#3085d6',
              confirmButtonText: 'Yes delete it!',
              },
              function(){
                  window.location.href="/admin/categories/"+deleteFunction+"/"+id;
              }); 
            });

            $(".deleteSubCategory").click(function()
            {
                var id=$(this).attr('rel');
                var deleteFunction = $(this).attr('rell');
                swal({
                    title: 'Are you sure?',
                    text:"You will not be able to recover this record again!",
                    type: 'warning',
                    showCancelButton: true,
                    showCloseButton: true,
                    confirmButtonColor:'#3085d6',
                    confirmButtonText: 'Yes delete it!',
                    },
                    function(){
                        window.location.href="/admin/subCategories/"+deleteFunction+"/"+id;
                    });
                  });

            $("#size").click(function(){
                
                var size = document.getElementById("size");

                // Get the output text
                var text = document.getElementById("Quantity");
                // If the checkbox is checked, display the output text
                if (size.checked == true){
                text.style.display = "inline";
                } else {
                text.style.display = "none";
                }
            
            });
    
            $(".deleteAttribute").click(function()
            {
                var id=$(this).attr('rel');
                var deleteFunction = $(this).attr('rell');
                swal({
                    title: 'Are you sure?',
                    text:"You will not be able to recover this record again!",
                    type: 'warning',
                    showCancelButton: true,
                    showCloseButton: true,
                    confirmButtonColor:'#3085d6',
                    confirmButtonText: 'Yes delete it!',
                    },
                    function(){
                        window.location.href="/admin/products/"+deleteFunction+"/"+id;
                    });
                  });

                  $(".deleteAttribute").click(function()
                  {
                      var id=$(this).attr('rel');
                      var deleteFunction = $(this).attr('rell');
                      swal({
                          title: 'Are you sure?',
                          text:"You will not be able to recover this attribute again!",
                          type: 'warning',
                          showCancelButton: true,
                          showCloseButton: true,
                          confirmButtonColor:'#3085d6',
                          confirmButtonText: 'Yes delete it!',
                          },
                          function(){
                              window.location.href="/admin/products/attribute/"+deleteFunction+"/"+id;
                          });
                        });
                  
                  