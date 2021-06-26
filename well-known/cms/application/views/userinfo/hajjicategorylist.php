 
  <div id="bottombg"> 
   <div id="content">
    
     
     
    <div align="center" id="recordcontent">
          <style>
		  .hidden_div { display:none;}
		  </style>
	     
		 <?php echo $message; ?>
		   
            
     
     <link rel="stylesheet" href="<?php echo base_url();?>jqwidgets/styles/jqx.base.css" type="text/css" />
 <!--   <link rel="stylesheet" href="<?php echo base_url();?>jqwidgets/styles/jqx.classic.css" type="text/css" />
    
 -->
    <link rel="stylesheet" href="<?php echo base_url();?>jqwidgets/styles/jqx.energyblue.css" type="text/css" />
    
     
    <script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxtabs.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>scripts/gettheme.js"></script>
    
     <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdropdownlist.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcheckbox.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.pager.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.sort.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.columnsresize.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.columnsreorder.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxwindow.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.edit.js"></script>  
    
  
     
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
					 //{ name: 'EntryDate', type: 'date',  format: 'yyyy-MM-dd HH:mm:ss'},  
					 { name: 'EntryDate', type: 'date',  format: 'yyyy-MM-dd'},  
					  { name: 'DateStart', type: 'string',  format: 'yyyy-MM-dd'},  
					   { name: 'DateEnd', type: 'string',  format: 'yyyy-MM-dd'},  
					 
					 { name: 'PID', type: 'string'},
					 { name: 'Name', type: 'string'},
					  { name: 'ID', type: 'number'},
					  { name: 'Category', type: 'Category'},
					  { name: 'CategoryID', type: 'number'},
					   { name: 'DeleteID', type: 'number'},
					  
				 
					  { name: 'RepresentativeID', type: 'string'}
                ],
				
				
				
				   updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
				
				// alert(rowdata.DateStart);
                    var datarow = "update=1&Category=" + rowdata.Category + "&DateStart=" + rowdata.DateStart + '&DateEnd='+rowdata.DateEnd;
                   datarow = datarow + "&Item_ID=" + rowdata.ID;
                   
				   
				 // $("#indicator").fadeIn(200).html('<img src="http://localhost/bdblog/siteimages/ajax-loader.gif" />');
				   $("#indicator").css('display','block');
				    $.ajax({
                        dataType: 'html',
						type: 'post',
                       	url: '<?php echo base_url();?>recordcategory/updaterow',
                        data: datarow,
                        success: function (datares, status, xhr) {
                           			 
									
								 
									 if(datares=='OKAY')
				  		 				 		commit(true);
								     else
									 			 commit(false); 
												 $("#indicator").css('display','none');
                            
                        },
                        error: function () {
                            
                            commit(false);
							$("#indicator").html('');
                        }
						
						
						
                    }); 
                },	
				
				
				
				
				
				
				
				
				
				deleterow: function (rowid, commit) {
                   
				 
				   
				   for (i=0; i<rowid.length; i++){
					   
									var datarow = "delete=true&Item_ID=" + rowid[i];
									//alert(rowid[i]);
									   var flag = '';
										$("#indicator").css('display','block');
											$.ajax({
																		dataType: 'html',
																		type: 'post',
																		url: '<?php echo base_url();?>recordcategory/infodeleterow',
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
				
			    url: '<?php echo site_url("recordcategory/categorylist");?>',
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
					} 

 			}
			);
			
			 
				  
				  
				  
				  	  var itemsre = new Array();
					  var icountre=0;
					  $.get('<?php echo base_url();?>recordcategory/representativelist', function(datare) {													
			  
			 
					 $.each(datare, function(key, val) {
			
						//items[0] = val.BlogpostID;
						
					 
			            itemsre[icountre] = val.RepresentativeName;
						icountre++;
								 });
			 
							});  
				  
				  
				   
			
			 var editbutton = function (row, datafield, value) {
              
			   
			     return '<input onClick="buttonclick('+value+')"  class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal" type="button" style="margin:6px 10px; width:70px; height:30px;" value="Edit" />';
            }	  
					
					
			 var viewbutton = function (row, datafield, value) {
              
			   
			     return '<input onClick="viewdetail('+value+')"  class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal" type="button" style="margin:6px 10px; width:70px; height:30px;" value="View" />';
            }			
					 
	 var deletebutton = function (row, datafield, value) {
			   //alert(value);     
			 
                 return '<div style="margin:6px 10px;  width:70px; height:23px;" class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal"><a   onClick="return confirm(\'Are you sure?\')" href="<?php echo base_url();?>recordcategory/infodelete/'+value+'"     style="height:23px; line-height:23px; color:#000;" >Delete</a></div>';
            }
			
			
			
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {		
                source: dataadapter,
                theme: theme,
				filterable: true,
				selectionmode: 'multiplerows',
				
				columnsresize: true,
				 columnsreorder: true,
				  width: 900,
				showstatusbar: true,
				  editable: true,
				 showfilterrow: true,
				sortable: true,
				autoheight: false,
				pageable: true,
				virtualmode: true,
				autoshowfiltericon: true,
				rowsheight: 42,
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
                         window.location = '<?php echo base_url();?>recordcategory/entry';
						 
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
                     
					  { text: 'Edit', filterable: false , sortable: false,  editable: false,  datafield: 'ID', width: 100,   cellsrenderer: editbutton},
					 
                      { text: 'Name', datafield: 'Name', editable: false, width: 180 },
					 
					  { text: 'Type', datafield: 'Category', width: 50, columntype: 'dropdownlist',   createeditor: function (row, cellvalue, editor) {
											 
											editor.jqxDropDownList({source: ['M', 'W','S','R'],  autoDropDownHeight: true });
													} },
                      { text: 'PID', datafield: 'PID',editable: false, width: 100 }, 
                      { text: 'Representative', filtertype: 'list', editable: false, filteritems: itemsre, datafield: 'RepresentativeID', width: 140 },
					   { text: 'DateStart', datafield: 'DateStart',  columntype: 'datetimeinput',  width: 120, cellsformat: 'yyyy-MM-dd',
					 
					 
					 validation: function (cell, value) {
						 								
														 
														 
														 
														  if (value.getFullYear() > new Date().getFullYear())
															 return { result: false, message: "Future Date!!!" };
														  if (value=='' ) {
															  return { result: false, message: "Must not be blank" };
														  }
														  return true;
													  }
				 
					   },
					 { text: 'DateEnd', datafield: 'DateEnd', columntype: 'datetimeinput',   width: 120, cellsformat: 'yyyy-MM-dd'},
					 
					 
					  { text: 'EntryDate', datafield: 'EntryDate', editable: false, filtertype: 'date',   width: 120,    cellsformat: 'yyyy-MM-dd', columntype: 'datetimeinput' },
					 
                      { text: 'Delete', filterable: false , sortable: false,  editable: false,  datafield: 'DeleteID', width: 100,   cellsrenderer: deletebutton}
				  
				  
				  ]
            });
			
			
			 
			
			
        });
    </script>
     
    
    
        <script type="text/javascript">
            var buttonclick = function (id) {
               
			    var buttonID = id;
				
				 window.location = '<?php echo base_url();?>recordcategory/entry/'+buttonID;
			   // alert(buttonID);
            }
			
			
			 
			
			
			
			var dbuttonclick = function (id) {
               
			    var buttonID = id;
				 
				window.location = '<?php echo base_url();?>recordcategory/infodelete/'+buttonID;
			    //alert(buttonID);
            }

			
			
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
   
  