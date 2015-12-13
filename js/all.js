var checkAll = $(".check-all");
var checkBox = $("tbody input:checkbox");

checkAll.on('click', function(){     
    if(checkAll.prop("checked")) {
    	checkBox.prop({ checked: true });
    } else {
        checkBox.prop({ checked: false });
    }
});