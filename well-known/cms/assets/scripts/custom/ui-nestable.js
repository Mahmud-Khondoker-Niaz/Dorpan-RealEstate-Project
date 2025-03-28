var UINestable = function () {

    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };


    return {
        //main function to initiate the module
        init: function () {

            
            $('#nestable_list_3').nestable({group: 1}).on('change', updateOutput);
			
            // output initial serialised data
            updateOutput($('#nestable_list_3').data('output', $('#nestable_list_3_output')));


        }

    };

}();