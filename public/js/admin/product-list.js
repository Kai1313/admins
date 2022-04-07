$(function () {
  console.log('disini' + listUrl)
  getList()
})

function getList() {
  $('#example1').DataTable({
    processing: true,
    serverSide: true,
    ajax: listUrl,
    columns: [
        {data: 'companyId', name: 'companyId', render: function (data, type, row) {
          return row["companyName"]
        }},
        {data: 'categoriesId', name: 'categoriesId', render: function (data, type, row) {
          return row["categoriesName"]
        }},
        {data: 'title', name: 'title'},
        {data: 'mainpic', name: 'mainpic'},
        {data: 'id', name: 'action', orderable: false, searchable: false},
    ]
  })
}