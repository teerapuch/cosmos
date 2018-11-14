$('document').ready(function(){
    $('.datatable').dataTable({
        "oLanguage": {
            "sEmptyTable": "ไม่พบข้อมูล",
            "sSearch": "ค้นหา",
            "sLengthMenu": "_MENU_ จำนวนแสดงต่อหน้า",
            "sInfo": "จำนวนข้อมูล _TOTAL_ จากทั้งหมด _END_"
        },
        aLengthMenu:[
            [10, 25, 50, 100, 200, -1],
            [10, 25, 50, 100, 200, "All"]
        ],
    });
});
