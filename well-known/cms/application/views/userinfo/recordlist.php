 
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
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxtabs.js"></script>
    
     
    
    
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
					 { name: 'PID', type: 'string'},
					 { name: 'Name', type: 'string'},
					  { name: 'ID', type: 'number'},
					  
					  { name: 'InfoID', type: 'number'},
					   { name: 'DeleteID', type: 'number'},
					  
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
																		url: '<?php echo base_url();?>record/infodeleterow',
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
					} 

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
				  
				  
				  
				     var initrowdetails = function (index, parentElement, gridElement, datarecord) {
               
			
			   
			  
			   $.get('<?php echo base_url();?>record/infodetail/'+datarecord.uid, function(datadetail) {													
			  
			 // alert(Object.keys(datadetail));
				//alert(datadetail['Thumbimage']);	  
			 var tabsdiv = null;
                var information = null;
                var notes = null;
                tabsdiv = $($(parentElement).children()[0]);

                if (tabsdiv != null) {
                    information = tabsdiv.find('.information');
					//var keys = Object.keys(information);
					//alert(information.context);
                    notes = tabsdiv.find('.notes');
                    var title = tabsdiv.find('.title');
                   // title.text(datarecord.ID);
 					title.text('Info');  //lokman
                    var container = $('<div style="margin: 5px;"></div>')
					 var containerpayment = $('<div style="margin: 5px;"></div>')
                    container.appendTo($(information));
					containerpayment.appendTo($(notes));
                   
				    var photocolumn = $('<div style="float: left; width: 15%;"></div>');
                    var leftcolumn = $('<div style="float: left; width: 45%;"></div>');
                    var rightcolumn = $('<div style="float: left; width: 40%;"></div>');
					
					 var payment1 = $('<div style="float: left; width: 30%;"></div>');
                    var payment2 = $('<div style="float: left; width: 30%;"></div>');
                    var payment3 = $('<div style="float: left; width: 30%;"></div>');
					
					
					
                    
					container.append(photocolumn);
                    container.append(leftcolumn);
                    container.append(rightcolumn);


					containerpayment.append(payment1);
                    containerpayment.append(payment2);
                    containerpayment.append(payment3);


              
 					var photo = $("<div class='jqx-rc-all' style='margin: 10px;'><b>Photo:</b></div>");
                    var image = $("<div style='margin-top: 10px;'></div>");
                    var imgurl = '<?php echo base_url();?>/' + datadetail.users.Thumbimage;
                    var img = $('<img height="60" src="' + imgurl + '"/>');
                    image.append(img);
                    image.appendTo(photo);
                    photocolumn.append(photo);


                    var row1_1 = "<div style='margin: 10px;'><b>Father/Husband:</b> " + datadetail.detailinfo.GName + "</div>";
                    var row1_2 = "<div style='margin: 10px;'><b>  Mother Name:</b> " + datadetail.detailinfo.MName + "</div>";
                    var row1_3 = "<div style='margin: 10px;'><b>Present Address:</b> " + datadetail.detailinfo.PAddress + "</div>";
					  var row1_4 = "<div style='margin: 10px;'><b>Nominee:</b> " + datadetail.detailinfo.NomineeName + "</div>";
					   var row1_5 = "<div style='margin: 10px;'><b>Email:</b> " + datadetail.users.email + "</div>";
                    //var address = "<div style='margin: 10px;'><b>Address:</b> " + datarecord.address + "</div>";
                    $(leftcolumn).append(row1_1);
                    $(leftcolumn).append(row1_2);
                    $(leftcolumn).append(row1_3);
					 $(leftcolumn).append(row1_4);
					 $(leftcolumn).append(row1_5);
                    //$(leftcolumn).append(address);

                    var District = "<div style='margin: 10px;'><b>District:</b> " + datadetail.district.DistrictName + "</div>";
                 
                    var Thana = "<div style='margin: 10px;'><b>Thana:</b> " + datadetail.thana.ThanaName + "</div>";
					
                  //  var hiredate = "<div style='margin: 10px;'><b>Hire Date:</b> " + datarecord.hiredate + "</div>";

                    $(rightcolumn).append(District);
					 $(rightcolumn).append(Thana);
                 
                    
                   // $(rightcolumn).append(hiredate);
  				    var row1_1 = "<div style='margin: 10px;'><b><u>First Payment</u></b></div><div style='margin: 10px;'><b>Amount:</b> " + datadetail.detailinfo.FAmount + "</div>";
                    var row1_2 = "<div style='margin: 10px;'><b>  Branch:</b> " + datadetail.detailinfo.FBranch + "</div>";
                   var row1_3 = "<div style='margin: 10px;'><b>  Date:</b> " + datadetail.detailinfo.FDate + "</div>";
                  
				   $(payment1).append(row1_1);
				    $(payment1).append(row1_2);
					$(payment1).append(row1_3);
					
					
					
					 var row2_1 = "<div style='margin: 10px;'><b><u>Second Payment</u></b></div><div style='margin: 10px;'><b>Amount:</b> " + datadetail.detailinfo.SAmount + "</div>";
                    var row2_2 = "<div style='margin: 10px;'><b>  Branch:</b> " + datadetail.detailinfo.SBranch + "</div>";
                   var row2_3 = "<div style='margin: 10px;'><b>  Date:</b> " + datadetail.detailinfo.SDate + "</div>";
                      
				   $(payment2).append(row2_1);
				    $(payment2).append(row2_2);
					$(payment2).append(row2_3);
					
					 var row3_1 = "<div style='margin: 10px;'><b><u>Third Payment</u></b></div><div style='margin: 10px;'><b>Amount:</b> " + datadetail.detailinfo.TAmount + "</div>";
                    var row3_2 = "<div style='margin: 10px;'><b>  Branch:</b> " + datadetail.detailinfo.TBranch + "</div>";
                   var row3_3 = "<div style='margin: 10px;'><b>  Date:</b> " + datadetail.detailinfo.TDate + "</div>";
                      
				   $(payment3).append(row3_1);
				    $(payment3).append(row3_2);
					$(payment3).append(row3_3);
					
					
					
					
                    $(tabsdiv).jqxTabs({ width: 700, height: 200, theme: theme });
                }
							});  
			  
			  
			  
			    
            }  
			
			 var editbutton = function (row, datafield, value) {
              
			   
			     return '<input onClick="buttonclick('+value+')"  class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal" type="button" style="margin:6px 10px; width:70px; height:30px;" value="Edit" />';
            }	  
					
					
			 var viewbutton = function (row, datafield, value) {
              
			   
			     return '<input onClick="viewdetail('+value+')"  class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal" type="button" style="margin:6px 10px; width:70px; height:30px;" value="View" />';
            }			
					 
	 var deletebutton = function (row, datafield, value) {
			   //alert(value);
			 
                 return '<div style="margin:6px 10px;  width:70px; height:23px;" class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal"><a   onClick="return confirm(\'Are you sure?\')" href="<?php echo base_url();?>record/infodelete/'+value+'"     style="height:23px; line-height:23px; color:#000;" >Delete</a></div>';
            }
			
			
			
            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {		
                source: dataadapter,
                theme: theme,
				filterable: true,
				selectionmode: 'multiplerows',
				  width: 900,
				showstatusbar: true,
				  
				 showfilterrow: true,
				sortable: true,
				autoheight: true,
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
                         window.location = '<?php echo base_url();?>record/entry';
						 
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
				
				
				rowdetails: true,
                initrowdetails: initrowdetails,
				
				rowdetailstemplate: { rowdetails: "<div style='margin: 10px;'><ul style='margin-left: 30px;'><li class='title'></li><li>Payment</li></ul><div class='information'></div><div class='notes'></div></div>", rowdetailsheight: 230},
				rendergridrows: function(obj)
				{
					 return obj.data;    
				},
			    columns: [
                     
					 { text: 'View', filterable: false , sortable: false,  editable: false,  datafield: 'InfoID', width: 100,   cellsrenderer: viewbutton},
					// { text: 'EntryDate', datafield: 'EntryDate', filtertype: 'date',   width: 200,    cellsformat: 'yyyy-MM-dd HH:mm:ss', columntype: 'datetimeinput' },
					  { text: 'EntryDate', datafield: 'EntryDate', filtertype: 'date',   width: 120,    cellsformat: 'yyyy-MM-dd', columntype: 'datetimeinput' },
                      { text: 'Name', datafield: 'Name', width: 180 },
					 
					  { text: 'Area', filtertype: 'list',filteritems: items, /*filtertype: 'list',  filteritems: ['Lokman','Zuhayr'],*/ datafield: 'AreaID', width: 150 },
                      { text: 'Mobile', datafield: 'Mobile', width: 100 },
                      { text: 'PID', datafield: 'PID', width: 100 }, 
                      { text: 'Representative', filtertype: 'list', filteritems: itemsre, datafield: 'RepresentativeID', width: 140 },
					  { text: 'Edit', filterable: false , sortable: false,  editable: false,  datafield: 'ID', width: 100,   cellsrenderer: editbutton},
                      { text: 'Delete', filterable: false , sortable: false,  editable: false,  datafield: 'DeleteID', width: 100,   cellsrenderer: deletebutton}
				  
				  
				  ]
            });
			
			
			 
			
			
        });
    </script>
     
    
    
        <script type="text/javascript">
            var buttonclick = function (id) {
               
			    var buttonID = id;
				
				 window.location = '<?php echo base_url();?>record/entry/'+buttonID;
			   // alert(buttonID);
            }
			
			
			 var viewdetail = function (id) {
               
			    var buttonID = id;
			popupWindow = window.open('<?php echo base_url();?>record/view/'+buttonID,'Detail: Info','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
				 
				
			 
				
				
				// window.location = '<?php echo base_url();?>record/view/'+buttonID;
			   // alert(buttonID);
            }
			
			
			
			
			var dbuttonclick = function (id) {
               
			    var buttonID = id;
				 
				window.location = '<?php echo base_url();?>record/infodelete/'+buttonID;
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
   
  