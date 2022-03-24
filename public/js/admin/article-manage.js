$(function(){
    console.log('disini')
})

function save() {
    let fd = new FormData();
    if($('#issAttachment1').get(0).files.length !== 0){
      let issAttachment1 = $('#issAttachment1').prop('files')[0];
      fd.append("issAttachment1", issAttachment1);
    }
    let other_data = $('#form-cryptoIss').serializeArray();
    $.each(other_data,function(key,input) {
      fd.append(input.name,input.value);
    });
    $.ajax({
        
    })
}