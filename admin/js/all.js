var checkAll = $(".check-all");
var checkBox = $("tbody input:checkbox");
var checked = $("tbody input:checkbox:checked");
var btn = $('.edit-buttons a.btn');

checkAll.on('click', function(){     
    if(checkAll.prop("checked")) {
    	checkBox.prop({ checked: true });
    } else {
        checkBox.prop({ checked: false });
    }
});

btn.on('click', function(){
	var checked = $("tbody input:checkbox:checked");
		id = '&id=' + checked.prop("name");
		$(this).attr('href', $(this).attr('href') + id);
});