var TableManaged = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }
           

            // begin first table
            $('#sample_1').dataTable({
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "http://localhost/arefin/assets/scripts/custom/report/tabletools/swf/copy_csv_xls_pdf.swf"
                },
                "bFilter": false,
                "bSortable": false,
                  
                // set the initial value
               "bPaginate": false,
               "bInfo": false,
                "bSort": false
                
                
            });


             
            

        }

    };

}();