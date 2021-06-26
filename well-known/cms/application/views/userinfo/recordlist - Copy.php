
  <div id="bottombg"> 
   <div id="content">
      <div id="content_left">
	      <div class="aRow">
	    
        <link rel="stylesheet" href="<?php echo base_url();?>jqwidgets/styles/jqx.base.css" type="text/css" />
 <!--   <link rel="stylesheet" href="<?php echo base_url();?>jqwidgets/styles/jqx.classic.css" type="text/css" />
    
 -->
    <link rel="stylesheet" href="<?php echo base_url();?>jqwidgets/styles/jqx.energyblue.css" type="text/css" />
    
    
    <script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-1.10.1.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxscrollbar.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcalendar.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.selection.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.filter.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.sort.js"></script>		
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdata.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxlistbox.js"></script>	
	<script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.pager.js"></script>		
	<script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdropdownlist.js"></script>	
    <script type="text/javascript" src="<?php echo base_url();?>scripts/gettheme.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcheckbox.js"></script> 
     <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxwindow.js"></script>
    
    
    <script type="text/javascript">
        $(document).ready(function () {
           
		  $.ajaxSetup({async: false});
		    // prepare the data
            var theme = 'energyblue';
       
            var source =
            {   
                 datatype: "json",
                id: 'ID',
				 datafields: [
					 { name: 'EntryDate', type: 'date',  format: 'yyyy-MM-dd HH:mm:ss'},  
					 { name: 'PID', type: 'string'},
					 { name: 'Name', type: 'string'},
					 
					 { name: 'DistrictID', type: 'string'},
					 { name: 'Mobile', type: 'string'},
					 { name: 'AreaID', type: 'string'},
					  { name: 'RepresentativeID', type: 'string'}
                ],
				
				deleterow: function (rowid, commit) {
                   
				 
				   
				   for (i=0; i<rowid.length; i++){
					   
									var datarow = "delete=true&Item_ID=" + rowid[i];
									//alert(rowid[i]);
									   var flag = '';
										$("#indicator").css('display','block');
											$.ajax({
																		dataType: 'html',
																		type: 'post',
																		url: '<?php echo base_url();?>basicsetup/districtdeleterow',
																		data: datarow,
																		success: function (datares) {
											 flag = datares;
											 
											}
											});	
									   
									 /*  if(flag=='OKAY')
											 commit(true);
									   else
											 commit(false);*/
									   
									   
									   
									   
									   
									   
									   
									   $("#indicator").html('');
					  				 }
				   
				       						 var dataAdapter = new $.jqx.dataAdapter(source);
                							$("#jqxgrid").jqxGrid({ source: dataAdapter });
											
											
											
                },
				
			    url: '<?php echo site_url("record/userlist");?>',
				cache: false,
				filter: function()
				{
					// update the grid and send a request to the server.
					$("#jqxgrid").jqxGrid('updatebounddata', 'filter');
				},
				sort: function()
				{
					// update the grid and send a request to the server.
					$("#jqxgrid").jqxGrid('updatebounddata', 'sort');
				},
				root: 'Rows',
				beforeprocessing: function(data)
				{	//alert(data[0].daterangle);	
					if (data != null)
					{
						source.totalrecords = data[0].TotalRows;					
					}
				}
            };		
		    var dataadapter = new $.jqx.dataAdapter(source, {
					loadError: function(xhr, status, error)
					{
						alert(error);
					}/*,
					formatData: function (data) {
						$.extend(data, {
						featureClass: "P",
						style: "full",
						maxRows: 50
						});
						 
					 
						 var acc = []
$.each(data, function(index, value) {
    acc.push(index + ': ' + value);
});
alert(JSON.stringify(acc));
				 	 
				}*/

 			}
			);
			
			
					  var items = new Array();
					  var icount=0;
					  $.get('<?php echo base_url();?>record/arealist', function(data12) {													
			  
			 
					 $.each(data12, function(key, val) {
			
						//items[0] = val.BlogpostID;
						
					 
			            items[icount] = val.AreaName;
						icount++;
								 });
			 
							});  
				  
				  
				  
				  
				  
				  	  var itemsre = new Array();
					  var icountre=0;
					  $.get('<?php echo base_url();?>record/representativelist', function(datare) {													
			  
			 
					 $.each(datare, function(key, val) {
			
						//items[0] = val.BlogpostID;
						
					 
			            itemsre[icountre] = val.RepresentativeName;
						icountre++;
								 });
			 
							});  
				  
				  
				  
				  
				  
					 
	
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {		
                source: dataadapter,
                theme: theme,
				filterable: true,
				selectionmode: 'multiplerows',
				
				showstatusbar: true,
				  
				 showfilterrow: true,
				sortable: true,
				autoheight: true,
				pageable: true,
				virtualmode: true,
				autoshowfiltericon: true,
				
				renderstatusbar: function (statusbar) {
                    // appends buttons to the status bar.
					
					var container2 = $("<div style='overflow: hidden; position: relative; margin: 5px; height:50px;'></div>");
                    var addButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/add.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Add</span></div>");
					var deleteButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/close.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Delete</span></div>");
                    
                    var filterButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/filter.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Remove Filter</span></div>");
                   var refreshbutton =  $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/refresh.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Refresh</span></div>");
				   
				    var removesortbutton =  $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/refresh.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Remove Sort</span></div>");
					
					
					var indicator = $("<div id='indicator' style='display:none; float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/loader.gif'/></div>");
					
				   container2.append(addButton);
				    container2.append(deleteButton);
                    
                    
					 container2.append(filterButton);
					 
					  container2.append(refreshbutton);
					 container2.append(removesortbutton); 
					 container2.append(indicator);
                     statusbar.append(container2);
                    
					addButton.jqxButton({ theme: theme, width: 60, height: 20 });
                    deleteButton.jqxButton({ theme: theme, width: 65, height: 20 });
                   
                   
					filterButton.jqxButton({ theme: theme,  height: 20 });
					// $("#refresh").jqxButton({ theme: theme });
					
					removesortbutton.jqxButton({ theme: theme,  height: 20 });
					refreshbutton.jqxButton({ theme: theme,  height: 20 });
					 
					//indicator.jqxButton({ theme: theme,  height: 20 });
					
					
					
					  // add new row.
                    addButton.click(function (event) {
                         window.location = '<?php echo base_url();?>basicsetup/districtentry';
						 
                    }); 
              
                    // delete selected row.
                    deleteButton.click(function (event) { 
					
                var rows  = $("#jqxgrid").jqxGrid('selectedrowindexes');
				
				var selectedRecords = new Array();
				
				
				var row = new Array();
				
				for (var m = 0; m < rows.length; m++) {
                    row_id  = $("#jqxgrid").jqxGrid('getrowid', rows[m]);
                    row.push(row_id); 
					selectedRecords[selectedRecords.length] = row;
				  
                }
				//alert(row);
				 $("#jqxwindow2").jqxWindow({ height: 150, width: 300,   isModal: true, autoOpen: false });
				
				 $("#jqxwindow2").jqxWindow('open');
				  $("#textbox").html(row.length);
				  $("#button_input").click(function () {
					
					//var T = $("#text_input").val();
					 
                   
					
                   $("#jqxgrid").jqxGrid('deleterow', row);
                    $("#jqxwindow2").jqxWindow('close');
                });
                $("#button_no").click(function () {
                    $("#jqxwindow2").jqxWindow('close');
					
                });
				 
				 
				// try to add modal yes no 
				
				
				});
                    
					
					 // remove filter button.
                    filterButton.click(function (event) { 
					 $("#jqxgrid").jqxGrid('clearfilters');
					});
                    
					
					
					
                    
					
				   // search for a record.
                    removesortbutton.click(function (event) {
                       $("#jqxgrid").jqxGrid('removesort');
                    });
					

					 // refresh button.
                    refreshbutton.click(function (event) {
                         
											$("#indicator").css('display','block');
											
                           				   var dataAdapter = new $.jqx.dataAdapter(source);
                							$("#jqxgrid").jqxGrid({ source: dataAdapter });
						                  $("#indicator").css('display','none');
                    });
					
					
					
                },
				
				
				
				rendergridrows: function(obj)
				{
					 return obj.data;    
				},
			    columns: [
                      { text: 'EntryDate', datafield: 'EntryDate', filtertype: 'date',   width: 200,    cellsformat: 'yyyy-MM-dd HH:mm:ss', columntype: 'datetimeinput' },
                      { text: 'Name', datafield: 'Name', width: 180 },
					 
					  { text: 'AreaID', filtertype: 'list',filteritems: items, /*filtertype: 'list',  filteritems: ['Lokman','Zuhayr'],*/ datafield: 'AreaID', width: 200 },
                      { text: 'Mobile', datafield: 'Mobile', width: 180 },
                      { text: 'PID', datafield: 'PID', width: 100 }, 
                      { text: 'Representative', filtertype: 'list', filteritems: itemsre, datafield: 'RepresentativeID', width: 140 }
                  ]
            });
			
			
			
			
			
			
			
			
			
			
			
			
			
			 
			  
			
			
			
			
			
			
			
			
			
			
			
			 

 








 
			
			
			
			
			
			
			
			
			
        });
    </script>
        
        
        
        
        
         <div id='jqxWidget'>
         
           <div id='jqxwindow2' style="display:none;">
            <div>
                Header</div>
            <div>
                
               You are about to delete <span id='textbox'>sdsds</span> record(s). Sure? <br />  <br /> 
                <input type="button" value="Yes" id="button_input" />
                <input type="button" value="No" id="button_no" />
            </div>
        </div>
         
        <div id="jqxgrid">
        
        
        </div> 
        
           
         
    </div>
        
        
        
        
        
        
        
        
        
		   </div>
	  </div>
	  <div id="content_right">
	     <div class="pRow">
	      content right
		  </div>
	  </div>
   </div>
   
  