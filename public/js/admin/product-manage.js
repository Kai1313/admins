$(function(){
    console.log(submitUrl)
    $("#btn-submit").on("click", function() {
      $("#product-form").validate({
        rules: {
          productName: {
            required: true,
          },
          company: {
            required: true,
          },
          category: {
            required: true
          },
          productPrice: {
            required: true, digits: true
          },
          productDescription: {
            required: true
          },
          thumbnailImage: {
            required: true
          },
        },
        messages: {
          email: {
            required: "Please enter a email address",
            email: "Please enter a valid email address"
          },
          password: {
            required: "Please provide a password",
            minlength: "Your password must be at least 5 characters long"
          },
          terms: "Please accept our terms"
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      })

      if ($("#product-form").valid()) {
        save()
      }
      else {
        alert('not valid')
      }
    })
})

function save() {
    let fd = new FormData();
    if($('#thumbnailImage').get(0).files.length !== 0){
      let thumbnailImage = $('#thumbnailImage').prop('files')[0];
      fd.append("thumbnailImage", thumbnailImage);
    }
    if($('#detailImage1').get(0).files.length !== 0){
      let detailImage1 = $('#detailImage1').prop('files')[0];
      fd.append("detailImage1", detailImage1);
    }
    if($('#detailImage2').get(0).files.length !== 0){
      let detailImage2 = $('#detailImage2').prop('files')[0];
      fd.append("detailImage2", detailImage2);
    }
    let other_data = $("#product-form").serializeArray();
    $.each(other_data,function(key,input) {
      fd.append(input.name,input.value);
    });
    $.ajax({
      url: submitUrl,
      type: "POST",
      contentType: false,
      processData: false,
      data: fd,
      dataType: "JSON",
      success: function (data) {
        if (data.status) {
          alert('Success')
        }
        else {
          alert('Failed')
        }
      }
    })
}