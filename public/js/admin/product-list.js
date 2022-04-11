$(function () {
  console.log('disini' + listUrl)
  getList()
})

function getList() {
  $('#example1').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: listUrl,
    columns: [
        {data: 'companyId', name: 'companyId', width: '15%', render: function (data, type, row) {
          return row["companyName"]
        }},
        {data: 'categoriesId', name: 'categoriesId', width: '15%', render: function (data, type, row) {
          return row["categoriesName"]
        }},
        {data: 'title', name: 'title', width: '20%'},
        {data: 'mainpic', name: 'mainpic', width: '30%', render: function (data, type, row){
          html = ''
          html += '<div class="col-sm-12"><a href="#" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery"><img src="'+baseUrl+'/assets/images/products/'+data+'" class="img-fluid mb-2" alt="'+row["title"]+'"/></a></div>'
          return html
        }},
        {data: 'id', name: 'action', width: '20%', orderable: false, searchable: false, render: function (data, type, row){
          html = ''
          html += '<a href="'+manageUrl+'/'+data+'" class="btn btn-sm bg-gradient-primary mr-1" data-ids="'+data+'"><i class="fa fa-edit mr-1"></i><span>Edit</span></a>'
          html += '<button type="button" onclick="deleteItem(this)" class="btn btn-sm bg-gradient-danger"><i class="fa fa-trash mr-1"></i><span>Delete</span></button>'
          return html
        }},
    ]
  })
}