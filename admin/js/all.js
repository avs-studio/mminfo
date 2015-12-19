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
	var id = '';
	$( checked ).map(function() {
		name = this.name;
	    id = id + name +',';
	}).get().join();

	id = id.substring(0, id.length - 1);
	
	$(this).attr('href', $(this).attr('href') + '&id=' + id);	
});